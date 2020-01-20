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
 * NoteSearchAdvanced
 */
class NoteSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var NoteSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var NoteSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "NoteSearch",
		"columns" => "NoteSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
