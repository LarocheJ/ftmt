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
            <h1>Chapter 3: Stretches</h1>
        </div>
        <img src="images/stretch2wide.jpg" alt="A picture of a man stretching his hamstrings">
    </div>

    <!-- CONTENT HERE -->
    <p>Well done! Now that you’re fully warmed up, let’s stretch a little. </p>

    <p>In Muay Thai, we use many different muscles and it is vital to ensure we thoroughly stretch before doing any kind
        of striking to avoid injuries and to ensure we perform every movement as optimally as possible. Normally there
        are a lot more stretches then what we will do here, but because we are doing this at home, we can stick to the
        basics. </p>


    <h2>Hamstrings &amp; Calves</h2>

    <p> Let’s start with the hamstrings and calves.</p>

    <div class="grid-2-col">
        <div>
            <ol>
                <li>First, extend your leg directly in front of you.</li>
                <li>Make sure your heels are touching the ground and your toes are up in the air.</li>
                <li>Bend forward and try to reach your toes.</li>
                <li>You should feel a stretch in your hamstrings, as well as your claves. Hold this for 15 seconds.
                    Then, do the
                    other leg.</li>
            </ol>
        </div>
        <div>
            <!-- Video name here -->
            <video class="video" width="100%" height="auto" loop autoplay muted>
                <source src="videos/hamstrings_stretch.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <h2>Quadriceps</h2>

    <p>Well done! Next up are the quadriceps, or quads for short. You have most likely done this one before, but just in
        case you haven’t, let’s go through it together.</p>

    <div class="grid-2-col">
        <div>
            <ol>
                <li>Stand straight.</li>
                <li>Bend one of your legs backwards and hold it with one, or both hands.</li>
                <li>Pull on it slightly for 15 seconds. You should feel a stretch in your quad at this point.</li>
            </ol>
        </div>
        <div>
            <video class="video" width="100%" height="auto" loop autoplay muted>
                <source src="videos/quads_stretch.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <p>Make sure to do this for both legs so that both your quads are nice and stretched.</p>

    <p>If you are having issues balancing yourself on one foot, try looking at and focusing on a single object
        in front
        of you.</p>

    <h2>Shoulders</h2>

    <p>Last but not least: shoulders.</p>

    <p> It is very important to warm up and stretch the shoulders as they are easy to injure and used in
        practically
        every aspect of Muay Thai. So, while standing straight, perform 12 forward rotations, and 12 backward
        rotations
        with your arms bending slightly at the elbow. </p>

    <video class="video" width="100%" height="auto" loop autoplay muted>
        <source src="videos/shoulders_stretch.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <p>Nice work! Time for another break. Take the quiz when you’re ready and then we’ll learn how to properly
        defend
        ourselves in Muay Thai. </p>

    <a href="quiz.php?id=3" class="btn block mb-3">Take the quiz</a>

</div>

<?php 
    include("includes/footer.inc.php");
?>