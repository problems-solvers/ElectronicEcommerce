<?PHP
use coreAppNS\Model;
class admin_catModel extends Model{



    function __construct(){
       // Session::init();  
      }


    function  getAllCatData(){
        $this->db=new DB();

        $cols=array();
        $table=array("categories");
       $result=  $this->db->cols()
       ->table($table)
       ->get()
       ->orderBy("create_date","DESC")
       ->execute()
       ->fetch();
return $result;
    }

    function  sub_cat($id){
        $this->db=new DB();
        $cols=array('product.pro_id','product.pro_name','product.main_img','product.pro_price','categories.cat_id','categories.cat_name');
        $table=array("product");
       $result=  $this->db->cols($cols)
       ->table($table)
       ->innerjoin("categories","product.cat_id","categories.cat_id")
       ->where("product.is_active","=","1")
       ->orderBy("categories.create_date","desc")
       ->get()
       ->execute()
       ->fetch();
    return $result;
    }


    function  getAllTagsData(){
        $this->db=new DB();

        $cols=array("tags.tag_type","tags.tag_id" ,"tags.tag_name","tag_details.tag_data");
        $table=array("tag_details");
       $result=  $this->db->cols($cols)
       ->table($table)
       ->innerjoin("tags","tag_details.tag_id","tags.tag_id")
       ->get()
       ->execute()
       ->fetch();
return $result;
    }
    function  catHeader(){
        $this->db=new DB();

        $table=array("categories");
       $result=  $this->db->cols()
       ->table($table)
       ->where("parent","=","0")
       ->get()
       ->execute()
       ->fetch();
return $result;
    }

    
    function  addCats($data){
       print_r($data);
       $this->db=new DB();

        $tbls=array("categories");
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();

            
    }
    function addTags($data){
        $this->db=new DB();
         $tbls=array("tags");
         $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
 
             
     }
     function addTagsDetails($data){
        $this->db=new DB();

         $tbls=array("tag_details");
         $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
 
             
     }
   
//     function update(){

       


//     }
//     function deleteData($id){
//         $this->db->where("cat_id","=",$id)->delete("categories");

//     }
}

?>