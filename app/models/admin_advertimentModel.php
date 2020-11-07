<?PHP
use coreAppNS\Model;
class admin_advertimentModel extends Model{



    function __construct(){
       // Session::init();  
      }


    function  getoffer(){
        $this->db=new DB();

        $cols=array();
        $table=array("offers");
       $result=  $this->db->cols()
       ->table($table)
       ->get()
       ->execute()
       ->fetch();
return $result;
    }

   


    
    function  addAdver($data){
       $this->db=new DB();

        $tbls=array("advertisement");
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();

            
    }
   
}

?>