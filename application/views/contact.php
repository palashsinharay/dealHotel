			<article id="content" class="cols-b">
				<form  onSubmit="return submitForm();" action="" method="post" class="form-b" name="homefrm1" id="homefrm1">
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
		