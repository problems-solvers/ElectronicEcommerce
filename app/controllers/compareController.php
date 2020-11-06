<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

//include("app/models/category.php");
class compareController extends Controller{
public $controller;
public $model;

    function __construct($fun ='wishlist'){

        $this->controller =new Controller();
        
       

       
        $this->model=$this->controller->model_object->create_model('compare');
        $this->$fun();

       }

      
    function compare(){
       
        $this->controller->view_object->create_view('compare');
    
    }
    function addCompare(){
      
        $this->model->addcompare();
       // echo '<script> console.log("tt")</script>';
      }
    function getCompare(){
        if(isset($_SESSION['id'])){
           $items = $this->model->getCompareProducts();
          if(count($items)>=1){
                $res=json_encode($items);
                 echo $res; 
          }else{
            $s=array("nothingoncompare");
            $res=json_encode($s);
            echo $res;
          }
        }
    }
       }
       ?>
  