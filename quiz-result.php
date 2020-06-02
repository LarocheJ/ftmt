<?php 
include("includes/head.inc.php");
require("includes/connection.inc.php");
include("includes/nav.inc.php");
include("includes/modals.inc.php");

//Generate Random Video
$positiveVideos = ["correct_answer_1", "correct_answer_2"];
$negativeVideos = ["wrong_answer_1", "wrong_answer_2", "wrong_answer_3"];

$randomPositiveVideo = array_rand($positiveVideos, 1);
$randomNegativeVideo = array_rand($negativeVideos, 1);

$sql = "SELECT * FROM user WHERE email=?";
$stmt = mysqli_stmt_init($connection);
$user = mysqli_real_escape_string($connection, $_SESSION['email']);

mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "s", $user);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result)

?>

<div class="wrapper">
    <div class="quiz-result-container">

        <?php
        //QUIZ 1
        if(isset($_POST['q1-answer'])){
        if($_POST['q1-answer'] !== "b"){
        ?>
        <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>

        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter.php?id=1">Back to chapter</a>
        </div>
        <?php
    } elseif($_POST['q1-answer'] == "b"){
        $sql = "UPDATE user SET chapter1=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);    
        
        $chapter1 = "done";
        
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $chapter1, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
?>
        <p class="result-msg">Good job, <?php print $_SESSION['name']; ?>, off to a great start!</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $positiveVideos[$randomPositiveVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <a class="btn" href="chapter2.php">Next Chapter</a>
        </div>
        <?php
    }
}

//QUIZ 2
if(isset($_POST['q2-answer'])){
    if($_POST['q2-answer'] !== "d"){
?>
        <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>

        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter2.php">Back to chapter</a>
        </div>
        <?php
    } elseif($_POST['q2-answer'] == "d"){
        $sql = "UPDATE user SET chapter2=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);    
        
        $chapter2 = "done";
        
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $chapter2, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
?>
        <p class="result-msg">Nicely done!</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $positiveVideos[$randomPositiveVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <a class="btn" href="chapter3.php">Next Chapter</a>
        </div>
        <?php
    }
}

//QUIZ 3
if(isset($_POST['q3-answer'])){
    if($_POST['q3-answer'] !== "a"){
?>
        <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter3.php">Back to chapter</a>
        </div>
        <?php
    } elseif($_POST['q3-answer'] == "a"){
        $sql = "UPDATE user SET chapter3=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);    
        
        $chapter3 = "done";
        
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $chapter3, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
?>
        <p class="result-msg">You got it!</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $positiveVideos[$randomPositiveVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <p>In order to complete the first module, all you need to do is pass this test! You got this!</p>
        <div class="result-options-container">
            <a class="btn" href="module1.php">Take the test</a>
        </div>
        <?php
    }
}

//QUIZ 4
if(isset($_POST['q4-answer'])){
    if($_POST['q4-answer'] !== "a"){
?>
        <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter4.php">Back to chapter</a>
        </div>
        <?php
    } elseif($_POST['q4-answer'] == "a"){
        $sql = "UPDATE user SET chapter4=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);    
        
        $chapter4 = "done";
        
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $chapter4, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
?>
        <p class="result-msg">Yeah that was pretty easy...</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $positiveVideos[$randomPositiveVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <a class="btn" href="chapter5.php">Next Chapter</a>
        </div>
        <?php
    }
}

//QUIZ 5 - Checkbox *** TODO: FIX THIS. else is messing something up ***
if(isset($_POST['q5-checkbox-b'])){
?>
        <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter5.php">Back to chapter</a>
        </div>
        <?php
} elseif(isset($_POST['q5-checkbox-a']) && isset($_POST['q5-checkbox-c']) && isset($_POST['q5-checkbox-d'])) {
        $sql = "UPDATE user SET chapter5=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);    
        
        $chapter5 = "done";
        
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $chapter5, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
?>
        <p class="result-msg">You got it!</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $positiveVideos[$randomPositiveVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <a class="btn" href="chapter6.php">Next Chapter</a>
        </div>
        <?php
    } //else {
        ?>
        <!-- <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php //print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter.php?id=5">Back to chapter</a>
        </div> -->
        <?php
   // }

//QUIZ 6
if(isset($_POST['q6-answer'])){
    if($_POST['q6-answer'] !== "b"){
?>
        <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter6.php">Back to chapter</a>
        </div>
        <?php
    } elseif($_POST['q6-answer'] == "b"){
        $sql = "UPDATE user SET chapter6=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);    
        
        $chapter6 = "done";
        
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $chapter6, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
?>
        <p class="result-msg">Well dang <?php print $_SESSION['name']; ?>, you're really getting the hang of this thing!
        </p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $positiveVideos[$randomPositiveVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <p>Well done! You're almost half way there! Just pass this module test to continue.</p>
        <div class="result-options-container">
            <a class="btn" href="module2.php">Take the test</a>
        </div>
        <?php
    }
}

//QUIZ 7
if(isset($_POST['q7-answer'])){
    if($_POST['q7-answer'] !== "d"){
?>
        <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter7.php">Back to chapter</a>
        </div>
        <?php
    } elseif($_POST['q7-answer'] == "d"){
        $sql = "UPDATE user SET chapter7=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);    
        
        $chapter7 = "done";
        
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $chapter7, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
?>
        <p class="result-msg">Chapter 7... Check!</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $positiveVideos[$randomPositiveVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <a class="btn" href="chapter8.php">Next Chapter</a>
        </div>
        <?php
    }
}

//QUIZ 8
if(isset($_POST['q8-answer'])){
    if($_POST['q8-answer'] !== "d"){
?>
        <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter8.php">Back to chapter</a>
        </div>
        <?php
    } elseif($_POST['q8-answer'] == "d"){
        $sql = "UPDATE user SET chapter8=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);    
        
        $chapter8 = "done";
        
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $chapter8, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
?>
        <p class="result-msg">Can you smell the finish line yet!?</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $positiveVideos[$randomPositiveVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <a class="btn" href="chapter9.php">Next Chapter</a>
        </div>
        <?php
    }
}

//QUIZ 9
if(isset($_POST['q9-answer'])){
    if($_POST['q9-answer'] !== "c"){
?>
        <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter9.php">Back to chapter</a>
        </div>
        <?php
    } elseif($_POST['q9-answer'] == "c"){
        $sql = "UPDATE user SET chapter9=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);    
        
        $chapter9 = "done";
        
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $chapter9, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
?>
        <p class="result-msg">Good job, <?php print $_SESSION['name']; ?>!</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $positiveVideos[$randomPositiveVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <p>You're almost home free! All that's left to do is pass one more module test. You got this.</p>
        <div class="result-options-container">
            <a class="btn" href="module3.php">Take the test</a>
        </div>
        <?php
    }
}


// MODULE ASSESSMENTS
// Module 1
if(isset($_POST['module1_submit'])){
    if(isset($_POST['m1-checkbox-b']) && isset($_POST['m1-checkbox-d']) && isset($_POST['m1-checkbox-e']) && !isset($_POST['m1-checkbox-a']) && !isset($_POST['m1-checkbox-c']) && !isset($_POST['m1-checkbox-f'])){
            ?>
        <p class="result-msg">You're a beast, <?php print $_SESSION['name']; ?>!</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $positiveVideos[$randomPositiveVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <a class="btn" href="chapter4.php">Next Chapter</a>
        </div>
        <?php
        
    } else {
        ?>
        <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter1.php">Back to chapter 1</a>
        </div>
        <?php
    }
}

// Module 2
if(isset($_POST['module2_submit'])){
    if($_POST['m2-answer'] == "c"){
        ?>
        <p class="result-msg">Nice!</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $positiveVideos[$randomPositiveVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <a class="btn" href="chapter7.php">Next Chapter</a>
        </div>
        <?php
    } else {
        ?>
        <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter4.php">Back to chapter 4</a>
        </div>
        <?php
    }
}

// Module 3
if(isset($_POST['module3_submit'])){
    if($_POST['m3-answer'] == "b"){
        ?>
        <p class="result-msg">You did it!!! Congratulations!</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $positiveVideos[$randomPositiveVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <p>Well done, <?php print $_SESSION['name']; ?>. You have officially completed the course! To obtain your
            certificate, head to your dashboard.</p>
        <div class="result-options-container">
            <a class="btn" href="user-profile.php">To the Dashboard!</a>
        </div>
        <?php
    } else {
        ?>
        <p class="result-msg">Sorry, wrong answer.</p>
        <video class="result-video" autoplay loop>
            <source src="videos/<?php print $negativeVideos[$randomNegativeVideo] ?>.mp4">
            Your browser does not support the video tag.
        </video>
        <div class="result-options-container">
            <button class="btn" onclick="goBack()">Try Again</button>
            <a class="btn" href="chapter7.php">Back to chapter 7</a>
        </div>
        <?php
    }
}

?>
    </div>
</div>

<?php
include("includes/footer.inc.php");
?>