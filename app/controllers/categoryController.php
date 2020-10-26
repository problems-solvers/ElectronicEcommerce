<?PHP
use coreAppNS\Controller;
class categoryController extends Controller{
public $controller;
public $model;


    function __construct($fun='category'){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('categories');
        $this->$fun();    
       }

       function getTags() {
				
        $this->controller->view_object->create_view('categories');
        $this->model->get2tags();
	}
       function category(){
		echo 'hello ^^';
    }
  

	function getCategories() {
				
		$this->controller->view_object->create_view('categories');
	}

	function getSubCategories() {
				
		$this->controller->view_object->create_view('categories');
	}


//still not good 
    function getTagsa(){
        $result1=array(
            'product'=>$this->model->getTagsData(),
        );
        $result2=array(
            'tags'=>$this->model->getTagsData(),
        );
        $result3=array(
            'tag_details'=>$this->model->getTagsData(),
        );

foreach($result1 as $item1){
        echo"<li>.$item1.</li>";
foreach($result2 as $item2){
    echo"<li>.$item2.</li>";

foreach($result3 as $item3){
    echo"<li>.$item3.</li>";

}
}
}
    }


       function show(){
           echo "this page will show all products in this categry";
       }


       function update(){
           echo "inside update function ";
       }

       


}


?>