
<?PHP
use coreAppNS\Model;

class paymentModel extends Model {

    public  $db;
    

    function __construct(){
        $this->db=new DB();
   }
   function  getaddress(){
     
    $tbls=array("address");
    return  $this->db
    ->cols()
    ->table($tbls)
    ->get()
    ->execute()->fetch();
    $result=$this->db->clos($data)->table($tbls)->where("address_id","=",$id)->update()-> execute();      
}
    function  getordder(){
     
        $tbls=array("orders");
        return  $this->db
        ->cols()
		->table($tbls)
		->get()
        ->execute()->fetch();
        $id=$_SESSION['user_id'];where("user_id","=",$id);
       
             
    }
    function  addordder($data){
     
        $tbls=array("orders");
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
        $id=$_SESSION['user_id'];where("user_id","=",$id);
            
    }
    

function update($data){
        $tbls=array('orders');
        $id=$_REQUEST['order_id'];
        $result=$this->db->clos($data)->table($tbls)->where("order_id","=",$id)->update()-> execute();
}

function  addAddress($data){
     
    $tbls=array("address");
    $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
        
}



}

?>
