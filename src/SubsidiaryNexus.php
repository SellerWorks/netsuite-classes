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
 * SubsidiaryNexus
 */
class SubsidiaryNexus {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nexusId;
	/**
	 * @access public
	 * @var string
	 */
	public $country;

	static $paramtypesmap = array(
		"nexusId" => "RecordRef",
		"country" => "string",
	);
}
