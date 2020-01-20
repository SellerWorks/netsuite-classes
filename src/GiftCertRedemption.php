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
 * GiftCertRedemption
 */
class GiftCertRedemption {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $authCode;
	/**
	 * @access public
	 * @var float
	 */
	public $authCodeApplied;
	/**
	 * @access public
	 * @var float
	 */
	public $authCodeAmtRemaining;
	/**
	 * @access public
	 * @var float
	 */
	public $giftCertAvailable;

	static $paramtypesmap = array(
		"authCode" => "RecordRef",
		"authCodeApplied" => "float",
		"authCodeAmtRemaining" => "float",
		"giftCertAvailable" => "float",
	);
}
