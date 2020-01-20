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
 * RevRecTemplateRecurrence
 */
class RevRecTemplateRecurrence {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $incomeaccount;
	/**
	 * @access public
	 * @var integer
	 */
	public $periodOffset;
	/**
	 * @access public
	 * @var string
	 */
	public $recamount;

	static $paramtypesmap = array(
		"incomeaccount" => "RecordRef",
		"periodOffset" => "integer",
		"recamount" => "string",
	);
}
