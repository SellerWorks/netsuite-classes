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
 * FolderSearchAdvanced
 */
class FolderSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var FolderSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var FolderSearchRow
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
		"criteria" => "FolderSearch",
		"columns" => "FolderSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
