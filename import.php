<?php
$mysqli = new mysqli("127.0.0.1", "root", "135798642", "productsdb", 3306);
if (($handle = fopen($_FILES['csv-file']['tmp_name'], "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
        }
        $mysqli->query("INSERT INTO products (`name`, code, price, preview_text, detail_text) VALUES('$data[0]','$data[1]','$data[2]','$data[3]', '$data[4]')");
    }
    fclose($handle);
}
?>
