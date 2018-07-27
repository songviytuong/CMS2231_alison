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

define('CGECOMB_ATTRIB_ITEM_DESCRIPTION','{$attrib_text} ({$currency_symbol}{$attrib_adjust|number_format:2})');

class CGEcommerceBase extends CGExtensions
{
    function AllowAutoInstall() { return FALSE; }
    function AllowAutoUpgrade() { return FALSE; }
    function GetName() { return 'CGEcommerceBase'; }
    function GetFriendlyName() { return $this->Lang('friendlyname'); }
    function GetVersion() { return '1.7'; }
    function GetAuthor() { return 'calguy1000'; }
    function GetAuthorEmail() { return 'calguy1000@cmsmadesimple.org'; }
    function IsPluginModule() { return false; }
    function HasAdmin() { return true; }
    function GetAdminSection() { return 'ecommerce'; }
    function GetAdminDescription() { return $this->Lang('module_description'); }
    function VisibleToAdminUser() { return  $this->CheckPermission('Modify Site Preferences'); }
    function GetDependencies() { return array('CGExtensions'=>'1.54.3'); }
    function MinimumCMSVersion() { return '2.1.5'; }
    function InstallPostMessage() { return $this->Lang('postinstall'); }
    function UninstallPostMessage() { return $this->Lang('postuninstall'); }
    function UninstallPreMessage() { return $this->Lang('ask_really_uninstall'); }
    function GetEventHelp($event_name) { return $this->Lang('event_help_'.$event_name); }
    function GetEventDescription($event_name) { return $this->Lang('event_desc_'.$event_name); }
    function LazyLoadAdmin() { return TRUE; }
    function LazyLoadFrontend() { return TRUE; }

    function GetHeaderHTML()
    {
        $txt = parent::GetHeaderHTML();
        $obj = $this->GetModuleInstance('JQueryTools');
        if( is_object($obj) ) {
            $tmpl = <<<EOT
{JQueryTools action='incjs' exclude='form'}
{JQueryTools action='ready'}
EOT;
            $txt .= $this->ProcessTemplateFromData($tmpl);
        }

        return $txt;
    }

    function SetParameters()
    {
        $this->RestrictUnknownParams();
        $this->RegisterModulePlugin();
        $this->AddImageDir('icons');

        cgecomm_smarty::init();
    }

} // end of class

/**
 * Base e-commerce exception class
 */
class CGEcommerceException extends CmsException {}

#
# EOF
#
?>
