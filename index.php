<?php 
    include("includes/head.inc.php");
    require("includes/connection.inc.php");
?>
<main>
    <?php 
        include("includes/nav.inc.php");
        include("includes/modals.inc.php");
    ?>
    <div class="container">
        <h1>First Time Muay Thai</h1>
        <h2>Muay Thai for the socially awkward</h2>
        <a class="btn modal-btn center" data-modal="modal-signup" href="#">Get Started</a>
    </div>
</main>

<section id="history">
    <div class="container">
        <article>
            <h3>What is Muay Thai?</h3>
            <p>When you first hear of Muay Thai, it may sound like a type of Thai food, however, Muay Thai is a
                full-body combat sport that originated in Thailand. Muay Thai is often referred to as “the art of eight
                limbs” because it utilizes fists, elbows, shins, and knees throughout the combat. It is considered to be
                one of the best fighting styles used in MMA with boxing coming in close behind. It’s not only great for
                professionals in MMA, but is very popular to learn for working out, because it uses the whole body when
                you are practicing Muay Thai. This online course will take you through the basics of Muay Thai so that
                you
                can practice at home. That way, if you’re interested in joining a Muay Thai gym, you will go in
                prepared! </p>
        </article>
        <article>
            <h3>History of Muay Thai</h3>
            <p>Muay Thai can be traced back to the middle of the 18th Century when there was a war between two groups
                known as the Burmese and the Siam. One of the Siam warriors was captured by the Burmese and given the
                opportunity to fight for his freedom where he would have to fight 10 of the Burmese warriors. He came
                out victorious against the 10 warriors and returned home as a hero, where his fighting style later
                became known as Muay Thai. This fighting style became a national sport where opponents would fight each
                other in front of an audience as entertainment. </p>
        </article>
    </div>
</section>


<section id="contact">
    <div class="container">
        <h3>Contact Us</h3>
        <p>Have a question or need help with something? Here is the best place to contact us!</p>
        <form action="#" method="post">
            <div class="input-container">
                <label for="name">Name</label>
                <input type="text" id="name">
            </div>

            <div class="input-container">
                <label for="email">Email</label>
                <input type="email" id="contact_email">
            </div>

            <div class="input-container">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>

            <input class="submit-btn" type="submit" name="submit" value="Send">
        </form>
        <p class="small-p">* This is a mock contact form. It will not actually send to anyone. Sorry...</p>
    </div>
</section>

<?php 
if(isset($_GET['error'])){
?>
<script>
alert("<?php print $_SESSION['message']; ?>");
</script>
<?php
}
?>

<?php 
    include("includes/footer.inc.php");
?>