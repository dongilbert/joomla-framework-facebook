<?php
/**
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Facebook\Tests;

use Joomla\Facebook\Object;

/**
 * Facebook mock object.
 *
 * @since       1.0
 */

class ObjectMock extends Object
{
	/**
	 * Method to build and return a full request URL for the request.  This method will
	 * add appropriate pagination details if necessary and also prepend the API url
	 * to have a complete URL for the request.
	 *
	 * @param   string   $path    URL to inflect
	 * @param   integer  $limit   The number of objects per page.
	 * @param   integer  $offset  The object's number on the page.
	 * @param   string   $until   A unix timestamp or any date accepted by strtotime.
	 * @param   string   $since   A unix timestamp or any date accepted by strtotime.
	 *
	 * @return  string   The request URL.
	 *
	 * @since   1.0
	 */
	public function fetchUrl($path, $limit = 0, $offset = 0, $until = null, $since = null)
	{
		return parent::fetchUrl($path, $limit, $offset, $until, $since);
	}
}
