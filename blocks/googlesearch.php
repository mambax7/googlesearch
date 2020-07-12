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

function b_googlesearch_show()
{
  $block['lang_gs_heading'] = GS_HEADING;
  $block['lang_servername'] = $_SERVER['HTTP_HOST'];
  $block['lang_gs_searchtext'] = GS_SEARCHTEXT;
  $block['lang_gs_safes'] = GS_SAFES;
  $block['lang_gs_googles'] = GS_GOOGLES;
  $block['lang_gs_nofilt'] = GS_NOFILT;
  $block['lang_gs_filtw'] = GS_FILTW;
  $block['lang_gs_safesearch'] = GS_SAFESEARCH;
  $block['lang_gs_advsearch'] = GS_ADVSEARCH;
  
  return $block;
}
?>