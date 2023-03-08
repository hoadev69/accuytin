<?php
	/*** YOUR WEBSITE CONFIG ***/

$config = array(
    /*** Database Config ***/
'LOCALHOST' => 'localhost', // mysql host service
'USERNAME' => '', // username
'PASSWORD' => '', // password
'DATABASE' => '', // database name

'facebook_app_id' => 'xxx',
'facebook_app_key' => 'xxx',
'home' => 'https://shopmathuat.com',

    /*** Gạch Thẻ Config ***/   
'CALLBACK_URL' => 'http://'.$_SERVER['SERVER_NAME'].'/model/card_callback.php' // Không thay đổi
);
?>