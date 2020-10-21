<?PHP

class product{

    public  $db;

    function __construct(){
        $this->$db=new DB();
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
}

?>