<?PHP
use coreAppNS\Model;
class admin_repoModel extends Model{



    function __construct(){
       // Session::init();  
      }





    function  repo_order(){
        $this->db=new DB();
        $cols=array("product.pro_name","product.brand","product.pro_price","oreder_details.details_id","oreder_details.pro_id", "sum(oreder_details.quentity) ");

        $table=array("oreder_details");
       $result=  $this->db->cols()
       ->table($table)
       ->innerjoin("product","oreder_details.pro_id","product.pro_id")
       ->orderBy("oreder_details.quentity","desc")
       ->limit(0,10)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }
    function  less_order(){
        $this->db=new DB();
        $cols=array("product.pro_name","product.brand","product.pro_price","product.quentity");

        $table=array("oreder_details","product");
       $result=  $this->db->cols()
       ->table($table)
       ->where("product.pro_id","!=","oreder_details.pro_id")
       ->orderBy("oreder_details.quentity","desc")
       ->limit(0,10)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }


    function  less_user(){
        $this->db=new DB();
        $cols=array("user.first_name","user.last_name","user.user_email");

        $table=array("user","address");
       $result=  $this->db->cols($cols)
       ->table($table)
       ->innerjoin("orders","address.address_id","orders.address_id")
       ->where("user.user_id","!=","address.user_id")
       ->limit(0,10)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }

    function  repo_user(){
        $this->db=new DB();
        $cols=array("user.first_name","user.last_name","user.user_email");

        $table=array("orders");
       $result=  $this->db->cols($cols)
       ->table($table)
       ->innerjoin("oreder_details","orders.order_id","oreder_details.order_id")
       ->innerjoin("product","oreder_details.pro_id","product.pro_id")
       ->innerjoin("address","orders.address_id","address.address_id")
       ->innerjoin("user","address.user_id","user.user_id")
       ->where("user.user_id","=","address.user_id")
       ->limit(0,10)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }
    
}

?>