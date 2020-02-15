<?php include "header.php"; ?>

<table>
    <tr>
        <th id="name">Name</th>
        <th id="type">Type</th>
        <th id="size">Size</th>
        <th id="date">Creation Date</th>
    </tr>
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
                    $time = date("F d Y H:i:s.", filectime($file));
                    echo "<tr><td>$file</td><td>$filetype</td><td>$filesize</td><td>$time</td></tr>";
                } else {
                    echo "<tr><td>$file</td><td></td><td></td><td></td></tr>";
                }
            }
            closedir($dh); // закрываем каталог
        }
    }
    ?>
</table>

<?php include "footer.php"; ?>