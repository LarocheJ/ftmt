<?php 
    include("includes/head.inc.php");
    require("includes/connection.inc.php");

    if(isset($_SESSION['name'])){

    include("includes/nav.inc.php");

    $sql = "SELECT * FROM user WHERE email=?";
    $stmt = mysqli_stmt_init($connection);
    $user = mysqli_real_escape_string($connection, $_SESSION['email']);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_array($result);
?>


<div class="wrapper">
    <!-- BEGIN Hero wrapper -->
    <div class="hero">
        <h1>
            Welcome<?php 
        if(isset($_SESSION['name'])){
            print ', '. $_SESSION['name']; 
        } else {
            print '!';
        }
        
    ?>
        </h1>
        <h2>This is your Dashboard, where you can check your progress and pick up where you left off.</h2>
    </div>
    <!-- END hero wrapper -->

    <!-- BEGIN Chapter progress -->
    <div class="intro">
        <p>The goal is to complete all the chapters. Before proceeding to the next chapter, you must unlock the previous
            one. When they are all complete, you will receive a certificate that will prove you have completed the
            course.
            Feel free to hang it on your wall and show it off to your mom.</p>
        <p><span class="bold">Disclaimer:</span> This course will not prepare you to be the next UFC superstar.
            Furthermore,
            we do not condone violence in any way. This course is simply designed to get you comfortable with the sport
            should you choose to pursue it.</p>
    </div>
    <h2>Your Progress</h2>
    <div class="progress-container">
        <?php 
        $query = "SELECT * FROM chapter";
    ?>
        <a href="chapter1.php">
            <div class="circle full">1</div>
        </a>
        <a href="<?php 
                if($row['chapter1'] == "done"){
                    print 'chapter2.php';
                } else {
                    print '#';
                }
            ?>">
            <div class="circle <?php 
                if($row['chapter1'] == "done"){
                    print 'full';
                }
            ?>">2</div>
        </a>
        <a href="chapter3.php">
            <div class="circle <?php 
                if($row['chapter4'] == "done"){
                    print 'full';
                }
            ?>">3</div>
        </a>
        <a href="<?php 
                if($row['chapter3'] == "done"){
                    print 'chapter4.php';
                } else {
                    print '#';
                }
            ?>">
            <div class="circle <?php 
                if($row['chapter3'] == "done"){
                    print 'full';
                }
            ?>">4</div>
        </a>
        <a href="<?php 
                if($row['chapter4'] == "done"){
                    print 'chapter5.php';
                } else {
                    print '#';
                }
            ?>">
            <div class="circle <?php 
                if($row['chapter4'] == "done"){
                    print 'full';
                }
            ?>">5</div>
        </a>
        <a href="<?php 
                if($row['chapter5'] == "done"){
                    print 'chapter6.php';
                } else {
                    print '#';
                }
            ?>">
            <div class="circle <?php 
                if($row['chapter5'] == "done"){
                    print 'full';
                }
            ?>">6</div>
        </a>
        <a href="<?php 
                if($row['chapter6'] == "done"){
                    print 'chapter7.php';
                } else {
                    print '#';
                }
            ?>">
            <div class="circle <?php 
                if($row['chapter6'] == "done"){
                    print 'full';
                }
            ?>">7</div>
        </a>
        <a href="<?php 
                if($row['chapter7'] == "done"){
                    print 'chapter8.php';
                } else {
                    print '#';
                }
            ?>">
            <div class="circle <?php 
                if($row['chapter7'] == "done"){
                    print 'full';
                }
            ?>">8</div>
        </a>
        <a href="<?php 
                if($row['chapter8'] == "done"){
                    print 'chapter9.php';
                } else {
                    print '#';
                }
            ?>">
            <div class="circle <?php 
                if($row['chapter8'] == "done"){
                    print 'full';
                }
            ?>">9</div>
        </a>
    </div>
    <?php 
            if($row['chapter9'] == "done"){
                ?>
    <div class="complete">
        <h2>Congratulations!</h2>
        <p>You completed all the chapters and modules! Well done! That's all we have for you. Feel free to go back to
            any
            chapter and test your knowlege. Click below to check out and print your well deserved
            certificate.</p>
        <p><a class="btn" href="certificate.php">Certificate</a></p>
    </div>
    <?php
            }
        ?>
    <!-- END Chapter progress -->

    <!-- BEGIN Modules -->
    <div class="modules-container">
        <!-- BEGIN Module 1 -->
        <div class="hero">
            <h2>Module 1: Warm up &amp; Stretches</h2>
        </div>

        <!-- Chapter container -->
        <div class="chapters-container">
            <!-- Chapter 1 -->
            <a href="chapter1.php">
                <div class="chapter-box" id="chapter1">
                    <div class="chapter-overlay">What you’ll need</div>
                    <h3>Chapter 1</h3>
                </div>
            </a>

            <!-- Chapter 2 -->
            <?php 
            $query = "SELECT * FROM chapter";

            if($row['chapter1'] == "done"){
                ?>
            <a href="chapter2.php">
                <div class="chapter-box" id="chapter2">
                    <div class="chapter-overlay">Warm up</div>
                    <h3>Chapter 2</h3>
                </div>
            </a>
            <?php
                
            } else {
                ?>
            <div class="chapter-box">
                <h3>Chapter 2 Locked</h3>
                <div class="chapter-box-content locked" id="chapter2">
                </div>
            </div>
            <?php
            }
            ?>

            <!-- Chapter 3 -->
            <?php 
            if($row['chapter2'] == "done"){
                ?>
            <a href="chapter3.php" id="chapter3">
                <div class="chapter-box">
                    <div class="chapter-overlay">Stretches</div>
                    <h3>Chapter 3</h3>
                </div>
            </a>
            <?php
                
            } else {
                ?>
            <div class="chapter-box">
                <h3>Chapter 3 Locked</h3>
                <div class="chapter-box-content locked" id="chapter3">
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <!-- END Module 1 -->

        <!--BEGIN Module 2 -->
        <div class="hero">
            <h2>Module 2: Defense </h2>
        </div>

        <!-- Chapter container -->
        <div class="chapters-container">
            <!-- Chapter 4 -->
            <?php 
            if($row['chapter3'] == "done"){
                ?>
            <a href="chapter4.php">
                <div class="chapter-box" id="chapter4">
                    <div class="chapter-overlay">General defense knowledge</div>
                    <h3>Chapter 4</h3>
                </div>
            </a>
            <?php
                
            } else {
                ?>
            <div class="chapter-box">
                <h3>Chapter 4 Locked</h3>
                <div class="chapter-box-content locked" id="chapter4">
                </div>
            </div>
            <?php
            }
            ?>

            <!-- Chapter 5 -->
            <?php 
            if($row['chapter4'] == "done"){
                ?>
            <a href="chapter5.php">
                <div class="chapter-box" id="chapter5">
                    <div class="chapter-overlay">Stance</div>
                    <h3>Chapter 5</h3>
                </div>
            </a>
            <?php
                
            } else {
                ?>
            <div class="chapter-box">
                <h3>Chapter 5 Locked</h3>
                <div class="chapter-box-content locked" id="chapter5">
                </div>
            </div>
            <?php
            }
            ?>

            <!-- Chapter 6 -->
            <?php 
            if($row['chapter5'] == "done"){
                ?>
            <a href="chapter6.php">
                <div class="chapter-box" id="chapter6">
                    <div class="chapter-overlay">Blocking</div>
                    <h3>Chapter 6</h3>
                </div>
            </a>
            <?php
                
            } else {
                ?>
            <div class="chapter-box">
                <h3>Chapter 6 Locked</h3>
                <div class="chapter-box-content locked" id="chapter6">
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- END Module 2 -->

    <!-- BEGIN Module 3 -->
    <div class="hero">
        <h2>Module 3: Striking </h2>
    </div>

    <!-- Chapter container -->
    <div class="chapters-container">
        <!-- Chapter 7 -->
        <?php 
            if($row['chapter6'] == "done"){
                ?>
        <a href="chapter7.php">
            <div class="chapter-box" id="chapter7">
                <div class="chapter-overlay">The Teep/Push Kick</div>
                <h3>Chapter 7</h3>
            </div>
        </a>
        <?php
                
            } else {
                ?>
        <div class="chapter-box">
            <h3>Chapter 7 Locked</h3>
            <div class="chapter-box-content locked" id="chapter7">
            </div>
        </div>
        <?php
            }
            ?>

        <!-- Chapter 8 -->
        <?php 
            if($row['chapter7'] == "done"){
                ?>
        <a href="chapter8.php">
            <div class="chapter-box" id="chapter8">
                <div class="chapter-overlay">The Muay Thai Roundhouse Kick</div>
                <h3>Chapter 8</h3>
            </div>
        </a>
        <?php
                
            } else {
                ?>
        <div class="chapter-box">
            <h3>Chapter 8 Locked</h3>
            <div class="chapter-box-content locked" id="chapter8">
            </div>
        </div>
        <?php
            }
            ?>

        <!-- Chapter 9 -->
        <?php 
            if($row['chapter8'] == "done"){
                ?>
        <a href="chapter9.php">
            <div class="chapter-box" id="chapter9">
                <div class="chapter-overlay">Throwing a punch</div>
                <h3>Chapter 9</h3>
            </div>
        </a>
        <?php
                
            } else {
                ?>
        <div class="chapter-box">
            <h3>Chapter 9 Locked</h3>
            <div class="chapter-box-content locked" id="chapter9">
            </div>
        </div>
        <?php
            }
            ?>
    </div>
    <!-- END Module 3 -->
</div>
<!-- END Modules -->
<!-- END Wrapper -->
</div>

<?php 
    } else {
        header("Location: index.php");
        exit();
    }
    include("includes/footer.inc.php");
?>