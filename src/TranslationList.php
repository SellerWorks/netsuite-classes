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
 * TranslationList
 */
class TranslationList {
	/**
	 * @access public
	 * @var Translation[]
	 */
	public $translation;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"translation" => "Translation[]",
		"replaceAll" => "boolean",
	);
}
