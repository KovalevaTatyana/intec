<?php
$mysqli = new mysqli("127.0.0.1", "root", "135798642", "productsdb", 3306);

echo $mysqli->host_info . "\n";
// $row = 1;
// if (($handle = fopen($_FILES['csv-file']['tmp_name'], "r")) !== FALSE) {
//     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//         $num = count($data);
//         echo "<p> $num полей в строке $row: <br /></p>\n";
//         $row++;
//         for ($c=0; $c < $num; $c++) {
//             echo $data[$c] . "<br />\n";
//         }
//     }
//     fclose($handle);
// }
?>
