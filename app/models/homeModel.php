<?PHP
    use coreAppNS\Model;
class homeModel extends Model{
    function __construct(){
    }
 
    
        function  getRecentAddData(){
            $this->db=new DB();

            $cols=array('product.pro_id','product.pro_name','product.pro_price','product.main_img','categories.cat_id','categories.cat_name');
            $table=array("product");
           $result=  $this->db->cols($cols)
           ->table($table)
           ->innerjoin("categories","product.cat_id","categories.cat_id")
           ->where("product.is_active","=","1")
           ->where("categories.is_active","=","1")
           ->orderBy("product.create_date","desc")
           ->limit(0,15)
           ->get()
           ->execute()
           ->fetch();
            return $result;
        }
        function  sub_cat($id){
            $cols=array();
            $table=array("product");
           $result=  $this->db->cols()
           ->table($table)
           ->where("cat_id","=","'".$id."'")
           ->get()
           ->execute()
           ->fetch();
    return $result;
        }
    
   
     function  getAllProCatData(){
        $this->db=new DB();

            $cols=array('product.pro_id','product.pro_name','product.main_img','product.pro_price','categories.cat_id','categories.cat_name');
            $table=array("product");
           $result=  $this->db->cols($cols)
           ->table($table)
           ->innerjoin("categories","product.cat_id","categories.cat_id")
           ->where("product.is_active","=","1")
           ->where("categories.is_active","=","1")
           ->orderBy("categories.create_date","desc")
           ->get()
           ->execute()
           ->fetch();
        return $result;
        }
    
    
        function getAllAdver(){
            $this->db=new DB();
    
                $table=array("advertisement");
               $result=  $this->db->cols()
               ->table($table)
               ->get()
               ->execute()
               ->fetch();
            return $result;
            }
        
        
    }
    
    ?>
