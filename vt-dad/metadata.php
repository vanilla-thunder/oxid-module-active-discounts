<?php
/**
 * vt Displaying Active Discounts
 * 
 * Copyright (C) 2012  Marat Bedoev
 * license GPL v3
 * 
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General
 * Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see <http://www.gnu.org/licenses/>
 */
$aModule = array(
		'id' => 'vt-dad',
      'title' => '<strong style="color:#c700bb;border: 1px solid #c700bb;padding: 0 2px;background:white;">VT</strong> Displaying Active Discounts',
      'description' => 'displaying active discounts in articles detail information',
      'thumbnail' => 'oxid-vt.jpg',
      'version' => '1.0',
      'author' => 'Marat Bedoev',
      'email' => 'oxid@marat-bedoev.net',
      'url' => 'https://github.com/vanilla-thunder/',
		'extend' => array(
				'oxarticle' => 'vt-dad/oxarticle_vtdad'
		),
		'templates' => array(
				'article-discounts.tpl' => 'vt-dad/out/tpl/article-discounts.tpl'
		),
		'blocks' => array(
				array('template' => 'page/details/inc/productmain.tpl', 'block' => 'details_productmain_price', 'file' => 'details_productmain_price.tpl')
		),
);