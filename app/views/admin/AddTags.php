<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<form  id="form" class="form-horizontal"  action="/ElectronicEcommerce/admin/admin_cat/addTags"  method="POST" enctype="multipart/form-data">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tag_name">Tag Name</label>  
  <div class="col-md-4">
  <input id="tag_name" name="tag_name" placeholder="Tag Name" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="tag_data">Tag data</label>  
  <div class="col-md-4">

  <input type="hidden" name="count"  id="count" value="1" />
    <div class="controls" id="profs"> 
      <div id="field" class=" form-inline">
        <input autocomplete="off" class="input form-control" id="field1" name="field1" type="text" placeholder="Type something" data-items="8"/>
        <button id="b1" class="btn add-more" type="button">+</button>
      </div>
                
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button id="singlebutton" action="/ElectronicEcommerce/admin/admin_cat" name="singlebutton" class="btn btn-primary">ADD Tag</button>
  </div>
  </div>
  </form>

    
        <script>

            $(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    

    
});
        </script>
  

