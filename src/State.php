<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Netsuite\Model;

/**
 * State
 */
class State extends Record {
	/**
	 * @access public
	 * @var Country
	 */
	public $country;
	/**
	 * @access public
	 * @var string
	 */
	public $fullName;
	/**
	 * @access public
	 * @var string
	 */
	public $shortname;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"country" => "Country",
		"fullName" => "string",
		"shortname" => "string",
		"internalId" => "string",
	);
}
