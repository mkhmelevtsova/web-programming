<?php include "Views/header.php"; 

require 'getVariable.php';
$width = getVariable('Width','400','POST');
$height = getVariable('Height', '300', 'POST');
$imageWidth;
$imageHeight;
$image;

$imageName = null;
$isShowImage = false;

if (getVariable("readyForUpload", 0, "POST") == 1) {
    $file = $_FILES['imageFile']['tmp_name'];
    if (file_exists($file) && $file != "") {
        $imageType = mime_content_type($file);
        
        switch ($imageType) {
            case 'image/jpeg': $image = imagecreatefromjpeg($file); break;
            case 'image/png': $image = imagecreatefrompng($file); break;
            case 'image/gif': $image = imagecreatefromgif($file); break;
            default: $imageType = false; break;
        }
        if ($imageType != false) {
            $imageWidth = imagesx($image);
            $imageHeight = imagesy($image);

            $newHeight = ($imageHeight / $imageWidth) * $width;
            $newWidth = $width;
            if ($newHeight > $height) {
                $newHeight = $height;
                $newWidth = ($imageWidth / $imageHeight) * $height;
            }

            $resizedImage = imagecreatetruecolor($newWidth,$newHeight);
            imagefill($resizedImage, 0, 0, imagecolorallocate($resizedImage, 255, 255, 255));
            imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, 
            $imageWidth, $imageHeight);

            switch($imageType) {
                case 'image/jpeg':
                    $imageName = 'Pictures/resize.jpg';
                    imagejpeg($resizedImage, $imageName); break;
                case 'image/png':
                    $imageName = 'Pictures/resize.png';
                    imagepng($resizedImage, $imageName); break;
                case 'image/gif':
                    $imageName = 'Pictures/resize.gif';
                    imagegif($resizedImage, $imageName); break;
                default: break;
            }

            if ($resizedImage != "") {
                $isShowImage = true;
            }

            imagedestroy($resizedImage);
            imagedestroy($image);
        }
    }
}

?>

<div class="main-area">
    <form class="news-article text-center" enctype="multipart/form-data" method="post">
        <?php 
            if ($isShowImage)
            {
                $host = SITE_HOST;
                $rand = rand(0,2147483647);
                echo '<h3 class=\'result-str\'>Результат:</h3>';
                echo "<div class=\"inline-block resize-img\"/>";
                echo "<img alt=\"\"src=\"$host$imageName\">";
                echo "</div><br>";
            }
        ?>
        <div class="width-div">
            <h3><p>Ширина:</p> <input type="number"  required min="200" max="2048" step="1" name="Width"/> </h3>
        </div>
        <div class="height-div">
            <h3><p>Высота:</p> <input type="number"  required min="200" max="2048" step="1" name="Height"/> </h3>
        </div>
        <br>
        <input class="input-image" name="imageFile" type="file" required/>
        <br>
        <br>
        <input class="button-blue" type="submit" value="Сжать!" />
        <input type="hidden" name="readyForUpload" value="1"/>
    </form>
</div>

<?php include "Views/footer.php"; ?>