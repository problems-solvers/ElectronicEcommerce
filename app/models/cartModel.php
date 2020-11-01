<?PHP
use coreAppNS\Model;
class cartModel extends Model{



    function __construct(){
      
      // Session::init();  
      }

function getCartProducts(){
    $this->db=new DB();
    $cols=array('cart_id', 'total_price', 'quentity', 'type', 'user_id','pro_name', 'cart.pro_id' );
    $table=array("cart");
    $user_id= Session::get('id');
   $result=  $this->db->cols()
   ->table($table)
   ->innerjoin("product","cart.pro_id","product.pro_id")
   ->where('user_id','=', "'".$user_id."'" )
   ->where('type','=',"1" )
   ->get()
   ->execute()
   ->fetch();
return $result;
}
    function  getAllCatData(){
        $this->db=new DB();
        $cols=array();
        $table=array("categories");
       $result=  $this->db->cols()
       ->table($table)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }


    function  getAllTagsData(){
        $this->db=new DB();
        $cols=array();
        $table=array("tags");
       $result=  $this->db->cols()
       ->table($table)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }

    
    function  getAllProCatData(){
        $this->db=new DB();
        $cols=array();
        $table=array("product");
       $result=  $this->db->cols()
       ->table($table)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }
    function deleteCartItem(){
        $this->db=new DB();
        $id=$_REQUEST['cart_id'];
        $tbls=array("cart");
        $result=  $this->db->table($tbls)->where("cart_id","=","'".$id."'")->delete()->execute();

    }
    function updateCart(){
        $this->db=new DB();
        $total_price= $_REQUEST['total_price'];
        
        $qty= $_REQUEST['qty'];
        $price= $_REQUEST['price'];
        echo  $total_price,$price;
        $curntprice = $qty * $price;
        $cart_id= $_REQUEST['cart_id'];
        $table=array("cart");
        $data = array(
            'total_price'=>"'".$curntprice."'",
            'quentity' =>"'".$qty."'",         
            );
     $updateResult=  $this->db->cols($data)->table($table)->settingcol()
        ->where("cart_id","=","'".$cart_id."'")
        ->where("type","=","1")->update()->execute(); 
    }
    
   function  addCats(){
       $s= json_decode($_REQUEST['cartdata']);
       print_r($s);
       echo 'fff';
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
        ->where("type","=","1")->update()->execute(); 
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
            'type' =>"1",         
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
// $tbls=array("cart");
// $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
// SELECT `cart_id`, `total_price`, `quentity`, `type`, `user_id`, `pro_id` FROM `cart` WHERE 1
    }
    function addTags($data){
       
        print_r($data);
         $tbls=array("tags");
         $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
 
             
     }

     function  addOrder($data){
        print_r($data);
         $tbls=array("orders");
         $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
 
             
     }

     function  addOrderDetails($data){
        $id=$_GET['order_id'];
        $tbls=array("oreder_details");
         $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
 
             
     }

}

?>