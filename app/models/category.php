<?PHP


include("core/db.php");

class category{


   public  $db;

    function __construct(){
        $this->db=new DB();
    }


    function  getData(){
        $cols=array("cat_id","cat_name","parrent","create_date","is_active");
        $tbls=array("categories");

        /*return  $this->db
        ->select($cols)
        ->from($tbls)
        ->where("is_active","=","1")
        ->where('parrent','=','0')
        ->build()
        ->exeucte();*/
    }
    function  getAllData(){
        $cols=array("cat_id","cat_name","parrent","create_date","is_active");
        $tbls=array("categories");

       /* return  $this->db
        ->select($cols)
        ->from($tbls)
        ->where("is_active","=","1")
        ->build()
        ->exeucte();*/
    }





    function addData($data){
        
       // $this->db->insert("categories",$data);





    }
    

    function update(){

       


    }
    function deleteData($id){
      //  $this->db->where("cat_id","=",$id)->delete("categories");

    }
}

?>