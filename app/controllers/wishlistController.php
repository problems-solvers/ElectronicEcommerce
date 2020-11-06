<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

//include("app/models/category.php");
class wishlistController extends Controller{
public $controller;
public $model;

    function __construct($fun ='wishlist'){

        $this->controller =new Controller();
        
       

       
        $this->model=$this->controller->model_object->create_model('wishlist');
        $this->$fun();

       }

      
    function wishlist(){
       
        $this->controller->view_object->create_view('wishlist');
    
    }
    function addtoWishlist(){
      
        $this->model->addwishlist();
       // echo '<script> console.log("tt")</script>';
      }
    function getWishlist(){
        if(isset($_SESSION['id'])){
           $items = $this->model->getWishlistProducts();
          if(count($items)>=1){
                $res=json_encode($items);
                 echo $res; 
          }else{
            $s=array("nothingonWishlist");
            $res=json_encode($s);
            echo $res;
          }
        }
    }
       }
       ?>
  