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
                errorflag = true;
            document.getElementById("iderremail").innerHTML = "Please Enter email.";
         }
          else if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            var e = document.getElementById("idemail");
                e.className += " has-error";
                errorflag = true;
            document.getElementById("iderremail").innerHTML = "Enter valid email.";
         }
         else       
            {
                var el1 = document.getElementById("idemail");

                el1.classList.remove("has-error");
                errorflag = false;
                return true;
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
                errorflag = true;
            document.getElementById("iderrpassword").innerHTML = "Please enter password.";
            
        }
        else
        {
            var pass1 = document.getElementById("idpassword");

                pass1.classList.remove("has-error");
                errorflag = false;
                return true;
        }
    }


function finalsubmit()
{
    if (errorflag == false)
     {
        $.post('login_val.php',{
            email : $("#idfemail").val(),
            password : $("#idfpassword").val()

        },function(result){
            // alert(result);
            if (result == "true") 
            {
                alert("Thank you for login");
                // alert("")
                window.location = 'profile.php';
            }
            else
            {
                alert("invalid data please try with valid data");
            }

        });
     }
     else
     {
        alert("PLeease find erroe");
     }
}