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
        ],
        'audio' => [
            'attr' => [
            'audio',
            'subtitle'
            ],
            'html' => function($tag) {
                return '<figure><audio controls class="audio_item"><source src="'.$tag->audio.'" type="audio/mpeg">Your browser does not support the audio element.</audio><figcaption>'.$tag->subtitle.'</figcaption></figure>';
            }
        ]
    ]
]);