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
 * PeriodEndJournalLineList
 */
class PeriodEndJournalLineList {
	/**
	 * @access public
	 * @var PeriodEndJournalLine[]
	 */
	public $periodEndJournalLine;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"periodEndJournalLine" => "PeriodEndJournalLine[]",
		"replaceAll" => "boolean",
	);
}
