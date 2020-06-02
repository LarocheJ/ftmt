<?php 
    include("includes/head.inc.php");
    require("includes/connection.inc.php");
    include("includes/nav.inc.php");
    include("includes/modals.inc.php");
	
	$id = $_GET['id'];

	$query = "SELECT * FROM chapter WHERE id=$id";
    $sql = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($sql);
    $title = $row['chapter'];
    $image = $row['image'];
    $video = $row['video'];
    $before_video= $row['before_video'];
    $after_video= $row['after_video'];

    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

?>

<div class="wrapper">
    <h1 class="heading-1"><?php print $title; ?></h1>
    <img class="header-img" src="images/<?php print $image; ?>" alt="<?php print $image; ?>">
    <p class="before_video"><?php print $before_video; ?></p>

    <video class="video" width="100%" height="auto" loop autoplay muted>
        <!--<source src="aotearoa.webm"> same video quality in smaller file size width="100%"-->
        <source src="videos/<?php print $video;?>" type="video/mp4">
        <!--list them in order of file size-->
    </video>
    <p class="after_video"><?php print $after_video; ?></p>

    <a href="quiz.php?id=<?php print $id ?>" class="btn mb-3">Take the quiz</a>

</div>

<?php 
    include("includes/footer.inc.php");
?>