<?php 
    include("includes/head.inc.php");
    require("includes/connection.inc.php");
    include("includes/nav.inc.php");

    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
?>

<div class="wrapper">
    <!-- Put title here -->
    <div class="header-img">
        <div class="header-txt">
            <h1>Chapter 8: The Muay Thai Roundhouse Kick</h1>
        </div>
        <img src="images/kick1wide.jpg" alt="Image of a man permorming a roundhouse kick">
    </div>
    <!-- CONTENT HERE -->


    <p>The Muay Thai roundhouse kick is what makes Muay Thai one of the deadliest martial arts on the planet. Every
        aspiring Muay Thai absolutely needs to learn this kick to be successful in the sport. It takes a lifetime to
        master. For this reason, we will go over every step of performing a powerful roundhouse kick.</p>

    <div class="grid-2-col">
        <div>
            <ol>
                <li>The first thing to remember is that you want to think of your leg as a whip. Your leg should
                    practically be
                    dead weight, guided by your hips, shoulders and torso.</li>

                <li>Push up on the ball of your post foot (the foot not kicking). This will help you rotate your hips,
                    thus
                    making your kick more fluid.</li>

                <li>Thrust your hips forward. This is where the power behind the Muay Thai roundhouse kick comes from.
                </li>

                <li>Your post foot should be opening up and pivoting to open up your hips when you drive through your
                    kick.</li>

                <li>Swing the same side arm you are kicking from. So, if throwing a right kick, swing your right arm.
                    This will
                    help twist your hips and generating more momentum behind your kick.</li>

                <li>Keep your chin tucked behind your shoulder and your opposite hand up. This is for defensive
                    purposes.</li>
            </ol>
        </div>
        <div>
            <!-- Video name here -->
            <video class="video" width="100%" height="auto" loop autoplay muted>
                <source src="videos/kick_right.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <p>To take it further, try kicking through your imaginary opponent. Don’t stop in midair. This means that your kicks
        should be rotating 360 degrees.</p>

    <p>Take the quiz to move on to the final chapter!</p>

    <a href="quiz.php?id=8" class="btn block mb-3">Take the quiz</a>

</div>

<?php 
    include("includes/footer.inc.php");
?>