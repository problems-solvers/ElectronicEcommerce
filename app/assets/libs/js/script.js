$(document).ready(function () {
  //Pagination numbers

  
  $('.delete_employee').click(function(e){   
	   e.preventDefault();   
	   var empid = $(this).attr('data-emp-id');
	   var parent = $(this).parent("td").parent("tr");   
	   bootbox.dialog({
			message: "Are you sure you want to Delete ?",
			title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
			buttons: {
				success: {
					  label: "No",
					  className: "btn-success",
					  callback: function() {
					  $('.bootbox').modal('hide');
				  }
				},
				danger: {
				  label: "Delete!",
				  className: "btn-danger",
				  callback: function() {       
				   $.ajax({        
						type: 'POST',
						url: 'http://localhost/ElectronicEcommerce/admin/admin_product/delete',
						data: 'empid='+empid        
				   })
				   .done(function(response){        
						bootbox.alert("Delete sucssful");
						parent.fadeOut('slow');        
				   })
				   .fail(function(){        
						bootbox.alert('Error....');               
				   })              
				  }
				}
			}
	   });   
	}); 
	$('#example').DataTable({
		"pagingType": "simple_numbers",
		"ordering": false 
	  });
	  $('.dataTables_length').addClass('bs-select'); 
});