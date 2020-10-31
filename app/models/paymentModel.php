
<?PHP
use coreAppNS\Model;

class paymentModel extends Model {

    public  $db;
    

    function __construct(){
        $this->db=new DB();
   }
   function  getaddress(){
    $_SESSION['user_id']="4e8f4455-1163-11eb-9632-f81654";

     $id=$_SESSION['user_id'];
    $tbls=array("address");
    return  $this->db
    ->cols()
    ->table($tbls)
    ->where("user_id","=","'".$id."'")
    ->get()
    ->execute()->fetch();
}
function  addNewAddress($data){
   $tbls=array("address");
   return $this->db->cols($data)->table($tbls)->insert()->execute();  
}

function update($data){
    $_SESSION['order_id']="02bb2e6e-84e6-48db-b5a6-3903ba";
    $id=$_SESSION['order_id'];
        $tbls=array('order');
        $result=$this->db->cols($data)->settingcol()->table($tbls)->where("order_id","=","'".$id."'")->update()-> execute();
}
}

?>
