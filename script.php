<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 16.01.2016
 * Time: 12:05
 */

$uploadFolder = './uploads/';
$uploadFile = $uploadFolder.basename($_FILES['fileToUpload']['name']);

if ((copy($_FILES['fileToUpload']['tmp_name'], $uploadFile)) == true)
{
    echo "Перемога";
}
else {
    echo "Зрада";
    exit;
}
?>
<br>
<?php
$dir = (opendir('./uploads/'));
$fileArray = scandir($uploadFolder);
?>

<h3>Upload last file info: </h3>
Original file name: "<?php echo $_FILES['fileToUpload']['name']?>"
<br>File type: "<?php echo $_FILES['fileToUpload']['type']?>"
<br>File size "<?php echo $_FILES['fileToUpload']['size']?>"
<!--<br>File tmp_name "--><?php //echo $_FILES['fileToUpload']['tmp_name']?><!--"-->
<br><br>

<table border="1">
    <tr>
        <td><b>Назва</b></td>
        <td><b>Розмір</b></td>
        <td><b>Тип</b></td>
        <td><b>Дата зміни</b></td>
    </tr>
    <?php
        for($x = 2; $x < count($fileArray); $x++):?>
            <tr><td><a href= "<?php echo $uploadFolder . $fileArray[$x] ?>"><?php echo $fileArray[$x] ?></a></td>
            <td><?php echo filesize($uploadFolder . $fileArray[$x]) ?> байт</td>
            <td><?php echo filetype($uploadFolder . $fileArray[$x]) ?></td>
            <td><?php echo date("d.m.y H:i", filectime($uploadFolder . $fileArray[$x])) ?></td>
            </tr>
    <?php endfor?>
</table>

<?php closedir($dir) ?>


