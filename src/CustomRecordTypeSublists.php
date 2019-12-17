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
 * CustomRecordTypeSublists
 */
class CustomRecordTypeSublists {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recordSearch;
	/**
	 * @access public
	 * @var string
	 */
	public $recordDescr;
	/**
	 * @access public
	 * @var LanguageValueList
	 */
	public $recordDescrLanguageValueList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recordTab;
	/**
	 * @access public
	 * @var string
	 */
	public $recordId;

	static $paramtypesmap = array(
		"recordSearch" => "RecordRef",
		"recordDescr" => "string",
		"recordDescrLanguageValueList" => "LanguageValueList",
		"recordTab" => "RecordRef",
		"recordId" => "string",
	);
}
