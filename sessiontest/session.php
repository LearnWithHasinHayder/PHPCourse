<?php
session_name('ourapp');
session_start([
	'cookie_domain'=>'.st.com',
	'cookie_path'=>'/'
]);
$_SESSION['data']='Hello World 123';
echo $_SESSION['data'];
