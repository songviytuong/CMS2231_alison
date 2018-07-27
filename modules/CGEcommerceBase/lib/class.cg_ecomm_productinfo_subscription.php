<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: CGExtensions (c) 2008 by Robert Campbell
#         (calguy1000@cmsmadesimple.org)
#  An addon module for CMS Made Simple to provide useful functions
#  and commonly used gui capabilities to other modules.
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
# This projects homepage is: http://www.cmsmadesimple.org
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
 * A class to represent a subscription as part of a productinfo object.
 */
final class cg_ecomm_productinfo_subscription
{
    const SUBSCR_PERIOD_NONE        = 'none';
    const SUBSCR_PERIOD_MONTHLY     = 'monthly';
    const SUBSCR_PERIOD_QUARTERLY   = 'quarterly';
    const SUBSCR_PERIOD_SEMIANUALLY = 'semianually';
    const SUBSCR_PERIOD_YEARLY      = 'yearly';

    /**
     * @ignore
     */
    private $_payperiod = self::SUBSCR_PERIOD_NONE;

    /**
     * @ignore
     */
    private $_deliveryperiod = self::SUBSCR_PERIOD_NONE;

    /**
     * @ignore
     */
    private $_expiry = -1;

    /**
     * Get the pay period associated with this subscription.
     * The pay period defines how often the subscriber will be charged.
     *
     * @return string One of the periods defined in this class.
     */
    public function get_payperiod()
    {
        return $this->_payperiod;
    }


    /**
     * Set the pay period for this subscription.
     *
     * @param string $period One of the periods defined in this class.
     */
    public function set_payperiod($period)
    {
        switch($period)
        {
        case self::SUBSCR_PERIOD_NONE:
        case self::SUBSCR_PERIOD_MONTHLY:
        case self::SUBSCR_PERIOD_QUARTERLY:
        case self::SUBSCR_PERIOD_SEMIANUALLY:
        case self::SUBSCR_PERIOD_YEARLY:
            $this->_payperiod = $period;
            break;
        }
    }

    /**
     * Get the delivery period associated with this subscription.
     * The delivery period is how often items will be shipped.
     *
     * @return string One of the periods defined in this class.
     */
    public function get_deliveryperiod()
    {
        return $this->_deliveryperiod;
    }

    /**
     * Set the delivery period for this subscription.
     *
     * @param string $period One of the periods defined in this class.
     */
    public function set_deliveryperiod($period)
    {
        switch($period)
        {
        case self::SUBSCR_PERIOD_NONE:
        case self::SUBSCR_PERIOD_MONTHLY:
        case self::SUBSCR_PERIOD_QUARTERLY:
        case self::SUBSCR_PERIOD_SEMIANUALLY:
        case self::SUBSCR_PERIOD_YEARLY:
            $this->_deliveryperiod = $period;
            break;
        }
    }


    /**
     * Test if this is a valid subscription object.
     *
     * @return bool
     */
    public function is_valid()
    {
        if( $this->_deliveryperiod != self::SUBSCR_PERIOD_NONE &&
            $this->_payperiod != self::SUBSCR_PERIOD_NONE ) return TRUE;
        return FALSE;
    }


    /**
     * Get the numbber of pay periods until this subscription expires
     *
     * @return int
     */
    public function get_expiry()
    {
        return $this->_expiry;
    }

    /**
     * Set the number of pay periods until this subscription expires.
     * A negative value indicates no expiry.
     *
     * @param int $val
     */
    public function set_expiry($val)
    {
        // must be int, between -1 and 72
        // -1 indicates no expiry.
        $val = (int)$val;
        if( $val <= 0 ) $val = -1;
        if( $val >= 72 ) $val = 72;
        $this->_expiry = $val;
    }


    /**
     * Convert this object to an array.
     *
     * @return array
     */
    public function to_array()
    {
        $tmp = array();
        $tmp['payperiod'] = $this->_payperiod;
        $tmp['delperiod'] = $this->_deliveryperiod;
        $tmp['expiry'] = $this->_expiry;
        return $tmp;
    }
} // end of class


#
# EOF
#
?>