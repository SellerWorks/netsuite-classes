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
 * TermPercentagesList
 */
class TermPercentagesList {
	/**
	 * @access public
	 * @var TermPercentages[]
	 */
	public $termPercentages;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"termPercentages" => "TermPercentages[]",
		"replaceAll" => "boolean",
	);
}
