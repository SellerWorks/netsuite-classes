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
 * PartnerInfo
 */
class PartnerInfo {
	/**
	 * @access public
	 * @var string
	 */
	public $partnerId;

	static $paramtypesmap = array(
		"partnerId" => "string",
	);
}
