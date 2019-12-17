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
 * NoteTypeSearchAdvanced
 */
class NoteTypeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var NoteTypeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var NoteTypeSearchRow
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
		"criteria" => "NoteTypeSearch",
		"columns" => "NoteTypeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
