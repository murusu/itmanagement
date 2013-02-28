<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',
	'import' => array(
                'application.components.helpers.CLI',
        ),
    'commandMap' => array(
                'emessage' => array(
                        'class' => 'application.commands.EMessageCommand',
                ),
    ),
);