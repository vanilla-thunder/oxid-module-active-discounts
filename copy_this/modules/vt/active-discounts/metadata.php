<?php
/**
 * [vt] active-discounts
 * Copyright (C) 2018  Marat B. 
 * info:  schwarzarbyter@gmail.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */
$aModule = [
    'id'          => 'active-discounts',
    'title'       => '[vt] Displaying Active Discounts',
    'description' => 'displaying active discounts on product pages',
    'thumbnail'   => '../oxid-vt.jpg',
    'version'     => '2.0.0 (2018-3-13)',
    'author'      => 'Marat B. ',
    'email'       => 'schwarzarbyter@gmail.com',
    'url'         => 'https://github.com/vanilla-thunder/oxid-module-active-discounts',
    'extend'      => [ 'oxarticle' => 'vt/active-discounts/application/extend/oxarticle_vtdad' ],
    'blocks'      => [
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block'    => 'details_productmain_price',
            'file'     => '/application/views/blocks/details_productmain_price.tpl'
        ],[
            'template' => 'page/checkout/inc/basketcontents_table.tpl',
            'block'    => 'dd_checkout_inc_basketcontents_table_item_desc',
            'file'     => '/application/views/blocks/dd_checkout_inc_basketcontents_table_item_desc.tpl'
        ]


    ]
];