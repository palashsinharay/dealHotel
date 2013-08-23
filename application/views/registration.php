 <?php
// $vals = array(
//    'word' => 'Random word',
//    'img_path' => './captcha/',
//    'img_url' => base_url().'/images/captcha/image.axd.jpg',
//    'font_path' => './path/to/fonts/texb.ttf',
//    'img_width' => '150',
//    'img_height' => 30,
//    'expiration' => 7200
//    );
//
//$cap = create_captcha($vals);
//echo "hiiiiiiii ".$cap['image'];
 
//if($emailMsg!='')
//{
//    echo $emailMsg; 
//}

 ?>
<?php if($emailSentVerifySuccess!=NULL) { ?>
<div class="success-message" style="color:#57a200; font-size:14px; font-weight:600; padding-left:190px;">
    <?php echo  $emailSentVerifySuccess; 
      //unset($emailSentVerifySuccess);
    $emailSentVerifySuccess=NULL;
    ?>
</div>                           
<?php } ?>
                            
<?php if($emailSentVerifyFail!=NULL) { ?>
<div class="success-message" style="color:#FF0000; font-size:14px; font-weight:600; padding-left: 190px;"">
    <?php echo  $emailSentVerifyFail; 
   // unset($emailSentVerifyFail);
     $emailSentVerifyFail=NULL;
    ?>
</div>                           
<?php } ?>       

<article id="content" class="cols-b">
                     
                            
				<form  action="<?php echo site_url('welcome/registerUser'); ?>" method="post" class="form-b" name="registeration" id="registeration">
                            	
					<input type="hidden"  name="event" value="start" />
					<fieldset>
						<div id="alert">
						<div class="message"></div>
						</div>
						    <legend>User Registration</legend>
                        
                        <p>                        
							<label for="fbb">User type</label>
                         
						<p class="select-c" style="position: absolute; z-index:-1">
                       
                             <label for="fbb">User type</label>
								
					             <select name="usertype" id="usertype" style="width:300px">
							    <option name="user" id="user">User</option>
                                                            <option name="hotel-owner" id="hotel-owner">Hotel-Owner</option>
						     </select>
                        </p>
                        </p>

                        
						<p style="position: relative; z-index:1; margin-top:55px">
                        
							<label for="fba">First name</label>
							<input type="text" id="fname" name="fname" required>
						</p>
						<p>
							<label for="fbb">Last name</label>
							<input type="text" id="lname" name="lname" required>
						</p>
                        
                                                <p>
							<label for="fba">Address</label>
							<input type="text" id="address" name="address" required>
						</p>
                                                <p>
							<label for="fba">Mobile No</label>
							<input type="text" id="mobileno" name="mobileno" required>
						</p>
                                                <p>
							<label for="fba">Email</label>
							<input type="email" id="email" name="email" required>
						</p>
						<p>
							<label for="fbb">Password</label>
							<input type="password" id="password" name="password" required>
						</p>

<!--                                                <p>
							<label for="fbb">Captcha</label>
                                                        <?php //echo $recaptcha_html; ?>
							
                                                       
						</p>-->
                                                
						  <p><button type="submit" id="register">Register</button></p>
                   
					<span class="loginerror"> <?php if ($this->session->flashdata('error') !== FALSE) { echo $this->session->flashdata('error'); } ?></span>  
                                        </fieldset>
				      </form>
           
         
                        
                        
                
                
				<aside>
					
							<header>
								<h2>User</h2>
							</header>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            
                            <header>
								<h2>Hotel-Owner</h2>
							</header>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						
				</aside>
			</article>
			