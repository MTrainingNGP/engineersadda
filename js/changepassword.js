
//validate password

function validateoPassword()
    {
        document.getElementById("iderropassword").innerHTML = "";
        var pass = document.getElementById("idfop").value;
        if (pass == "" || pass == null) 
        {

            var m = document.getElementById("idopassword");
                m.className += " has-error";
                errorflag = true;
            document.getElementById("iderropassword").innerHTML = "Please enter password.";
            
        }
        else
        {
            var pass1 = document.getElementById("idopassword");

                pass1.classList.remove("has-error");
                errorflag = false;
                return true;
        }
    }
    function validatenPassword()
    {
        document.getElementById("iderrnpassword").innerHTML = "";
        var pass = document.getElementById("idfnp").value;
        if (pass == "" || pass == null) 
        {

            var m = document.getElementById("idnpassword");
                m.className += " has-error";
                errorflag = true;
            document.getElementById("iderrnpassword").innerHTML = "Please enter password.";
            
        }
        else
        {
            var pass1 = document.getElementById("idnpassword");

                pass1.classList.remove("has-error");
                errorflag = false;
                return true;
        }
    }
function validatecnPassword()
    {
        document.getElementById("iderrcnpassword").innerHTML = "";
        var pass = document.getElementById("idfnp").value;
        var cpass = document.getElementById("idfcnp").value;
        if (cpass=="" || cpass == null) 
        {

            var m = document.getElementById("idcnpassword");
                m.className += " has-error";
                errorflag = true;
            document.getElementById("iderrcnpassword").innerHTML = "Please enter Confirm password.";
            
        }
        else if (cpass !== pass)
        {
            var m = document.getElementById("idcnpassword");
                m.className += " has-error";
                errorflag = true;
            document.getElementById("iderrcnpassword").innerHTML = "password and confirm pasword not matched";
        }
        else
        {
            var pass2 = document.getElementById("idcnpassword");

                pass2.classList.remove("has-error");
                errorflag = false;
                return true;
        }
    }

function changepassword()
{
    if (errorflag == false)
     {
        $.post('changepassword_val.php',{
            reg_id : $("#sessvar").val(),
            password : $("#idfop").val(),
            npassword : $("#idfnp").val()

        },function(result){
            // alert(result);
            if (result == "true") 
            {
                alert("password change successfully please login");
                // alert("")
                window.location = 'login.php';
            }
            else
            {
                alert("Fail To change password Try again");
            }

        });
     }
     else
     {
        alert("PLeease find error");
     }
}