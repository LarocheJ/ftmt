<?php 
    include("includes/head.inc.php");
    require("includes/connection.inc.php");
    include("includes/nav.inc.php");
?>

<div class="wrapper">
    <div class="quiz-container">
        <form action="quiz-result.php" method="post">
            <p class="question">Your opponent is going for a roundhouse kick towards your legs, what do you do?
            </p>
            <div class="questions-container">
                <ul class="list">
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="m2-answer" value="a" id="a">
                        <label for="a" class="label"><img src="images/block3_thumb.jpg" alt=""></label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="m2-answer" value="b" id="b">
                        <label for="b" class="label"><img src="images/block_thumb.jpg" alt=""></label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="m2-answer" value="c" id="c">
                        <label for="c" class="label"><img src="images/block4_thumb.jpg" alt=""></label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="m2-answer" value="d" id="d">
                        <label for="d" class="label"><img src="images/clothing_thumb.jpg" alt=""></label>
                    </li>
                </ul>
            </div>

            <input class="submit-btn mb-3" type="submit" name="module2_submit" value="Submit test">
        </form>
    </div>
</div>

<?php 
    include("includes/footer.inc.php");
?>