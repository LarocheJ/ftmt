<?php 
    include("includes/head.inc.php");
    require("includes/connection.inc.php");
    include("includes/nav.inc.php");
?>

<div class="wrapper">
    <div class="quiz-container">
        <form action="quiz-result.php" method="post">
            <p class="question">Which of these options do we call a cross?
            </p>
            <div class="questions-container">
                <ul class="list video-options grid-2-col">
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="m3-answer" value="a" id="a">
                        <label for="a" class="label"><video class="result-video" autoplay loop>
                                <source src="videos/kick_right.mp4">
                                Your browser does not support the video tag.
                            </video></label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="m3-answer" value="b" id="b">
                        <label for="b" class="label"><video class="result-video" autoplay loop>
                                <source src="videos/cross.mp4">
                                Your browser does not support the video tag.
                            </video></label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="m3-answer" value="c" id="c">
                        <label for="c" class="label"><video class="result-video" autoplay loop>
                                <source src="videos/hook.mp4">
                                Your browser does not support the video tag.
                            </video></label>
                    </li>
                    <li class="list__item">
                        <input class="radio-btn" type="radio" name="m3-answer" value="d" id="d">
                        <label for="d" class="label"><video class="result-video" autoplay loop>
                                <source src="videos/kick_sparta.mp4">
                                Your browser does not support the video tag.
                            </video></label>
                    </li>
                </ul>
            </div>

            <input class="submit-btn mb-3" type="submit" name="module3_submit" value="Submit test">
        </form>
    </div>
</div>

<?php 
    include("includes/footer.inc.php");
?>