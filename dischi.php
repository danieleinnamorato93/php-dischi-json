<?php
$dischi = file_get_contents('dischi.json');
if ($dischi === false) {
    echo json_encode(["error" =>"impossibile leggere il file JSON"]);

}else {
    header('Content-Type: application/json');
    echo $dischi;
}


echo $dischi;
?>