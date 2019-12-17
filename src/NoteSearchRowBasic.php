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
 * NoteSearchRowBasic
 */
class NoteSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $author;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $direction;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $note;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $noteDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $noteType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"author" => "SearchColumnSelectField[]",
		"direction" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"note" => "SearchColumnStringField[]",
		"noteDate" => "SearchColumnDateField[]",
		"noteType" => "SearchColumnStringField[]",
		"title" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
