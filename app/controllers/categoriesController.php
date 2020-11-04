<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class categoriesController extends Controller{
public $controller;
public $cat_model;


    function __construct($fun_name="categories"){

        $this->controller=new Controller();
        $this->cat_model=$this->controller->model_object->create_model('admin_cat');
        $this->product_model=$this->controller->model_object->create_model('home');

        $this->$fun_name();

       }

       function sub_cat(){
           if(isset($_POST['id']))
         {  $id=$_POST['id'];
           $featured=$this->cat_model->sub_cat($id);
           $allcat=$this->cat_model->getAllCatData();
           $parents=array();
           $child=array();
           foreach ( $allcat as $row) {
            if($row->parent =='0'){
               array_push($parents,$row);
            }
            if($row->parent !='0'){
               array_push($child,$row);
            }
   
      }}
      $categories=array('parents'=>$parents,'child'=> $child);

           $items=array(
            'categories'=>$categories,
            'featured'=>$featured,
                );
        $this->controller->view_object->create_view('categories',$items);

       }
       function categories($cat_id='All'){
        $parents=array();
           $child=array();
           $allcat=$this->cat_model->getAllCatData();
           $featured=$this->product_model->getAllProCatData();
           $parents=array();
           $child=array();
           foreach ( $allcat as $row) {
            if($row->parent =='0'){
               array_push($parents,$row);
            }
            if($row->parent !='0'){
               array_push($child,$row);
            }
   
      }
   
      
     $categories=array('parents'=>$parents,'child'=> $child);
   
    $items=array(
        'categories'=>$categories,
        'featured'=>$featured,
            );
    $this->controller->view_object->create_view('categories',$items);

    }
    //    function index(){
    //     $this->cat_model=$this->controller->model_object->create_model('category');
    //    }


    //    function show(){
    //     $items=array(
    //         'categories'=>$this->cat_model->getAllData(),
    //     );
    //     $this->controller->view_object->create_view('categories',$items);
    //    }

    //    function delete(){
        
       
    //    }


    //    function update(){
    //        echo "inside update function ";
    //    }

       


}


?>