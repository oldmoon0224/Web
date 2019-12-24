<?php
for($x=0;$x<30;$x++)
{ 
    $imgtype = array("ANIMALS","ARCHITECTURE","NATURE","PEOPLE","TECH","any");
    $ImgURL = "https://placeimg.com/300/300/".$imgtype[rand(0,5)];
    echo "<img src='".$ImgURL."'/>".PHP_EOL;
}
?>