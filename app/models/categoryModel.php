<?PHP
use coreAppNS\Model;
class categoryModel extends Model{



    function __construct(){
       $this->db=new DB();
    }

    function  getCategories(){
        $cols=array();
        $table=array("categories");
       $result=  $this->db->cols()
       ->table($table)
       ->where("parent","=","0")
       ->get()
       ->execute()
       ->fetch();
return $result;
    }

    function  getSubCategories(){
        $cols=array('cat_name');
        $table=array("categories");
       $result=  $this->db->cols()
       ->table($table)
       ->where("parent","=","cat_id")
       ->get()
       ->execute()
       ->fetch();
return $result;
    }


    function  getTagsData(){
        $tbls=array("product");
        return  $this->db
        ->cols()
        ->table($tbls) 
        ->innerjoin("categories","product.cat_id","categories.cat_id") 
        ->innerjoin("tag_details","product.pro_id","tag_details.pro_id")  
        ->innerjoin("tags","tag_details.tag_id","tags.tag_id")      
        ->get()
        ->where("categories.is_active","=",1)
        ->execute()->fetch();
       print_r($result);
        return $result;
    }


    function  getadd(){
        $cols=array('product.pro_id','product.pro_name','product.pro_price','product.main_img','categories.cat_id','categories.cat_name');
        $table=array("product");
       $result=  $this->db->cols($cols)
       ->table($table)
       ->innerjoin("categories","product.cat_id","categories.cat_id")
       ->where("product.is_active","=","1")
       ->where("categories.cat_id","=",'"'.$_GET['cat_id'].'"')
       ->get()
       ->execute()
       ->fetch();
        return $result;
    }

//         $cols=array("cat_id"=>"8","cat_name"=>"labtop","parrent"=>"0");
//         $table=array("categories");

//         $result= $this->db->cols()
//         ->table($table)->orderBy("cat_id","DESC")->groupBy("cat_id","DESC")
//         ->where("cat_id","=","8")->get()
//         ->execute();
//         return $result;
//         /*groub by
//           $result= $this->db->cols()
//         ->table($table)->orderBy("cat_id","DESC")->groupBy("cat_id","DESC")
//         ->where("cat_id","=","8")->get()
//         ->execute();
//         return $result;
//         */
//         /*inner join
//          $result= $this->db->cols()
//         ->table($table)->innerjoin("products","cat_id","cat_id")->get()
//         ->execute();
//         return $result;
//         */
//         /*oreder by
//          $result= $this->db->cols()
//         ->table($table)->orderBy("cat_id","DESC")
//         ->where("cat_id","=","8")->get()
//         ->execute();
//         return $result;
        
        
//         */
//         /*delete
//          $result= $this->db
//         ->table($table)
//         ->where("cat_id","=","8")->delete()
//         ->execute();
//         return $result;
//         */
//   /*insert 
//  $result= $this->db->cols($cols)
//         ->table($table)
//         ->insert()
//         ->execute();
//         return $result;
//         */
       
//     }
//     function  getAllData(){
//         $cols=array("cat_id","cat_name","parrent","create_date","is_active");
//         $tbls=array("categories");

//         return  $this->db
//         ->select($cols)
//         ->from($tbls)
//         ->where("is_active","=","1")
//         ->build()
//         ->exeucte();
//     }





//     function addData($data){
        
//         $this->db->insert("categories",$data);





//     }
    

//     function update(){

       


//     }
//     function deleteData($id){
//         $this->db->where("cat_id","=",$id)->delete("categories");

//     }
}

?>