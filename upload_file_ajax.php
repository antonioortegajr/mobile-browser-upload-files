<?php
set_time_limit(0);
function upload_time() {
    list($msec, $sec) = explode(" ", microtime());
    return ((int)$sec . (int)($msec * 100000000));
}
if (!empty($_FILES['file']['name'])) {

    $file = $_FILES['file'];
    move_uploaded_file($file['tmp_name'], upload_time() . $file['name']);
}
?>
