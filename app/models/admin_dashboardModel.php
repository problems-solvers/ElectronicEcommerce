<?PHP
use coreAppNS\Model;
class admin_dashboardModel extends Model{



    function __construct(){
        $this->db=new DB();
       // Session::init();  
      }


    function  getRecentAddData(){
        $cols=array('pro_id.product','pro_name.product','pro_price.product','cat_id.categories','cat_name.categories');
        $table=array("product","categories");
       $result=  $this->db->cols()
       ->table($table)
       ->where("is_active","=","1")
       ->orderBy("create_date","=","desc")
       ->get()
       ->execute()
       ->fetch();
return $result;
    }


    function  getAllProCatData(){
        $cols=array('cat_id','cat_name','pro_name','pro_price');
        $table=array("product");
       $result=  $this->db->cols()
       ->table($table)
       ->innerjoin("product","categories","ON", "product.cat_id","=","categories.cat_id")
       ->where("product.is_active","=","1")
       ->get()
       ->execute()
       ->fetch();
return $result;
    }


}

?>