<div class="dialog login-prompt span-10 clearfix">
	<form action="<?php echo $config['root']?>/members/login" method="post" >

		<div class="dialog-content span-6 boxmodelfix">
			<h2>Login</h2>
			<h6>Email</h6>
			<input class="span-4 boxmodelfix" type="text" name="email" />
			<h6>Password</h6>
			<input class="span-4 boxmodelfix" type="password" name="password" />

			<button class="button green login span-2">Login</button>
		</div>

		<aside class="span-4 boxmodelfix">
			<h2>Create a new account</h2>

			<p>It's free to join and easy to use. Continue on to create your Steam account and get Steam, the leading digital solution for PC and Mac gamers.</p>

			<button class="button green register span-3">Register for free</button>
		</aside>
	</form>
</div>