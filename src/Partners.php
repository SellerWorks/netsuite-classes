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
 * Partners
 */
class Partners {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partner;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPrimary;
	/**
	 * @access public
	 * @var float
	 */
	public $contribution;

	static $paramtypesmap = array(
		"partner" => "RecordRef",
		"partnerRole" => "RecordRef",
		"isPrimary" => "boolean",
		"contribution" => "float",
	);
}
