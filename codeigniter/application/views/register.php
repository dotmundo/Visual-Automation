<?php echo validation_errors(); ?>
<?php echo form_open('register/signup'); ?>
<p>
	<label for="name">First and Last name (required)</label><br />
	<input name="first_name" type="text" value="<?php echo set_value('first_name'); ?>" /> <input name="last_name" type="text" value="<?php echo set_value('last_name'); ?>" /><br />
</p>

<p>
	<label for="email">Email (required)</label><br />
	<input name="email" type="text" value="<?php echo set_value('email'); ?>" /><br />
</p>

<p>
	<label for="company">Company</label><br />
	<input name="company" type="text"  value="<?php echo set_value('company'); ?>" /><br />
</p>

<p>
	<div class="address_block">
		<label>Address</label><br />
			<table>
				<tr>
					<td>
						Address 1
					</td>
					<td>
						<input name="address_1" type="text" value="<?php echo set_value('address_1'); ?>" />
					</td>
				</tr>
				<tr>
					<td>
						Address 2
					</td>
					<td>
						<input name="address_2" type="text" value="<?php echo set_value('address_2'); ?>" />
					</td>
				</tr>
				<tr>
					<td>
						City
					</td>
					<td>
						<input name="city" type="text" value="<?php echo set_value('city'); ?>" />
					</td>
				</tr>
				<tr>
					<td>
						State
					</td>
					<td>
						<?php echo state_dropdown('state'); ?>
					</td>
				</tr>
				<tr>
					<td>
						Zip
					</td>
					<td>
						<input name="zip" type="text" value="<?php echo set_value('zip'); ?>" />
					</td>
				</tr>
			</table>
		</div>
	</p>

	<p>
		<label for="website">Website</label><br />
		<input name="website" type="text" value="<?php echo set_value('website'); ?>"  /><br />
	</p>

	<p>
		<label for="phone">Telephone</label><br />
		<input name="phone" type="text" value="<?php echo set_value('phone'); ?>"  /><br />
	</p>

	<p>
		<label for="referral">How did you find out about us?</label><br />
		<select name="referral">
			<option value='' <?php echo set_select('referral', '', TRUE); ?> >-</option>
			<option value=1 <?php echo set_select('referral', '1'); ?> >Web Search</option>
			<option value=2 <?php echo set_select('referral', '2'); ?> >Website</option>
			<option value=3 <?php echo set_select('referral', '3'); ?> >Word of mouth</option>
			<option value=4 <?php echo set_select('referral', '4'); ?> >Voice from inside my head</option>
		</select>
	</p>

	<p>
		<label for="operating_system">Operating System (required)</label><br />
		<select name="operating_system">
			<option value='' <?php echo set_select('operating_system', '', TRUE); ?> >-</option>
			<option value=1 <?php echo set_select('operating_system', '1'); ?> >Mac</option>
			<option value=2 <?php echo set_select('operating_system', '2'); ?> >PC</option>
		</select>
	</p>

	<p>
		<input type="submit" value="Yes, Register Me!" />
		<input type="reset" />
	</p>

</form>