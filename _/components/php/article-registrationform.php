<article class="registrationform">
	<h2>Registration Form</h2>

	<form action="#" class="registration form-horizontal">
		<fieldset>
			<legend><h3>A Bit About You</h3></legend>

				<section class="row form-group">
					<label class="col col-lg-4 control-label" for="myname">Name</label>
					<div class="controls">
						<input class="col col-lg-4" type="text" name="myname" id="myname" autofocus placeholder="First and Last" required />
					</div> <!-- controls -->
				</section> <!-- row -->
				
				<section class="row form-group">
					<label class="col col-lg-4 control-label" for="companyname">Company Name</label>
					<div class="controls">
						<input class="col col-lg-4"type="text" name="companyname" id="companyname" placeholder="ABC Co." required />
					</div>
				</section>

				<section class="row form-group">
					<label class="col col-lg-4 control-label" for="myemail">Email</label>
					<div class="controls">
						<input class="col col-lg-4" type="email" name="myemail" id="myemail" placeholder="abc@example.com" required />
					</div>
				</section>
				<section class="row form-group">
					<div class="col col-lg-4"></div>
					<label class="checkbox col col-lg-8">
						<input type="checkbox" id="subscribe" name="subscribe" CHECKED value="yes" />
						Would you like to be notified of updates to Nightclub Booth?
					</label>
				</section>

		</fieldset> <!-- personal info -->
		<div class="row"><div class="col col-lg-4"></div>
				<button class="btn btn-primary col col-lg-4" type="submit">Submit</button></div>
	</form>
</article>