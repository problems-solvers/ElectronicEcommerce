
<?PHP
use coreAppNS\Model;

class orderModel extends Model {

    public  $db;
    

    function __construct(){
        $this->db=new DB();
   }
  
    function  getordder(){
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
     
        $tbls=array("orders");
        
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
            
    }
    function  orederdetails($data){
     
        $tbls=array("oreder_details");
        
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
            
    }
    function  getAllcartData($id){
        $table=array("cart_details");
       $result= $this->db->cols()
       ->table($table)
       ->where("cart_id","=","'".$id."'")
       ->get()
       ->execute()
       ->fetch();
return $result;
    }
    function  getAllcartTotal($id){
        $table=array("cart");
       $result= $this->db->cols()
       ->table($table)
       ->where("cart_id","=","'".$id."'")
       ->get()
       ->execute()
       ->fetch();
return $result;
    }
    
function update($data){
        $tbls=array('ordder');
        $id=$_REQUEST['ord_id'];
        $result=$this->db->clos($data)->table($tbls)->where("ord_id","=",$id)->update()-> execute();
}
}

?>
