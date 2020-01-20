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
 * PhoneCallSearchAdvanced
 */
class PhoneCallSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PhoneCallSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PhoneCallSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "PhoneCallSearch",
		"columns" => "PhoneCallSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
