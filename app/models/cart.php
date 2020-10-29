<?PHP
use coreAppNS\Model;
class cart extends Model{



    function __construct(){
        $this->db=new DB();
       // Session::init();  
      }


    function  getAllCatData(){
        $cols=array();
        $table=array("categories");
       $result=  $this->db->cols()
       ->table($table)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }


    function  getAllTagsData(){
        $cols=array();
        $table=array("tags");
       $result=  $this->db->cols()
       ->table($table)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }

    
    function  getAllProCatData(){
        $cols=array();
        $table=array("product");
       $result=  $this->db->cols()
       ->table($table)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }
    
    function  addCats($data){
       print_r($data);
        $tbls=array("categories");
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();

            
    }
    function addTags($data){
        print_r($data);
         $tbls=array("tags");
         $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
 
             
     }

     function  addOrder($data){
        print_r($data);
         $tbls=array("orders");
         $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
 
             
     }

     function  addOrderDetails($data){
        $id=$_GET['order_id'];
        $tbls=array("oreder_details");
         $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
 
             
     }


}

?>