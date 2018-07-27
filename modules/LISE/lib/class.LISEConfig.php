<?php
#-------------------------------------------------------------------------
# LISE - List It Special Edition
# Version 1.2.2
# A fork of ListI2
# maintained by Fernando Morgado AKA Jo Morg
# since 2015
#-------------------------------------------------------------------------
#
# Original Author: Ben Malen, <ben@conceptfactory.com.au>
# Co-Maintainer: Simon Radford, <simon@conceptfactory.com.au>
# Web: www.conceptfactory.com.au
#
#-------------------------------------------------------------------------
#
# Maintainer since 2011 up to 2014: Jonathan Schmid, <hi@jonathanschmid.de>
# Web: www.jonathanschmid.de
#
#-------------------------------------------------------------------------
#
# Some wackos started destroying stuff since 2012 and stopped at 2014:
#
# Tapio Löytty, <tapsa@orange-media.fi>
# Web: www.orange-media.fi
#
# Goran Ilic, <uniqu3e@gmail.com>
# Web: www.ich-mach-das.at
#
#-------------------------------------------------------------------------
#
# LISE is a CMS Made Simple module that enables the web developer to create
# multiple lists throughout a site. It can be duplicated and given friendly
# names for easier client maintenance.
#
#-------------------------------------------------------------------------
# BEGIN_LICENSE
#-------------------------------------------------------------------------
# This file is part of LISE
# LISE program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# LISE program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------
# END_LICENSE
#-------------------------------------------------------------------------
class LISEConfig implements ArrayAccess
{
	#---------------------
	# Attributes
	#---------------------	
 
	static private $_allowed = array('module_alias', 'item_query_class', 'category_query_class', 'archive_query_class');
	private $_data = array();
	private $_mod_instance;

	#---------------------
	# Magic methods
	#--------------------- 	
	
	public function __construct(LISE &$mod) 
	{
		$this->_mod_instance = $mod; // <- May be memory heavy, do some testing...
	
		$lise_config = array();
		$fn = cms_join_path($mod->GetModulePath(), LISE_CONFIG_FILE);
		if(is_readable($fn)) {
		
			include($fn);
			if(isset($lise_config)) {
			
				foreach($lise_config as $key => $value) {
			
					$this->offsetSet($key, $value);
				}
			}
		}
	}

	#---------------------
	# Array methods
	#---------------------		

	public function offsetExists($key)
	{		
		if(isset(self::$_allowed[$key]))
			return true;
	
		return false;
	}

	public function offsetGet($key)
	{	
		// Check file values
		if(isset($this->_data[$key])) 
			return $this->_data[$key];
		
		// Check pre-defined values
		switch($key) {
		
			case 'module_alias':
				return strtolower($this->_mod_instance->GetName());
			
			case 'item_query_class':
				return 'LISEItemQuery';
			
			case 'category_query_class':
				return 'LISECategoryQuery';
				
			case 'archive_query_class':
				return 'LISEArchiveQuery';

			default:
				return null;
		}
	}

	public function offsetSet($key,$value)
	{
		if(in_array($key, self::$_allowed))
			$this->_data[$key] = $value;
	}

	public function offsetUnset($key)
	{
		trigger_error('Unsetting LISE config variable '.$key.' is invalid', E_USER_ERROR);
	}

} // end of class

?>
