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
 * EntityGroupSearchAdvanced
 */
class EntityGroupSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var EntityGroupSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var EntityGroupSearchRow
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
		"criteria" => "EntityGroupSearch",
		"columns" => "EntityGroupSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
