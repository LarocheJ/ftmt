<?php 
    include("includes/head.inc.php");
    require("includes/connection.inc.php");
    include("includes/nav.inc.php");
    include("includes/modals.inc.php");
?>

<div class="wrapper">
    <div class="quiz-container">
        <form action="quiz-result.php" method="post">
            <?php 
        if($_GET['id'] == 1){
            ?>
            <!-- QUIZ 1 GOES HERE -->
            <p class="question">Why should you wrap your hands?</p>
            <div class="questions-container">
                <ul class="list">
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q1-answer" value="a" id="a">
                        <label for="a" class="label">Because it looks
                            cool.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q1-answer" value="b" id="b">
                        <label for="b" class="label">To protect your wrists and
                            knuckles.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q1-answer" value="c" id="c">
                        <label for="c" class="label">So your punches are more
                            aerodynamic.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q1-answer" value="d" id="d">
                        <label for="d" class="label">To protect your beautiful face.</label>
                    </li>
                </ul>
            </div>
            <?php
                
        } elseif($_GET['id'] == 2) {
            ?>

            <!-- QUIZ 2 GOES HERE -->
            <p class="question">Why is it important to warm up?</p>
            <div class="questions-container">
                <ul class="list">
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q2-answer" value="a" id="a">
                        <label for="a" class="label">Because it's fun!</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q2-answer" value="b" id="b">
                        <label for="b" class="label">Because it feels nice to be warm.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q2-answer" value="c" id="c">
                        <label for="c" class="label">It's actually not that important.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q2-answer" value="d" id="d">
                        <label for="d" class="label">Because otherwise, injuries could occur.</label>
                    </li>
                </ul>
            </div>
            <?php

        } elseif($_GET['id'] == 3) {
            ?>

            <!-- QUIZ 3 GOES HERE -->
            <p class="question">Which part of your body is this pose stretching?</p>
            <img src="images/stretch_thumb.jpg" alt="A man stretching his lower body" class="question-img">
            <div class="questions-container">
                <ul class="list">
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q3-answer" value="a" id="a">
                        <label for="a" class="label">The hamstrings & calves.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q3-answer" value="b" id="b">
                        <label for="b" class="label">The buttocks.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q3-answer" value="c" id="c">
                        <label for="c" class="label">The Shoulders.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q3-answer" value="d" id="d">
                        <label for="d" class="label">The quadriceps.</label>
                    </li>
                </ul>
            </div>
            <?php

        }elseif($_GET['id'] == 4) {
            ?>

            <!-- QUIZ 4 GOES HERE -->
            <p class="question">Why should you keep your hands high at all times?</p>
            <div class="questions-container">
                <ul class="list">
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q4-answer" value="a" id="a">
                        <label for="a" class="label">To help protect your head and always be ready to strike.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q4-answer" value="b" id="b">
                        <label for="b" class="label">To look intimidating towards your opponent.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q4-answer" value="c" id="c">
                        <label for="c" class="label">As a beginner, it is not necessary to keep your hands high.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q4-answer" value="d" id="d">
                        <label for="d" class="label">To ensure your shoulders get a good workout.</label>
                    </li>
                </ul>
            </div>
            <?php

        }elseif($_GET['id'] == 5) {
            ?>

            <!-- QUIZ 5 GOES HERE -->
            <p class="question">What are the benefits of having the proper Muay Thai stance? &lpar;Check all that
                apply&rpar;</p>
            <div class="questions-container">
                <ul class="list">
                    <li class="list__item">
                        <input class="check-btn" type="checkbox" name="q5-checkbox-a" value="a" id="a">
                        <label for="a" class="check-label">Better balance.</label>
                    </li>
                    <li class="list__item">
                        <input class="check-btn" type="checkbox" name="q5-checkbox-b" value="b" id="b">
                        <label for="b" class="check-label">Looking like a pro.</label>
                    </li>
                    <li class="list__item">
                        <input class="check-btn" type="checkbox" name="q5-checkbox-c" value="c" id="c">
                        <label for="c" class="check-label">Ability to easily throw kicks or punches.</label>
                    </li>
                    <li class="list__item">
                        <input class="check-btn" type="checkbox" name="q5-checkbox-d" value="d" id="d">
                        <label for="d" class="check-label">Ability to react quickly.</label>
                    </li>
                </ul>
            </div>
            <?php

        }elseif($_GET['id'] == 6) {
            ?>

            <!-- QUIZ 6 GOES HERE -->
            <p class="question">What's wrong with this picture?</p>
            <img src="images/block6_thumb.jpg" alt="A man demonstrating the incorrect way of blocking a punch"
                class="question-img">
            <div class="questions-container">
                <ul class="list">
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q6-answer" value="a" id="a">
                        <label for="a" class="label">Nothing. This is the proper way to block.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q6-answer" value="b" id="b">
                        <label for="b" class="label">You will punch yourself in the face if you try to block this
                            way.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q6-answer" value="c" id="c">
                        <label for="c" class="label">The hands should be lower.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q6-answer" value="d" id="d">
                        <label for="d" class="label">The head should be held further back.</label>
                    </li>
                </ul>
            </div>
            <?php

        }elseif($_GET['id'] == 7) {
            ?>

            <!-- QUIZ 7 GOES HERE -->
            <p class="question">What is the main purpose of the teep/push kick?</p>
            <div class="questions-container">
                <ul class="list">
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q7-answer" value="a" id="a">
                        <label for="a" class="label">Annoy your opponent.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q7-answer" value="b" id="b">
                        <label for="b" class="label">Control the fight.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q7-answer" value="c" id="c">
                        <label for="c" class="label">Push your opponent back.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q7-answer" value="d" id="d">
                        <label for="d" class="label">All of the above.</label>
                    </li>
                </ul>
            </div>
            <?php

        }elseif($_GET['id'] == 8) {
            ?>

            <!-- QUIZ 8 GOES HERE -->
            <p class="question">Where does most of the power behind a roundhouse kick come from?</p>
            <div class="questions-container">
                <ul class="list">
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q8-answer" value="a" id="a">
                        <label for="a" class="label">The leg... Duh.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q8-answer" value="b" id="b">
                        <label for="b" class="label">The feet.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q8-answer" value="c" id="c">
                        <label for="c" class="label">The shoulders.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q8-answer" value="d" id="d">
                        <label for="d" class="label">The hips.</label>
                    </li>
                </ul>
            </div>
            <?php

        } elseif($_GET['id'] == 9) {
            ?>

            <!-- QUIZ 9 GOES HERE -->
            <p class="question">What type of punch is this?</p>
            <img src="images/strike3_thumb.jpg" alt="" class="question-img">
            <div class="questions-container">
                <ul class="list">
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q9-answer" value="a" id="a">
                        <label for="a" class="label">It's obiously an uppercut.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q9-answer" value="b" id="b">
                        <label for="b" class="label">It's a jab.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q9-answer" value="c" id="c">
                        <label for="c" class="label">It's a hook.</label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="q9-answer" value="d" id="d">
                        <label for="d" class="label">It's a cross.</label>
                    </li>
                </ul>
            </div>

            <?php
        } else {
            print '<h1>Sorry, there was an error.</h1>';
        }
    ?>

            <input class="submit-btn mb-3" type="submit" name="submit" value="Submit quiz">

    </div>

    </form>
</div>
</div>
<?php 
    include("includes/footer.inc.php");
?>