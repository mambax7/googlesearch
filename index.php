<?php
// $Id: index.php,v 1.1 2004/01/29 14:45:56 buennagel Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
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
include "../../mainfile.php";
$xoopsOption['template_main'] = 'googlesearch.html';
include XOOPS_ROOT_PATH."/header.php";

$xoopsTpl->assign('lang_gs_heading', GS_HEADING);
$xoopsTpl->assign('lang_gs_googles', GS_GOOGLES);
$xoopsTpl->assign('lang_gs_find', GS_FIND);
$xoopsTpl->assign('lang_gs_allwords', GS_ALLWORDS);
$xoopsTpl->assign('lang_gs_exactphrase', GS_EXACTPHRASE);
$xoopsTpl->assign('lang_gs_oneword', GS_ONEWORD);
$xoopsTpl->assign('lang_gs_noword', GS_NOWORD);
$xoopsTpl->assign('lang_gs_lang', GS_LANG);
$xoopsTpl->assign('lang_gs_retpagelang' , GS_RETPAGELANG);
$xoopsTpl->assign('lang_gs_anylang' , GS_ANYLANG);
$xoopsTpl->assign('lang_gs_fileformat' , GS_FILEFORMAT);
$xoopsTpl->assign('lang_gs_only' , GS_ONLY);
$xoopsTpl->assign('lang_gs_dont' , GS_DONT);
$xoopsTpl->assign('lang_gs_retresults' , GS_RETRESULTS);
$xoopsTpl->assign('lang_gs_anyformat' , GS_ANYFORMAT);
$xoopsTpl->assign('lang_gs_adobepdf' , GS_ADOBEPDF);
$xoopsTpl->assign('lang_gs_adobeps' , GS_ADOBEPS);
$xoopsTpl->assign('lang_gs_msword' , GS_MSWORD);
$xoopsTpl->assign('lang_gs_msexcel' , GS_MSEXCEL);
$xoopsTpl->assign('lang_gs_msppt' , GS_MSPPT);
$xoopsTpl->assign('lang_gs_rtf' , GS_RTF);
$xoopsTpl->assign('lang_gs_date' , GS_DATE);
$xoopsTpl->assign('lang_gs_dateret' , GS_DATERET);
$xoopsTpl->assign('lang_gs_anytime' , GS_ANYTIME);
$xoopsTpl->assign('lang_gs_past3m' , GS_PAST3M);
$xoopsTpl->assign('lang_gs_past6m' , GS_PAST6M);
$xoopsTpl->assign('lang_gs_pasty' , GS_PASTY);
$xoopsTpl->assign('lang_gs_numrange' , GS_NUMRANGE);
$xoopsTpl->assign('lang_gs_numret' , GS_NUMRET);
$xoopsTpl->assign('lang_gs_and' , GS_AND);
$xoopsTpl->assign('lang_gs_occur' , GS_OCCUR);
$xoopsTpl->assign('lang_gs_occurret' , GS_OCCURRET);
$xoopsTpl->assign('lang_gs_anywhere' , GS_ANYWHERE);
$xoopsTpl->assign('lang_gs_inthetitle' , GS_INTHETITLE);
$xoopsTpl->assign('lang_gs_inthetext' , GS_INTHETEXT);
$xoopsTpl->assign('lang_gs_intheurl' , GS_INTHEURL);
$xoopsTpl->assign('lang_gs_inthelinks' , GS_INTHELINKS);
$xoopsTpl->assign('lang_gs_resperpg' , GS_RESPERPG);
$xoopsTpl->assign('lang_gs_tenres' , GS_TENRES);
$xoopsTpl->assign('lang_gs_twntyres' , GS_TWNTYRES);
$xoopsTpl->assign('lang_gs_thrtyres' , GS_THRTYRES);
$xoopsTpl->assign('lang_gs_fiftyres' , GS_FIFTYRES);
$xoopsTpl->assign('lang_gs_hunres' , GS_HUNRES);
$xoopsTpl->assign('lang_gs_domain' , GS_DOMAIN);
$xoopsTpl->assign('lang_gs_dommsg' , GS_DOMMSG);
$xoopsTpl->assign('lang_gs_moreinfo' , GS_MOREINFO);
$xoopsTpl->assign('lang_gs_safes' , GS_SAFES);
$xoopsTpl->assign('lang_gs_nofilt' , GS_NOFILT);
$xoopsTpl->assign('lang_gs_filtw' , GS_FILTW);
$xoopsTpl->assign('lang_gs_safesearch' , GS_SAFESEARCH);
$xoopsTpl->assign('lang_gs_thissite', $_SERVER['HTTP_HOST']);

include XOOPS_ROOT_PATH.'/footer.php';
?>
