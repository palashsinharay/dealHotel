<?php 
echo "<pre>";
print_r($recently_booked_hotel_id);
echo "</pre>";



//
//foreach ($recently_booked_hotel_id as $value){
//    //echo "test1";
//    echo "</br>";
//    echo $value[0]->id;
//    echo "</br>";
//    echo $value[0]->name;
//}
//die();
//foreach ($recently_booked_hotel_id as $key => $value){
//    //echo "test1";
//    echo "</br>";
//    echo $recently_booked_hotel_id[$key][0]->hotel_url = $value[0]->hotel_url.'gandu';
//    
//}
//echo "<pre>";
//print_r($recently_booked_hotel_id);
//echo "</pre>";
?>
<!doctype html>
<html lang="en" class="a">
	<head>
		<meta charset="utf-8">
                <title>Hotel List Page - Deal Hotel Book</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<!--		<script type="text/javascript" src="javascript/head.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url('javascript/head.js');?>"></script>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/screen.css');?>" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/print.css');?>" media="print">
		<link rel="shortcut icon" href="<?php echo base_url('favicon.ico');?>" type="image/x-icon">
<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/mystyle.css');?>">
	  <script src="<?php echo base_url('javascript/jquery.min.js')?>"></script>
	  <script src="<?php echo base_url('javascript/jquery-ui.min.js')?>"></script>
		<script type="text/javascript">
		$(document).on('propertychange keyup input paste', 'input.fea', function(){
		var io = $(this).val().length ? 1 : 0 ;
			$(this).next('.icon_clear').stop().fadeTo(300,io);
		}).on('click', '.icon_clear', function() {
			$(this).delay(300).fadeTo(300,0).prev('input').val('');
		});	
		</script>
	</head>
	<body>
		<div id="root">
			<header id="top">
				<h1><a href="./" accesskey="h"></a></h1>
				<nav id="skip">
					<ul>
						<li><a href="#nav" accesskey="n">Skip to navigation (n)</a></li>
						<li><a href="#content" accesskey="c">Skip to content (c)</a></li>
						<li><a href="#footer" accesskey="f">Skip to footer (f)</a></li>
					</ul>
				</nav>
				<nav id="nav">
					<ul class="primary">
						<li><a accesskey="1" href="index.html">Home</a> <em>(1)</em>
<!--							<ul>
								<li><a href="hotel-list.html">Hotel List</a></li>
								<li><a href="hotel-details.html">Hotel Details</a></li>
								<li><a href="booking-view.html">Booking View</a></li>
								<li><a href="booking-confirm.html">Booking Confirm</a></li>
							</ul>-->
						</li>
						<li><a accesskey="6" href="#">Blog</a> <em>(2)</em>
<!--							<ul>
								<li><a href="blog.html">Blog Listings</a></li>
								<li><a href="blog-article.html">Blog Single</a></li>
							</ul>-->
						</li>

						<li><a accesskey="7" href="contact.html">Contact</a> <em>(3)</em></li>
					</ul>
					<ul class="secondary">
						<li class="gb"><span>En</span>
							<ul>
								<li class="de"><a href="./">Deutsh</a></li>
								<li class="es"><a href="./">Español</a></li>
								<li class="fr"><a href="./">Français</a></li>
								<li class="pl"><a href="./">Polski</a></li>
							</ul>
						</li>
						<li><span>USD</span>
							<ul>
								<li><a href="./">EUR</a></li>
								<li><a href="./">GBP</a></li>
								<li><a href="./">CHF</a></li>
								<li><a href="./">PLN</a></li>
							</ul>
						</li>
					</ul>
					<p class="link-a"><a href="#">Login</a> <a href="#">Register</a></p>
				</nav>
<!--				<form action="#" method="post" id="search">
					<fieldset>
						<legend>Search</legend>
						<p>
							<label for="sa">Search</label>
							<input type="text" id="sa" name="sa" required>
							<button type="submit">Submit</button>
						</p>
					</fieldset>
				</form>-->
				<p class="tel">Call us today <span>(84) - 868 868 888</span></p>
			</header>   
			
				
<section id="content" >			
				<div class="double-b" style="top:60px;">
                </div>	
                </section>
                
                
                
                
					<!--<figure class="figure-left">
					<label class="figure_heading" style="color:#FFF">Search Hotels</label>
                    <div class="clear"></div>
					<span>Where ? </span>
					<span class="clearable">
						<input class="data_field" type="text" name="data_field" value=""/>
						<span class="icon_clear"><img width="18" height="18" alt="X" src="temp/icon_clear.png"></span>
					</span>
                    <div class=""></div>
                    <br/>
						<p class="date-a">
							<span>
								<label for="fcc">Check in</label>
								<input type="text" id="fcc" name="fcc" required>
							</span>
							<span>
								<label for="fcd">Check Out</label>
								<input type="text" id="fcd" name="fcd" required>
							</span>
						</p>
                        <form action="">
                                <input type="checkbox" name="vehicle" value="Bike">  I don't have specifick dates yet<br>
                                </form>
                                <br/>
					<span>Guests</span>
						<p class="select-c">
							<span>
								<label for="fcb">Guests</label>
								<select id="fcb" name="fcb">
									<option>1 adult</option>
									<option>2 adults in 1 room</option>
									<option>2 adults in 1 room</option>
									<option>2 adults in 1 room</option>
									<option>2 adults in 1 room</option>
								</select>
							</span>	
					<p class="submit" style="left:270px;position:relative;top:-50px;">
						<button type="submit" class="search_button" >Search</button>
					</p>
					<div class="clear"></div>
                    </figure>-->	
                    			
					<!--<figure class="figure-right">
					<label class="figure_heading_right" style="color:#FFFFFF; margin-left:20px;">Compare Hotels</label>
					<a><img src="images/hotel_logos.png" style="margin-top:2px"></a></figure>-->				
							
				<!--<div class="double-b" style="top:40px;z-index:-999;">
					<figure class="figure-left" style="height:320px;">
					<label class="figure_heading" style="color:#FFF">Recently Booked Hotels in Vietnam</label>
                    <div class="figure-left_content">
                    <div class="left_side">
								<figure><img src="temp/128x102(1).gif"  alt="Placeholder" width="128" height="102"></figure>
                                </div>
                                <div class="right_side">
                                <div class="right_top">
                                <h5><a href="#">Taj hanoi Hotel</a></h5>
								<p><span class="rating-a b">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
                                </div>							
                                <div class="right_bottom">
                                
                                </div>
                                </div>
                                
                                </div>
					
                    
                    <div class="figure-left_content">
                    <div class="left_side">
								<figure><img src="temp/128x102(1).gif"  alt="Placeholder" width="128" height="102"></figure>
                                </div>
                                <div class="right_side">
                                <div class="right_top">
                                <h5><a href="#">Taj hanoi Hotel</a></h5>
								<p><span class="rating-a b">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
                                </div>							
                                <div class="right_bottom">
                                
                                </div>
                                </div>
                                
                                </div>
                    
                    
                    
                    
                    
                    </figure>				
					<figure class="figure-right" style="height:320px;">
					<label class="figure_heading_right" style="color:#FFF; margin-left:20px;" >Top Destination</label>
						<div class="double-b" style="display:inline-block;" >
							<figure style="width:180px; margin:15px 5px 0 20px;">
								<a href="#"><img width="180" height="120" alt="Placeholder" src="temp/217x131.gif"></a>
                                                                <h5 style="text-decoration:underline; color:#1a90e0;">Paris</h5>

							</figure>
							<figure style="width:180px; margin:15px 20px 0 5px;">
								<a href="#"><img width="180" height="90" alt="Placeholder" src="temp/217x131.gif"></a>
                                <h5 style="text-decoration:underline; color:#1a90e0;">Paris</h5>
							</figure>
						</div>
						<div class="clear"></div>
						<div class="double-b" style="display:inline-block;" >
							<figure style="width:180px;position:relative;top:-12px; margin-left:20px; ">
								<a href="#"><img width="180" height="120" alt="Placeholder" src="temp/217x131.gif"></a>
                                <h5 style="text-decoration:underline; color:#1a90e0;">Paris</h5>
							</figure>
							<figure style="width:180px;position:relative;top:-12px; margin-right:20px;">
								<a href="#"><img width="180" height="120" alt="Placeholder" src="temp/217x131.gif"></a>
                                                                <h5 style="text-decoration:underline; color:#1a90e0;">Paris</h5>

							</figure>
						</div>						
					</figure>				
				</div>-->				
						
				<!--<article>
				<figure class="image-e"><a href="./"><img src="temp/featured-b.jpg" alt="Featured" width="1330" height="798"></a> 							
				<figcaption>Need some sun this week? <span>visit Sai gon vietnam now</span> <span>Special from <span><span>$</span>750.00</span></span></figcaption> 
				</figure>
				 <form action="./" method="post" class="form-c">
					<fieldset>
						<legend>Book now</legend>
						<h3><span>01.</span> What?</h3>
						<ul class="check-c">
							<li><label for="fcaa"><input type="radio" id="fcaa" name="fca"> Hotels</label></li>
							<li><label for="fcab"><input type="radio" id="fcab" name="fca"> Flights</label></li>
							<li><label for="fcac"><input type="radio" id="fcac" name="fca"> Cars</label></li>
							<li><label for="fcad"><input type="radio" id="fcad" name="fca"> Rent car</label></li>
							<li><label for="fcae"><input type="radio" id="fcae" name="fca"> Cruise</label></li>
							<li><label for="fcaf"><input type="radio" id="fcaf" name="fca"> All</label></li>
						</ul>
						<h3><span>02.</span> Where?</h3>
						<p class="select-c">
							<label for="fcb">Location</label>
							<select id="fcb" name="fcb">
								<option>Seraton Hotel - Hanoi, Vietnam</option>
								<option>Seraton Hotel - Hanoi, Vietnam</option>
								<option>Seraton Hotel - Hanoi, Vietnam</option>
								<option>Seraton Hotel - Hanoi, Vietnam</option>
							</select>
						</p>
						<h3><span>03.</span> When?</h3>
						<p class="date-a">
							<span>
								<label for="fcc">Check in</label>
								<input type="text" id="fcc" name="fcc" required>
							</span>
							<span>
								<label for="fcd">Check Out</label>
								<input type="text" id="fcd" name="fcd" required>
							</span>
						</p>
						<h3><span>04.</span> Who?</h3>
						<p class="select-a">
							<span>
								<label for="fce">Rooms</label>
								<select id="fce" name="fce">
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
								</select>
							</span>
							<span>
								<label for="fcf">Adults</label>
								<select id="fcf" name="fcf">
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
								</select>
							</span>
							<span>
								<label for="fcg">Child</label>
								<select id="fcg" name="fcg">
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
								</select>
							</span>
						</p>
						<p class="submit"><button type="submit">Proceed</button></p>
					</fieldset>
				</form> 
			</article>   -->           
			<section id="content">
            
            
            <div class="double-b">
  
					<figure class="image-d" style="height:300px; border:4px solid #0099FF; border-radius:8px">
                    <header class="module-a" style="background-color:#0099FF; box-shadow:none; padding: 7px 0 0 0;margin:0px;">
                        <label class="figure_heading" style="color:#FFFFFF;">Search Hotels</label>
					</header>
                    
                    
                    
                    <div class="clear"></div>
                    
                    <form id="" action="<?php echo base_url('welcome/search');?>" method="post" class="form-search-box">
				<fieldset class="cols-b" style="font-size:10px; border:none;">
					<div>
						<p>
							<label for="fea">Where ? </label>
							<input type="text" id="fea" name="fea" class="fea" required >
                            <span class="icon_clear">X</span>
						</p>
						<p class="date-a">
							<span>
								<label for="fcc">Check in</label>
								<input type="text" id="fcc" name="fcc" required>
							</span>
							<span>
								<label for="fcd">Check Out</label>
								<input type="text" id="fcd" name="fcd" required>
							</span>
						</p>
<!--                                <p style="width:400px;">       
                                <input type="checkbox" id="searchBoxContainer_NoDates" name="searchBoxContainer_NoDates" value="searchBoxContainer_NoDates"><label>I don't have specifick dates yet</label>
               			</p>
					-->
<!--                        <p class="select-c">
                            <label>Guests</label>
                                <span>
                                        <label for="fcb">Guests</label>
                                        <select id="fcb" name="fcb">
                                                <option>1 adult</option>
                                                <option>2 adults in 1 room</option>
                                                <option>2 adults in 1 room</option>
                                                <option>2 adults in 1 room</option>
                                                <option>2 adults in 1 room</option>
                                        </select>
                                </span>	
                        </p>-->
                        <p class="link-a">
                            <button type="submit" class="search_button" >Search</button>
                        </p>
                  </div>
               </fieldset>
			   </form>


                    <div class="clear"></div>
                    </figure>                    
					<figure class="image-d" style="height:300px; border:3px solid #0099FF; border-radius:8px;">
                    
                    
                    <header class="module-a" style="background-color:#0099FF; box-shadow:none; padding: 7px 0 0 0;margin:0px;">
						<label class="figure_heading_right" style="color:#FFFFFF;">Compare Hotels</label>
					</header>
						
                                            <a><img src="<?php echo base_url('images/hotel_logos.png')?>" style="margin-top:2px"></a>
                    
                    </figure>
				</div>
                
                
                
                
                
                <div class="double-b">
  
				  <figure class="image-d" style="height:335px; border:4px solid #0099FF; border-radius:8px">
                    <header class="module-a" style="background-color:#0099FF; box-shadow:none; padding: 7px 0 0 0; margin-bottom:10px;">
                        <label class="figure_heading" style="color:#FFFFFF;">Recently Booked Hotel in India</label>
					</header>
<?php

//foreach ($recently_booked_hotel_id as $value){
//    //echo "test1";
//    echo "</br>";
//    echo $value[0]->id;
//    echo "</br>";
//    echo $value[0]->name;
//}

?>
                
            <?php 
            if($recently_booked_hotel_id!=NUll):
            foreach ($recently_booked_hotel_id as $value): 
                
switch ($value[0]->class) {
                        case 0:
                            $rateClass = 'a';
                            break;
                        case 1:
                            $rateClass = 'b';
                            break;
                         case 2:
                            $rateClass = 'c';
                            break;
                         case 3:
                            $rateClass = 'd';
                            break;
                         case 4:
                            $rateClass = 'e';
                            break;
                         case 5:
                            $rateClass = 'f';
                            break;
                        default:
                             $rateClass = 'a';
                            break;
                    }                
                ?>                          
                 <div class="recently_panel">
                 <div class="recently_panel_left"><img src="<?php echo $value[0]->photo_url?>" style="max-width:200px; max-height:100px;"></div>
                 
                 
                 <div class="recently_panel_right">
                 <?php echo $value[0]->name; ?>
                 <p><?php echo $value[0]->name.'-'.$value[0]->city_preferred; ?></p>
                 <p><span class="rating-a <?php echo " ".$rateClass;?>"><?php echo $value[0]->class;?>/5</span></p>

                 
                 </div>
                 </div>
                 <div class="clear"></div>
                 <div class="recently_panel_border"></div>
                 <?php 
                 endforeach;
                 endif;
                 ?>   
                 
<!--                 <div class="recently_panel">
                 <div class="recently_panel_left"><img src="<?php echo base_url('temp/200-x130-(2).gif')?>"></div>
                 <div class="recently_panel_right">
                  Taj Hansoi Hotel
                 <p>Seraton Hotel - hanoi, Vietnam</p>
                 <p><span class="rating-a d">3/5</span></p>
                 
                 </div>
                 </div>-->
                 </figure>
                    
                    
                    
					<figure class="image-d" style="height:335px; border:3px solid #0099FF; border-radius:8px;">
                    <header class="module-a" style="background-color:#0099FF; box-shadow:none;padding: 7px 0 0 0;margin:0px;">
						<label class="figure_heading_right" style="color:#FFFFFF;">Top Destination</label>
					</header>
                    <div class="top_dest_panel">
                    <div class="top_dest_panel_left"><img src="<?php echo base_url('temp/220-x-120.gif')?>" style="margin-bottom:3px">Paris</div>
                    <div class="top_dest_panel_right"><img src="<?php echo base_url('temp/220-x-120(2).gif')?>" style="margin-bottom:3px">Viena</div>
                    </div>
                    
                    <div class="top_dest_panel">
                    <div class="top_dest_panel_left"><img src="<?php echo base_url('temp/220-x-120.gif')?>" style="margin-bottom:3px">Paris</div>
                    <div class="top_dest_panel_right"><img src="<?php echo base_url('temp/220-x-120(2).gif')?>" style="margin-bottom:3px">Viena</div>
                    </div>
                    
                    </figure>
          </div>
                
                
                
                
                
            
            
            
				<h2 class="header-a">Hot deal of the week</h2>
				<div class="double-b">
					<figure class="image-a"><a href="./"><img src="<?php echo base_url('temp/465x201.gif')?>" alt="Placeholder" width="465" height="201"> <span class="icon-a">-%25</span></a> <figcaption>Paris Eurostar Breaks <span>Curabitur fringilla mauris interdum nec magna</span> <span>From $350</span></figcaption></figure>
					<figure class="image-d"><a href="./"><img src="<?php echo base_url('temp/465x201(1).gif')?>" alt="Placeholder" width="465" height="201"> <span class="icon-b">Gift</span></a> <figcaption><span>Travel to hongkong</span> urabitur fringilla mauris interdum nec magna tur fringilla mauris interdum nec magna tur fringilla mauris interdum log nec magna</figcaption></figure>
				</div>
				<h2 class="header-a">Popular deal</h2>
			  <div class="news-d">
					
					
					
					<article>
						<header>
							<figure><img src="<?php echo base_url('temp/300x160(3).gif')?>" alt="Placeholder" width="300" height="160"></figure>
							<h3><a href="#">Sheraton hanoi Hotel</a></h3>
							<p><span class="rating-a d">3/5</span> ( 20 Ratting )</p>
							<p class="scheme-i"><span>$</span>500</p>
						</header>
						<p>Lorem ipsum dolor sit saelas met, consas ecttur ads ipi deese cing elit. Mauris fring illa bibe endums leo consec. <a class="link">View Details</a></p>
						<footer>
							<p>Sheraton Hotel - Hanoi, Vietnam</p>
						</footer>
					</article>
					<article>
						<header>
							<figure><img src="<?php echo base_url('temp/300x160(4).gif')?>" alt="Placeholder" width="300" height="160"></figure>
							<h3><a href="#">Sheraton hanoi Hotel</a></h3>
							<p><span class="rating-a e">4/5</span> ( 20 Ratting )</p>
							<p class="scheme-i"><span>$</span>500</p>
						</header>
						<p>Mauris fring illa bibe endums leo consec. Lorem ipsum dolor sit saelas met, sas ecttur ads ipi deese cing elit. <a class="link">View Details</a></p>
						<footer>
							<p>Sheraton Hotel - Hanoi, Vietnam</p>
						</footer>
					</article>
					<article>
						<header>
							<figure><img src="<?php echo base_url('temp/300x160(5).gif')?>" alt="Placeholder" width="300" height="160"></figure>
							<h3><a href="#">Sheraton hanoi Hotel</a></h3>
							<p><span class="rating-a f">5/5</span> ( 20 Ratting )</p>
							<p class="scheme-i"><span>$</span>500</p>
						</header>
						<p>Lorem ipsum dolor sit saelas met, consas ecttur ads ipi deese cing elit. Mauris fring illa bibe endums leo consec. <a class="link">View Details</a></p>
						<footer>
							<p>Sheraton Hotel - Hanoi, Vietnam</p>
						</footer>
					</article>
				</div>
			</section>
            
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
							<li><a href="./">Payment options</a></li>
							<li><a href="./">FAQ</a></li>
							<li><a href="./">Privacy &amp; Policy</a></li>
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
							<p>Lorem emphasised est dolor sit ams...</p>
							<p>
								<label for="na">Enter your email</label>
								<input type="email" id="na" name="na" required>
								<button type="submit">Submit</button>
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
 $(function() {
var cache = {};
$( "#fea" ).autocomplete({
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
function validation(){
    if($('#fea').val() != ''){
        alert ('hi');
    }
}
    </script>
	</body>
</html>