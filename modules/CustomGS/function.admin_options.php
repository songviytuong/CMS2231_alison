<?php
#-------------------------------------------------------------------------
# Module: Custom Global Settings
# Author: Rolf Tjassens, Jos
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2011 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
# The module's homepage is: http://dev.cmsmadesimple.org/projects/customgs
#-------------------------------------------------------------------------
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#-------------------------------------------------------------------------

if (!isset($gCms)) exit;

if( !$this->CheckPermission('Custom Global Settings - Manage') )
{
	echo $this->ShowErrors(lang('needpermissionto', 'Custom Global Settings - Manage'));
	return;
}

$smarty->assign('title_custom_modulename', $this->Lang('title_custom_modulename'));	
$smarty->assign('help_custom_modulename', $this->Lang('help_custom_modulename'));
$smarty->assign('input_custom_modulename',$this->CreateInputText($id, 'input_custom_modulename',$this->GetPreference('input_custom_modulename',''),50,255));

$smarty->assign('title_admin_section', $this->Lang('title_admin_section'));	
$smarty->assign('help_admin_section', $this->Lang('help_admin_section'));
$smarty->assign('input_admin_section', $this->CreateInputDropdown($id, 'input_admin_section',
				array(lang('main') => 'main',
							lang('content') => 'content',
							lang('layout') => 'layout',
							lang('usersgroups') => 'usersgroups',
							lang('extensions') => 'extensions',
							lang('admin') => 'admin',
							lang('myprefs') => 'myprefs'),
				-1,
				$this->GetPreference('admin_section', 'extensions')
));

$smarty->assign('startform', $this->CreateFormStart( $id, 'save_options', $returnid ));
$smarty->assign('endform', $this->CreateFormEnd());


echo $this->ProcessTemplate('admin_options.tpl');
?>