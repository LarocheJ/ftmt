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
            <h1>Chapter 5: Stance</h1>
        </div>
        <img src="images/stance2wide.jpg" alt="A mid shot of Scott doing a stance.">
    </div>
    <!-- CONTENT HERE -->

    <p>The Muay Thai stance is different than the one from boxing. Here is a mental checklist to go through when
        it
        comes to standing properly in Muay Thai:</p>

    <p> Feet shoulder width apart. This will help you remain balanced and ready to react quickly. </p>

    <!-- Video name here -->
    <video class="video" width="100%" height="auto" loop autoplay muted>
        <source src="videos/stance_closeup.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <p> Keep your core facing forward. A traditional boxer would tell you to rotate your body backwards to make yourself
        a
        smaller
        target. But in Muay Thai, we want to face our opponent. That is because a Muay Thai fighter needs to be
        able to
        quickly throw kicks as well as punches. Keeping your core facing forward facilitates this.</p>

    <p>Here's what you need to remember:</p>

    <ol>
        <li>Feet shoulder width apart.</li>
        <li>Keep your core facing forward.</li>
        <li>Rear foot slightly curved out, roughly 45-degree angle.</li>
        <li>Rear heel slightly lifted while keeping the ball of your foot connected to the ground.</li>
        <li>Keep your hands high.</li>
    </ol>

    <!-- Video name here -->
    <video class="video" width="100%" height="auto" loop autoplay muted>
        <source src="videos/stance_hands.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <p> I realize this is a lot to remember when simply trying to stand properly. Just know that with time and
        practice,
        this check list will become second nature and you will do it without thinking. </p>

    <a href="quiz.php?id=5" class="btn block mb-3">Take the quiz</a>

</div>

<?php 
    include("includes/footer.inc.php");
?>