<?php

return array(
    //'name'=>'Resume Game',
	'defaultController'=>'site',    
	'components'=>array(
		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName' => false,
			'rules'=>array(
                'shulan/index/<g:\w>'=>'shulan/index',
			),
		),
	),
);