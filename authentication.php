<?php 

    require("includes/connection.inc.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM user WHERE email=?";
        $stmt = mysqli_stmt_init($connection);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: index.php?error=sqlerror");
            $_SESSION['message'] = 'There was an unexpected error, please try again later.';
            exit();
        
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)){

                $pwdCheck = password_verify($password, $row['password']);
                
                if($pwdCheck == false){
                    header("Location: index.php?error=wrongpwd");
                    $_SESSION['message'] = 'Wrong password.';
                    exit();

                } elseif($pwdCheck == true) {

                    $_SESSION['name'] = $row['first_name']; 
                    $_SESSION['lastName'] = $row['last_name']; 
                    $_SESSION['email'] = $row['email'];  
                    
                    $stmt = mysqli_stmt_init($connection);        
            
                    mysqli_stmt_prepare($stmt, $sql);
                    mysqli_stmt_bind_param($stmt, "s", $_SESSION['email']);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                    mysqli_close($connection);
                    
                    header("Location: user-profile.php");  

                    exit();
                }
                
            } else {
                header("Location: index.php?error=usernotfound");
                $_SESSION['message'] = 'No accounts were found with this email.';
                exit();
            }
        }
    } else {
        header("Location: index.php");
        exit();
    }

?>