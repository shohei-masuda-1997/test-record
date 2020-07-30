<?php
ini_set("display_errors",1);
session_start();
function h($s){
  return htmlspecialchars($s,ENT_QUOTES,"UTF-8");
}
