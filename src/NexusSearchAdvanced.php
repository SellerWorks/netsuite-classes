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
 * NexusSearchAdvanced
 */
class NexusSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var NexusSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var NexusSearchRow
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
		"criteria" => "NexusSearch",
		"columns" => "NexusSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
