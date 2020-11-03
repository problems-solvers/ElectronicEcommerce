<?PHP
use coreAppNS\Model;
class admin_dashboardModel extends Model{



    function __construct(){
        $this->db=new DB();
       // Session::init();  
      }




    function search(){
        
        $table=array("categories");
       $result=  $this->db->cols()
       ->table($table)
       ->get()
       ->where("is_active","=",1)
       ->execute()
       ->fetch();
       print_r($result);
return $result;
    }
    
    function Customer(){
        
        $table=array("user");
        $col="user_id";
       $result=  $this->db->cols()->count($col)
       ->table($table)
       ->get()
       ->where("is_active","=",1)
       ->execute()
       ->fetch();
return $result;
    }
    function product(){
        
        $table=array("product");
        $col=array("count('pro_id')");
       $result=  $this->db->cols()->count($col)
       ->table($table)
       ->get()
       ->where("is_active","=",1)
       ->execute()
       ->fetch();
return $result;
    }
    function order(){
        
        $table=array("orders");
        $col="order_id";
       $result= $this->db->cols()->count($col)
       ->table($table)
       ->get()
       ->where("is_active","=",1)
       ->execute()
       ->fetch();
return $result;
    }
}

?>