<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * SupportCaseSearchAdvanced
 */
class SupportCaseSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var SupportCaseSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var SupportCaseSearchRow
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
		"criteria" => "SupportCaseSearch",
		"columns" => "SupportCaseSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
