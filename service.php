<?php
if(!defined('ROOT')) exit('No direct script access allowed');

switch($_REQUEST['action']){
  case "list":
    break;
  case "gridhtml":
      include __DIR__."/comps/grid.php";
      break;
}
?>