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
 * TopicSearchAdvanced
 */
class TopicSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var TopicSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var TopicSearchRow
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
		"criteria" => "TopicSearch",
		"columns" => "TopicSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
