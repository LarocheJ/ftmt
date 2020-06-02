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
            <h1>Chapter 7: The Teep/Push Kick</h1>
        </div>
        <img src="images/kick3wide.jpg" alt="Image of a man doing a teep/push kick">
    </div>
    <!-- CONTENT HERE -->

    <p> The teep is important to keep an opponent at bay or disrupt their tempo. It is very similar to the jab, but with
        your leg.</p>
    <p>It is great to annoy your opponent, which will make them make mistakes, which you can then take advantage of.</p>
    <p>Furthermore, the teep allows you to control the fight and decide when to engage.</p>

    <p> Here’s how it’s done:</p>

    <div class="grid-2-col">
        <div>
            <ol>
                <li>Push up on the balls of your post foot. This will help generate power, improve your accuracy and
                    help push
                    your opponent back.</li>

                <li>Bring your knee to your chest/shoulder. The higher you bring your knee, the more likely you will be
                    able to
                    clear their defense.</li>

                <li>Extend your hips out. Stay balanced and snap your kick forward, just like you would a jab.</li>

                <li>Opposite arm stays up to protect your face and same side arm swings down to generate power behind
                    your teep.
                </li>
            </ol>
        </div>
        <div>
            <!-- Video name here -->
            <video class="video" width="100%" height="auto" loop autoplay muted>
                <source src="videos/kick_sparta.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <p>When you’re ready, take the quiz to complete the chapter!</p>

    <a href="quiz.php?id=7" class="btn block mb-3">Take the quiz</a>

</div>


<?php 
    include("includes/footer.inc.php");
?>