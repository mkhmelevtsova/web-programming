<?php include "header.php"; ?>

<textarea disabled id="fileInformation" wrap="off">
    <?php
    //$dir = "/xampp/htdocs/LB5/";
    $dir = getcwd();
    if (is_dir($dir)) // является ли путь каталогом
    {
        if ($dh = opendir($dir)) // открываем каталог
        {
            while (($file = readdir($dh)) !== false) {
                // пропускаем символы .. и .
                if ($file == '.' || $file == '..') continue;
                // если каталог или файл
                if (is_file($file)) {
                    $filetype = filetype($file);
                    $filesize = filesize($file);
                    if (strlen($file) > 15)
                        echo "$file\t$filetype\t$filesize\t\t" . date("F d Y H:i:s.", filectime($file)) . "\n";
                    else
                        echo "$file\t\t$filetype\t$filesize\t\t" . date("F d Y H:i:s.", filectime($file)) . "\n";
                } else {
                    echo "каталог: $file\n";
                }
            }
            closedir($dh); // закрываем каталог
        }
    }
    ?>
</textarea>

<?php include "footer.php"; ?>