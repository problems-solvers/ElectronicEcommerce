
<?PHP
use coreAppNS\Model;

class paymentModel extends Model {

    public  $db;
    

    function __construct(){
   }
   function  getaddress(){
    $this->db=new DB();

    $user_id= Session::get('id');

     $id=$_SESSION['user_id'];
    $tbls=array("address");
    return  $this->db
    ->cols()
    ->table($tbls)
    ->where("user_id","=","'".$id."'")
    ->get()
    ->execute()->fetch();
}

function  getPayments(){
    $this->db=new DB();

    $user_id= Session::get('id');

     $id=$_SESSION['user_id'];
    $tbls=array("bank_details");
    return  $this->db
    ->cols()
    ->table($tbls)
    ->where("user_id","=","'".$id."'")
    ->get()
    ->execute()->fetch();
}
function  addNewAddress($data){
    $this->db=new DB();
   $tbls=array("address");
   return $this->db->cols($data)->table($tbls)->insert()->execute();  
}
function  addNewBAccount($data){
    $this->db=new DB();
   $tbls=array("bank_details");
   return $this->db->cols($data)->table($tbls)->insert()->execute();  
}

function update($data){
    $this->db=new DB();
    Session::set('order_id',"b2d477ad-7c4e-4a13-bb2b-292b3e");
    $id= Session::get('order_id');
    echo $id;
        $tbls=array('orders');
        $updateResult=  $this->db->cols($data)->table($tbls)->settingcol()
        ->where("order_id","=","'".$id."'")->update()->execute(); 
}



}

?>
