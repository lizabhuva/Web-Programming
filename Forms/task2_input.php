<!DOCTYPE html>
<html>
<head>
  <style>
       input,select
	   {
		    border-color:brown;
	   }
	   textarea
	   {
		    border-width:2px;
	   }
	   .tex
	   {
			border:2px solid brown;
	   }
	   #submit
	   {
		   border-radius:10px;
	   }
  </style>
</head>
<body>
<form action="task2_result.php" method="get">
<table cellspacing="5" cellpadding="5" border="0" bgcolor="#f3e5dc" align="center">
	<tr>
		<td colspan="2" align="center"><h1>Registration Form</h1></td>
	</tr>
    <tr>
	    <td><label>Username:</label></td>
		<td><input type="text" name="unm" id="unm"></td>
	</tr>
	
	<tr>
	    <td><label>Password:</label></td>
		<td><input type="password" name="pwd" id="pwd"></td>
	</tr>
     
	<tr>
	    <td><label>Name:</label></td>
		<td><input type="text" name="nm" id="nm" size="50"></td>
	</tr>
	
	<tr>
	    <td><label>Address:</label></td>
		<td><input type="text" name="add" id="add" size="50"></td>
	</tr>
	
	<tr>
	    <td><label>Country:</label></td>
		<td><select name="country">
			<option value="">(Please select a country)</option>
			<option value="India">India</option>
			<option value="America">America</option>
			<option value="Australia">Australia</option>
			<option value="Europe">Europe</option>
			</select>
		</td>
	</tr>
	
	<tr>
	    <td><label>ZIP Code:</label></td>
		<td><input type="text" name="code" id="code" pattern="[0-9]{6}"></td>
	</tr>
	
	<tr>
	    <td><label>Email:</label></td>
		<td><input type="email" name="email" id="email" size="50"></td>
	</tr>
	
	<tr>
	    <td><label>Sex:</label></td>
		<td><input type="radio" name="sex" id="male" checked value="Male"><label class="tex">Male</label>
		    <input type="radio" name="sex" id="female" value="Female"><label class="tex">Female</label></td>
	</tr>
	
	<tr>
	    <td><label>Language:</label></td>
		<td><input type="checkbox" name="eng" id="eng" checked value="English"><label class="tex">English</label>
		    <input type="checkbox" name="noneng" id="noneng" value="Non-English"><label class="tex">Non English</label></td>
	</tr>
	
	<tr>
	    <td><label>About:</label></td>
		<td><textarea name="about" cols="50" rows="7"></textarea></td>
	</tr>
	
	<tr>
	<td colspan="2" align="center"><input type="submit" name="submit" id ="submit"></td>
	</tr>
</table>
</form>
</body>
</html>