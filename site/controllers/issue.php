<?php 

return function ($page, $current_entry) {

	$issue = $page;
	$entry = null;
	
	if($page->find($current_entry)){
		$entry = $current_entry;
	}


  return [
    'issue' => $issue,
    'active_entry' => $entry
  ];
  
};