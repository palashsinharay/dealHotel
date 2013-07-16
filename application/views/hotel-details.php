<?php
//echo "<pre>";
//print_r($HotelSummary);
//echo "</pre>";
//
//echo "<br/><br/>";
//
//echo "<pre>";
//print_r($HotelDetails);
//echo "</pre>";
//
//echo "<br/><br/>";
//
//echo "<pre>";
//print_r($HotelImages['HotelImage']);
//echo "</pre>";
//echo "<br/><br/>";
//echo "<pre>";
//print_r($Facilities);
//echo "</pre>";
$totalFacility = sizeof($Facilities);
$liCount=intval($totalFacility/3)+1;
?>
<section id="content" class="cols-a">
				<article class="vcard">
					<header class="module-a">
						<h2 class="fn org"><?php echo $HotelSummary['name'];?></h2>
						<p class="fn org"><img src="<?php echo $HotelSummary['tripAdvisorRatingUrl'];?>"/></p>
						<p class="link"><a href="./">Return</a></p>
						<p class="addthis_toolbox addthis_default_style addthis_16x16_style"><span>Share:</span> <a class="addthis_button_email"></a> <a class="addthis_button_facebook"></a> <a class="addthis_button_twitter"></a></p>
					</header>
					<div class="slider-a" style="width:215px; float: left;">
<!--						<figure><img src="temp/693x283.gif"  alt="Placeholder" width="693" height="283"></figure>-->
						<?php 
                                                $count=0;
                                                foreach ($HotelImages['HotelImage'] as $value) :  ?>
                                                 
                                                <figure ><img  src="<?php echo $value['url'];?>"  alt="Placeholder" ></figure>
                                                <?php  $count++; if($count==3){ break;} ?>
                                                    <?php  endforeach; ?>
<!--                                                <figure><img src="temp/693x283.gif"  alt="Placeholder" width="693" height="283"></figure>-->
					</div>
                                    <div style="width: 472px; float: left ; margin-left: 5px;">
				<aside>
					
                                        <p class="scheme-a"><span class="street-address"><?php if(array_key_exists('address1', $HotelSummary)): echo $HotelSummary['address1'];?></span>, <span class="locality"><?php echo $HotelSummary['city'];?></span>, <span class="country-name"><?php echo $HotelSummary['countryCode'];endif;?></span> <iframe width="472" height="156" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=36+-+Nguyen+Chi+Thanh+-+Dong+Da,+Hanoi,+Vietnam&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=55.323926,114.169922&amp;ie=UTF8&amp;hq=&amp;hnear=36+Nguy%E1%BB%85n+Ch%C3%AD+Thanh,+Gi%E1%BA%A3ng+V%C3%B5,+Ba+Dinh+District,+Hanoi,+Wietnam&amp;t=m&amp;ll=21.025707,105.811729&amp;spn=0.012498,0.020857&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe></p>
					
                                        <p class="scheme-b">Price From <span><?php echo number_format($HotelSummary['lowRate'],2);?> <span>/ Night</span></span></p>
                                        

				</aside>
                                        </div>
                                    <div class="clear"></div>
					<div class="tabs-a">
						<ul>
							<li>Overview</li>
							<li>Facilities</li>
<!--							<li>Review</li>-->
						</ul>
						<div>
							<div>
                                                           <h2>Description</h2>
                                                            <p>
                                                                <?php if(array_key_exists('propertyDescription', $HotelDetails)): echo strip_tags(htmlspecialchars_decode($HotelDetails['propertyDescription']));endif;?>
                                                            </p>
                                                             <h2>Area Information</h2>
                                                               <p> <?php if(array_key_exists('areaInformation', $HotelDetails)): echo strip_tags(htmlspecialchars_decode($HotelDetails['areaInformation']));endif;?></p>                                                     
								<ul class="list-b">
                                                                    <li><span>Check - In Time:</span><?php if(array_key_exists('checkInTime', $HotelDetails)) {echo $HotelDetails['checkInTime']; } else { echo "NA";}?></li>
                                                                        <li><span>Check - Out Time:</span> <?php if(array_key_exists('checkOutTime', $HotelDetails)){echo $HotelDetails['checkOutTime']; } else { echo "NA";} ?></li>
								</ul>
                                                            <p class="adr scheme-a"><span class="street-address"><?php if(array_key_exists('address1', $HotelSummary)): echo $HotelSummary['address1'];?></span>, <span class="locality"><?php echo $HotelSummary['city'];?></span>, <span class="country-name"><?php echo $HotelSummary['countryCode'];endif;?></span></p>
<!--								<p class="tel">(+844) 93 668 2236</p>-->
<!--								<p><a rel="external" class="url" href="http://seratonvietnam.com">www.seratonvietnam.com</a></p>-->
							</div>
							<div>
							<?php if($totalFacility>0): ?>	
                                                            <h3>Facilities</h3>
								<div class="triple-a">
									<ul>
										<?php  for($i=0;$i<$liCount;$i++):?>
                                                                                <li><?php echo $Facilities[$i]['amenity'];?></li>
                                                                                <?php endfor; ?>
                                                                               
                                                                                
                                                                                
                                                                               
                                                                                
									</ul>
									<ul>
										<?php  for($i=$liCount;$i<=($liCount*2);$i++) :?>
                                                                                <li><?php echo $Facilities[$i]['amenity'];?></li>
                                                                                <?php  endfor; ?>
									</ul>
									<ul>
										<?php  for($i=$liCount*2;$i<$totalFacility;$i++): ?>
                                                                                <li><?php echo $Facilities[$i]['amenity'];?></li>
                                                                                <?php  endfor;   ?>
									</ul>
                                                                    
								</div>
                                                      <?php endif; ?>      
								<h3>Policy</h3>
								<p><?php 
                                                                if(array_key_exists('hotelPolicy', $HotelDetails)):
                                                                echo strip_tags(htmlspecialchars_decode($HotelDetails['hotelPolicy'])); endif; ?></p>
                                                                <h3>Room Information</h3>
								<p><?php 
                                                                if(array_key_exists('roomInformation', $HotelDetails)):
                                                                echo strip_tags(htmlspecialchars_decode($HotelDetails['roomInformation'])); endif; ?></p>
                                                                <h3>Check In Instruction</h3>
								<p><?php 
                                                                if(array_key_exists('checkInInstructions', $HotelDetails)):
                                                                echo strip_tags(htmlspecialchars_decode($HotelDetails['checkInInstructions']));  endif; ?></p>
							</div>
							<div class="double-a">
								<div>
									<h3>Your Rating</h3>
									<ul class="rating-list-a">
										<li class="a">Clean <span>1/5</span></li>
										<li class="b">Location <span>2/5</span></li>
										<li class="c">Staff <span>3/5</span></li>
										<li class="d">Service <span>4/5</span></li>
										<li class="e">Comfort <span>5/5</span></li>
									</ul>
									<p class="scheme-f"><span>4/5</span> Lorem ipsum dolor sit amet, conse ctetur adipiscing elit Aliquam.</p>
								</div>
								<div>
									<h3>Gests Reviews</h3>
									<div class="scroller-a news-c">
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
									</div>
								</div>
							</div>
							<div>
							
							</div>
						</div>
					</div>
				</article>
				<aside>
                                    <p class="scheme-b"><span>Room &nbsp;</span>Types</p>
					<?php foreach ($Rooms as $value):?>
                                    <p class="scheme-f"><?php echo $value['description'];?></p>
                                    <?php endforeach;?>
					
                                </aside>
			</section>
			