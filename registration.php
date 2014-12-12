<?php include 'includes/top.php'; ?>

	<div id="middle">
	
		
		<main>
		
			<div id="breadcrumb">
				<p>Home > Register and Sign-in</p>
			</div><!-- END breadcrumb -->
		
		<div id="content-wide">
		
		
<!-- 
			<div class="login-head">
				<h2 class="sign-in-head"><span class="normal-weight">Register or Sign in here:</span> <span class="Kit"></span></h2>
			</div> 
 -->
			<!-- END head-group -->	
		
		</div> 	<!-- END content-wide -->
		
<!-- BEGIN NEW USER REGISTRATION -->		
<form id="new-user-registration" action="product.php">
	<fieldset>

		<!-- <legend id="new-user-legend"></legend> -->

		<h4>Create <span class="inline-bold">New User Account</span> Here. A confirmation email will be sent to you.</h4>
 
			<ol>
				<li>
				<label for="new-user-name">Choose a User Name:</label>
				<input type="text" size="25" id="new-user-name" name="new-user-name" placeholder="Enter User Name" />
				</li>
	
				<li>
				<label for="new-user-password">Choose a Password:</label>
				<input type="text" size="16" id="new-user-password" name="new-user-password" placeholder="Min 8 characters" />
				</li>
				
				<li>
				<label for="new-user-password-retype">Re-type password:</label>
				<input type="text" size="16" id="new-user-password-retype" name="new-user-password-retype" placeholder="Re-type Password" />
				</li>
	
				<li>
				<label for="new-user-email">Enter your email:</label>
				<input type="email" size="25" id="new-user-email" name="new-user-email" placeholder="Enter email address" />
				</li>
				
				<li>
				<label for="submit-new-user-btn" id="submit-new-user-btn"> </label>
				<button id="submit-new-user-btn">Register</button>	
				</li>
			</ol>
	</fieldset>
</form> <!-- END FORM new-user-registration -->

<!-- END NEW USER REGISTRATION -->	
	
<!-- BEGIN RETURNING USER REGISTRATION -->	
<div id="returning-area">	
<form id="returning-user-registration" action="">
	<fieldset id="fieldset-returning">

		<!-- <legend id="returning-user-legend"></legend> -->

		<h4><span class="inline-bold">Returning Users </span>sign in here.</h4>
 
			<ol>
				<li>
				<label for="returning-user-name">User Name:</label>
				<input type="text" size="42" id="returning-user-name" name="returning-user-name" placeholder="Enter User Name" />
				</li>
	
				<li>
				<label for="returning-user-password">Password:</label>
				<input type="text" size="42" id="returning-user-password" name="returning-user-password" placeholder="Password" />
				</li>
				
				<li>
				<a id="forgot-password"href="javascript:;">Forgot password?</a>
				</li>
				
				
				<li>
				<label for="submit-returning-user-btn" id="submit-returning-user-btn"> </label>
				<button id="submit-returning-user-btn">Sign In</button>	
				</li>
			</ol>
	</fieldset>
</form> <!-- END FORM returning-user-registration -->

<div id="take-me-to-area">
<p class="take-me-to-btn">
<a href="#">Take me to my SunCalc Configuration</a>
</p>


<p class="take-me-to-btn">
<a href="cart-1.php">Take me to my Order</a>
</p>

</div>

</div> <!-- END returning-area -->
<!-- END RETURNING USER REGISTRATION -->	


		

		</main> <!-- END main -->
		

		
	</div> <!-- END middle -->


<?php include 'includes/footer.php'; ?>
	