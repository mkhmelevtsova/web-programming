<?php include "./Views/header.php"; ?>?>
<textarea disabled id="result">
    <?php
    echo "\n\nServer var:\n";
    foreach ($_SERVER as $val) {
        echo "$val\n";
    }
    echo "\n\nPost var:\n";
    foreach ($_POST as $val) {
        echo "$val\n";
    }
    echo "\n\nGet var:\n";
    foreach ($_GET as $val) {
        echo "$val\n";
    }

    ?>
</textarea>
<?php include "./Views/footer.php"; ?>