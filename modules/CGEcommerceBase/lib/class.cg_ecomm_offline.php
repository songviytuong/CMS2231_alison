<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: CGEcommerceBase (c) 2010 by Robert Campbell
#         (calguy1000@cmsmadesimple.org)
#  An addon module for CMS Made Simple to provide a base communications
#  layer and common preference repository for his ecommerce suite of
#  modules for CMSMS.
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
 * Utility class for managing tokens related to offline charges
 *
 * This class requires FEU, and an active FEU user
 *
 */
final class cg_ecomm_offline
{
    private static $_prefix = '__cg_ecomm_tokens';
    private function __construct() {}

    /**
     * Set a token for offline access
     *
     * @throws CmsException
     * @throws CmsInvalidDataException
     * @param string $key
     * @param string $val
     * @param int    $feu_uid
     * @return void
     */
    public static function set_token($key,$val,$feu_uid = null)
    {
        if( !$key || !$val ) throw new CmsInvalidDataException('Invalid values passed to '.__CLASS__.'::'.__METHOD__);
        $feu = cms_utils::get_module('FrontEndUsers');
        if( !$feu ) throw new CmsException('Attempt to store payment gateway token for offline access with no FrontEndUsers module');
        if( !$feu_uid ) $feu_uid = $feu->LoggedInId();
        if( !$feu_uid ) throw new CmsException('Attempt to store payment gateway token for offline access when site visitor is not logged in to FEU');

        $defn = $feu->GetPropertyDefn(self::$_prefix);
        if( !$defn ) {
            $feu->AddPropertyDefn(self::$_prefix,'',FrontEndUsers::FIELDTYPE_DATA, 1024, 0, '', 0, 1);
            $feu->SetPropertyDefnExtra(self::$_prefix,array('module'=>'CGEcommerceBase'));
        }

        $tmp = $feu->GetUserPropertyFull(self::$_prefix, $feu_uid);
        $tmp = unserialize($tmp);
        if( !$tmp ) $tmp = array();
        $tmp[$key] = $val;
        $tmp = serialize($tmp);
        $feu->SetUserPropertyFull(self::$_prefix, $tmp, $feu_uid);
    }

    /**
     * Set a token for offline access
     *
     * @throws CmsException
     * @throws CmsInvalidDataException
     * @param string $key
     * @param int    $feu_uid
     * @return string
     */
    public static function get_token($key,$feu_uid = null)
    {
        if( !$key ) throw new CmsInvalidDataException('Invalid values passed to '.__CLASS__.'::'.__METHOD__);
        $feu = cms_utils::get_module('FrontEndUsers');
        if( !$feu ) throw new CmsException('Attempt to get payment gateway token for offline access with no FrontEndUsers module');
        if( !$feu_uid ) $feu_uid = $feu->LoggedInId();
        if( !$feu_uid ) throw new CmsException('Attempt to get payment gateway token for offline access when site visitor is not logged in to FEU');

        $tmp = $feu->GetUserPropertyFull(self::$_prefix, $feu_uid);
        $tmp = @unserialize($tmp);
        if( isset($tmp[$key]) ) return $tmp[$key];
    }

    /**
     * Set a token for offline access
     *
     * @throws CmsException
     * @throws CmsInvalidDataException
     * @param string $key
     * @param int    $feu_uid
     * @return bool
     */
    public static function has_token($key, $feu_uid)
    {
        try {
            self::get_token($key,$feu_uid);
            return TRUE;
        }
        catch( Exception $e ) {
            return false;
        }
    }

    /**
     * Remove a token for offline access
     *
     * @throws CmsException
     * @throws CmsInvalidDataException
     * @param string $key
     * @param int    $feu_uid
     * @return bool
     */
    public static function delete_token($key,$feu_uid = null)
    {
        if( !$key ) throw new CmsInvalidDataException('Invalid values passed to '.__CLASS__.'::'.__METHOD__);
        $feu = cms_utils::get_module('FrontEndUsers');
        if( !$feu ) throw new CmsException('Attempt to delete payment gateway token for offline access with no FrontEndUsers module');
        if( !$feu_uid ) $feu_uid = $feu->LoggedInId();
        if( !$feu_uid ) throw new CmsException('Attempt to delete payment gateway token for offline access when site visitor is not logged in to FEU');

        $tmp = $feu->GetUserPropertyFull(self::$_prefix, $feu_uid);
        $tmp = unserialize($tmp);
        if( !isset($tmp[$key]) ) return;

        unset($tmp[$key]);
        $tmp = serialize($tmp);
        return $feu->SetUserPropertyFull(self::$_prefix, $tmp, $feu_uid);
    }


    /**
     * List all of the offline tokens for a user.
     *
     * @throws CmsException
     * @throws CmsInvalidDataException
     * @param  int $feu_uid FrontEndUsers user id
     * @return array
     */
    public static function list_tokens($feu_uid = null)
    {
        $feu = cms_utils::get_module('FrontEndUsers');
        if( !$feu ) throw new CmsException('Attempt to get payment gateway token for offline access with no FrontEndUsers module');
        if( !$feu_uid ) $feu_uid = $feu->LoggedInId();
        if( !$feu_uid ) throw new CmsException('Attempt to get payment gateway token for offline access when site visitor is not logged in to FEU');

        $tmp = $feu->GetUserPropertyFull(self::$_prefix, $feu_uid);
        if( !$tmp ) return;
        $tmp = @unserialize($tmp);
        debug_display($tmp);
        return $tmp;
    }


    /**
     * Test if the user has one or more offline tokens
     *
     * @param  int  $feu_uid
     * @return bool
     */
    public static function has_tokens($feu_uid = null)
    {
        try {
            $res = self::list_tokens($feu_uid);
            if( is_array($res) && count($res) ) return TRUE;
        }
        catch( Exception $e ) {
        }
        return FALSE;
    }

} // end of class
#
# EOF
#
?>