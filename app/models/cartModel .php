<?PHP
use coreAppNS\Model;
class cart extends Model{



    function __construct(){
        $this->db=new DB();
       // Session::init();  
      }


   


    function  getAllcartData($id){
        $cols=array();
        $table=array("cart_details");
       $result=  $this->db->cols()
       ->table($table)
       ->where("cart_details_id","=","'.$id.")
       ->get()
       ->execute()
       ->fetch();
return $result;
    }

    
    

}

?>