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
 * AccountLocalizationsList
 */
class AccountLocalizationsList {
	/**
	 * @access public
	 * @var AccountLocalizations[]
	 */
	public $accountLocalizations;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"accountLocalizations" => "AccountLocalizations[]",
		"replaceAll" => "boolean",
	);
}
