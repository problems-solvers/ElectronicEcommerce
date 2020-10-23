$(document).ready(function () {
  //Pagination numbers
/*img slick*/
var App = (function () {

	//=== Use Strict ===//
	'use strict';
	
	//=== Private Variables ===//
	var gallery = $('#js-gallery');
	$('.gallery__hero').zoom();
	
	
	//=== Gallery Object ===//
	var Gallery = {
	  zoom: function(imgContainer, img) {
		var containerHeight = imgContainer.outerHeight(),
		src = img.attr('src');
	  
	  },
	  switch: function(trigger, imgContainer) {
		var src = trigger.attr('href'),
		thumbs = trigger.siblings(),
			  img = trigger.parent().prev().children();
		
		// Add active class to thumb
		trigger.addClass('is-active');
		
		// Remove active class from thumbs
		thumbs.each(function() {
		  if( $(this).hasClass('is-active') ) {
			$(this).removeClass('is-active');
		  }
		});
	
	
		// Switch image source
		img.attr('src', src);
	  }
	};
	
	//=== Public Methods ===//
	function init() {
	
	
	 // Listen for clicks on anchors within gallery
	  gallery.delegate('a', 'click', function(event) {
		var trigger = $(this);
		var triggerData = trigger.data("gallery");
	
		if ( triggerData === 'zoom') {
		  var imgContainer = trigger.parent(),
		  img = trigger.siblings();
		  Gallery.zoom(imgContainer, img);
		} else if ( triggerData === 'thumb') {
		  var imgContainer = trigger.parent().siblings();
		  Gallery.switch(trigger, imgContainer);
		} else {
		  return;
		}
	
		event.preventDefault();
	  });
	}
	
	//=== Make Methods Public ===//
	return {
	  init: init
	};
	
	})();
	
	App.init();

	
  $('input.typeahead').typeahead({
	name: 'typeahead',
	remote:'http://localhost/ElectronicEcommerce/admin/admin_product/search?key=%QUERY',
	limit : 10
});
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