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


//     function update(){

       


//     }
//     function deleteData($id){
//         $this->db->where("cat_id","=",$id)->delete("categories");

//     }
}

?>