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
            <h1>Chapter 9: Throwing a punch</h1>
        </div>
        <img src="images/strike2wide.jpg" alt="Image of a man performing a left jab">
    </div>
    <!-- CONTENT HERE -->
    <p>Welcome to the final chapter! You're almost there!</p>

    <p>For this chapter, I will assume you are right-handed. Simply do the reverse if you are a southpaw (left-handed)
        fighter.</p>

    <p>There are several different punches: the jab, cross, hook, uppercut, and more. In this lesson, we will cover the
        essential punching techniques you need to know: the jab, cross, and hook. These are not exclusive to Muay Thai,
        so you might already be familiar with them, however, let’s assume you have no idea what they are.</p>

    <h2>The Jab</h2>

    <p>The jab is very useful to keep your opponent on his toes. When done correctly, it is a very quick and snappy
        strike, making it hard to evade and perfect for exposing an opponent’s weaknesses and setting them up for your
        powerful strikes such as the cross, hook or roundhouse kicks.</p>

    <p>So, how do you do it correctly? First, get in your stance.</p>
    <div class="grid-2-col">
        <div>
            <ol>
                <li>Get into your stance.</li>

                <li>Extend your left hand straight in front of you.</li>

                <li>Rotate your fist to the right slightly. The idea behind rotating your fist is that you want your
                    index
                    and
                    middle finger knuckles to connect with your target.</li>

                <li> Twist your hips as you throw the punch and pivot your left foot clockwise.</li>

                <li>Take a small step forward with your left foot while throwing the jab.</li>

                <li> Don’t over-extend or put too much weight behind the jab. The idea is to destabilize and your
                    opponent,
                    not
                    knock them out.</li>
            </ol>
        </div>
        <div>
            <video class="video" width="100%" height="auto" loop autoplay muted>
                <source src="videos/jab.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="small-p">What a jab should look like.</p>
        </div>
    </div>
    <p>I realize this is a lot to remember while throwing a simple jab, but trust me, after a while, you won’t even
        think about it.</p>

    <p> To practice the jab, do all the steps outlined above slowly. Then, when you are feeling more comfortable with
        it, add gradual speed to your jab.</p>

    <h2>The Cross</h2>

    <p>Unlike the jab, a cross is often used in knockouts and is a very powerful strike. The name “cross” comes from the
        fact that when thrown, it “crosses” your lead hand, hence the name.</p>

    <div class="grid-2-col">
        <div>
            <ol>
                <li>To do a cross, you want to keep your left hand close to your head to protect your beautiful face.
                </li>

                <li>Keep your left foot planted in the ground.</li>

                <li>Pivot your right foot counter-clockwise until it aligns with your knee.</li>

                <li>Twist your hips to the right.</li>

                <li>Extend your right hand across your body straight in front of you.</li>
            </ol>
        </div>
        <div>
            <!-- Video name here -->
            <video class="video" width="100%" height="auto" loop autoplay muted>
                <source src="videos/cross.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="small-p">What a cross should look like.</p>
        </div>
    </div>
    <p>Again, make sure to do this slow and focus on your footing as well as rotating your hips. All this rotating
        helps
        create a huge amount of momentum and holds all the power behind your punch.</p>

    <h2>The Hook</h2>

    <p>The hook is one of the harder punches to perform properly but when done right, it is one of the most powerful
        punch you can do.</p>

    <p>You'll want to use your non-dominant hand for this one as a Muay Thai fighter will very rarely use their rear
        hand to hook because it is too far away from the opponent. It is possible, but in this lesson, we will focus
        on
        using the left hand, which will feel abnormal for a while.</p>

    <p>So, here’s how it’s done:</p>

    <div class="grid-2-col">
        <div>
            <ol>
                <li>After you get in your stance and raise your hands, keep your elbows tucked in and try to relax.
                </li>

                <li>This punch starts like every other one: your lower body. First, shift your weight to the lead
                    foot.
                    Rotate
                    your right shoulder clockwise, whilst simultaneously dipping your left shoulder and left arm
                    slightly.
                </li>

                <li>After your move your arm and shoulder, pivot on the ball of your lead foot as you rotate your
                    hips, and
                    then
                    your shoulders.</li>

                <li>Now is the time to hook your arm. Your left arm should be locked at an angle of around
                    90-degrees. Your
                    fist
                    should also be rotated towards you.</li>

                <li>As your body rotates, your arm should follow in a horizontal plane.</li>

                <li>Rotate your lead foot, and finish with your body facing your right. You want to put the weight
                    of your
                    whole
                    body behind the punch for a devastating hook.</li>

                <li>As a final tip, remember to keep your chin tucked in tightly against your body.</li>
            </ol>
        </div>
        <div>
            <!-- Video name here -->
            <video class="video" width="100%" height="auto" loop autoplay muted>
                <source src="videos/hook.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="small-p">What a hook should look like.</p>
        </div>
    </div>
    <p>When you’re ready, crush this quiz to finish the chapter!</p>

    <a href="quiz.php?id=9" class="btn block mb-3">Take the quiz</a>
</div>

<?php 
    include("includes/footer.inc.php");
?>