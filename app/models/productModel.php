<?PHP
use coreAppNS\Model;

class productModel extends Model {

    public  $db;

    function __construct(){
        $this->db=new DB();

   }
   function  getQuery(){

    $tbls=array("product ");
    return  $this->db
    ->cols()
    ->table($tbls)
    ->orderBy("create_date","desc")
    ->get()
    ->execute()->fetch();      
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

function  getcatchiled($id){
   
    $tbls=array("categories");
    return  $this->db
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
    function delete(){
        $id=$_REQUEST['empid'];
        $tbls=array("product");
        $result=  $this->db->table($tbls)->where("pro_id","=","'".$id."'")->delete()-> execute();
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
        /**/
        /*->innerjoin("product","categories.cat_id","product.cat_id")
        ->innerjoin("tag_details","product.pro_id","tag_details.pro_id")
        ->innerjoin("tags","tag_details.tag_id","tags.tag_id")*/
    }
    function  updateProduct(){
        $id=$_REQUEST['pro_id'];
        $tbls=array("product");
        $cols=array("product.pro_name", "product.pro_id","product.pro_price" ,"product.pro_quentity","product.pro_details","product.brand","product.main_img","product.pro_imgs","product.is_active","product.cat_id","categories.cat_name","tags.tag_id" ,"tags.tag_name","tag_details.tag_details_id","tag_details.tag_data");
        return  $this->db
        ->cols($cols)
        ->table($tbls)
        ->innerjoin("categories","product.cat_id","categories.cat_id")
        ->innerjoin("tag_details","product.pro_id","tag_details.pro_id")
        ->innerjoin("tags","tag_details.tag_id","tags.tag_id")
        ->where("product.pro_id","=","'".$id."'")
		->get()
		->execute()->fetch();      
    }
    function update($data){
        $this->db=new DB();
        $tbls=array('product');
        $id=$_POST['pro_id'];
        return $this->db->cols($data)->settingcol()->table($tbls)->where("pro_id","=","'".$id."'")->update()->execute();
   
    }
    function tagUpdate($data){
        $tbls=array('tags');
        $tag_id=$_POST['tag_id'];
        return $this->db->cols($data)->settingcol()->table($tbls)->where("tag_id","=","'".$tag_id."'")->update()->execute();
   
    }
    function tagdetailUpdate($data){
        $tbls=array('tag_details');
        $tag_details_id=$_POST['tag_details_id'];
        $id=$_POST['pro_id'];

        return $this->db->cols($data)->settingcol()->table($tbls)->where("tag_details_id","=","'".$tag_details_id."'")->where('pro_id ','=',"'".$id."'")->update()->execute();
   
    }

function view_more(){
    $id=$_REQUEST['pro_id'];
    $tbls=array("product");
    $cols=array("product.pro_name", "product.pro_id","product.pro_price" ,"product.pro_quentity","product.pro_details","product.brand","product.main_img","product.pro_imgs","product.is_active","product.cat_id","categories.cat_name","tags.tag_id" ,"tags.tag_name","tag_details.tag_details_id","tag_details.tag_data");
    return  $this->db
    ->cols($cols)
    ->table($tbls)
    ->innerjoin("categories","product.cat_id","categories.cat_id")
    ->innerjoin("tag_details","product.pro_id","tag_details.pro_id")
    ->innerjoin("tags","tag_details.tag_id","tags.tag_id")
    ->where("product.pro_id","=","'".$id."'")
    ->get()
    ->execute()->fetch();  
}
/*function view_tag(){tagdetailUpdate
        $id=$_REQUEST['pro_id'];
        $tbls=array("product");
        $cols=array("tags.tag_id" ,"tags.tag_name","tag_details.tag_details_id","tag_details.tag_data");
        return  $this->db
        ->cols($cols)
        ->table($tbls)
        ->innerjoin("tag_details","product.pro_id","tag_details.pro_id")
        ->innerjoin("tags","tag_details.tag_id","tags.tag_id")
        ->where("product.pro_id","=","'".$id."'")
        ->get()
        ->execute()->fetch();  
    } */
}

?>