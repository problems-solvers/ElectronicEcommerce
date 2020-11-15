
<?PHP
use coreAppNS\Model;

class orderModel extends Model {

    public  $db;
    

    function __construct(){
   }
  
    function  getordder(){
        $this->db=new DB();
        $id=$_SESSION['user_id'];
        $tbls=array("ordder");
        return  $this->db
        ->cols()
        ->table($tbls)
        ->where("user_id","=",$id)
		->get()
        ->execute()->fetch();
       
       
             
    }
    function  addordder($data){
        $this->db=new DB();
        $tbls=array("orders");
        return $this->db->cols($data)->table($tbls)->insert()->execute();
    }
    function  orederdetails($data){
        $this->db=new DB();
     
        $tbls=array("oreder_details");
        
        return $this->db->cols($data)->table($tbls)->insert()->execute();
        
            
    }
    function  orderTotalPrice(){
        $this->db=new DB();
        $table=array("oreder_details");
        $col=array("sum(total_price) as total");
        $order_id=Session::get('order_id');
       $result= $this->db->cols($col)
       ->table($table)
       ->where("order_id","=","'".$order_id."'")
       ->get()
       ->execute()
       ->fetch();
return $result;
            
    }
    function  getAllcartData($id){
        $this->db=new DB();
        $table=array("cart");
       $result= $this->db->cols()
       ->table($table)
       ->where("user_id","=","'".$id."'")
       ->where("type","=","1")
       ->get()
       ->execute()
       ->fetch();
return $result;
    }
   
function update($data){
    $this->db=new DB();
    $tbls=array('ordder');
        $id=$_REQUEST['ord_id'];
        $result=$this->db->clos($data)->table($tbls)->where("ord_id","=",$id)->update()-> execute();
}
function  getorder(){
 $this->db=new DB();
  $cols=array('orders.order_id','orders.start_date','orders.deliver_date','orders.order_status','orders.total_price');
     
 $table=array("orders");
    $result=  $this->db->cols($cols)
    ->table($table)
    ->innerjoin("address","orders.address_id","address.address_id")
 ->where("address.user_id","=","'".$_SESSION['id']."'")
    ->get()
    ->execute()
    ->fetch();
    return $result;
 
 
// return $result;
}
function  getmore(){
    $this->db=new DB();
    //   $_SESSION['user_id']="4e8f4455-1163-11eb-9632-f81654";
     $id=$_REQUEST['id'];
    // echo $id;
     $cols=array('orders.order_id','orders.start_date','orders.total_price','address.country','address.city','address.zip_id','address.street'
     ,'address.user_name','payment.userbank_id','payment.ex_date','payment.full_name','product.pro_name','product.main_img','oreder_details.quentity','product.pro_price');
     $table=array("orders");
    return $this->db->cols($cols)
    ->table($table)
    ->innerjoin("oreder_details","orders.order_id","oreder_details.order_id")
    ->innerjoin("product","oreder_details.pro_id","product.pro_id")
    ->innerjoin("address","orders.address_id","address.address_id")
    ->innerjoin("payment","orders.payment_id","payment.payment_id")
    ->where("orders.order_id","=","'".$id."'")
    ->where("address.user_id","=","'".$_SESSION['id']."'")
    ->get()
    ->execute()
    ->fetch(); 
    
    
   // return $result;
   }

}

?>
