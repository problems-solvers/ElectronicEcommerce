<?PHP
use coreAppNS\Model;

class productModel extends Model {

    public  $db;

    function __construct(){
        $this->db=new DB();
   }
   function  getQuery(){
     
    $tbls=array("product");
    return  $this->db
    ->cols()
    ->table($tbls)
    ->get()
    ->execute()->fetch();      
}
    function  getcat(){
     
        $tbls=array("categories");
        return  $this->db
        ->cols()
		->table($tbls)
		->get()
        ->execute()->fetch(); 
             
    }
    function  add($data){
     
        $tbls=array("product");
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();

            
    }
    function delete(){
        $id=$_REQUEST['empid'];
        $tbls=array("product");
        $result=  $this->db->table($tbls)->where("pro_id","=","'".$id."'")->delete()->execute();
    }

  
}

?>