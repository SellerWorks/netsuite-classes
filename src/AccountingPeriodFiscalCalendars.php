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
 * AccountingPeriodFiscalCalendars
 */
class AccountingPeriodFiscalCalendars {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fiscalCalendar;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parent;

	static $paramtypesmap = array(
		"fiscalCalendar" => "RecordRef",
		"parent" => "RecordRef",
	);
}
