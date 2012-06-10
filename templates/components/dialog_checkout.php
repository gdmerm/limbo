<div class="dialog checkout span-10 clearfix">
	<div class="dialog-content step-1 span-10 boxmodelfix">
 		<img src="<?php echo $config['assets'] ?>/images/preloader.gif" />
		<div class="wait-message">Please wait...</div>
	</div>

	<div class="dialog-content step-2 span-10 boxmodelfix">
		<p>
			<div>You are about to complete a payment from LIMBO Digital Stores Online ltd.</div>
			<div>We are going to charge your credit card with: <span class="amount"></span></div>

			<hr style="margin:20px 0"/>

			<div class="credit-cart-details">
				<p>We have the following payment details for you</p>
				<div class="visa">
					<div class="field">
						<label>Credit card number:</label>
						<span style="color:#ffffff">XXX-XXXX-XXXX-3018</span>
					</div>

					<div class="field">
						<label>Expiration:</label>
						<span style="color:#ffffff">09/15</span>
					</div>

					<div class="field">
						<label>Card Holder Name:</label>
						<span style="color:#ffffff">LIMBO Test Account</span>
					</div>
				</div>

				<a class="button-pay" href="#"><div class="button-checkout">Complete Payment</div></a>
			</div>
		</p>
	</div>

	<div class="dialog-content step-3 span-10 boxmodelfix">
		<p>
			Your payment was completed successfully. Thank you!

			<a style="position:static;margin-top:10px;display:inline-block;float:none;" class="button-continue" href="<?php echo $config['root'] ?>">Continue browsing</a>
		</p>
	</div>
</div>