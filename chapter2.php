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
            <h1>Chapter 2: Warm up</h1>
        </div>
        <img src="images/crunchwide.jpg" alt="A photo of a man doing crunches">
    </div>
    <!-- CONTENT HERE -->


    <p>Alright, now that you’ve got everything you need, let’s get sweating.</p>

    <p>It is crucial to get the heart rate up and get warmed up before doing any activity. Avoiding doing so could
        cause
        serious injuries and cause you to miss several weeks of training.</p>

    <h2>Jump rope</h2>

    <p> First up: 5 minutes of jumping rope. If you don’t have a jumping rope, simply do jumping jacks for the 5
        minutes. This can be challenging if you are not used to it. So do your best, try not to stop for too long
        when
        the rope hits your feet, but rest if needed. </p>

    <video class="video" width="100%" height="auto" loop autoplay muted>
        <source src="videos/skipping_rope.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <h2>Squats, pushups and crunches</h2>

    <p> Next, 20 reps of squats, pushups and crunches, for 3 sets. Yup, that’s 80 squats, 80 pushups and 80
        crunches. If
        you aren’t already sweating, this will definitely do it. Try to do it quick and not to stop. If you start to
        feel tired, slow down, but don’t stop unless you feel like passing out. </p>

    <p>So, let’s go for 20 squats...</p>

    <!-- Video name here -->
    <video class="video" width="100%" height="auto" loop autoplay muted>
        <source src="videos/squat.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <p>20 pushups...</p>

    <video class="video" width="100%" height="auto" loop autoplay muted>
        <source src="videos/push_ups.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <p>And 20 crunches.</p> <br>

    <video class="video" width="100%" height="auto" loop autoplay muted>
        <source src="videos/crunches.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <p>Good job! Do this 2 more times! </p>

    <p>All done and still breathing? Awesome! Take a break and crush this little quiz. </p>

    <a href="quiz.php?id=2" class="btn block mb-3">Take the quiz</a>

</div>

<?php 
    include("includes/footer.inc.php");
?>