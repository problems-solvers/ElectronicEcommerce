<?PHP
    use coreAppNS\Model;
class OfferModel extends Model{
    function __construct(){
    }
 
    function  getdiscount(){
        $this->db=new DB();

        $tbls=array("dicount");
        $result=  $this->db->cols()->table($tbls) 
        ->innerjoin("product","dicount.pro_id","product.pro_id")
        ->get()
        ->execute()
        ->fetch();
     return $result;

            
    }
    function  getextra(){
        $this->db=new DB();

        $tbls=array("extra_item");
        $result=  $this->db->cols()->table($tbls) 
        ->innerjoin("product","extra_item.pro_id","product.pro_id")
        ->get()
        ->execute()
        ->fetch();
     return $result;      
    }
    function  getgiff(){
        $this->db=new DB();

        $tbls=array("offer_item_out");
        $result=  $this->db->cols()->table($tbls) 
        ->innerjoin("product","offer_item_out.pro_id","product.pro_id")
        ->get()
        ->execute()
        ->fetch();
     return $result;      
    }
    function  addoffer($data){
        $this->db=new DB();

        $tbls=array("offers");
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();

            
    }
    function  addodiscount($data){
        $this->db=new DB();

        $tbls=array("dicount");
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();

            
    }
    function  addoextra($data){
        $this->db=new DB();

        $tbls=array("extra_item");
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();

            
    }
    function  addogiff($data){
        $this->db=new DB();

        $tbls=array("offer_item_out");
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();

            
    }
    
    
    }
    
    ?>
