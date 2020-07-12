<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
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
$modversion['name'] = _MI_GOOGLESEARCH_NAME;
$modversion['version'] = 0.10;
$modversion['description'] = _MI_GOOGLESEARCH_DESC;
$modversion['author'] = "Seventhseal (John Horne)";
$modversion['credits'] = "John Horne<br />( http://xoops.ibdeeming.com/ )<br />The BEST XOOPing Mods";
$modversion['help'] = "googlesearch.html";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 1;
$modversion['image'] = "images/google_slogo.png";
$modversion['dirname'] = "googlesearch";

// Blocks
$modversion['blocks'][1]['file'] = "googlesearch.php";
$modversion['blocks'][1]['name'] = _MI_GOOGLESEARCH_BNAME1;
$modversion['blocks'][1]['description'] = "Search Google or this site";
$modversion['blocks'][1]['show_func'] = "b_googlesearch_show";
$modversion['blocks'][1]['template'] = 'googlesearch_block.html';

// Menu
$modversion['hasMain'] = 1;
$modversion['sub'][1]['name'] = _MI_GOOGLESEARCH_SMNAME1;
$modversion['sub'][1]['url'] = "index.php";

// Templates
$modversion['templates'][1]['file'] = 'googlesearch.html';
$modversion['templates'][1]['description'] = 'Extended Google Search file';
?>
