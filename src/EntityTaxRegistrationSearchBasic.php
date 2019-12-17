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
 * EntityTaxRegistrationSearchBasic
 */
class EntityTaxRegistrationSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $nexusCountry;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $taxRegistrationNumber;

	static $paramtypesmap = array(
		"address" => "SearchMultiSelectField",
		"id" => "SearchLongField",
		"nexusCountry" => "SearchEnumMultiSelectField",
		"taxRegistrationNumber" => "SearchStringField",
	);
}
