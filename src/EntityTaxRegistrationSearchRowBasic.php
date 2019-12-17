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
 * EntityTaxRegistrationSearchRowBasic
 */
class EntityTaxRegistrationSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $nexusCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $taxRegistrationNumber;

	static $paramtypesmap = array(
		"address" => "SearchColumnSelectField[]",
		"id" => "SearchColumnLongField[]",
		"nexusCountry" => "SearchColumnEnumSelectField[]",
		"taxRegistrationNumber" => "SearchColumnStringField[]",
	);
}
