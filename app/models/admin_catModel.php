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
       ->where("is_active","=","1")
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


//     function update(){

       


//     }
//     function deleteData($id){
//         $this->db->where("cat_id","=",$id)->delete("categories");

//     }
}

?>