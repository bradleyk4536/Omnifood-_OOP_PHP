<?php
//	create constants for file path
	defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
	defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'xampp' . DS . 'htdocs' . DS . 'Omnifoods');
	defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS . 'admin' . DS . 'includes' . DS);
	require_once(INCLUDES_PATH.DS."database/functions.php");
	require_once(INCLUDES_PATH.DS."database/db_config.php");
	require_once(INCLUDES_PATH.DS."database/db_crud.php");
	require_once(INCLUDES_PATH.DS."database/db_object.php");
	require_once(INCLUDES_PATH.DS."admin_class/media_upload.php");
	require_once(INCLUDES_PATH.DS."admin_class/user.php");
	require_once(INCLUDES_PATH.DS."admin_class/role.php");
	require_once(INCLUDES_PATH.DS."admin_class/hero.php");
	require_once(INCLUDES_PATH.DS."admin_class/section.php");
	require_once(INCLUDES_PATH.DS."admin_class/block_benefits.php");
	require_once(INCLUDES_PATH.DS."admin_class/testimonial.php");
	require_once(INCLUDES_PATH.DS."admin_class/populateSite.php");
//	require_once(INCLUDES_PATH.DS."comment.php");
	require_once(INCLUDES_PATH.DS."admin_class/session.php");
//	require_once(INCLUDES_PATH.DS."paginate.php");
?>
