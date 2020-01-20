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
 * LanguageValueList
 */
class LanguageValueList {
	/**
	 * @access public
	 * @var LanguageValue[]
	 */
	public $languageValue;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"languageValue" => "LanguageValue[]",
		"replaceAll" => "boolean",
	);
}
