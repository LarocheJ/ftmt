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
            <h1>Chapter 1: What you’ll need</h1>
        </div>
        <img src="images/objectswide.jpg" alt="A picture of Muay Thai wraps, skipping rope and boxing gloves">
    </div>
    <!-- CONTENT HERE -->

    <p>You don’t need a whole lot to get started with Muay Thai. If you only practice at home, all you need are
        comfortable work-out clothes and enough room to be able throw a kick all around you. Optional items include:
    </p>

    <ul>
        <li>Boxing/Muay Thai wraps</li>
        <li> Skipping rope</li>
    </ul>

    <p>When you do join a gym, you will need gloves and wraps. Generic 14oz gloves are great, <a
            href="https://amzn.to/2X6OJB9">here is an amazon link</a> to great and inexpensive gloves. </p>

    <p>When it comes to the wraps, 180 inches, or 4.5 meters is the standard Muay Thai length for adults. <a
            href="https://amzn.to/34HWZdo">Here</a> is a great option to start out.</p>

    <h2>How to wrap your hands</h2>

    <p>You don’t need hand wraps for this lesson, but if you want to learn how to wrap your hands, then keep on
        reading!
    </p>

    <p>Wraps are used to avoid injuries while training. They stabilize your wrists and provide some padding for your
        knuckles so that you can train for longer periods of time without hurting yourself. </p>

    <p>Everyone has their own style, but in general, as long as your knuckles and wrists are secure, you’re good to
        go.
        There is no standard way of wrapping your hands. The video below shows a relatively easy way of wrapping
        that
        will keep your hand and wrists secure throughout your training session. </p>

    <div class="grid-2-col">
        <div>
            <ol>
                <li>Remember to keep your fingers separated when wrapping. Doing so will ensure that you can still make
                    a fist
                    when
                    you are done wrapping.</li>
                <li>You want to wrap it tight enough so that the wraps don’t get loose while training, but not too tight
                    that
                    your
                    hands feel numb from cutting the blood flow. You will get the hang of it after a few tries. </li>
            </ol>
        </div>
        <div>
            <video class="video" width="100%" height="auto" controls muted>
                <source src="videos/hand_wrapping.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <p>When ready, hit that button below! </p>

    <a href="quiz.php?id=1" class="btn block mb-3">Take the quiz</a>

</div>

<?php 
    include("includes/footer.inc.php");
?>