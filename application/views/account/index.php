<h2>Your Account</h2>
<table>
	<tr>
		<td style="width:10em;">Email:</td>
		<td><?php echo $email; ?></td>
	</tr>
	<tr>
		<td>First Name:</td>
		<td><?php echo $first_name; ?></td>
	</tr>
	<tr>
		<td>Last Name:</td>
		<td><?php echo $last_name; ?></td>
	</tr>
	<tr>
		<td>Last Login:</td>
		<td><?php echo date('F j, Y, g:i a', $last_login); ?></td>
	</tr>
</table>

