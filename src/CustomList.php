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
 * CustomList
 */
class CustomList extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $owner;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isOrdered;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isMatrixOption;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;
	/**
	 * @access public
	 * @var boolean
	 */
	public $convertToCustomRecord;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var CustomListCustomValueList
	 */
	public $customValueList;
	/**
	 * @access public
	 * @var CustomListTranslationsList
	 */
	public $translationsList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"name" => "string",
		"owner" => "RecordRef",
		"isOrdered" => "boolean",
		"description" => "string",
		"isMatrixOption" => "boolean",
		"scriptId" => "string",
		"convertToCustomRecord" => "boolean",
		"isInactive" => "boolean",
		"customValueList" => "CustomListCustomValueList",
		"translationsList" => "CustomListTranslationsList",
		"internalId" => "string",
	);
}
