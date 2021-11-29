<?php
$user_ids = array(1, 2, 3);
$user_id_key = array_rand($user_ids, 1);
$session_user_id = $user_ids[$user_id_key];
$mysqli = new mysqli("127.0.0.1", "root", "135798642", "productsdb", 3306);
if (($handle = fopen($_FILES['csv-file']['tmp_name'], "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
       if ($session_user_id == $data[5]) {
            $mysqli->query("INSERT INTO products (`name`, code, price, preview_text, detail_text, user_id) VALUES('$data[0]','$data[1]','$data[2]','$data[3]', '$data[4]', '$data[5]')");
        }
    }
    fclose($handle);
}
?>
