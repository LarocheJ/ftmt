<nav class="<?php
    if(isset($_SESSION['name'])){
        print 'dark-nav';
    }
?>">
    <a href="index.php">
        <img id="logo" src="images/ftmt.svg" alt="First Time Muay Thai Logo">
    </a>
    <div>
        <?php
            if(isset($_SESSION['name'])){
                ?>
        <a href="user-profile.php">Dashboard</a>
        <a class="border" href="logout.php">Logout</a>
        <?php
            } else {
                ?>
        <a class="modal-btn border" data-modal="modal-login" href="#">Login</a>
        <?php
            }
        ?>
    </div>
</nav>