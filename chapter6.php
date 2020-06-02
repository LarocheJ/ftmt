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
            <h1>Chapter 6: Blocking</h1>
        </div>
        <img src="images/block2wide.jpg" alt="A picture of a man blocking a punch">
    </div>

    <!-- CONTENT HERE -->

    <p> Let’s get into some blocking techniques. The point of blocking is to take as little damage as possible when an
        opponent strikes us. Blocking a punch or kick will sting, but not nearly as much as if you were to take the full
        blow of the strike. With that little disclaimer out of the way, let’s learn how to block.</p>

    <h2>Blocking a punch</h2>

    <p>As discussed in chapter 1, your hands should always be up. One of the reasons why you should keep your hands nice
        and high is that it significantly facilitates blocking.</p>

    <p>Here is what has to go through your head if you see a punch coming from the right: </p>

    <div class="grid-2-col">
        <div>
            <ol>
                <li>Tuck in your chin. The chin is the weakest part of your face. If your opponent manages to hit you
                    there,
                    it
                    will
                    buckle your knees and you will be in trouble.</li>
                <li>Raise your elbow so that your fist touches the back of your shoulder or until your forearm and elbow
                    create
                    a
                    90-degree angle.</li>
                <li>Your inner arm has to remain connected to your face. If there is a gap between your arm and head,
                    you
                    will
                    hit
                    yourself in the head when your opponent connects his punch.</li>
                <li>After that, brace for impact and think of your counterattack.</li>
            </ol>
        </div>
        <div>
            <!-- Video name here -->
            <video class="video" width="100%" height="auto" loop autoplay muted>
                <source src="videos/block_side.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <p>Reverse the arms in this process if the punch is coming from the left.</p>

    <p>You may practice this by repeating the steps shown in the video slowly until you feel comfortable with it.</p>

    <p>If your opponent is going for a cross, or if you see a fist coming right for your nose, the technique is slightly
        different.</p>

    <p>You must:</p>

    <div class="grid-2-col">
        <div>
            <ol>
                <li>Bring your elbows together so that your forearms protect your nose, mouth and chin.</li>
                <li>Rotate your fists so that your fingers are facing you and keep your forearms touching your face.
                </li>
                <li>Your fists should relate to the base of your hairline, so that your entire face is protected. This
                    is to,
                    again,
                    avoid punching yourself in the face.</li>
            </ol>
        </div>
        <div>
            <video class="video" width="100%" height="auto" loop autoplay muted>
                <source src="videos/block_front.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <p>Again, the best way to learn is repetition. So, copy the steps shown in the video as many times as you wish.</p>

    <h2>Blocking a kick</h2>

    <p>First, we’ll go over how to block a low side kick, or a kick coming for your thigh or ribs. Basically, you must
        match your opponent’s kick with your opposing shin. So, if they are kicking with their left leg, you must raise
        your right knee upwards while keeping your toes pointed downwards until your knee aligns with your lower chest.
        While raising your knee, your right elbow will meet your knee.</p>

    <div class="grid-2-col">
        <div>
            <p>Left kick block.</p>
            <video class="video" width="100%" height="auto" loop autoplay muted>
                <source src="videos/block_kick_1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div>
            <p>Right kick block.</p>
            <video class="video" width="100%" height="auto" loop autoplay muted>
                <source src="videos/block_kick_2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <p>This should effectively block a low kick. If the kick is coming for your face, you want to do the same as if your
        opponent was throwing a punch. Refer to the “Blocking a punch” section of this chapter.</p>

    <p>To practice this, perform the steps demonstrated in the video a dozen times with each leg. Remember to keep your
        core tight. Your abs should burn a little after this if you do it properly.</p>

    <p>When you’re ready, take the quiz!</p>

    <a href="quiz.php?id=6" class="btn block mb-3">Take the quiz</a>

</div>

<?php 
    include("includes/footer.inc.php");
?>