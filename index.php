<?php
if(!defined('ROOT')) exit('No direct script access allowed');

loadModule("pages");

if(!isset($_REQUEST['panel'])) $_REQUEST['panel']="updates";

$pageOptions=[
		"toolbar"=>[
      ["title"=>"Search Store","type"=>"search","align"=>"right"],
		    
      "updates"=>["title"=>"Updates","align"=>"right","class"=>($_REQUEST['panel']=="updates")?"active":""],
			"market"=>["title"=>"Market","align"=>"right","class"=>($_REQUEST['panel']=="market")?"active":""],
			"installed"=>["title"=>"Installed","align"=>"right","class"=>($_REQUEST['panel']=="installed")?"active":""],
			// ['type'=>"bar"],

     "refreshStore"=>["icon"=>"<i class='fa fa-refresh'></i>"],
			
			
// 			 "createNew"=>["icon"=>"<i class='fa fa-plus'></i>","tips"=>"Create New"],
// 			['type'=>"bar"],
// 			"trash"=>["icon"=>"<i class='fa fa-trash'></i>"],
		],
		"contentArea"=>"pageContentArea"
	];

function pageContentArea() {
  return "<h3 align=center>eStore Coming Soon</h3>";
}

echo _css("eStore");
echo _js(["eStore"]);

printPageComponent(false,$pageOptions);
?>
