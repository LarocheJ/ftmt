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
            <h1>Chapter 4: General defense knowledge</h1>
        </div>
        <img src="images/gloveswide.jpg" alt="A picture of a man with boxing gloves">
    </div>
    <!-- CONTENT HERE -->
    <p>Congratulations on finishing the first module! Now that you’ve learned how to properly warm up and stretch,
        you’re ready to learn Muay Thai!</p>

    <h2>Stay light on your feet</h2>

    <p>The first thing you need to remember when it comes to defense is to stay light on your feet. This will allow you
        to quickly switch stance, throw kicks and punches at your opponent coming from the left or right, while keeping
        your opponent guessing. Furthermore, it allows you to quickly react to incoming strikes.</p>

    <!-- Video name here -->
    <video class="video" width="100%" height="auto" loop autoplay muted>
        <source src="videos/light_on_feet.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <h2>Keep your core tight</h2>

    <p>You also want to ensure your core is tight at all times. Not only will this help you deliver stronger strikes,
        but it also makes getting punched or kicked in the stomach a little more bearable. </p>

    <p>To practice the reflex of tightening your core and abs, try hitting yourself in the stomach a dozen times. Don’t
        go too crazy here, but you want enough force behind it to feel it a little bit. </p>

    <video class="video" width="100%" height="auto" loop autoplay muted>
        <source src="videos/core_tight.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <h2>Keep your hands high</h2>

    <p>The last thing you need to remember regarding defense tips is to keep your hands high. </p>

    <p> Yes, there are a few Muay Thai fighters that have adopted an advanced style where they keep their hands lower,
        however, this is absolutely not recommended for beginners. Do not try to imitate them. </p>

    <p> Keeping your hands high ensure you keep your head protected and makes it easier to not only throw good and
        powerful punches, but also helps shift your weight when throwing kicks (more on that in module 3). </p>

    <p>When the time comes to hit the bag, you will be wearing gloves and making a fist with your hands. However, when
        shadowboxing, or fighting the air, you can keep your hands open.</p>

    <video class="video" width="100%" height="auto" loop autoplay muted>
        <source src="videos/hands_high.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <p>Time to put all this theory in action.</p>

    <p>For 5 minutes straight, practice shifting your weight between your front and back foot. Keep most of your weight
        on the ball of your feet. While doing that, keep your core tight and your hands high.</p>

    <p>When you are ready, you may test your knowledge.</p>

    <a href="quiz.php?id=4" class="btn block mb-3">Take the quiz</a>

</div>

<?php 
    include("includes/footer.inc.php");
?>