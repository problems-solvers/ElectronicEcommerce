
<?PHP
use coreAppNS\Model;

class paymentModel extends Model {

    public  $db;
    

    function __construct(){
        $this->db=new DB();
   }
   function  getorder(){
    $this->db=new DB();

    $_SESSION['user_id']="4e8f4455-1163-11eb-9632-f81654";

     $id=$_SESSION['user_id'];
     $cols=array('orders.order_id','orders.start_date','address.country','address.city','address.zip_id','address.street','address.user_name');
     $table=array("orders");
    $result=  $this->db->cols($cols)
    ->table($table)
    ->innerjoin("oreder_details","orders.order_id","oreder_details.order_id")
    ->innerjoin("address","orders.address_id","address.address_id")
    ->get()
    ->execute()
    ->fetch();
 return $result;
}


function  getpro($id){
    $this->db=new DB();


     $cols=array('oreder_details.quentity','oreder_details.total_price','product.pro_name','product.pro_price');
     $table=array("product");
    $result=  $this->db->cols($cols)
    ->table($table)
    ->innerjoin("oreder_details","product.pro_id","oreder_details.pro_id")
    ->where("oreder_details.order_id","=","'".$id."'")
    ->get()
    ->execute()
    ->fetch();
 return $result;
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
    print_r($data);
    $tbls=array("address");
    $result=$this->db->cols($data)->table($tbls)->insert()->execute();
    print_r($result);
        
}

function update($data){
    $_SESSION['order_id']="eb6d3fd3-023b-409c-83fd-1605be";
    $id=$_SESSION['order_id'];
        $tbls=array('orders');
        $result=$this->db->cols($data)->settingcol()->table($tbls)->where("order_id","=","'".$id."'")->update()-> execute();
}

function delete(){
    $_SESSION['order_id']="eb6d3fd3-023b-409c-83fd-1605be";
    $id=$_SESSION['order_id'];
        $tbls=array('orders');
        $result=$this->db->cols()->table($tbls)->where("order_id","=","'".$id."'")->delete()-> execute();

}
}

?>
