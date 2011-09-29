<?PHP

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin.php";
//$modversion['adminmenu'] = "admin/menu.php";

$modversion['name'] = _MI_BDVD_NAME;
$modversion['version'] = 0.01;
$modversion['description'] = _MI_BDVD_DESC;
$modversion['author'] = _MI_BDVD_AUTHOR;
$modversion['credits'] = _MI_BDVD_CREDITS;
$modversion['help'] = _MI_BDVD_SUPPORT;
$modversion['license'] = "GNU/GPL";
$modversion['official'] = 1;
$modversion['image'] = "images/cdwriter_unmount.png";
$modversion['dirname'] = "build-dvd";

// Autotasks
$modversion['autotasks'][] = array(
	'enabled' => true,
	'name' => _MI_BDVD_ATNAME1,
	'code' => 'atask.php',
	'interval' => 60
);

// Menu
$modversion['hasMain'] = 0;

$i=0;
$modversion['templates'][$i]['file'] = 'build-dvd_admin_default.html';
$modversion['templates'][$i]['description'] = 'Template of the admin';

//config
$i=0;
$modversion['config'][$i]['name'] = 'build_dvd_path';
$modversion['config'][$i]['title'] = '_MI_BDVD_APP_PATHDSC';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = stristr(PHP_OS, 'WIN')?str_replace("\\",'/',dirname(__FILE__)).'/tools/windows/mkisofs':'';

$modversion['config'][++$i]['name'] = 'build_dvd_path2';
$modversion['config'][$i]['title'] = '_MI_BDVD_APP_PATH2DSC';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = stristr(PHP_OS, 'WIN')?str_replace("\\",'/',dirname(__FILE__)).'/tools/windows/httrack':'';

$modversion['config'][++$i]['name'] = 'build_dvd_path3';
$modversion['config'][$i]['title'] = '_MI_BDVD_APP_PATH3DSC';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = stristr(PHP_OS, 'WIN')?str_replace("\\",'/',dirname(__FILE__)).'/tools/windows/chrome':'';

?>