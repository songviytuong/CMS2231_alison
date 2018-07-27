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

class lise_utils 
{
  private static $_init = FALSE;
  private static $_mod;
  private static $_db;
  
  private static final function _initialize()
  {
    if(!self::$_init)
    {
      self::$_mod = cmsms()->GetModuleInstance('LISE');
      self::$_db = cmsms()->GetDb();
      self::$_init = TRUE;
    } 
  }

	public static final function &array_to_object($array)
	{
		$obj = new StdClass;
		foreach($array as $key=>$value) {
		
			$obj->$key = $value;
		}
		
		return $obj;
	}
	  
	public static final function clean_params(&$params, $list, $accesslist = false) 
	{
	
		foreach($params as $key=>$value) {
		
			if($accesslist) {

				if(!in_array($key, (array)$list)) {
				
					unset($params[$key]);	
				}			
			
			} else {
		
				if(in_array($key, (array)$list)) {
				
					unset($params[$key]);	
				}
			
			}
		}	
	}
	
	public static final function init_var($string, $params, $default = '') 
	{
		$var = $default;

		if(isset($params[$string]))
			$var = $params[$string];
						
		return $var;
	}	
	
	/**
	 * Generate alias
	 * @param string $name The string that the alias will be generated from
	 * @return string Returns the alias
	 */
	public static final function generate_alias($name)
	{
		if (!is_string($name))
			return;
	
		$alias = $name;
	
		// left trim up to the first letter
		$alias = preg_replace('/^[^a-zA-Z\x7f-\xff]*/', '', $alias);
	
		// replace any invalid characters with an underscore
		$alias = preg_replace('/[^a-zA-Z0-9_\-\x7f-\xff]/', '_', $alias);
	
		// replace multiple underscores with single underscore
		$alias = preg_replace('/_+/', '_', $alias);
	
		// convert to lowercase
		$alias = strtolower($alias);
	
		// remove underscore from start and end
		$alias = trim($alias, '_');
	
		return $alias;
	}	
	
	/**
	 * Is valid alias
	 * @param string $alias
	 * @return bool Returns true if string in question is a valid alias, or
	 * false otherwise
	 */
	public static final function is_valid_alias($alias)
	{
		if (!is_string($alias))
			return false;
	
		// check alias
		// http://www.php.net/manual/en/language.variables.basics.php
		if (preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\-\x7f-\xff]*$/', $alias)) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Has Prefix
	 * @param string $string The string in question
	 * @param array $prefix Array of prefixes to match against
	 * @return bool Returns true if prefix is found, or false otherwise
	 */
	public static final function has_prefix($string, $prefixes)
	{
		if (!is_string($string))
			return;
		if (!is_array($prefixes))
			return;
	
		foreach ($prefixes as $prefix)
		{
			if (strpos($string, $prefix) === 0)
			{
				return true;
			}
		}
	
		return false;
	}
	
	public static final function explode_orderby($param, $valid_cols){
	
		$order_cols = array();
		$custom_cols = array();
		$index = 0;
		
		foreach(explode(',', $param) as $col) {
		
			$col = trim($col);
			$col_parts = explode('|', $col);
	
			// column name
			$col_name = $col_parts[0];
			$col_order = 'ASC';
	
			// order column ascending or descending
			if(isset($col_parts[1])) {
				
				$col_order = (in_array($col_parts[1], array('ASC', 'DESC')) ? $col_parts[1] : 'ASC');
			}
	
			$col_order = (in_array($col_order, array('ASC', 'DESC')) ? $col_order : 'ASC');
	
			if(isset($valid_cols[$col_name])) {
			
				$order_cols[$index] = $valid_cols[$col_name] . ' ' . $col_order;
			} 
			elseif (startswith($col_name, 'custom_')) {
				
				$custom_name = substr($col_name, 7);
				$obj = new stdClass;
				$obj->name = $custom_name;
				$obj->order = $col_order;
				
				$custom_cols[$index] = $obj;
			}
			
			$index++;
		}
			
		return array($order_cols, $custom_cols);
	}
  
  public static final function isCMS2()
  {
    return (bool)(version_compare(CMS_VERSION, '2.0') > -1);
  }
    
  public static final function isCMS201()
  {
    return (bool)(version_compare(CMS_VERSION, '2.0.1') > -1);
  }
  
    
  public static final function UIgif($name = '')
  {
    self::_initialize();
    $url = self::$_mod->GetModuleURLPath() . '/images/moduleui/' . $name . '.gif'; 
    return $url;
  }
      
  public static final function UIpng($name = '')
  {
    self::_initialize();
    $url = self::$_mod->GetModuleURLPath() . '/images/moduleui/' . $name . '.png'; 
    return $url;
  }
  
  public static final function DisplayImage($imagefn = '', $alt='', $width='', $height='', $class='')
  {
  
    $retStr = '<img src="' . $imagefn . '"';
    
    if ($class != '')
    {
      $retStr .= ' class="'.$class.'"';
    }
    
    if ($width != '')
    {
      $retStr .= ' width="'.$width.'"';
    }
    
    if ($height != '')
    {
      $retStr .= ' height="'.$height.'"';
    }
    
    if ($alt != '')
    {
      $retStr .= ' alt="'.$alt.'" title="'.$alt.'"';
    }
    
    $retStr .= ' />';
    
    return $retStr;
  }
  
  public static function db_column_exists($table, $column)
  {
    self::_initialize();
    $q = 'SELECT * FROM ' . $table . ' LIMIT 1';
    
    try
    {
      $r = self::$_db->GetRow($q);     
    }
    catch(Exception $e)
    {
      // nvm errors.... we give'm false
    }
    
    return isset($r[$column]);
  }

} // end of class