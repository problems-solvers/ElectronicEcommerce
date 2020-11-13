<?PHP
use coreAppNS\Model;
use coreAppNS\baseFunctions;
class compareModel extends Model{



    function __construct(){
      
      // Session::init();  
      }

function getcompareProducts(){
    //todo get more info from product table
    $this->db=new DB();
    $cols=array('cart_id', 'total_price', 'quentity', 'type', 'user_id','pro_name', 'cart.pro_id' );
    $table=array("cart");
    $user_id= Session::get('id');
   $result=  $this->db->cols()
   ->table($table)
   ->innerjoin("product","cart.pro_id","product.pro_id")
   ->where('user_id','=', "'".$user_id."'" )
   ->where('type','=',"2" )
   ->get()
   ->execute()
   ->fetch();
return $result;
}
   
   function  addcompare(){
       $s= json_decode($_REQUEST['comparedata']);
     //    print_r($s);
     //    echo 'fff';
      $user_id= Session::get('id');
    if($user_id!=null ){

     foreach ($s as $a) {
        $cols=array();
        $table=array("cart");
        $this->sdb=new DB();
       $result=  $this->sdb->cols()
       ->table($table)
       ->where('user_id','=', "'".$user_id."'" )
       ->where('pro_id','=',"'". $a->pro_id."'" )
       ->where('type','=',"3" )
       ->get()
       ->execute()
       ->fetch();
       if(count($result)==1){
        $this->db=new DB();
        echo 'i m hre once';
        $price=$result[0]->total_price+ ($a->total_price * $a->quentity);
        $qty=$result[0]->quentity+$a->quentity;
        $data = array(
            'total_price'=>"'".$price."'",
            'quentity' =>"'".$qty."'",         
            );
        $updateResult=  $this->db->cols($data)->table($table)->settingcol()
        ->where("user_id","=","'".$user_id."'")
        ->where("pro_id","=","'".$a->pro_id."'")
        ->where("type","=","3")->update()->execute(); 
          // return 'done update';
         }
       elseif(count($result)==0){
        $this->db=new DB();
        $cart_id=baseFunctions::uuid();
        $price =$a->total_price * $a->quentity;
        $data = array(
            'cart_id' =>"'".$cart_id."'",         
            'total_price'=>"'".$price."'",
            'quentity'=>"'".$a->quentity."'",
            'type' =>"3",         
            'user_id' =>"'".$user_id."'",         
            'pro_id' =>"'".$a->pro_id."'"           
            );
        $this->db->cols($data)->table($table)->insert()->execute();  
       }
      }
       return 'dss'; 
    }
    else{
        return;
    }
    }

}

?>