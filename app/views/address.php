<?php
$rows=$data['address'];
//print_r($rows);
foreach ($rows as $row)
{?>
<div class="col-12">
    <div class="row align-items-center  mx-3 py-3">
    <div class="col-md-3 ">
        
      Country : <label type="text"  name="zip_id"  id="zip_id" value="" required><?php echo $row->country; ?></label>
    </div>
    <div class="col-md-3">
        
      City : <label type="text"  name="zip_id"  id="zip_id" value="" required><?php echo $row->city; ?></label>
    </div>

  </div>
  <div class="row align-items-center mx-3 py-3">
    <div class="col-md-3 ">
      Street : <label type="text"  name="zip_id"  id="zip_id" value="" required><?php echo $row->street; ?></label>
    </div>
    <div class="col-md-3 ">
      Zip_id : <label type="text"  name="zip_id"  id="zip_id" value="" required><?php echo $row->zip_id; ?></label>
    </div>
  </div>
</div>
</div>
<?php
}
?>