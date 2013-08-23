			<article id="content" class="cols-b">
				<form  onSubmit="return submitForm();" action="" method="post" class="form-b" name="homefrm1" id="homefrm1">
					<input type="hidden"  name="event" value="start" />
					<fieldset>
						<div id="alert">
								<div class="message"></div>
						</div>
						<legend>Registration Form</legend>
						<p>
							<label for="fba">Registration Type</label>
							
                                                        <select name="usertype" id="usertype" required>
                                                            <option name="user" id="user">User</option>
                                                            <option name="hotel-owner" id="hotel-owner">Hotel-Owner</option>
                                                        </select>
						</p>
                                                <p>
							<label for="fba">First Name</label>
							<input type="text" id="fname" name="fname" required>
						</p>
                                                <p>
							<label for="fba">Last Name</label>
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
							<label for="fbb">Email</label>
							<input type="email" id="email" name="email" required>
						</p>
                                                <p>
							<label for="fbb">Password</label>
							<input type="password" id="password" name="password" required>
						</p>
						
						<p><button type="submit" id="register">Register</button></p>
					</fieldset>
				</form>
				
			</article>
		