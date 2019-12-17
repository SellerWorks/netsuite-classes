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
 * InterCompanyJournalEntryAccountingBookDetailList
 */
class InterCompanyJournalEntryAccountingBookDetailList {
	/**
	 * @access public
	 * @var InterCompanyJournalEntryAccountingBookDetail[]
	 */
	public $interCompanyJournalEntryAccountingBookDetail;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"interCompanyJournalEntryAccountingBookDetail" => "InterCompanyJournalEntryAccountingBookDetail[]",
		"replaceAll" => "boolean",
	);
}
