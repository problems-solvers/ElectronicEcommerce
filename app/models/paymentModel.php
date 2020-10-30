
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
     
        $tbls=array("ordder");
        return  $this->db
        ->cols()
		->table($tbls)
		->get()
        ->execute()->fetch();
        $id=$_SESSION['user-id'];where("user-id","=",$id);
       
             
    }
    function  addordder($data){
     
        $tbls=array("ordder");
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
        $id=$_SESSION['user-id'];where("user-id","=",$id);
            
    }

function update($data){
        $tbls=array('ordder');
        $id=$_REQUEST['ord_id'];
        $result=$this->db->clos($data)->table($tbls)->where("ord_id","=",$id)->update()-> execute();
}
}

?>
