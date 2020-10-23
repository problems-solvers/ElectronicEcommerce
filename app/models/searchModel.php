<?PHP
use coreAppNS\Model;
class searchModel extends Model{



    function __construct(){
       $this->db=new DB();
    }

    
   
 
    function  search(){

        $key=$_GET['key'];
        $array = array();
        $table=array("categories,product");
       $result=  $this->db->cols()
       ->table($table)
       ->where("cat_name","like","'%{$key}%'")
       ->where("pro_name","like","'%{$key}%'")
       ->get()
       ->execute()
       ->fetch();
return $result;
    }







//     function  getData(){
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