<?php 

return [
  'routes' => [
    [
      'pattern' => '(:any)/(:all)',
      'action'  => function ($any, $all) {
        
      		
			      	$data = [
			          'current_entry' => $all
			        ];                   

			        return page($any)->render($data);	
      			      	

      }
    ]
  ]
];