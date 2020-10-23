<?PHP
use coreAppNS\Model;
class admin_catModel extends Model{



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
//     function update(){

       


//     }
//     function deleteData($id){
//         $this->db->where("cat_id","=",$id)->delete("categories");

//     }
}

?>