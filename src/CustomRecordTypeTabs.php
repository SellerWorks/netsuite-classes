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
 * CustomRecordTypeTabs
 */
class CustomRecordTypeTabs {
	/**
	 * @access public
	 * @var string
	 */
	public $tabTitle;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $tabParent;
	/**
	 * @access public
	 * @var LanguageValueList
	 */
	public $tabTitleLanguageValueList;

	static $paramtypesmap = array(
		"tabTitle" => "string",
		"tabParent" => "RecordRef",
		"tabTitleLanguageValueList" => "LanguageValueList",
	);
}
