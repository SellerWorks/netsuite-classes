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
 * GetDeletedFilter
 */
class GetDeletedFilter {
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $deletedDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"deletedDate" => "SearchDateField",
		"type" => "SearchEnumMultiSelectField",
		"scriptId" => "SearchStringField",
	);
}
