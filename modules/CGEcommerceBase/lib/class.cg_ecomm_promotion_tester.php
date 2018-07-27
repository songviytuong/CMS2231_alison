<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: CGEcommerceBase (c) 2012 by Robert Campbell 
#         (calguy1000@cmsmadesimple.org)
#  An addon module for CMS Made Simple to provide a base communications
#  layer and common preference repository for his ecommerce suite of
#  modules for CMSMS.
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# However, as a special exception to the GPL, this software is distributed
# as an addon module to CMS Made Simple.  You may not use this software
# in any Non GPL version of CMS Made simple, or in any version of CMS
# Made simple that does not indicate clearly and obviously in its admin 
# section that the site was built with CMS Made simple.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------
#END_LICENSE

/**
 * This class describes the 'match' (if any) found after testing a series of items against 
 * some promotions.
 */
class cg_ecomm_promotion_match
{
  const OFFER_DISCOUNT = '__discount__';
  const OFFER_PERCENT = '__percent__';
  const OFFER_PRODUCTID = '__productid__';
  const OFFER_PRODUCTSKU = '__sku__';

  private $_source;
  private $_itemid;
  private $_sku;
  private $_name;
  private $_type;
  private $_val;
  private $_promo;
  private $_cart_idx = -1;
  private $_discount_amt;
  private $_cumulative = 0;

  /**
   * Constructor
   */
  public function __construct($type = self::OFFER_DISCOUNT,$val = 0.00)
  {
    $this->set_type($type);
    $this->set_val($val);
  }

  /**
   * Set the type of match
   */
  public function set_type($type)
  {
    switch( $type ) {
    case self::OFFER_DISCOUNT:
    case self::OFFER_PERCENT:
    case self::OFFER_PRODUCTID:
    case self::OFFER_PRODUCTSKU:
      $this->_type = $type;
      break;
      
    default:
      throw new CmsInvalidDataException('Invalid type: '.$type.' for '.__CLASS__);
    }
  }

  /**
   * Get the type of match
   */
  public function get_type()
  {
    return $this->_type;
  }

  /**
   * Get the name of the offer
   */
  public function set_name($name)
  {
    $this->_name = $name;
  }

  /**
   * Retrieve the name of the match
   */
  public function get_name()
  {
    return $this->_name;
  }

  /**
   * Get the value of the match 
   * In the case of a matched product this may be a product id or sku.
   * In the case of a percentage match this will be the percentage (as a decimal)
   * In the case of a fixed discount this will be the value of the discount
   */
  public function set_val($val)
  {
    $this->_val = $val;
  }

  /**
   * Retrieve the value of the match
   */
  public function get_val()
  {
    return $this->_val;
  }

  /**
   * Set the value of discount (in currency units)
   */
  public function set_discount_amt($discount_amt)
  {
    $this->_discount_amt = $discount_amt;
  }

  /**
   * Get the value of the discount
   */
  public function get_discount_amt()
  {
    return $this->_discount_amt;
  }

  /**
   * Set the promotion identifer that indicates what promotion we are referring to
   */
  public function set_promo($promo)
  {
    $this->_promo = $promo;
  }

  /**
   * Get the promotion identifier 
   */
  public function get_promo()
  {
    return $this->_promo;
  }

  /**
   * Set the supplier module.
   */
  public function set_supplier($supplier)
  {
    $this->_supplier = trim($supplier);
  }

  /**
   * Get the supplier module.
   */
  public function get_supplier()
  {
    return $this->_supplier;
  }

  /**
   * Set the supplier module unique id
   */
  public function set_itemid($itemid)
  {
    $this->_itemid = trim($itemid);
  }

  /**
   * Get the itemid module unique id
   */
  public function get_itemid()
  {
    return $this->_itemid;
  }

  /**
   * Set the unique sku of the match.
   */
  public function set_sku($sku)
  {
    $this->_sku = trim($sku);
  }

  /**
   * Get the sku module unique id
   */
  public function get_sku()
  {
    return $this->_sku;
  }

  /**
   * The index (in the cart) of the matched item... or -1
   */
  public function set_cart_idx($cart_idx)
  {
    $this->_cart_idx = (int)$cart_idx;
  }

  /**
   * Get the index (in the cart) of the matched item...
   */
  public function get_cart_idx()
  {
    return $this->_cart_idx;
  }

  /**
   * Wether this match can be applied to other matches.
   */
  public function set_cumulative($flag)
  {
    $this->_cumulative = (bool)$flag;
  }

  /**
   * Wether this match can be applied to other matches.
   */
  public function get_cumulative()
  {
    return $this->_cumulative;
  }

} // end of class

/**
 * An abstract class to pefrorm matches against promotions
 */
abstract class cg_ecomm_promotion_tester
{
  const TYPE_INSTANT = '_instant_';
  const TYPE_CHECKOUT = '_checkout_';
  private $_type = self::TYPE_CHECKOUT;
  private $_cart;
  private $_product;
  private $_feu_uid;
  private $_sku;
  private $_quantity;
  private $_skip_cart;
  private $_ignore_discounted = 0;

  public function __construct() {}

  /**
   * Set the type of promotions to match against
   */
  final public function set_promo_type($type)
  {
     switch( $type ) {
     case self::TYPE_INSTANT:
     case self::TYPE_CHECKOUT:
       $this->_type = $type;
       break;
     default:
       throw new CmsInvalidDataException('Invalid type specified for '.__CLASS__);
     }
  }

  /**
   * Get the promotion type 
   */
  final public function get_promo_type()
  {
    return $this->_type;
  }

  /**
   * Set the product that we are testing against
   */
  public function set_product(cg_ecomm_productinfo $product)
  {
    $this->_product = $product;
  }

  /**
   * Retrieve the product
   */
  final public function get_product()
  {
    return $this->_product;
  }

  /**
   * Set the cart items (for a cart match)
   * 
   * @param array Array of cg_ecomm_cartitem objects.
   */
  public function set_cart($items)
  {
    if( is_array($items) && count($items) ) {
      foreach( $items as $one ) {
	if( !is_a($one,'cg_ecomm_cartitem') ) {
	  throw new CmsInvalidDataException('attempt to set_cart in '.__CLASS__.' with invalid data');
	}
      }
      $this->_cart = $items;
    }
  }

  /**
   * Get the cart
   */
  public function get_cart()
  {
    return $this->_cart;
  }

  /**
   * Set the FEU uid to test against
   */
  public function set_feu_uid($uid)
  {
    $this->_feu_uid = $uid;
  }

  /**
   * Get the current FEU uidt
   */
  public function get_feu_uid()
  {
    return $this->_feu_uid;
  }
  
  /**
   * Set the current sku.  This overrides the product sku (if any)
   */
  public function set_sku($sku)
  {
    $this->_sku = trim($sku);
  }

  /**
   * Retrieve the current sku
   */
  public function get_sku()
  {
    return $this->_sku;
  }

  /**
   * Set the flag that indicates to ignore already discounted items.
   */
  public function set_ignore_discounted($val = TRUE)
  {
    $this->_ignore_discounted = cms_to_bool($val);
  }

  /**
   * Retrieve the ignore discounted item flag.
   */
  public function get_ignore_discounted()
  {
    return $this->_ignore_discounted;
  }

  /**
   * Set the quantity of the current item.
   */
  public function set_quantity($quantity)
  {
    $this->_quantity = (int)$quantity;
  }

  /**
   * Retrieve the current sku
   */
  public function get_quantity()
  {
    return (int)$this->_quantity;
  }

  /**
   * Set the product price. This overrides the product price (if any)
   */
  public function set_price($price)
  {
    $price = (float)$price;
    if( $price >= 0 ) {
      $this->_price = $price;
    }
  }

  /**
   * Get the price
   */
  public function get_price()
  {
    if( !is_null($this->_price) ) return $this->_price;
    if( !is_null($this->_product) ) return $this->_product->get_price();
  }

  /**
   * Set a flag indicating wether cart contents should be skipped in tests
   */
  public function set_skip_cart($skip_cart = TRUE)
  {
    $this->_skip_cart = (bool) $skip_cart;
  }

  /**
   * Get the skip_cart flag
   */
  public function get_skip_cart()
  {
    return $this->_skip_cart;
  }

  /**
   * tests if product matches any promotions that match set criteria.
   * (product must be set).
   *
   * @return cg_ecomm_promotion_match
   */
  abstract public function find_match();

  /**
   * test if the product (or sku) matches the offer part
   * of a promotion, and if the cart contents match the conditions
   * of the offer.
   *
   * @return cg_ecomm_promotion_match
   */
  abstract public function find_offer_match();

  /**
   * Find the first promotion that matches the items in the cart
   *
   * @return cg_ecomm_promotion_match
   */
  abstract public function find_cart_match();

  /**
   * Find all promotions that matches the items in the cart
   *
   * @return cg_ecomm_promotion_match
   */
  abstract public function find_all_cart_matches();
} // end of class

# 
# EOF
#
?>