<?php
session_name('ourapp');
session_start([
	'cookie_domain'=>'.st.com',
	'cookie_path'=>'/'
]);
echo $_SESSION['data'];
echo "<br/>";
echo $_SESSION['data2'];