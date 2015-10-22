<?php
echo '<img src="assets/unnamed.png"><br><br>';
set_time_limit(0);
function upload_time() {
    list($msec, $sec) = explode(" ", microtime());
    return ((int)$sec . (int)($msec * 100000000));
}
if (!empty($_FILES['files']['name'][0])) {

    $files = $_FILES['files'];
    for ($i = 0; $i < count($files['name']); $i++) {

        if ($files['error'][$i] == 0) {
$moved_file ='images/'.upload_time() . $files['name'][$i];
          move_uploaded_file($files['tmp_name'][$i], $moved_file);
          echo 'file uploaded. Remember to hydrate<br><br>';

        }

    }
}

echo '<script type="text/javascript">
function goback(){
window.location = "http://antoniowp.idxsandbox.com/nar15/"
 }
 setTimeout(goback, 3000);
</script>';
?>
