<?php

include '../../mainfile.php';
include XOOPS_ROOT_PATH.'/include/cp_functions.php';

if ( file_exists(XOOPS_ROOT_PATH.'/modules/build-dvd/language/'.$xoopsConfig['language'].'/modinfo.php') ) {
	include XOOPS_ROOT_PATH.'/modules/build-dvd/language/'.$xoopsConfig['language'].'/modinfo.php';
} else {
	include XOOPS_ROOT_PATH.'/modules/build-dvd/language/english/modinfo.php';
}

include_once XOOPS_ROOT_PATH.'/class/xoopsmodule.php';

xoops_cp_header();

if (file_exists(ICMS_CACHE_PATH.'/site.iso')) {
	$icmsAdminTpl->assign('last_build', sprintf('<a href="%s">%s</a>',
												XOOPS_URL.'/modules/build-dvd/index.php',
												date(_DATESTRING,filemtime(ICMS_CACHE_PATH.'/site.iso'))
											    ));
} else {
	$icmsAdminTpl->assign('last_build', _MI_BDVD_LASTBUILD_NO);
}

$icmsAdminTpl->display('db:build-dvd_admin_default.html');

xoops_cp_footer();

?>