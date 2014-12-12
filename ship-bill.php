<?php include 'includes/top.php'; ?>

	<div id="middle">
	
		
		<main>
		
			<div id="breadcrumb">
				<p>Home > Shipping and Billing</p>
			</div><!-- END breadcrumb -->
		
		<div id="content-wide">


		<div class="continue">
			<p class="continue-btn-area">
				<a href="cart-1.php">Continue</a>
			</p>
		</div> <!-- END continue -->


		<div id="user-account">
			<h4>Account for:</h4>
				<p>Jennifer Thanopolos</p>
				<p>1481 Nakoma Road</p>
				<p>Madison, WI 53711</p>
				<p>608.468.3246</p>
				<p>Customer Number: 2-348276-18971</p>
				<button id="edit-acct">Edit</button>
		</div> <!-- END user-account -->
		
		
		<div id="confirm-billship-info">
		<h4>Please confirm your current billing and shipping information:</h4>
		</div> <!-- END confirm-billship-info -->
		

		</div> 	<!-- END content-wide -->
		
		
		

<!-- BEGIN BILLING-SHIPPING -->	
<div id="bill-ship-area">	

	<form class="billing-area" action="">
		<fieldset id="billing">
			<!-- <legend id="billing-legend"></legend> -->
			<h4><span class="inline-bold">Billing Information:</span></h4>
 
				<ol>
					<li>
					<label for="billing-name">Your name as it appears on your credit card</label>
					<input type="text" size="40" id="billing-name" name="billing-name" placeholder="Name as it appears on your credit card" />
					</li>
	
					<li>
					<label for="billing-address">Your billing address</label>
					<input type="text" size="40" id="billing-address" name="billing-address" placeholder="Credit Card billing address" />
					</li>
				
					<li>
					<label for="billing-address-2">Billing address, line 2</label>
					<input type="text" size="40" id="billing-address-2" name="billing-address-2" placeholder="Billing address line 2, if needed" />
					</li>
				
					<li>
					<label id="city-label"for="billing-city">City</label>
					<input type="text" size="40" id="billing-city" name="billing-city" placeholder="City" />
					</li>
				
					<li>
					<label for="billing-state">State</label>
					<input type="text" size="40" id="billing-state" name="billing-state" placeholder="State" />
					</li>

					<li>
					<label for="billing-zip">Zip Code</label>
					<input type="number" size="40" id="billing-zip" name="billing-zip" placeholder="Zip Code" />
					</li>
				
					<li>
					<label for="billing-phone">Your Phone Number</label>
					<input type="tel" size="40" id="billing-phone" name="billing-phone" placeholder="Your phone number" />
					</li>
					
					<li>
					<label for="billing-email">Your Email Address</label>
					<input type="email" size="40" id="billing-email" name="billing-email" placeholder="Your email address" />
					</li>
				
<!-- 			Select Payment Method Below       -->	
				
		<div id="bill-form-select-payment">
			<ul>
				<li>
				<label>Select Payment Method:</label>
				</li>
				<li><form class="shipping"><input type="radio"> Visa</form></li>
				<li><form class="shipping"><input type="radio"> AMEX</form></li>
				<li><form class="shipping"><input type="radio"> Mastercard</form></li>
				<li><form class="shipping"><input type="radio"> Other</form></li>
			</ul>
		</div>
				
				
<!-- 			SUBMIT AND PROFILE BUTTONS BELOW       -->	
				
					<li>
					<label for="submit-billing-info-btn" id="submit-billing-info-btn"> </label>
					<button id="submit-billing-info-btn">Submit</button>	
					</li>
					
					<li>
					<label for="switch-bill-profile-btn" id="switch-bill-profile-btn"> </label>
					<button id="switch-bill-profile-btn">Switch Billing Profile</button>	
					</li>
					
					<li>
					<label for="create-new-bill-profile-btn" id="create-new-bill-profile-btn"> </label>
					<button id="create-new-bill-profile-btn">Create New Billing Profile</button>	
					</li>
				</ol>
		</fieldset>
	</form> <!-- END billing-area -->
	
	
		<form class="billing-area" action="">
		<fieldset id="billing">
			<!-- <legend id="billing-legend"></legend> -->
			<h4><span class="inline-bold">Shipping Information:</span></h4>
 
				<ol>
					<li>
					<label for="shipping-name">Name of Recipient</label>
					<input type="text" size="40" id="shipping-name" name="shipping-name" placeholder="Name of recipient" />
					</li>
	
					<li>
					<label for="shipping-address">Ship-to address</label>
					<input type="text" size="40" id="shipping-address" name="shipping-address" placeholder="Shipping Address" />
					</li>
				
					<li>
					<label for="shipping-address-2">Ship-to address, line 2</label>
					<input type="text" size="40" id="shipping-address-2" name="shipping-address-2" placeholder="shipping-address-2, if needed" />
					</li>
				
					<li>
					<label id="city-label"for="shipping-city">City</label>
					<input type="text" size="40" id="shipping-city" name="shipping-city" placeholder="City" />
					</li>
				
					<li>
					<label for="shipping-state">State</label>
					<input type="text" size="40" id="shipping-state" name="shipping-state" placeholder="State" />
					</li>

					<li>
					<label for="shipping-zip">Zip Code</label>
					<input type="number" size="40" id="shipping-zip" name="shipping-zip" placeholder="Zip Code" />
					</li>
				
					<li>
					<label for="shipping-phone">Recipient Phone Number</label>
					<input type="tel" size="40" id="shipping-phone" name="shipping-phone" placeholder="Recipient phone number" />
					</li>
				
					<li>
					<label for="shipping-phone-ext">Extension, optional</label>
					<input type="tel" size="40" id="shipping-phone-ext" name="shipping-phone-ext" placeholder="Extension, optional" />
					</li>
				
					<li>
					<label for="shipping-email">Recipient Email</label>
					<input type="email" size="40" id="shipping-email" name="shipping-email" placeholder="Recipient Email" />
					</li>
					
					<li>
					<label for="special-instructions">Special Instructions</label>
					<textarea name="special-instructions" id="special-instructions"></textarea>
					</li>
					
					<li>
					<!-- <label for="default-shipping"></label> -->
					<input type="checkbox" class="shipping-checkbox" id="default-shipping" name="default-shipping" /> Default shipping address
					</li>
					
					<li>
					<!-- <label for="shipment-a-gift"></label> -->
					<input type="checkbox" class="shipping-checkbox" id="shipment-a-gift" name="shipment-a-gift" /> This shipment is a gift
					</li>
					
<!-- 					BEGIN SHIPPING PROFILE BUTTONS -->
					
				
					<li>
					<label for="submit-returning-user-btn" id="submit-returning-user-btn"> </label>
					<button id="submit-returning-user-btn">Submit</button>	
					</li>
					
					<li>
					<label for="shipping-profile-new-btn" id="shipping-profile-new-btn"> </label>
					<button id="shipping-profile-new-btn">Create New Shipping Profile</button>	
					</li>
					
					<li>
					<label for="switch-shipping-profile-btn" id="switch-shipping-profile-btn"> </label>
					<button id="switch-shipping-profile-btn">Switch Shipping Profile</button>	
					</li>
					
				</ol>
		</fieldset>
	</form> <!-- END billing-area -->


</div> <!-- BEGIN BILLING-SHIPPING -->	






		

		</main> <!-- END main -->
		

		
	</div> <!-- END middle -->


<?php include 'includes/footer.php'; ?>
	