<div id="mydiv">
    <img src="<?php echo base_url('images/ajax-loader.gif');?>" class="ajax-loader"/>
</div>
<article id="content" class="cols-c">
				<div>
					<div class="slider-a">
						<figure class="image-b"><img src="<?php echo base_url('temp/693x276.gif');?>"  alt="Placeholder" width="693" height="276"> <figcaption>Paris Eurostar Breaks</figcaption></figure>
						<figure class="image-a"><img src="<?php echo base_url('temp/693x276(1).gif');?>" alt="Placeholder" width="693" height="276"> <figcaption>Paris Eurostar Breaks <span>Curabitur fringilla mauris interdum nec magna</span> <span>From $350</span></figcaption></figure>
						<figure><img src="<?php echo base_url('temp/693x276(2).gif');?>" alt="Placeholder" width="693" height="276"></figure>
					</div>
                                    
					<form action="./" method="post" class="module-b">
						<fieldset>
							<nav class="pagination-a">
<!--								<p>Page 01 of 06</p>-->
								<ol id="pagination">
<!--									<li class="prev"><a href="#">Previous</a></li>-->
									<li class="active"><a id="1">01</a></li>
									<li><a id="20" >02</a></li>
									<li><a id="40" >03</a></li>
									<li><a id="60" >04</a></li>
                                                                        <li><a id="80" >05</a></li>
<!--                                                                        <li><a id="100" >6</a></li>
                                                                        <li><a id="120" >7</a></li>
                                                                        <li><a id="140" >8</a></li>
                                                                        <li><a id="180" >9</a></li>
                                                                        <li><a id="200" >10</a></li>
                                                                        <li><a id="220" >11</a></li>
                                                                        <li><a id="240" >12</a></li>
                                                                        <li><a id="280" >13</a></li>
                                                                        <li><a id="300" >14</a></li>-->
                                                                        
<!--									<li class="next"><a href="#">Next</a></li>-->
								</ol>
							</nav>
							<p class="select-b">
								<label for="mba">Short by:</label>
								<select id="mba" name="mba" onchange="shortdhb($(this).attr('value'));">
                                                                        <option value="ph2l">Price High to Low</option>
									<option value="pl2h">Price Low to High</option>
									<option value="rh2l">Rating High to Low</option>
									<option value="rl2h">Rating Low to High</option>
								</select>
							</p>
<!--							<p class="check-b">
								<label for="fcba"><input type="radio" id="fcba" name="fcb"> List</label>
								<label for="fcbb"><input type="radio" id="fcbb" name="fcb"> Map</label>
							</p>-->
						</fieldset>
					</form>
					<div class="news-a">
						<article>
							<header>
								<h2><a href="#">Sheraton hanoi Hotel</a></h2>
								<figure><img src="<?php echo base_url('temp/128x102.gif');?>"  alt="Placeholder" width="128" height="102"> <figcaption>01</figcaption></figure>
								<p><span class="rating-a a">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
							</header>
							<p>Lorem ipsum dolor sit saelas met, consectetur adipi deese cing elit. Maus fringilla bibe endum es leo. Sorem ipsum dolor...</p>
							<p class="scheme-d"><span>$</span>900 <span class="a"><span>$</span>600</span> <a href="./">Book</a></p>
							<footer>
								<p>User Rating <span class="rating-b a">0/5</span></p>
								<p class="link-b"><a href="./">View Details</a></p>
							</footer>
						</article>
						<article>
							<header>
								<h2><a href="#">Taj hanoi Hotel</a></h2>
								<figure><img src="<?php echo base_url('temp/128x102(1).gif');?>"  alt="Placeholder" width="128" height="102"> <figcaption>02</figcaption></figure>
								<p><span class="rating-a b">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
							</header>
							<p>Lorem ipsum dolor sit saelas met, consectetur adipi deese cing elit. Maus fringilla bibe endum es leo. Sorem ipsum dolor...</p>
							<p class="scheme-d"><span>$</span>500 <span class="b">hot</span> <a href="./">Book</a></p>
							<footer>
								<p>User Rating <span class="rating-b b">0/5</span></p>
								<p class="link-b"><a href="./">View Details</a></p>
							</footer>
						</article>
						<article>
							<header>
								<h2><a href="#">Hanoi Sheraton Hotel</a></h2>
								<figure><img src="<?php echo base_url('temp/128x102(2).gif');?>"  alt="Placeholder" width="128" height="102"> <figcaption>03</figcaption></figure>
								<p><span class="rating-a c">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
							</header>
							<p>Lorem ipsum dolor sit saelas met, consectetur adipi deese cing elit. Maus fringilla bibe endum es leo. Sorem ipsum dolor...</p>
							<p class="scheme-d"><span>$</span>810 <a href="./">Book</a></p>
							<footer>
								<p>User Rating <span class="rating-b c">0/5</span></p>
								<p class="link-b"><a href="./">View Details</a></p>
							</footer>
						</article>
						<article>
							<header>
								<h2><a href="#">Lorem Impsum Hotel</a></h2>
								<figure><img src="<?php echo base_url('temp/128x102(3).gif');?>"  alt="Placeholder" width="128" height="102"> <figcaption>04</figcaption></figure>
								<p><span class="rating-a d">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
							</header>
							<p>Lorem ipsum dolor sit saelas met, consectetur adipi deese cing elit. Maus fringilla bibe endum es leo. Sorem ipsum dolor...</p>
							<p class="scheme-d"><span>$</span>600 <a href="./">Book</a></p>
							<footer>
								<p>User Rating <span class="rating-b d">0/5</span></p>
								<p class="link-b"><a href="./">View Details</a></p>
							</footer>
						</article>
						<article>
							<header>
								<h2><a href="#">Just Another Hotel</a></h2>
								<figure><img src="<?php echo base_url('temp/128x102(4).gif');?>"  alt="Placeholder" width="128" height="102"> <figcaption>05</figcaption></figure>
								<p><span class="rating-a e">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
							</header>
							<p>Lorem ipsum dolor sit saelas met, consectetur adipi deese cing elit. Maus fringilla bibe endum es leo. Sorem ipsum dolor...</p>
							<p class="scheme-d"><span>$</span>350 <a href="./">Book</a></p>
							<footer>
								<p>User Rating <span class="rating-b e">0/5</span></p>
								<p class="link-b"><a href="./">View Details</a></p>
							</footer>
						</article>
						<article>
							<header>
								<h2><a href="#">Sheraton hanoi Hotel</a></h2>
								<figure><img src="<?php echo base_url('temp/128x102(5).gif');?>"  alt="Placeholder" width="128" height="102"> <figcaption>06</figcaption></figure>
								<p><span class="rating-a f">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
							</header>
							<p>Lorem ipsum dolor sit saelas met, consectetur adipi deese cing elit. Maus fringilla bibe endum es leo. Sorem ipsum dolor...</p>
							<p class="scheme-d"><span>$</span>499 <a href="./">Book</a></p>
							<footer>
								<p>User Rating <span class="rating-b f">0/5</span></p>
								<p class="link-b"><a href="./">View Details</a></p>
							</footer>
						</article>
						<footer>
<!--							<nav class="pagination-a">
								<p>Page 01 of 06</p>
								<ol>
									<li class="prev"><a href="./">Previous</a></li>
									<li class="active"><a href="./">01</a></li>
									<li><a href="./">02</a></li>
									<li><a href="./">03</a></li>
									<li><a href="./">04</a></li>
									<li class="next"><a href="./">Next</a></li>
								</ol>
							</nav>-->
						</footer>
					</div>
				</div>
				<aside>
					<form id="bSearch" action="./" method="post" class="form-c">
						<fieldset>
							<legend>Search now</legend>
<!--							<h3><span>01.</span> What?</h3>
							<ul class="check-c">
								<li><label for="fcaa"><input type="radio" id="fcaa" name="fca"> Hotels</label></li>
								<li><label for="fcab"><input type="radio" id="fcab" name="fca"> Flights</label></li>
								<li><label for="fcac"><input type="radio" id="fcac" name="fca"> Cars</label></li>
								<li><label for="fcad"><input type="radio" id="fcad" name="fca"> Rent car</label></li>
								<li><label for="fcae"><input type="radio" id="fcae" name="fca"> Cruise</label></li>
								<li><label for="fcaf"><input type="radio" id="fcaf" name="fca"> All</label></li>
							</ul>-->
							<h3><span>01.</span> Where?</h3>
                                                        <p>
                                                            <label for="fcb">Location</label>
                                                            <input id="fcb" name="fcb" value="<?php echo $city;?>" required/>
                                                        </p>					
							<h3><span>02.</span> When?</h3>
							<p class="date-a">
								<span>
									<label for="fcc">Check in</label>
									<input type="text" id="fcc" name="fcc" value="<?php echo $checkIn;?>" required>
								</span>
								<span>
									<label for="fcd">Check Out</label>
									<input type="text" id="fcd" name="fcd" value="<?php echo $checkOut;?>" required>
								</span>							</p>
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
								</span>							</p>
<!--                                                            <p>       
                                                                <input type="checkbox" id="searchBoxContainer_NoDates" name="searchBoxContainer_NoDates" value="searchBoxContainer_NoDates"><label>I don't have specifick dates yet</label>
                                                            </p>-->
					
							<p class="submit"><button type="submit" id="proceed">Proceed</button></p>
						</fieldset>
					</form>
					<form id="fSearch" action="./" method="post" class="form-d">
						<fieldset>
							<legend>Refine search result</legend>
							<div class="accordion-a">
								<h3 class="active">Price Range</h3>
								<div>
									<div class="bar-a"></div>
                                                                        <input id="pr_min" name="pr_min" value="800" type="hidden"/>
                                                                        <input id="pr_max" name="pr_max" value="20000" type="hidden"/>
								</div>
								<h3 class="active">Star Rating</h3>
								<div>
									<div class="bar-b"></div>
                                                                        <input id="star_min" name="star_min" value="1" type="hidden"/>
                                                                        <input id="star_max" name="star_max" value="3" type="hidden"/>
								</div>
<!--								<h3 class="active">Accommodations Type</h3>
								<div>
									<ul class="check-d">
										<li><label for="cda"><input type="checkbox" id="cda" name="cda"> Apartments</label></li>
										<li><label for="cdb"><input type="checkbox" id="cdb" name="cdb"> Hotels</label></li>
										<li><label for="cdc"><input type="checkbox" id="cdc" name="cdc"> Gest House</label></li>
										<li><label for="cdd"><input type="checkbox" id="cdd" name="cdd"> Bed &amp; Breakfast</label></li>
										<li><label for="cde"><input type="checkbox" id="cde" name="cde"> Apartments</label></li>
										<li><label for="cdf"><input type="checkbox" id="cdf" name="cdf"> Farm Stay</label></li>
									</ul>
								</div>
								<h3 class="active">Hotel Facilities</h3>
								<div>
									<ul class="check-d">
										<li><label for="cdg"><input type="checkbox" id="cdg" name="cdg"> Wifi</label></li>
										<li><label for="cdh"><input type="checkbox" id="cdh" name="cdh"> Parking</label></li>
										<li><label for="cdi"><input type="checkbox" id="cdi" name="cdi"> Airport Shuttle</label></li>
										<li><label for="cdj"><input type="checkbox" id="cdj" name="cdj"> Restaurant</label></li>
										<li><label for="cdk"><input type="checkbox" id="cdk" name="cdk"> Family rooms</label></li>
										<li><label for="cdl"><input type="checkbox" id="cdl" name="cdl"> Pay TV</label></li>
									</ul>
								</div>
								<h3>Hotel Theme</h3>
								<div>
									<p>Hotel Theme</p>
								</div>
								<h3>Accessibility Options</h3>
								<div>
									<p>Accessibility Options</p>
								</div>
								<h3>Payment Options</h3>
								<div>
									<p>Payment Options</p>
								</div>-->
							</div>
							<p class="submit"><button type="submit">filter</button></p>
						</fieldset>
					</form>
				</aside>
			</article>
			