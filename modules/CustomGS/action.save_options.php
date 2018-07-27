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

if( !$this->CheckPermission('Custom Global Settings - Manage') ) $this->Redirect($id, 'defaultadmin', $returnid);

// Save Parameters Options Tab
if (isset($params['input_custom_modulename'])) $this->SetPreference('input_custom_modulename', $params['input_custom_modulename']);
if (isset($params['input_admin_section'])) $this->SetPreference('admin_section', $params['input_admin_section']);

// Touch menu cache files
if (version_compare(CMS_VERSION, '1.99-alpha0', '<')) {
	foreach (glob(cms_join_path(TMP_CACHE_LOCATION, "themeinfo*.cache")) as $filename) { @unlink($filename); } // 1.11
} else {
	foreach (glob(cms_join_path(TMP_CACHE_LOCATION, "cache*.cms")) as $filename) { @unlink($filename); } // 2.0
}

// Show saved parameters in debug mode
debug_display($params);

// Put mention into the admin log
audit('', 'Custom Global Settings - Options tab', 'Saved');

$this->Redirect($id, 'defaultadmin', $returnid, array('module_message' => $this->Lang('settingssaved'), 'active_tab' => 'options'));

?>