
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
}

?>
