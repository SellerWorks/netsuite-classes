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
 * CustomRecordTypeTranslations
 */
class CustomRecordTypeTranslations {
	/**
	 * @access public
	 * @var Language
	 */
	public $locale;
	/**
	 * @access public
	 * @var string
	 */
	public $localeDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $name;

	static $paramtypesmap = array(
		"locale" => "Language",
		"localeDescription" => "string",
		"name" => "string",
	);
}
