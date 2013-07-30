<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Visual Automation Registration</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
</head>
<body>
<script type="text/javascript">
	function do_over() {
		alert('hey');
		window.location = "/register";
	}
</script>

<div id="container">
	<h1>Registraiton Confirmation</h1>
	<div id="body">

		<?php echo form_open('register/submit'); ?>
			<p>
				<label for="name">Name (First and Last name)</label><br />
				<?php echo set_value('first_name'); ?>  <?php echo set_value('last_name'); ?><br />
			</p>

			<p>
				<label for="email">Email *</label><br />
				<?php echo set_value('email'); ?><br />
			</p>

			<p>
				<label for="company">Company</label><br />
				<?php echo set_value('company'); ?><br />
			</p>

			<p>
				<label for="address">Address</label><br />
				<?php echo set_value('address_1'); ?><br />
				<?php echo set_value('address_2'); ?><br />
				<?php echo set_value('city'); ?><br />
				<?php echo set_value('state'); ?><br />
				<?php echo set_value('zip'); ?><br />
			</p>

			<p>
				<label for="website">Website</label><br />
				<?php echo set_value('website'); ?><br />
			</p>

			<p>
				<label for="phone">Telephone</label><br />
				<?php echo set_value('phone'); ?><br />
			</p>

			<p>
				<label for="source">How did you find out about us?</label><br />
				<?php echo set_value('source'); ?><br />
			</p>

			<p>
				<label for="mac_pc">Mac or PC</label><br />
				<?php echo set_value('mac_pc'); ?><br />
			</p>

			<p>
				<input type="submit" value="Save My Info" />
				<?php
					$js = 'onClick="javascript:do_over();"';
					echo form_button('btn_do_over', 'Do Over', $js);
				?>
			</p>

		</form>
	</div>
</div>

</body>
</html>