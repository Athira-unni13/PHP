<?php
  setcookie("fav_food", "pizza",time() +(84600*2) ,"/");
  setcookie("fav_song", "perfect",time() +(84600*3) ,"/");
  setcookie("fav_dress", "sari",time() +(84600*4) ,"/");
/*
  foreach($_COOKIE as $key => $value){
    echo"{$key} = {$value}<br>";
  }
*/
  if(isset($_COOKIE["fav_food"])){
    echo"buy some {$_COOKIE["fav_food"]}";
  }
  else{
    echo"You don't have any favourite food";
  }
?>