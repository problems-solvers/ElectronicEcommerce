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
   
    function delete(){
        $id=$_REQUEST['empid'];
        $tbls=array("product");
        $result=  $this->db->table($tbls)->where("pro_id","=","'".$id."'")->delete()-> execute();
print_r($result);
    }
}
function update($data){
        $tbls=array('product');
        $id=$_REQUEST['pro_id'];
        $result=$this->db->clos($data)->table($tbls)->where("pro_id","=",$id)->update()-> execute();
}

function view_more(){
    $tbls=array('product');
    $id=$_REQUEST['pro_id'];
    $result=$this->db->clos()->table($tbls)->where("pro_id","=","'".$id."'")->get()-> execute();
    print_r($result);

?>