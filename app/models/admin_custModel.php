<?PHP
use coreAppNS\Model;
class admin_custModel extends Model{



    function __construct(){
       // Session::init();  
      }





    function  getAlluser(){
        $this->db=new DB();

        $table=array("user ");
       $result=  $this->db->cols()
       ->table($table)
       ->orderBy("create_date","desc")
       ->get()
       ->execute()
       ->fetch();
return $result;
    }
    function  update($data){
        $this->db=new DB();
          $id=$_REQUEST['user_id'];
        $table=array("user");
       $result=  $this->db->cols($data)->settingcol()
       ->table($table)
       ->where("user_id","=","'".$id."'")
       ->update()
       ->execute();
return $result;
    }
    
}

?>