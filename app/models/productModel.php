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
        $result=  $this->db->table($tbls)->where("pro_id","=","'".$id."'")->delete()-> execute();
print_r($result);
    }

    function  view_product(){
        $id=$_GET['pro_id'];
        $tbls=array("product");
        return  $this->db
        ->cols()
        ->table($tbls)
        ->where("pro_id","=","'".$id."'")
		->get()
		->execute()->fetch();      
    }
    function  updateProduct(){
        $id=$_GET['pro_id'];
        $tbls=array("product");
        return  $this->db
        ->cols()
        ->table($tbls)
        ->where("pro_id","=","'".$id."'")
		->get()
		->execute()->fetch();      
    }
    function update($data){
        print_r($_POST);
        $tbls=array('product');
        $id=$_POST['pro_id'];
        $result= $this->db->cols($data)->settingcol()->table($tbls)->
        where("pro_id","=","'".$id."'")->
        update()->execute();
}

function view_more(){
    $tbls=array('product');
    $id=$_REQUEST['pro_id'];
    $result=$this->db->clos()->table($tbls)->where("pro_id","=","'".$id."'")->get()-> execute();
    print_r($result);
}
}

?>