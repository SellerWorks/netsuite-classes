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
 * RevRecTemplateSearchAdvanced
 */
class RevRecTemplateSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var RevRecTemplateSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var RevRecTemplateSearchRow
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
		"criteria" => "RevRecTemplateSearch",
		"columns" => "RevRecTemplateSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
