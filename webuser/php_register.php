<?php
// Define variables and initialize with empty values
$email = $password = $confirm_password = $role = "";
$email_err = $password_err = $confirm_password_err = $role_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Validate role
    if(empty(trim($_POST["role"])))
    {
        $role_err = "Please enter a role.";
    }
    else
    {
        $role = trim($_POST["role"]);
    }

    // Validate email
    if(empty(trim($_POST["email"])))
    {
        $email_err = "Please enter a email.";
    }
    else
    {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ? AND role = ?";
        
        if($stmt = mysqli_prepare($conection_db, $sql))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_role);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            $param_role = $role;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
            {
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $email_err = "This email is already taken.";
                }
                else
                {
                    $email = trim($_POST["email"]);
                }
            }
            else
            {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
}
?>