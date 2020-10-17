<?PHP

class product{

    public  $db;

    function __construct(){
        $this->$db=new DB();
    }
    function  getQuery($id){
        $cols=array("p_id","p_name","p_price","p_image");

        $this->db->select($cols)
        ->from(array("products"))
        ->where("cat_id","=",$id)
        ->build()
        ->execute()
    
    ;
       
    }

    function update(){

    }
    function delete(){

    }
}

?>