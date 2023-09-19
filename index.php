<?php 
  $domain = strtolower($_SERVER['HTTP_HOST']);
  switch($domain){
    case 'code2.whitehot.ninja':         $token = 'a'; break;
    case 'games2.whitehot.ninja':        $token = 'b'; break;
    case 'words2.whitehot.ninja':        $token = 'c'; break;
    case 'demo2.whitehot.ninja':         $token = 'd'; break;
    case 'audiocloud2.whitehot.ninja':   $token = 'e'; break;
    case 'cobbmtnflwrs.whitehot.ninja': $token = 'f'; break;
    case 'efx.whitehot.ninja':          $token = 'g'; break;
    case 'renderefx.whitehot.ninja':    $token = 'h'; break;
    case 'jsbot.whitehot.ninja':        $token = 'i'; break;
    case 'assets.whitehot.ninja':       $token = 'j'; break;
    //case '.whitehot.ninja':           $token = 'k'; break;
    //case '.whitehot.ninja':           $token = 'l'; break;
    //case '.whitehot.ninja':           $token = 'm'; break;
  }
  echo "<meta http-equiv=\"Refresh\" content=\"0; url='/$token/'\" />";
?>

