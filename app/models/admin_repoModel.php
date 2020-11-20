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
        $cols=array("product.pro_name","product.brand","product.pro_price","oreder_details.details_id","oreder_details.pro_id", "sum(oreder_details.quentity) ");

        $table=array("oreder_details");
       $result=  $this->db->cols()
       ->table($table)
       ->innerjoin("product","oreder_details.pro_id","product.pro_id")
       ->orderBy("oreder_details.quentity","Asc")
       ->limit(0,10)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }


    function  less_user(){
        $this->db=new DB();

        $table=array("orders");
       $result=  $this->db->cols()
       ->table($table)
       ->innerjoin("address","orders.address_id","orders.address_id")
       ->innerjoin("oreder_details","orders.order_id","oreder_details.order_id")
       ->innerjoin("user","address.user_id","user.user_id")
       ->orderBy("oreder_details.quentity","Asc")
       ->limit(0,10)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }

    function  repo_user(){
        $this->db=new DB();

        $table=array("orders");
       $result=  $this->db->cols()
       ->table($table)
       ->innerjoin("address","orders.address_id","orders.address_id")
       ->innerjoin("oreder_details","orders.order_id","oreder_details.order_id")
       ->innerjoin("user","address.user_id","user.user_id")
       ->orderBy("oreder_details.quentity","DESC")
       ->limit(0,10)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }


    function  orderchart(){
        $this->db=new DB();

        $table=array("orders");
        $cols=array("COUNT(order_status) as counts","staus");
       $result=  $this->db->cols()
       ->table($table)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }
    
}

?>