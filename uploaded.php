<?php


$dirname = "images/";
$images = glob($dirname."*");
foreach($images as $image) {
  if (stripos($image, '.j') !== FALSE || stripos($image, '.p')){
    //assume this is an image
     echo '<div style="display: inline-block"><a href="'.$image.'" target="_blank"><img src="'.$image.'" width="100px" /></a><br /><br /></div>';
   }
  else{
    //assume this is a file to be downloaded
      echo '<div style="display: inline-block"><a href="'.$image.'">'.$image.'</a></div>';
  }

}
?>
