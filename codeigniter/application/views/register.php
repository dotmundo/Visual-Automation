<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Visual Automation Registration</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
</head>
<body>

<div id="container">
	<h1>Welcome to Visual Automation Registration!</h1>
	<div id="body">

		<?php echo validation_errors(); ?>
		<?php echo form_open('register/signup'); ?>
			<p>
				<label for="name">Name (First and Last name) *</label><br />
				<input name="first_name" type="text" value="<?php echo set_value('first_name'); ?>" /> <input name="last_name" type="text" value="<?php echo set_value('last_name'); ?>" /><br />
			</p>

			<p>
				<label for="email">Email *</label><br />
				<input name="email" type="text" value="<?php echo set_value('email'); ?>" /><br />
			</p>

			<p>
				<label for="company">Company</label><br />
				<input name="company" type="text" /><br />
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
							<input name="address_1" type="text" />
						</td>
					</tr>
					<tr>
						<td>
							Address 2
						</td>
						<td>
							<input name="address_2" type="text" />
						</td>
					</tr>
					<tr>
						<td>
							City
						</td>
						<td>
							<input name="city" type="text" />
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
							<input name="zip" type="text" />
						</td>
					</tr>

				</table>
				</div>
			</p>

			<p>
				<label for="website">Website</label><br />
				<input name="website" type="text" /><br />
			</p>

			<p>
				<label for="phone">Telephone</label><br />
				<input name="phone" type="text" /><br />
			</p>

			<p>
				<label for="source">How did you find out about us?</label><br />
				<select name="source">
					web search, advertisement, website, word-of-mouth, voice from inside my head)
					<option value=>-</option>
					<option value=1>Web Search</option>
					<option value=2>Website</option>
					<option value=3>Word of mouth</option>
					<option value=4>Voice from inside my head</option>
				</select>
			</p>

			<p>
				<label for="mac_pc">Mac or PC *</label><br />
				<select name="mac_pc">
					<option value=>-</option>
					<option value=1>Mac</option>
					<option value=2>PC</option>
				</select>
			</p>

			<p>
				<input type="submit" value="Yes, Register Me!" />
				<input type="reset" />
			</p>

		</form>
	</div>
</div>

</body>
</html>