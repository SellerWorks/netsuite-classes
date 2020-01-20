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
 * InitializeRecord
 */
class InitializeRecord {
	/**
	 * @access public
	 * @var InitializeType
	 */
	public $type;
	/**
	 * @access public
	 * @var InitializeRef
	 */
	public $reference;
	/**
	 * @access public
	 * @var InitializeAuxRef
	 */
	public $auxReference;
	/**
	 * @access public
	 * @var InitializeRefList
	 */
	public $referenceList;

	static $paramtypesmap = array(
		"type" => "InitializeType",
		"reference" => "InitializeRef",
		"auxReference" => "InitializeAuxRef",
		"referenceList" => "InitializeRefList",
	);
}
