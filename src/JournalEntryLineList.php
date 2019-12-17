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
 * JournalEntryLineList
 */
class JournalEntryLineList {
	/**
	 * @access public
	 * @var JournalEntryLine[]
	 */
	public $line;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"line" => "JournalEntryLine[]",
		"replaceAll" => "boolean",
	);
}
