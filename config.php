<?php
	/*** YOUR WEBSITE CONFIG ***/

$config = array(
    /*** Database Config ***/
'LOCALHOST' => 'localhost', // mysql host service
'USERNAME' => 'tpkmlgamingml_mesen', // username
'PASSWORD' => 'tpkmlgamingml_mesen', // password
'DATABASE' => 'tpkmlgamingml_mesen', // database name

'facebook_app_id' => 'null',
'facebook_app_key' => 'null',
'home' => 'null', // url website có ssl và không có / ở cuối

    /*** Gạch Thẻ Config ***/   
'CALLBACK_URL' => 'http://'.$_SERVER['SERVER_NAME'].'/model/card_callback.php', // Không thay đổi
'version' => '6.0.0', // Phiên bản mã nguồn hiện tại
'author' => 'Hưng Play',
'contact' => 'https://facebook.com/web.hungplay'
);
?>