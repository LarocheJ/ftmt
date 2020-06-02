<?php 
    include("includes/head.inc.php");
    require("includes/connection.inc.php");
    include("includes/nav.inc.php");
?>

<div class="wrapper">
    <div class="quiz-container">
        <form action="quiz-result.php" method="post">
            <p class="question">What is <span class="bold">not required</span> to get started with this course?
                &lpar;Check all
                that
                apply&rpar;</p>
            <div class="questions-container">
                <ul class="list">
                    <li class="list__item">
                        <input class="check-btn" type="checkbox" name="m1-checkbox-a[]" value="a" id="a">
                        <label for="a" class="check-label">Enough room to be able to kick.</label>
                    </li>
                    <li class="list__item">
                        <input class="check-btn" type="checkbox" name="m1-checkbox-b[]" value="b" id="b">
                        <label for="b" class="check-label">A partner.</label>
                    </li>
                    <li class="list__item">
                        <input class="check-btn" type="checkbox" name="m1-checkbox-c[]" value="c" id="c">
                        <label for="c" class="check-label">Stretching.</label>
                    </li>
                    <li class="list__item">
                        <input class="check-btn" type="checkbox" name="m1-checkbox-d[]" value="d" id="d">
                        <label for="d" class="check-label">A punching bag.</label>
                    </li>
                    <li class="list__item">
                        <input class="check-btn" type="checkbox" name="m1-checkbox-e[]" value="e" id="e">
                        <label for="e" class="check-label">Muay Thai wraps.</label>
                    </li>
                    <li class="list__item">
                        <input class="check-btn" type="checkbox" name="m1-checkbox-f[]" value="f" id="f">
                        <label for="f" class="check-label">Warming up.</label>
                    </li>
                </ul>
            </div>

            <input class="submit-btn mb-3" type="submit" name="module1_submit" value="Submit test">
        </form>
    </div>
</div>

<?php 
    include("includes/footer.inc.php");
?>