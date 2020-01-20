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
 * TaxTypeNexusAccounts
 */
class TaxTypeNexusAccounts {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nexus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $payablesAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $receivablesAccount;

	static $paramtypesmap = array(
		"nexus" => "RecordRef",
		"payablesAccount" => "RecordRef",
		"receivablesAccount" => "RecordRef",
	);
}
