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
            'caption'
            ],
            'html' => function($tag) {
                return '<figure><audio controls class="audio_item"><source src="'.$tag->audio.'" type="audio/mpeg">Your browser does not support the audio element.</audio><figcaption>'.$tag->caption.'</figcaption></figure>';
            }
        ],
        'videoembed' => [
            'attr' => [
            'videoembed',
            'caption'
            ],
            'html' => function($tag) {
                return '<figure><video controls class="video_item"><source src="'.$tag->videoembed.'" type="video/mp4">Your browser does not support the video element.</video><figcaption>'.$tag->caption.'</figcaption></figure>';
            }
        ]
    ]
]);