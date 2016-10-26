


// Name Field validation
function validatefName()
	{
		var letters = /^[A-Za-z]+$/; 
		var nam = document.getElementById("idfiname").value;
		// console.log(nam);
		document.getElementById("iderrname").innerHTML = "";
		if (nam == null || nam == "")
		 {
		 	console.log(nam);
	 		var d = document.getElementById("idfname");
				d.className += " has-error";
				document.getElementById("iderrname").innerHTML = "Please Enter First Name";
		 }
		 else if (nam.match(letters)) 
		{
			var el = document.getElementById("idfname");

			el.classList.remove("has-error");

			return true;
		}
		else
		{
			var d = document.getElementById("idfname");
				d.className += " has-error";
			document.getElementById("iderrname").innerHTML = "Enter valid First name.";
		}
	}


//validation last name

function validatelName()
	{
		var letters = /^[A-Za-z]+$/; 
		var nam = document.getElementById("idliname").value;
		// console.log(nam);
		document.getElementById("iderrlname").innerHTML = "";
		if (nam == null || nam == "")
		 {
		 	console.log(nam);
	 		var d = document.getElementById("idlname");
				d.className += " has-error";
				document.getElementById("iderrlname").innerHTML = "Please Enter Last Name";
		 }
		 else if (nam.match(letters)) 
		{
			var el = document.getElementById("idlname");

			el.classList.remove("has-error");

			return true;
		}
		else
		{
			var d = document.getElementById("idlname");
				d.className += " has-error";
			document.getElementById("iderrlname").innerHTML = "Enter valid last name.";
		}
	}

// Father's name validation

function validatefaName()
	{
		var letters = /^[A-Za-z]+$/; 
		var nam = document.getElementById("idfainame").value;
		// console.log(nam);
		document.getElementById("iderrfaname").innerHTML = "";
		if (nam == null || nam == "")
		 {
		 	console.log(nam);
	 		var d = document.getElementById("idfaname");
				d.className += " has-error";
				document.getElementById("iderrfaname").innerHTML = "Please Enter Father's Name";
		 }
		 else if (nam.match(letters)) 
		{
			var el = document.getElementById("idfaname");

			el.classList.remove("has-error");

			return true;
		}
		else
		{
			var d = document.getElementById("idfaname");
				d.className += " has-error";
			document.getElementById("iderrfaname").innerHTML = "Enter valid Father's name.";
		}
	}

// Validate Mother's Name

function validatemoName()
	{
		var letters = /^[A-Za-z]+$/; 
		var nam = document.getElementById("idmoiname").value;
		// console.log(nam);
		document.getElementById("iderrmoname").innerHTML = "";
		if (nam == null || nam == "")
		 {
		 	console.log(nam);
	 		var d = document.getElementById("idmoname");
				d.className += " has-error";
				document.getElementById("iderrmoname").innerHTML = "Please Enter Mother's Name";
		 }
		 else if (nam.match(letters)) 
		{
			var el = document.getElementById("idmoname");

			el.classList.remove("has-error");

			return true;
		}
		else
		{
			var d = document.getElementById("idmoname");
				d.className += " has-error";
			document.getElementById("iderrmoname").innerHTML = "Enter valid Mother's name.";
		}
	}

// Validate Date
function validateDate()
	
	{
		var datei = document.getElementById("date").value;
		document.getElementById("iderrdate").innerHTML = "";
		if(datei == "" || datei == null)
		{
			var d = document.getElementById("iddate");
				d.className += " has-error";
				document.getElementById("iderrdate").innerHTML = "Please Enter Date Of Birth";
		}
		else
		{
			var el = document.getElementById("iddate");

			el.classList.remove("has-error");

			return true;
		}
	}

// validate state
function validateState()
	{
		var letters = /^[A-Za-z]+$/; 
		var nam = document.getElementById("idfstate").value;
		// console.log(nam);
		document.getElementById("iderrstate").innerHTML = "";
		if (nam == null || nam == "")
		 {
		 	console.log(nam);
	 		var d = document.getElementById("idstate");
				d.className += " has-error";
				document.getElementById("iderrstate").innerHTML = "Please Enter State";
		 }
		 else if (nam.match(letters)) 
		{
			var el = document.getElementById("idstate");

			el.classList.remove("has-error");

			return true;
		}
		else
		{
			var d = document.getElementById("idstate");
				d.className += " has-error";
			document.getElementById("iderrstate").innerHTML = "Enter valid State.";
		}
	}

// Validate Distric
function validateDistric()
	{
		var letters = /^[A-Za-z]+$/; 
		var nam = document.getElementById("idfdistric").value;
		// console.log(nam);
		document.getElementById("iderrdistric").innerHTML = "";
		if (nam == null || nam == "")
		 {
		 	console.log(nam);
	 		var d = document.getElementById("iddistric");
				d.className += " has-error";
				document.getElementById("iderrdistric").innerHTML = "Please Enter Distric";
		 }
		 else if (nam.match(letters)) 
		{
			var el = document.getElementById("iddistric");

			el.classList.remove("has-error");

			return true;
		}
		else
		{
			var d = document.getElementById("iddistric");
				d.className += " has-error";
			document.getElementById("iderrdistric").innerHTML = "Enter valid Distric.";
		}
	}

// validate city
function validateCity()
	{
		var letters = /^[A-Za-z]+$/; 
		var nam = document.getElementById("idfcity").value;
		// console.log(nam);
		document.getElementById("iderrcity").innerHTML = "";
		if (nam == null || nam == "")
		 {
		 	console.log(nam);
	 		var d = document.getElementById("idcity");
				d.className += " has-error";
				document.getElementById("iderrcity").innerHTML = "Please Enter City";
		 }
		 else if (nam.match(letters)) 
		{
			var el = document.getElementById("idcity");

			el.classList.remove("has-error");

			return true;
		}
		else
		{
			var d = document.getElementById("idcity");
				d.className += " has-error";
			document.getElementById("iderrcity").innerHTML = "Enter valid City.";
		}
	}

//validate Pincode
function validatePincode(el)
	{
				document.getElementById("iderrpincode").innerHTML = "";
				var m_pattern = /^\d{6}$/;
				var number = document.getElementById("idfpincode").value;
				if(number == "" || number == null)
					{
						var m = document.getElementById("idpincode");
						m.className += " has-error";
						document.getElementById("iderrpincode").innerHTML = "Please Enter PinCode.";
					}
				
				  else if (number.length != 6) 
				  {
				    var m = document.getElementById("idpincode");
					m.className += " has-error";
					document.getElementById("iderrpincode").innerHTML = "Pin no. should be of 6 digit.";
				  }
				  else if(number.match(m_pattern))
				{
					var el2 = document.getElementById("idpincode");

					el2.classList.remove("has-error");
					return true;
				}
				  else
				  {
				  	var m = document.getElementById("idpincode");
					m.className += " has-error";
					document.getElementById("iderrpincode").innerHTML = "Enter valid PinCode.";
				  }
	}

// Email Validation

function validateEmail()
	{
		var emailID = document.getElementById("idfemail").value;
         document.getElementById("iderremail").innerHTML = "";
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         if(emailID == "" || emailID == null)
         {
         	var e = document.getElementById("idemail");
				e.className += " has-error";
			document.getElementById("iderremail").innerHTML = "Please Enter email.";
         }
          else if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            var e = document.getElementById("idemail");
				e.className += " has-error";
			document.getElementById("iderremail").innerHTML = "Enter valid email.";
         }
         else		
         	{
         		var el1 = document.getElementById("idemail");

				el1.classList.remove("has-error");
				return true;
     		}
	}


//validate education

function validateEducation()
	{
		var letters = /^[A-Za-z]+$/; 
		var nam = document.getElementById("idfeducation").value;
		// console.log(nam);
		document.getElementById("iderreducation").innerHTML = "";
		if (nam == null || nam == "")
		 {
		 	console.log(nam);
	 		var d = document.getElementById("ideducation");
				d.className += " has-error";
				document.getElementById("iderreducation").innerHTML = "Please Enter Education Qualification";
		 }
		 else 
		{
			var el = document.getElementById("ideducation");

			el.classList.remove("has-error");

			return true;
		}
		
	}

// validate University

function validateUniv()
	{
		var letters = /^[A-Za-z]+$/; 
		var nam = document.getElementById("idfuni").value;
		// console.log(nam);
		document.getElementById("iderruni").innerHTML = "";
		if (nam == null || nam == "")
		 {
		 	console.log(nam);
	 		var d = document.getElementById("iduni");
				d.className += " has-error";
				document.getElementById("iderruni").innerHTML = "Please Enter Board / University";
		 }
		 else if (nam.match(letters)) 
		{
			var el = document.getElementById("iduni");

			el.classList.remove("has-error");

			return true;
		}
		else
		{
			var d = document.getElementById("iduni");
				d.className += " has-error";
			document.getElementById("iderruni").innerHTML = "Enter valid Board / University.";
		}
	}


//validate password

function validatePassword()
	{
		document.getElementById("iderrpassword").innerHTML = "";
      	var pass = document.getElementById("idfpassword").value;
      	if (pass == "" || pass == null) 
		{

			var m = document.getElementById("idpassword");
				m.className += " has-error";
			document.getElementById("iderrpassword").innerHTML = "Please enter password.";
			
		}
		else
		{
			var pass1 = document.getElementById("idpassword");

				pass1.classList.remove("has-error");
				return true;
		}
	}


// validate confirm password
function validateConfirmPassword()
	{
		document.getElementById("iderrconfirmpassword").innerHTML = "";
		var pass = document.getElementById("idfpassword").value;
      	var cpass = document.getElementById("idfconfirmpassword").value;
      	if (cpass=="" || cpass == null) 
		{

			var m = document.getElementById("idconfirmpassword");
				m.className += " has-error";
			document.getElementById("iderrconfirmpassword").innerHTML = "Please enter Confirm password.";
			
		}
		else if (cpass !== pass)
		{
			var m = document.getElementById("idconfirmpassword");
				m.className += " has-error";
			document.getElementById("iderrconfirmpassword").innerHTML = "password and confirm pasword not matched";
		}
		else
		{
			var pass2 = document.getElementById("idconfirmpassword");

				pass2.classList.remove("has-error");
				return true;
		}
	}


	//validate phone
	function validatePhone(el)
	{
				document.getElementById("iderrphone").innerHTML = "";
				var m_pattern = /^\d{10}$/;
				var number = document.getElementById("idfphone").value;
				if(number == "" || number == null)
					{
						var m = document.getElementById("idphone");
						m.className += " has-error";
						document.getElementById("iderrphone").innerHTML = "Please Enter phone number.";
					}
				
				  else if (number.length != 10) 
				  {
				    var m = document.getElementById("idphone");
					m.className += " has-error";
					document.getElementById("iderrphone").innerHTML = "phone number should be 10 digit.";
				  }
				  else if(number.match(m_pattern))
				{
					var el2 = document.getElementById("idphone");

					el2.classList.remove("has-error");
					return true;
				}
				  else
				  {
				  	var m = document.getElementById("idphone");
					m.className += " has-error";
					document.getElementById("iderrphone").innerHTML = "Enter valid phone number.";
				  }
	}


	// validate mobile
	function validateMobile(el)
	{
				document.getElementById("iderrmobile").innerHTML = "";
				var m_pattern = /^\d{10}$/;
				var number = document.getElementById("idfmobile").value;
				if(number == "" || number == null)
					{
						var m = document.getElementById("idmobile");
						m.className += " has-error";
						document.getElementById("iderrmobile").innerHTML = "Please Enter mobile number.";
					}
				
				  else if (number.length != 10) 
				  {
				    var m = document.getElementById("idmobile");
					m.className += " has-error";
					document.getElementById("iderrmobile").innerHTML = "mobile number should be 10 digit.";
				  }
				  else if(number.match(m_pattern))
				{
					var el2 = document.getElementById("idmobile");

					el2.classList.remove("has-error");
					return true;
				}
				  else
				  {
				  	var m = document.getElementById("idmobile");
					m.className += " has-error";
					document.getElementById("iderrmobile").innerHTML = "Enter valid number.";
				  }
	}




	function typedis()
	{
		var yesbtn = document.getElementById("pdis1").checked;
		var nobtn = document.getElementById("pdis2").checked;
		if(nobtn == true)
		{
			document.getElementById("pdisinput").value = "";
		 	document.getElementById("pdisinput").disabled = true;
		}
		else if(yesbtn == true)
		{
			document.getElementById("pdisinput").disabled = false;
			var invalue = document.getElementById("pdisinput").value;
			if(invalue == "" || invalue==null)
			{
				var m = document.getElementById("iddisinput");
						m.className += " has-error";
						document.getElementById("iderrpdisinput").innerHTML = "Please Enter Type of disability.";
			}
			else
			{
				var el2 = document.getElementById("iddisinput");
				document.getElementById("iderrpdisinput").innerHTML = "";
					el2.classList.remove("has-error");
					return true;
			}
		}
		else if (yesbtn==false && nobtn == false )
		{
			alert("Please select Disability");
		}

	}


	function typegender()
	{
		var malebtn = document.getElementById("idmale").checked;
		var femalebtn = document.getElementById("idfemale").checked;
		
		if (malebtn === false && femalebtn === false )
		{
			alert("Please select Gender");
		}
		else
		{
			return true;
		}

	}

//master function
function allfuctionv()
	{
		validatefName();
		validatelName();
		validatefaName();
		validatemoName();
		validateDate();
		validateState();
		validateDistric();
		validateCity();
		validatePincode();
		validateEmail();
		validateEducation();
		validateUniv();
		validatePassword();
		validateConfirmPassword();
		validatePhone();
		validateMobile();
		typedis();
		typegender();
	}





// Input field disable of physical disability

// function disinputclear()
// 	{
		
// 	}
function disinputno()
	{
		 document.getElementById("pdisinput").value = "";
		 document.getElementById("pdisinput").disabled = true;
		 
	}

// phone pattern set
// function maskphone()
// 	{
// 		var phonem = document.getElementById("idfphone");
// 		if(phonem.value.length == 4)
// 		{
// 			phonem.value += "-";
// 			//return;
// 		}
// 		if(phonem.value.length == 11)
// 		{
// 			phonem.value += ",";
// 			//return;
// 		}
// 	}
// Input field enable of physical disability

function disinputyes()
	{
		
		document.getElementById("pdisinput").disabled = false;
		// var inp document.getElementById("pdisinput").value;
		
	}

function regbutton()
	{
			var chkbtn = document.getElementById("termsaccpt").checked;
			if(chkbtn === true)
			{
				document.getElementById("subbutton").disabled = false;
			}
			else
			{
				document.getElementById("subbutton").disabled = true;
			}
	}


// Register button disable

function disbutton()
	{
		document.getElementById("subbutton").disabled = true;
	}

// Register button enable
