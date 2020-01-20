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
 * CampaignSearchAdvanced
 */
class CampaignSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CampaignSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CampaignSearchRow
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
		"criteria" => "CampaignSearch",
		"columns" => "CampaignSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
