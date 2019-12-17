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
 * FileSearchAdvanced
 */
class FileSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var FileSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var FileSearchRow
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
		"criteria" => "FileSearch",
		"columns" => "FileSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
