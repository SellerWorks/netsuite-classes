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
 * PartnerAddressbookList
 */
class PartnerAddressbookList {
	/**
	 * @access public
	 * @var PartnerAddressbook[]
	 */
	public $addressbook;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"addressbook" => "PartnerAddressbook[]",
		"replaceAll" => "boolean",
	);
}
