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

        $cols=array();
        $table=array("tags");
       $result=  $this->db->cols()
       ->table($table)
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

        print_r($data);
         $tbls=array("tags");
         $result=  $this->db->cols($data)->table($tbls)->insert()->execute();
 
             
     }
//     function update(){

       


//     }
//     function deleteData($id){
//         $this->db->where("cat_id","=",$id)->delete("categories");

//     }
}

?>