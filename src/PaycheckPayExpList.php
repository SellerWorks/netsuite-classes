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
 * PaycheckPayExpList
 */
class PaycheckPayExpList {
	/**
	 * @access public
	 * @var PaycheckPayExp[]
	 */
	public $paycheckPayExp;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"paycheckPayExp" => "PaycheckPayExp[]",
		"replaceAll" => "boolean",
	);
}
