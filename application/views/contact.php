<?php if($emailSentContactSuccess!=NULL) { ?>
<div class="success-message" style="color:#57a200; font-size:14px; font-weight:600; padding-left:190px;">
    <?php echo  $emailSentContactSuccess; 
      //unset($emailSentVerifySuccess);
    $emailSentContactSuccess=NULL;
    ?>
</div>                           
<?php } ?>
                            
<?php if($emailSentContactFail!=NULL) { ?>
<div class="success-message" style="color:#FF0000; font-size:14px; font-weight:600; padding-left: 190px;"">
    <?php echo  $emailSentContactFail; 
   // unset($emailSentVerifyFail);
     $emailSentContactFail=NULL;
    ?>
</div>                           
<?php } ?> 		
<article id="content" class="cols-b">
				<form  onSubmit="return submitForm();" action="<?php echo site_url('welcome/contactEmail'); ?>" method="post" class="form-b" name="homefrm1" id="homefrm1">
					<input type="hidden"  name="event" value="start" />
					<fieldset>
						<div id="alert">
								<div class="message"></div>
						</div>
						<legend>Send Us a Message</legend>
						<p>
							<label for="fba">Your name</label>
							<input type="text" id="fba" name="name" required>
						</p>
						<p>
							<label for="fbb">Your email</label>
							<input type="email" id="fbb" name="email" required>
						</p>
						<p>
							<label for="fbc">Your message</label>
							<textarea id="fbc" name="msg" required></textarea>
						</p>
						<p><button type="submit">Submit</button></p>
					</fieldset>
				</form>
				<aside>
					<h3>Location Map</h3>
					<figure class="map-a"><img src="<?php echo base_url('temp/622x318.gif');?>"  alt="Placeholder" width="622" height="318"></figure>
				</aside>
			</article>
		