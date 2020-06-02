<?php 
    include("includes/head.inc.php");
    require("includes/connection.inc.php");
    include("includes/nav.inc.php");
?>

<div class="certificate-container">
    <img class="certificate" src="images/certificate.png"
        alt="Certficate of accomplishment for <?php print $_SESSION['name']; ?>">
    <?php 
        if(isset($_SESSION['name']) && isset($_SESSION['lastName'])){
            ?>
    <h2 class="certificate-name"><?php print $_SESSION['name'].' '.$_SESSION['lastName']; ?></h2>
    <?php
        }
        ?>
</div>
<button onclick="printCert()" class="btn center mb-3">Print my Certificate</button>
<?php 
    include("includes/footer.inc.php");
?>