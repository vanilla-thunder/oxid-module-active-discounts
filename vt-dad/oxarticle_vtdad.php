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
class oxarticle_vtdad extends oxarticle_vtdad_parent {

	// return discount active for this article
	public function getArticleDiscounts() {
		if( $this->skipDiscounts() ) {
			return false;
		}
		
		$oDiscountList = oxDiscountList::getInstance();
		$oDiscountList->getArticleDiscounts($this);
		return $oDiscountList;
	}
	
	// returns all active discounts 
	public function getAllDiscounts() {		
		if( $this->skipDiscounts() ) {
			return false;
		}
		
		$oDiscountList = oxDiscountList::getInstance();
		return $oDiscountList;
	}
}
