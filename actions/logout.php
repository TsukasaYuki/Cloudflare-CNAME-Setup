<?php
/*
 * Logout action.
 */

if(!isset($tlo_id)){ exit; }

setcookie('cloudflare_email', null, -1, '/');
setcookie('user_key', null, -1, '/');
setcookie('user_api_key', null, -1, '/');

$msg = '<p>'._('Success').', <a href="?">'._('Go to console').'</a></p>';
echo $msg;
