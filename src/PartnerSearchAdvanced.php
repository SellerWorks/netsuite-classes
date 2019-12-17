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
 * PartnerSearchAdvanced
 */
class PartnerSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PartnerSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PartnerSearchRow
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
		"criteria" => "PartnerSearch",
		"columns" => "PartnerSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
