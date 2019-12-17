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
 * TaxTypeNexusesTax
 */
class TaxTypeNexusesTax {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nexus;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $saleTaxAcct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $purchTaxAcct;

	static $paramtypesmap = array(
		"nexus" => "RecordRef",
		"description" => "string",
		"saleTaxAcct" => "RecordRef",
		"purchTaxAcct" => "RecordRef",
	);
}
