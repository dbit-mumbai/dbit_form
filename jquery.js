<script src="../lib/jquery.js"></script>
	<script src="../dist/jquery.validate.js"></script>
<script>
$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

$().ready(function() {
  
  
   	$("#form").validate({
			rules: {
			surname :"required",
			fname:"required",
			fatname :"required",	
			mname:"required",
			'gender':{required :true},
			dob :"required",
			phoneno :{
			required :true,
			digits : true
			},
			nationality :"required",
			dom :"required",
			religion:"required",
			cat :"required",
			num :"required",
			email:{
			required:true,
			email:true,
			},
			laexpass :"required",
			img :"required",
			textarea :"required",
			city :"required",
			state :"required",
			pincode :"required",
			mobno :"required",
			},
			messages:{
			surname :" Surname Cannot be Blank",	
			fname: "Firstname  Cannot be blank",
			fatname : "Father's Name Cannot be Blank",
			mname : "Mother's Name Cannot be Blank",
			gender :"Please Select gender",
			dob :"DOB cannot be Empty",
			phoneno:{
			required :"Phoneno Cannot be Empty",
			digits :"Please Enter Only digits"
			},
			nationality :"Nationality Cannot Blank",
			dom :"Domicile Is Required",
			religion :"Religion Cannot Be Blank",
			cat :"Category Cannot be Blank",
			num :"Number Cannot Be Blank",
			email:{
			required:"Email Cannot be Empty",
			email:"Enter Valid email address",
			},
			laexpass :"Please Enter Your Last Exam Passed",
			img :" Upload Profile photo",
			textarea :"Address Cannot Be Blank",
			city : "City Cannot Be Blank",
			state :"State Cannot Be Blank",
			pincode :"Pincode Cannot Be Blank",
			mobno :"Mobile No Cannot Be Blank",
			}
			});
});
</script>