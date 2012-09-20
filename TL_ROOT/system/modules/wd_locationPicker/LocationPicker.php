<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Wichteldesign 2012
 * @author     Felix peters <info@wichteldesign.de>
 * @package    locationpicker
 * @license    LGPL 
 * @filesource
 */


/**
 * Class HiddenField
 *
 * A Location Picker based on Google Maps
 * @copyright  Wichteldesign 2012
 * @author     Felix peters <info@wichteldesign.de>
 * @package    locationpicker
 */
class LocationPicker extends Widget
{

	/**
	 * Submit input
	 * @var boolean
	 */
	protected $blnSubmitInput = true;

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_widget_locationpicker';


	/**
	 * Generate the widget and return it as string
	 * @return string
	 */
	public function generate()
	{

		return sprintf('<input type="hidden" name="%s" id="ctrl_%s" class="tl_text%s" value="%s"%s onfocus="Backend.getScrollOffset();" />%s',
						$this->strName,
						$this->strId,
						(strlen($this->strClass) ? ' ' . $this->strClass : ''),
						$this->varValue,
						$this->getAttributes(),
						$this->wizard);
	}
}

?>