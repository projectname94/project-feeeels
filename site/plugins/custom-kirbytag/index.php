<?php 

Kirby::plugin('your/plugin', [
    'tags' => [
        'footnote' => [
        	'attr' => [
        	'footnote',
            'internalid',
        	'text'
      		],
            'html' => function($tag) {
                return '<button id="'.$tag->internalid.'" data-target="footnote_'.$tag->internalid.'" class="footnote_button">'.$tag->text.'<sup>'.$tag->footnote.'</sup></button><span id="'.$tag->internalid.'_container" class="mobile_footnote_container"></span>';
            }
        ]
    ]
]);