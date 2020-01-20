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
 * SiteCategorySearchBasic
 */
class SiteCategorySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateViewed;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $excludeFromSitemap;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $sitemapPriority;

	static $paramtypesmap = array(
		"dateViewed" => "SearchDateField",
		"description" => "SearchStringField",
		"excludeFromSitemap" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"name" => "SearchMultiSelectField",
		"sitemapPriority" => "SearchEnumMultiSelectField",
	);
}
