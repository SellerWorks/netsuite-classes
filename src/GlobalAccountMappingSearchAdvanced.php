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
 * GlobalAccountMappingSearchAdvanced
 */
class GlobalAccountMappingSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var GlobalAccountMappingSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var GlobalAccountMappingSearchRow
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
		"criteria" => "GlobalAccountMappingSearch",
		"columns" => "GlobalAccountMappingSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
