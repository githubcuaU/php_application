
<?php include("view/vehicle_header.php") ?>

<p><?php echo $error_message ?></p>

<?php
    $goBack = htmlspecialchars($_SERVER['HTTP_REFERER']);
    echo "<a href='$goBack'>Go back to vehicle list</a>";
?>

<?php include("view/footer.php") ?>