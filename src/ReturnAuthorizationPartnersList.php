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
 * ReturnAuthorizationPartnersList
 */
class ReturnAuthorizationPartnersList {
	/**
	 * @access public
	 * @var Partners[]
	 */
	public $partners;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"partners" => "Partners[]",
		"replaceAll" => "boolean",
	);
}
