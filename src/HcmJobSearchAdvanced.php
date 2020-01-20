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
 * HcmJobSearchAdvanced
 */
class HcmJobSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var HcmJobSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var HcmJobSearchRow
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
		"criteria" => "HcmJobSearch",
		"columns" => "HcmJobSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
