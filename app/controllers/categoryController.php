<?PHP
use coreAppNS\Controller;
class categoryController extends Controller{
public $controller;
public $model;


    function __construct($fun='category'){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('category');
        $this->$fun();    
       }


       function category(){
		echo 'hello ^^';
    }
  

	function getCategories() {
				
		$this->controller->view_object->create_view('');
	}

	function getSubCategories() {
				
		$this->controller->view_object->create_view('');
	}

       function show(){
           echo "this page will show all products in this categry";
       }


       function update(){
           echo "inside update function ";
       }

       


}


?>