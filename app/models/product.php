<?PHP
 use coreAppNS\Model;
class product extends Model{

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
        ->where("is_active","=",1)
        ->where("parent","=",0)
		->get() 
		->execute()->fetch();      
    }

    function  getcatchiled(){
        $id=$_REQUEST['empid'];
       
        $tbls=array("categories");
        $result=   $this->db
        ->cols()
        ->table($tbls)
        ->where("is_active","=",1)
        ->where("parent","=","'.$id.'")
		->get() 
		->execute()->fetch();      
    }
    function  add($data){
     
        $tbls=array("product");
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();

            
    }
    function  view_product(){
        $id=$_GET['pro_id'];
        $tbls=array("categories","product","tag_details","tags");
        return  $this->db
        ->cols()
        ->table($tbls) 
        ->where("product.pro_id","=","'".$id."'")
        ->where("product.cat_id","=","categories.cat_id")
        ->where("product.pro_id","=","tag_details.pro_id")
        ->where("tag_details.tag_id","=","tags.tag_id")
        ->get()
        ->execute()->fetch();
        //->innerjoin("tag_details","product.pro_id","tag_details.pro_id")  
        //->innerjoin("tags","tag_details.tag_id","tags.tag_id")  
              
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
    function delete(){
        $id=$_REQUEST['empid'];
        $tbls=array("product");
        $result=  $this->db->table($tbls)->where("pro_id","=","'".$id."'")->delete()->execute();
    }

    function child(){
        $id=$_POST['input'];
        $tbls=array("categories");
        $result=  $this->db->table($tbls)->where("parent","=","'".$id."'")->where("is_active","=",1)->delete()->execute();
    }
}



?>