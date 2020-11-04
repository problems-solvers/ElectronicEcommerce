


<footer id="footer" class="footer">
  <div class="container-fload">

    <div class="row mainfooter py-2 align-items-center">
      <div class="col-sm-2 mx-auto ">
          
          <ul class="list-unstyled mx-auto text-light align-items-center  my-0">
            <li><a href="http://localhost/ElectronicEcommerce/home/">Home</a></li>
            <li><a href="http://localhost/ElectronicEcommerce/categories/">Categories</a></li>
            <li><a href="http://localhost/ElectronicEcommerce/offers/">Offers</a></li>
          </ul>
      </div>
      <div class="col-sm-2 mx-auto">
        <div class="mx-auto">
         <img src="/ElectronicEcommerce/app/assets/images/login_store_logos-2.png"   style="width:170px; height:50px;" class="mx-auto d-block ">
         </div>
         <div class="mx-auto my-2 text-center">
             <a href="#" class="mx-1" title="Facebook"><i class="fab fa-facebook-f"></i></a>
             <a href="#" class="mx-1" title="twitter"><i class="fab fa-twitter"></i></a>
             <a href="#" class="mx-1" title="instagram"><i class="fab fa-instagram"></i></a>
         </div>  		
	  	</div>
      <div class="col-sm-2 mx-auto">
            <ul class="list-unstyled float-left  my-0">
            <li><a href="http://localhost/ElectronicEcommerce/whoare/">Who we are</a></li>
            <li><a href="#">Privacy and Policy</a></li>
            <li><a href="http://localhost/ElectronicEcommerce/connect/">Contact us</a></li>
            </ul>
      </div>
    	
</div>
	<div class="row copyright">
		<div class="col-md-12 copy">
			<p class="text-center copyright py-2 my-0">&copy; Copyright 2020 - Electronic ecommerce Site.  All rights reserved.</p>
		</div>
  </div>
</footer>
</div>

 


</header>
</div>
<script src="/ElectronicEcommerce/app/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="https://cdn.amcapi.com/translation/1.2.6/cloudtranslation.min.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>



    <!-- jQuery easing plugin -->
    <script src="/ElectronicEcommerce/app/assets/libs/js/jquery.easing.min.js"></script>
<script src="/ElectronicEcommerce/app/assets/libs/js/CustomerScript.js"></script>

<script>
 var _height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
   var _width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
   var _block_height = Math.round(_height / 9);
   var _block_width = Math.ceil(_width / 16);
   var _animation_delay = 0.03;
   var _blocks = "<div id='unfold-block'><st" + "yle> .unfold-box{ width:" + _block_width + "px;" + "height:" + _block_height + "px; } </st" + "yle>";
   for (var i = 0; i < 9; i++) {
     for (var j = 0; j < 15; j++) {
       _blocks += "<div class='unfold-box' style='transition-delay:" + _animation_delay + "s;'></div>"
       _animation_delay += 0.03;
     }
     _blocks += "<div class='unfold-box' style='transition-delay:" + _animation_delay + "s;width:"+ ( _width - (_block_width * 15)) + "px;'></div>";
     _animation_delay += 0.03;
   }


   _blocks += "<div id='loader'><span>L</span><span>O</span><span>A</span><span>D</span><span>I</span><span>N</span><span>G</span></div></div>";
   document.getElementsByTagName("body")[0].insertAdjacentHTML('beforeend', _blocks);
document.getElementsByTagName("body")[0].style.overflow = "hidden";
   setTimeout(function() {

     var _blocksDOM = document.querySelectorAll(".unfold-box");
     for (var k = 0; k < _blocksDOM.length; k++) {
       var block = _blocksDOM[k];
       block.classList.add("clear");
     }
     document.getElementById("unfold-block").classList.add("clear");
   }, 2000);

   setTimeout(function() {
     document.getElementById('loader').classList.add('clear');
   }, 4000);

   setTimeout(function() {
     document.getElementById("unfold-block").remove();
     document.getElementsByTagName("body")[0].style.overflow = "hidden";
   }, 7000);

</script>




</body>
</html>