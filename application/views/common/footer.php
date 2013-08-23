<footer id="footer">
				<nav>
					<div class="vcard">
						<h3>Contact us <span class="fn org">Deal Hotel Book</span></h3>
						<ul class="list-a">
							<li><span>Tell</span> <span class="tel">(84) 888 888 888</span></li>
							<li><span>Email</span> <a class="email">contact//dealhotelbook/com</a></li>
							<li class="adr"><span>Add</span> <span class="street-address">Street</span>, <span class="locality">Hanoi</span> City, <span class="country-name">Vn</span></li>
						</ul>
					</div>
					<div>
						<h3>Support &amp; Help</h3>
						<ul>
							<li><a href="<?php echo base_url('welcome/page/5');?>">Payment options</a></li>
							<li><a href="<?php echo base_url('welcome/page/4');?>">FAQ</a></li>
							<li><a href="<?php echo base_url('welcome/page/9');?>">Privacy &amp; Policy</a></li>
						</ul>
					</div>
					<div>
						<h3>Information</h3>
						<ul>
							<li><a href="./">My account</a></li>
							<li><a href="./">Sit map</a></li>
							<li><a href="./">Order history</a></li>
						</ul>
					</div>
					<form action="./" method="post">
						<fieldset>
							<legend>Newsletter</legend>

							
<p class="newsletter-message" style="display: none; color:#FF0000; font-size:14px; font-weight:300; "></p>							
                                                        <p>

								<label for="na">Enter your email</label>
								<input type="email" id="na" name="na" required>
								<button id="newsletter">Submit</button>
                                                        </form>
							</p>
						</fieldset>
					</form>
				</nav>
				<p>Copyright &copy; <span class="date">2013</span>. All rights reseved <a href="./">Deal Hotel Book</a></p>
				<ul id="social">
					<li class="rs"><a rel="external" href="./">RSS</a></li>
					<li class="tw"><a rel="external" href="./">Twitter</a></li>
					<li class="fl"><a rel="external" href="./">Flickr</a></li>
					<li class="fb"><a rel="external" href="./">Facebook</a></li>
				</ul>
			</footer>
		</div>

<script type="text/javascript">
    head.js("<?php echo base_url('javascript/scripts.js')?>","<?php echo base_url('javascript/mobile.js')?>");
    //head.js("<?php echo base_url('javascript/jquery.min.js')?>","<?php echo base_url('javascript/jquery-ui.min.js')?>","<?php echo base_url('javascript/scripts.js')?>","<?php echo base_url('javascript/mobile.js')?>");
    //head.js('javascript/jquery.min.js','javascript/jquery-ui.min.js','javascript/scripts.js','javascript/mobile.js')
</script>

<!--                <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;language=en"></script>-->
		<!-- www.stackoverflow.com/questions/5004233/jquery-ajax-post-example-->
                <script type="text/javascript">
                    
                   $(document).ready(function(){

//                        request = $.ajax({
//                            url: "<?php // echo base_url('index.php/ApiCall/hotelList')?>",
//                        type: "post",
//                        data: {name:'palash'}
//                    });
//
//                    // callback handler that will be called on success
//                    request.done(function (response, textStatus, jqXHR){
//                        // log a message to the console
//                        alert(response);
//                        console.log(jqXHR);
//                    });

// variable to hold request
 $(function() {
var cache = {};
$( "#fcb" ).autocomplete({
minLength: 2,
source: function( request, response ) {
var term = request.term;
if ( term in cache ) {
response( cache[ term ] );
return;
}
$.getJSON( "<?php echo base_url('/Autocomplete/index')?>", request, function( data, status, xhr ) {
cache[ term ] = data;
response( data );
});
}
});
});

var request,page;
// bind to the submit event of our form
$("#bSearch").submit(function(event){
    // abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);
    // let's select and cache all the fields
    var $inputs = $form.find("input, select, radio,button, textarea");
    // serialize the data in the form
    var serializedData = $form.serialize();

    // let's disable the inputs for the duration of the ajax request
    $inputs.prop("disabled", true);
    $('#mydiv').show(); 
     
    // fire off the request to /form.php
    request = $.ajax({
        url: "<?php echo base_url('/AllApiCall/formInput')?>",
        type: "POST",
        data: serializedData
    });
    

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // log a message to the console
       // var hotel = $.parseJSON(response);
       $('.news-a').html(response);
       $('#mydiv').hide();
        console.log(response); //json encode response
   
    });
    
//    page = $.ajax({
//        url: "<?php echo base_url('/AllApiCall/hotelPaginationLink')?>",
//        type: "post"
//        
//    });
//    // callback handler that will be called on success
//    page.done(function (response, textStatus, jqXHR){
//        // log a message to the console
//       // var hotel = $.parseJSON(response);
//       $('#pagination').html(response);
//      
//        console.log(response); //json encode response
//   
//    });

    // callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // log the error to the console
        console.error(
            "The following error occured: "+
            textStatus, errorThrown
        );
    });

    // callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // reenable the inputs
        $inputs.prop("disabled", false);
    });

    // prevent default posting of form
    event.preventDefault();
});
// variable to hold request
var request4;
// bind to the submit event of our form
$("#fSearch").submit(function(event){
    // abort any pending request
    if (request4) {
        request4.abort();
    }
    // setup some local variables
    var $form = $(this);
    // let's select and cache all the fields
    var $inputs = $form.find("input, select, radio,button, textarea");
    // serialize the data in the form
    var serializedData = $form.serialize();

    // let's disable the inputs for the duration of the ajax request
    $inputs.prop("disabled", true);
    $('#mydiv').show();
    // fire off the request to /form.php
    request4 = $.ajax({
        url: "<?php echo base_url('/AllApiCall/filter')?>",
        type: "post",
        data: serializedData
    });

    // callback handler that will be called on success
    request4.done(function (response, textStatus, jqXHR){
        // log a message to the console
       // var hotel = $.parseJSON(response);
       $('.news-a').html(response);
       $('#mydiv').hide();
        console.log(response); //json encode response
    
    });

    // callback handler that will be called on failure
    request4.fail(function (jqXHR, textStatus, errorThrown){
        // log the error to the console
        console.error(
            "The following error occured: "+
            textStatus, errorThrown
        );
    });

    // callback handler that will be called regardless
    // if the request failed or succeeded
    request4.always(function () {
        // reenable the inputs
        $inputs.prop("disabled", false);
    });

    // prevent default posting of form
    event.preventDefault();
});

var request2;
$("#pagination a").click(function(){
  
  var pagerid = $(this).attr('id');
   // let's enable the loader for the duration of the ajax request
    
    $('#mydiv').show();
   
   // fire off the request to /form.php
    request2 = $.ajax({
        url: "<?php echo base_url('/AllApiCall/hotelPagination')?>"+"/"+pagerid,
        type: "post"
        
    });

    // callback handler that will be called on success
    request2.done(function (response, textStatus, jqXHR){
        // log a message to the console
       // var hotel = $.parseJSON(response);
       $('.news-a').html(response);
        //console.log(response); //json encode response
        $('#pagination li').each(function( index ) {
            //console.log( index + ": " + $(this).text() );
            $(this).removeClass('active');          
        });           
        $('#'+pagerid).parent().addClass('active');   
    });

    // callback handler that will be called on failure
    request2.fail(function (jqXHR, textStatus, errorThrown){
        // log the error to the console
        console.error(
            "The following error occured: "+
            textStatus, errorThrown
        );
    });
    // callback handler that will be called regardless
    // if the request failed or succeeded
    request2.always(function () {
        // disable the loader
        $('#mydiv').hide();
    });
    
});

$("#newsletter").click(function(){
    
 var form_data = {
                na 	: $('#na').val(),                            
                ajax 	: '1'
                };

                                                //alert($('#cap_div').text());	
                                                if($('#na').val()=='')
                                                        {
                                                                       // alert("Enter Email ID");
                                                                        msg="Please Provide your email address !";
                                                                        $('.newsletter-message').html(msg);
                                                                        $('.newsletter-message').fadeIn(500).show();
                                                                        return false;

                                                        }
                                                else if(!validateEmail($('#na').val()))        
                                                        {
                                                        msg="Please provide a valid email address !";
                                                       // alert("Please provide a valid email address !");
                                                        $('.newsletter-message').html(msg);
                                                        $('.newsletter-message').fadeIn(500).show();
                                                        return false;
                                                        }
                                                        else
                                                        {
                                                            $.ajax({
                                                            url: "<?php echo site_url('welcome/newsletter'); ?>",
                                                            //url: "main/email_send",
                                                            type: 'POST',
                                                            async : false,
                                                            data: form_data,
                                                            success: function(msg) {
                                                            //alert(msg);

                                                            $('.newsletter-message').html(msg);
                                                            $('.newsletter-message').fadeIn(500).show();
                                                            
                                                            }
                                                            });
                                                         }
    return false;   
    
    });
    
    
//  $("#register").click(function(){
//   alert('gandu'); 
// var form_data = {
//                usertype 	: $('#usertype').val(),  
//                fname           : $('#fname').val(), 
//                lname           : $('#lname').val(), 
//                address 	: $('#address').val(), 
//                mobileno 	: $('#mobileno').val(), 
//                email   	: $('#email').val(),
//                password   	: $('#password').val(),
//                ajax            : '1'
//                };
//
//                                                //alert($('#cap_div').text());	
//                                                     if($('#fname').val()=='')
//                                                        {
//                                                                        //alert("Enter First Name");
//                                                                        msg="Enter First Name !";
//                                                                        $('.success-message').html(msg);
//                                                                        $('.success-message').fadeIn(500).show();
//                                                                        return false;
//
//                                                        }
//                                                       else if($('#lname').val()=='')
//                                                        {
//                                                                       // alert("Enter Last Name");
//                                                                        msg="Enter Last Name !";
//                                                                        $('.success-message').html(msg);
//                                                                        $('.success-message').fadeIn(500).show();
//                                                                        return false;
//
//                                                        } 
//                                                        else if($('#address').val()=='')
//                                                        {
//                                                                       // alert("Enter Address");
//                                                                        msg="Enter Address !";
//                                                                        $('.success-message').html(msg);
//                                                                        $('.success-message').fadeIn(500).show();
//                                                                        return false;
//
//                                                        } 
//                                                        else if($('#mobileno').val()=='')
//                                                        {
//                                                                       // alert("Enter Mobile Number");
//                                                                        msg="Enter Mobile Number !";
//                                                                        $('.success-message').html(msg);
//                                                                        $('.success-message').fadeIn(500).show();
//                                                                        return false;
//
//                                                        } 
//                                                      
//                                                       else if($('#email').val()=='')
//                                                        {
//                                                                       // alert("Enter Email");
//                                                                        msg="Enter Email !";
//                                                                        $('.success-message').html(msg);
//                                                                        $('.success-message').fadeIn(500).show();
//                                                                        return false;
//
//                                                        }    
//                                                     else if(!validateEmail($('#email').val()))        
//                                                        {
//                                                        msg="Please provide a valid email address !";
//                                                        //alert("Please provide a valid email address !");
//                                                        $('.success-message').html(msg);
//                                                        $('.success-message').fadeIn(500).show();
//                                                        return false;
//                                                        }
//                                                       else if($('#password').val()=='')
//                                                        {
//                                                                        //alert("Enter Your chosen password");
//                                                                        msg="Enter Your chosen password !";
//                                                                        $('.success-message').html(msg);
//                                                                        $('.success-message').fadeIn(500).show();
//                                                                        return false;
//
//                                                        }  
//                                                        else
//                                                        {
//                                                            $.ajax({
//                                                            url: "<?php echo site_url('welcome/registerUser'); ?>",
//                                                            //url: "main/email_send",
//                                                            type: 'POST',
//                                                            async : false,
//                                                            data: form_data,
//                                                            success: function(msg) {
//                                                            alert(msg);
//
//                                                            $('.success-message').html(msg);
//                                                            $('.success-message').fadeIn(500).show();
//                                                            $('.loading').hide();
//                                                            }
//                                                            });
//                                                         }
//    return false;   
//    
//    }); 
    
    
  //call search after page load  
  if($('#fcb').val()!='' && $('#fcc').val()!='' && $('#fcd').val()!=''){
    $('#bSearch').submit();
  }else{
    $('.news-a').html('No records available for this search critaria!');
  }
    
 });
 
 
 var request3;
function shortdhb(id){
   //alert(id);
   if(id == 'ph2l'){
      
       var l1 = 'price';
       var l2 = 'h2l';
   }
   if(id == 'pl2h'){
      
       var l1 = 'price';
       var l2 = 'l2h';
   }
   if(id == 'rh2l'){
      
       var l1 = 'star';
       var l2 = 'h2l';
   }
   if(id == 'rl2h'){
       
       var l1 = 'star';
       var l2 = 'l2h';
   }
   $('#mydiv').show();
   // fire off the request to /form.php
    request3 = $.ajax({
        url: "<?php echo base_url('/AllApiCall/hotelShort')?>"+"/"+l1+"/"+l2,
        type: "post"
        
    });

    // callback handler that will be called on success
    request3.done(function (response, textStatus, jqXHR){
        // log a message to the console
       // var hotel = $.parseJSON(response);
       $('.news-a').html(response);
        console.log(response); //json encode response
        
        
        
        
    });

    // callback handler that will be called on failure
    request3.fail(function (jqXHR, textStatus, errorThrown){
        // log the error to the console
        console.error(
            "The following error occured: "+
            textStatus, errorThrown
        );
    });
    
    // callback handler that will be called regardless
    // if the request failed or succeeded
    request3.always(function () {
        // disable the loader
        $('#mydiv').hide();
    });
}

function validateEmail(user_email){
   var filter = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{1,4}$/;
    if(filter.test(user_email)){
        return true;
    }else{
        return false;
    }
}
                </script>
	</body>
</html>