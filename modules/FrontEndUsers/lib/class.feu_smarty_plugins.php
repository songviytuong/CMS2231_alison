<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: FrontEndUsers (c) 2008-2016 by Robert Campbell
#         (calguy1000@cmsmadesimple.org)
#  An addon module for CMS Made Simple to allow management of frontend
#  users, and their login process within a CMS Made Simple powered
#  website.
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
# Visit the CMSMS Homepage at: http://www.cmsmadesimple.org
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

final class feu_smarty_plugins
{
    private function __construct() {}

    public static function feu_protect($params,$content,&$smarty,$repeat)
    {
        if( !$content ) return;

        $feu = \cms_utils::get_module(MOD_FRONTENDUSERS);
        if( !($uid = $feu->LoggedInId()) ) return;

        $groups = null;
        if( isset($params['group']) ) {
            $groups = explode(',',$params['group']);
            foreach( $groups as &$grp ) {
                $grp = trim($grp);
            }
        }
        else if( isset($params['groups']) ) {
            $groups = explode(',',$params['groups']);
            foreach( $groups as &$grp ) {
                $grp = trim($grp);
            }
        }

        if( !is_array($groups) || count($groups) == 0 ) {
            // empty groups array specified.
            return;
        }

        // convert group names to ids
        $grouplist = $feu->GetGroupList();
        $gids = array();
        foreach($groups as $name) {
            if( (int)$name > 0 ) {
                $gids[] = (int)$name;
            }
            else if( isset($grouplist[$name]) ) {
                $gids[] = $grouplist[$name];
            }
        }
        if( !count($gids) ) return;

        $membergroups = $feu->GetMemberGroupsArray($uid);
        if( !is_array($membergroups) || count($groups) == 0 ) {
            // groups specified, but user is not a member of any groups.
            return;
        }

        // FINAL test, if the user is a member of any of these groups, output the content.
        for( $i = 0; $i < count($membergroups); $i++ ) {
            $gid = $membergroups[$i]['groupid'];
            if( in_array($gid,$gids) ) return $content;
        }

        // user is not a member of any of the specified groups.
    }
} // end of class
?>