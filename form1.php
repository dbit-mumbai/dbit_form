<?php
if(isset($_POST['surname']) && ($_POST['fname']) && ($_POST['fatname']) && ($_POST['mname']) && ($_POST['dob']) && ($_POST['gender']) && ($_POST['nationality']) && ($_POST['dom']) && ($_POST['religion']) && ($_POST['cat']) && ($_POST['num']) && ($_POST['email']) && ($_POST['laexpass']) && ($_POST['textarea']) && ($_POST['city']) && ($_POST['state']) && ($_POST['pincode']) && ($_POST['mobno']))
{
	
 $surname=$_POST['surname'];
 $first_name=$_POST['fname'];
 $father_name=$_POST['fatname'];
 $mother_name=$_POST['mname'];
 $dob=$_POST['dob']; 
 $gender=$_POST['gender'];
 $nationality=$_POST['nationality'];
 $domicile=$_POST['dom'];
 $religion=$_POST['religion'];
 $category=$_POST['cat'];
 $number=$_POST['num'];
 $email=$_POST['email'];
 $last_exam_passed=$_POST['laexpass']; 
 $textarea=$_POST['textarea'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $pincode=$_POST['pincode'];
 $mobno=$_POST['mobno'];

 include "connect.php";
 
$sql="insert into records values ('$surname', '$first_name', '$father_name', '$mother_name', '$dob' ,'$gender', '$nationality', '$domicile','$religion', '$category', '$number' ,'$email', '$last_exam_passed','$textarea', '$city', '$state', '$pincode', '$mobno')";
$r = mysqli_query($con,$sql);
	echo "Submitted";

mysqli_select_db($con,'db3');
$q="select * from records ";
$result = mysqli_query($con, $q);


}
?>
<?php 
$num = mysqli_num_rows($result);
<div align="center">
<table align="center" border="2">
<tr>
	<td>surname</td>
	<td>first_name</td>
	<td>fathers_name</td>
	<td>mothers_name</td>
	<td>dob</td>
	<td>gender</td>
	<td>nationality</td>
	<td>country</td>
	<td>domicile</td>
	<td>religion</td>
	<td>category</td>
	<td>tel No</td>
	<td>Email</td>
	<td>last_exam_passed</td>
	<td>address</td>
	<td>city</td>
	<td>state</td>
	<td>pincode</td>
	<td>contact_no</td>
</tr>
while($row=mysqli_fetch_array($result);)
{
	$ssurname=$row[0];
	$sfirstname=$row[1];
	$sfathername=$row[2];
	$smothername=$row[3];
	$sdob=$row[4];
	$sgender=$row[5];
	$snationality=$row[6];
	$sdomicile=$row[7];
	$sreligion=$row[8];
	$scategory=$row[9];
	$stelno=$row[10];
	$semail=$row[11];
	$slast=$row[13];
	$sadd=$row[14];
	$scity=$row[15];
	$sstate=$row[16];
	$spincode=$row[17];	
	$scontact=$row[18];	
		
		
	echo "<tr>
		<td>$ssurname</td>
		<td>$sfirstname</td>
		<td>$sfathername</td>
		<td>$smothername</td>
		<td>$sdob</td>
		<td>$sgender</td>
		<td>$snationality</td>
		<td>$sdomicile</td>
		<td>$sreligion</td>
		<td>$scategory</td>
		<td>$stelno</td>
		<td>$semail</td>
		<td>$slast</td>
		<td>$sadd</td>
		<td>$scity</td>
		<td>$sstate</td>
		<td>$spincode</td>
		<td>$scontact</td>
		</tr>";

}

</table>
</div>		


mysqli_close($con);

?>

<!DOCTYPE>
<html>
<head>

<link rel="stylesheet" type="text/css" href="form.css">


<script src="form.js">
</script>

</head>

<body>
	

<form name="dbitadm" action="" onsubmit=" return validation()" method="POST">
<div align="center" style="solid black" img src="s5_logo.jpeg" >
	<img src="DBIT_logo.png" alt="DBIT LOGO" align="left" width="150px" height="150px">
	<p class="par">DON BOSCO INSTITUTE OF TECHNOLOGY</p>
	<p class="par">ADMISSION FORM FOR FIRST YEAR ENGINEERING</p>
	<marquee width="100%" bgcolor="yellow" style="font-family:Verdana; font-size:30"><p>Admission through Minority is open now & it's an offline procedure.</p></marquee>
</div>

<table align="center" width="100%">
<tr>
	<h1>PERSONAL DATA</h1>
	<td>1) Name in full</td>
</tr>

<tr>	
	<td>Surname</td>
	<td>:</td>
	<td>
	<input type="text" name="surname" id="surname" style="text-transform:uppercase" autofocus><span>*</span></td>
	<td>First Name</td>
	<td>:</td>
	<td>
	<input type="text" name="fname" style="text-transform:uppercase"><span>*</span></td>
</tr>

<tr>
	<td>Father's Name</td>
	<td>:</td>
	<td>
	<input type="text" name="fatname" style="text-transform:uppercase"><span>*</span>
	<td>Mother's Name</td>
	<td>:</td>
	<td>
	<input type="text" name="mname" style="text-transform:uppercase"><span>*</span></td>
</tr>

<tr>
	<td>2) Date of birth</td>
	<td>:<td>
	<td>
	<input type="date" name="dob"><span>*</span></td>
</tr>

<tr>	
	<td>3) Gender</td>
	<td>:</td>
	<td>
	<input type="radio" name="gender">Male
	<input type="radio" name="gender">Female<span>*</span></td>
</tr>

<tr>
	<td>4) Nationality</td>
	<td>:</td>
	<td>
	<input type="text" name="nationality" style="text-transform:uppercase"><span>*</span></td>
	<td>5) Country</td>
	<td>:</td>
	<td>
	<select name="country">
		<option value="usa" selected>USA</option>
		<option value="aus">AUSTRALIA</option>
		<option value="ger">GERMANY</option>
		<option value="can">CANADA</option>
	</select>(In case of Foreigner)</td>
</tr>	

<tr>
	<td>6) Domicile</td>
	<td>:</td>
	<td>
	<select name="dom">
		<option value="mah" selected>Maharashtra</option>
		<option value="goa">Goa</option>
		<option value="del">Delhi</option>
		<option value="up">Uttar Pradesh</option>
		<option value="utt">Uttarakhand</option>
		<option value="jk">Jammu Kashmir</option>
	</select><span>*</span>(Native State)</td>
	<td>7) Religion</td>
	<td>:</td>
	<td>
	<input type="text" name="religion" style="text-transform:uppercase"><span>*</span></td>
</tr>	
	
<tr>
		<td>8) Category</td>
		<td>:</td>
		<td>
		<input type="text" name="cat" style="text-transform:uppercase"><span>*</span></td>
</tr>
	
<tr>
	<td>9)Tel/Mobile No</td>
	<td>:</td>
	<td>
	<input type="tel" name="num"><span>*</span></td>
	</td>
	<td>10) Email</td>
	<td>:</td>
	<td>
	<input type="email" name="email"><span>*</span></td>
</tr>

<tr>
	<td>11)Background</td>
	<td>:</td>
	<td>
	<input type="radio" name="back">Rural</input>
	<input type="radio" name="back">Non-Rural</input>
</tr>

<tr>
	<td>12)Belongs to NCL</td>
	<td>:</td>
	<td>
	<input type="radio" name="ncl">Yes</input>
	<input type="radio" name="ncl">No</input></td>
</tr>

<tr>
	<td>13) Physically Handicapped</td>
	<td>:</td>
	<td>
	<input type="radio" name="phyhan">Yes</input>
	<input type="radio" name="phyhan">No</input></td>
</tr>

<tr>
	<td>14)Type of Disability</td>
	<td>:</td>
	<td>
	<input type="text" name="tod" style="text-transform:uppercase"></input></td>
	<td>15) Blood Group</td>
	<td>:</td>
	<td>
	<input type="text" name="bg"></input></td>
</tr>

<tr>			
	<td>15)Minority</td>
	<td>:</td>
	<td>
	<input type="radio" name="m">Yes</input>
	<input type="radio" name="m">No</input>(Note:If yes specify)</td>
</tr>

<tr>
	<td>15.1Minority Type</td>
	<td>:</td>
	<td>
	<input type="text" name="mt"></input></td>
</tr>

<tr>
	<td colspan="2">16) Awailed Scholarship last year :</td>
	<td>
	<input type="radio" name="sch">Yes</input>
	<input type="radio" name="sch">No</input></td>
	<td colspan="3">(Note: if yes then at the time of admission provide proof of last year hand book entry.For outsiders sanction order is required)</td>
</tr>

<tr>
	<td>17)Last Exam Passed</td>
	<td>:</td>
	<td>
	<input type="text" name="laexpass" style="text=transform:uppercase"></input><span>*</span></td>
</tr>

<tr>
	<td>18)Upload Photo</td>
	<td>:</td>
	<td>
	<input type="file" name="img"><span>*</span></td>
</tr>
		
</table>

<table  align="center" width="100%">

<tr>
	<h1>Address for Communication</h1><br>
	<h2>Local Address</h2>
</tr>
	
<textarea rows="4" cols="50" name="textarea">
</textarea><span>*</span><br>

<tr>
	<td>City</td>
	<td>:</td>
	<td>
	<input type="text" name="city" style="text-transform:uppercase"><span>*</span></td>
	<td>State</td>
	<td>:</td>
	<td>
	<select name="state">
		<option value="mah" selected>Maharashtra</option>
		<option value="goa">Goa</option>
		<option value="del">Delhi</option>
		<option value="up">Uttar Pradesh</option>
		<option value="utt">Uttarakhand</option>
		<option value="jk">Jammu Kashmir</option>
	</select><span>*</span></td>
	<td>Pincode</td>
	<td>:</td>
	<td>
	<input type="number" name="pincode"><span>*</span></td>
	<td>Contact No</td>
	<td>:<td>
	<td>
	<input type="number" name="mobno"><span>*</span></td>
</tr>	

</table>

<table  align="center" width="100%">

<p style="font-size:15"><u><span>*</span>marked fields are mandatory</u></p>
<tr>
	<td>
	<input type="checkbox" name="checkbox" required><u>I accept the terms and conditions</u></input></td><br>
</tr>	

</table>

<p align="center"><td><button class="button" type="submit">Submit</button></td></p>

</form>



</body>
</html>	
