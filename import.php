<?php
// print_r($_FILES['csv-file']);
// print_r($_FILES['csv-file']['full_path']);
// print_r($_FILES['csv-file']['tmp_name']);
$row = 1;
if (($handle = fopen($_FILES['csv-file']['tmp_name'], "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num полей в строке $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
?>