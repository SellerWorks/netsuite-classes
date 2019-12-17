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
 * SubsidiaryTaxRegistrationList
 */
class SubsidiaryTaxRegistrationList {
	/**
	 * @access public
	 * @var SubsidiaryTaxRegistration[]
	 */
	public $subsidiaryTaxRegistration;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"subsidiaryTaxRegistration" => "SubsidiaryTaxRegistration[]",
		"replaceAll" => "boolean",
	);
}
