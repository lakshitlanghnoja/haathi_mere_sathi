<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['admin.modules'] = array('languages','menu','permissions','product','roles','role_management','settings','translate','urls','users');

/*
|--------------------------------------------------------------------
| MESSAGE TEMPLATE
|--------------------------------------------------------------------
| This is the template that Ocular will use when displaying messages
| through the message() function.
|
| To set the class for the type of message (error, success, etc),
| the {type} placeholder will be replaced. The message will replace
| the {message} placeholder.
|
*/
$config['theme.message_template'] = <<<EOD
 <div class="alert alert-block alert-{type} fade in notification" id="error_msg" onclick="hide_msg();">
		<a data-dismiss="alert" class="close" href="#">&times;</a>
		<div>{message}</div>
	</div>
EOD;

?>