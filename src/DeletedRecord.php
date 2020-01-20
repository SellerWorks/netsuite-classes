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
 * DeletedRecord
 */
class DeletedRecord {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $deletedDate;
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $record;

	static $paramtypesmap = array(
		"deletedDate" => "dateTime",
		"record" => "BaseRef",
	);
}
