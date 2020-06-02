<?php 
    require("includes/connection.inc.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstName = mysqli_real_escape_string($connection, ucfirst($_POST['fName']));
        $lastName = mysqli_real_escape_string($connection, ucfirst($_POST['lName']));
        $email = mysqli_real_escape_string($connection, $_POST['signup-email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $passwordConfirm = mysqli_real_escape_string($connection, $_POST['passwordConfirm']);

        if($password !== $passwordConfirm){
            header("Location: index.php?error=nomatch");
            $_SESSION['message'] = 'The passwords do not match.';
            exit();

        } else {
            $sql = "SELECT email FROM user WHERE email=?";
            $stmt = mysqli_stmt_init($connection);

        } if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: index.php?error=sqlerror");
            $_SESSION['message'] = 'There was an unexpected error, please try again later.';
            exit();

        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $resultCheck = mysqli_stmt_num_rows($stmt);

            if($resultCheck > 0){
                header("Location: index.php?error=userexists");
                $_SESSION['message'] = 'Sorry, this email address is already in the database.';
                exit();

            } else {
                $sql = "INSERT INTO user (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($connection);
            }

            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: index.php?error=sqlerror2");
                $_SESSION['message'] = 'There was an unexpected error, please try again later.';
                exit();

            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $hashedPassword);
                mysqli_stmt_execute($stmt);
                $_SESSION['message'] = 'Thank you for signing up!';
                $_SESSION['name'] = $firstName;
                $_SESSION['lastName'] = $lastName;
                $_SESSION['email'] = $email; 
                header("Location: user-profile.php?registration=success");
                exit();
            }
        }
    }

?>