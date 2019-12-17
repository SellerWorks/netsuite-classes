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
 * CustomRecordTypeTranslationsList
 */
class CustomRecordTypeTranslationsList {
	/**
	 * @access public
	 * @var CustomRecordTypeTranslations[]
	 */
	public $translations;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"translations" => "CustomRecordTypeTranslations[]",
		"replaceAll" => "boolean",
	);
}
