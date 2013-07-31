<?php
	$os = array(1=> 'Mac', 2=> 'PC');
	$referral = array('', 1=> 'Web Search', 2=> 'Website', 3=> 'Word of mouth', 4=> 'Voice from inside my head');
	$states = state_array();
?>
<script type="text/javascript">
function do_over() {
	document.getElementById("confirmation").action = "/register/do_over";
	document.getElementById("confirmation").submit();
}
</script>
	
	<h1>Registration Confirmation</h1>
	<p>
		Please take a moment to make sure your registration information below is correct.
	</p>
	<?php echo form_open('register/submit', array('id'=> 'confirmation'), $hidden); ?>
	<p>
		<label for="name">First and Last name</label><br />
		<?php echo set_value('first_name'); ?>  <?php echo set_value('last_name'); ?><br />
	</p>

		<p>
			<label for="email">Email</label><br />
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
			<?php echo $states[set_value('state')]; ?><br />
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
			<label for="referral">How did you find out about us?</label><br />
			<?php echo $referral[set_value('referral')]; ?><br />
		</p>

		<p>
			<label for="operating_system">Operating System</label><br />
			<?php echo $os[set_value('operating_system')]; ?><br />
		</p>

		<p>
			<input type="submit" value="Save My Info" />
			<?php
				$js = 'onClick="javascript:do_over();"';
				echo form_button('btn_do_over', 'Do Over', $js);
			?>
		</p>

	</form>
