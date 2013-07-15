<?php 

//echo "<pre>";
//print_r($pageDetail);
//echo "</pre>";


?> 

			<section id="content" class="cols-e">
				<div class="news-e">
					<article>
						<header>
							<figure>
<?php if($pageDetail->file_url != NULL):?>
    <img src="<?php echo base_url('assets/uploads/files/'.$pageDetail->file_url);?>" alt="Placeholder" width="669" height="272"/>
<?php else:?>
    <img src="<?php echo base_url('temp/693x283.gif');?>" alt="Placeholder" width="669" height="272" />
<?php endif;?>                                                            
                                                         </figure>
							<h2><?php echo $pageDetail->PTitle;?></h2>
						</header>
						<p><?php echo $pageDetail->PContent;?></p>
					</article>
				
					
				</div>
				<aside>
					<nav>
						<h3>Categories</h3>
						<ul class="list-e">
							<li><a href="./">Graphic Design</a></li>
							<li><a href="./">Web Design &amp; Development</a></li>
							<li><a href="./">Photography</a></li>
							<li><a href="./">Custom Illustrations</a></li>
							<li><a href="./">Videography</a></li>
							<li><a href="./">Search Engine Optimization</a></li>
							<li><a href="./">Print Design</a></li>
						</ul>
					</nav>
					<div class="tabs-b">
						<ul>
							<li>Popular</li>     
							<li>Recent</li>  
							<li class="a">Chat</li>
						</ul>
						<div>
							<div class="news-f">
								<article>
									<figure><img src="<?php echo base_url('temp/128x102.gif');?>" alt="Placeholder" width="52" height="50"></figure>
									<p>Nemo enim ipsam vol temtur magni dolores</p>
									<p class="date">September 7 2012</p>
								</article>
								<article>
									<figure><img src="<?php echo base_url('temp/128x102(1).gif');?>" alt="Placeholder" width="52" height="50"></figure>
									<p>Nemo enim ipsam vol temtur magni dolores</p>
									<p class="date">September 7 2012</p>
								</article>
								<article>
									<figure><img src="<?php echo base_url('temp/128x102(2).gif');?>" alt="Placeholder" width="52" height="50"></figure>
									<p>Nemo enim ipsam vol temtur magni dolores</p>
									<p class="date">September 7 2012</p>
								</article>
							</div>
							<div class="news-f">
								<article>
									<figure><img src="<?php echo base_url('temp/128x102(3).gif');?>" alt="Placeholder" width="52" height="50"></figure>
									<p>2. Nemo enim ipsam vol temtur magni dolores</p>
									<p class="date">September 7 2012</p>
								</article>
								<article>
									<figure><img src="<?php echo base_url('temp/128x102(4).gif');?>" alt="Placeholder" width="52" height="50"></figure>
									<p>Nemo enim ipsam vol temtur magni dolores</p>
									<p class="date">September 7 2012</p>
								</article>
								<article>
									<figure><img src="<?php echo base_url('temp/128x102(5).gif');?>" alt="Placeholder" width="52" height="50"></figure>
									<p>Nemo enim ipsam vol temtur magni dolores</p>
									<p class="date">September 7 2012</p>
								</article>
							</div>
							<div class="news-f">
								<article>
									<figure><img src="<?php echo base_url('temp/128x102(4).gif');?>" alt="Placeholder" width="52" height="50"></figure>
									<p>3. Nemo enim ipsam vol temtur magni dolores</p>
									<p class="date">September 7 2012</p>
								</article>
								<article>
									<figure><img src="<?php echo base_url('temp/128x102(2).gif');?>" alt="Placeholder" width="52" height="50"></figure>
									<p>Nemo enim ipsam vol temtur magni dolores</p>
									<p class="date">September 7 2012</p>
								</article>
								<article>
									<figure><img src="<?php echo base_url('temp/128x102(3).gif');?>" alt="Placeholder" width="52" height="50"></figure>
									<p>Nemo enim ipsam vol temtur magni dolores</p>
									<p class="date">September 7 2012</p>
								</article>
							</div>
						</div>
					</div>
					<h3>Twitter</h3>
					<div class="tweets-a"></div>
					<div class="accordion-b">
						<h3>Flyout Content 1</h3>
						<div>
							<p>Fugiat dapibus, tellus ac cursus commodo, mauris sit condim eser ntum nibh, uum a justo vitaes amet risus amets un. </p>
						</div>
						<h3>Flyout Content 2</h3>
						<div>
							<p>Fugiat dapibus, tellus ac cursus commodo, mauris sit condim eser ntum nibh, uum a justo vitaes amet risus amets un. </p>
						</div>
						<h3>Flyout Content 3</h3>
						<div>
							<p>Fugiat dapibus, tellus ac cursus commodo, mauris sit condim eser ntum nibh, uum a justo vitaes amet risus amets un. </p>
						</div>
					</div>
				</aside>
			</section>
