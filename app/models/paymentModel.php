
<?PHP
use coreAppNS\Model;

class paymentModel extends Model {

    public  $db;
    

    function __construct(){
   }
   function  getorder(){
    $this->db=new DB();
    //   $_SESSION['user_id']="4e8f4455-1163-11eb-9632-f81654";
     $id=$_SESSION['order_id'];
    // echo $id;
     $cols=array('orders.order_id','orders.start_date','orders.total_price','address.country','address.city','address.zip_id','address.street'
     ,'address.user_name','payment.userbank_id','payment.ex_date','payment.full_name');
     $table=array("orders");
    $result=  $this->db->cols($cols)
    ->table($table)
    //->innerjoin("oreder_details","orders.order_id","oreder_details.order_id")
    ->innerjoin("address","orders.address_id","address.address_id")
    ->innerjoin("payment","orders.payment_id","payment.payment_id")
    ->where("orders.order_id","=","'".$id."'")
    ->get()
    ->execute()
    ->fetch(); 
    
    if(count($result)>0){
        $x=json_encode($result);
        print_r($x);

    }
   // return $result;
   }


function  getpro(){
    $this->db=new DB();
    $id= $_SESSION['order_id'];
    //echo $id;
     $cols=array('oreder_details.quentity','oreder_details.total_price','product.pro_name','product.main_img','product.pro_price');
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

function  getAdminAccount(){
    $this->db=new DB();

    $user_id= Session::get('id');
    $tbls=array("payment");
    return  $this->db
    ->cols()
    ->table($tbls)
    ->where("is_Admin","=","1")
    ->get()
    ->execute()->fetch();
}
   function  getaddress(){
    $this->db=new DB();

    $user_id= Session::get('id');
    $tbls=array("address");
    return  $this->db
    ->cols()
    ->table($tbls)
    ->where("user_id","=","'".$user_id."'")
    ->get()
    ->execute()->fetch();
}

function  getPayments(){
    $this->db=new DB();

    $user_id= Session::get('id');

    $tbls=array("payment");
    return  $this->db
    ->cols()
    ->table($tbls)
    ->where("user_id","=","'".$user_id."'")
    ->get()
    ->execute()->fetch();
}
function  addNewAddress($data){
    $this->db=new DB();
   $tbls=array("address");
   return $this->db->cols($data)->table($tbls)->insert()->execute();  
}
function  addNewPayment($data){
    $this->db=new DB();
   // echo 'sqqqqfsd';

   $tbls=array("payment");
   return $this->db->cols($data)->table($tbls)->insert()->execute();  
}

function update($data){
    $this->db=new DB();
   
    //Session::set('order_id',"b2d477ad-7c4e-4a13-bb2b-292b3e");
   if($_SESSION['order_id']){
     $id= Session::get('order_id');

        $tbls=array('orders');
        $updateResult=  $this->db->cols($data)->table($tbls)->settingcol()
        ->where("order_id","=","'".$id."'")->update()->execute();
        if ($updateResult=='done'){
            $this->getorder();
        }
    }
    else{
           $x=array('noorder');
           print_r(json_encode($x));
         
    }

}
function updatestatus($data){
    $this->db=new DB();
   
    //Session::set('order_id',"b2d477ad-7c4e-4a13-bb2b-292b3e");
    $id= Session::get('order_id');
   
        $tbls=array('orders');
       return $this->db->cols($data)->table($tbls)->settingcol()
        ->where("order_id","=","'".$id."'")->update()->execute();
        

}


// function delete(){
//     $_SESSION['order_id']="eb6d3fd3-023b-409c-83fd-1605be";
//     $id=$_SESSION['order_id'];
//         $tbls=array('orders');
//         $result=$this->db->cols()->table($tbls)->where("order_id","=","'".$id."'")->delete()-> execute();

// }
}

?>
