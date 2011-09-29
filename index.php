<?php
// $Id: index.php, v0.01 2009/04/23 20:40:00 MekDrop Exp $
//  ------------------------------------------------------------------------ //
//  Author: MekDrop	                                                     //
//  Email:  mekdrop@gmail.com                                                //
//                                                                           //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

$cwd = trim(getcwd());
if ((substr($cwd, -1) == "\\")||(substr($cwd, -1) == "/")) {
   $cwd = substr($cwd, 0, -1);
}
$part = substr($cwd, -strlen("modules\\build-dvd"));
if (($part == "modules\\build-dvd") || ($part == "modules/build-dvd")) {
	chdir("..\..");
}
include "mainfile.php";
//include('header.php');

// set headers
$file = ICMS_CACHE_PATH.'/site.iso';
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($file));
header('Location: ' . XOOPS_URL . '/' . substr(ICMS_CACHE_PATH, strlen(XOOPS_ROOT_PATH)) . '/site.iso' );

?>
