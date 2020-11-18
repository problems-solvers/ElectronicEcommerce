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
       ->execute()
       ->fetch();
       print_r($result);
return $result;
    }
    
    function Customer(){
        
        $table=array("user");
        $col=array("count(user_id)");
       $result=  $this->db->cols($col)
       ->table($table)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }
    function product(){
        
        $table=array("product");
        $col=array("count(pro_id)");
       $result=  $this->db->cols($col)
       ->table($table)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }
    function order(){
        
        $table=array("orders");
        $col=array("count(order_id)");
       $result= $this->db->cols($col)
       ->table($table)
       ->get()
       ->execute()
       ->fetch();
return $result;
print_r($result);
    }


    function  getorder(){
        $this->db=new DB();
         $cols=array('orders.order_id','orders.start_date','orders.end_date','orders.order_status','orders.total_price','user.first_name','user.last_name');
            
        $table=array("orders");
           $result=  $this->db->cols($cols)
           ->table($table)
           ->innerjoin("address","orders.address_id","address.address_id")
           ->innerjoin("user","address.user_id","user.user_id")
           ->limit(0,5)
           ->get()
           ->execute()
           ->fetch();
           return $result;
        
        
       // return $result;
       }

       function  lastUser(){
        $this->db=new DB();
            
        $table=array("user ");
           $result=  $this->db->cols()
           ->table($table)
           ->orderBy("create_date","desc")
           ->limit(0,5)
           ->get()
           ->execute()
           ->fetch();
           return $result;
        
        
       // return $result;
       }
       
}

?>