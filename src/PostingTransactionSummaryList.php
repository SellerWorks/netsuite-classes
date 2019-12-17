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
 * PostingTransactionSummaryList
 */
class PostingTransactionSummaryList {
	/**
	 * @access public
	 * @var PostingTransactionSummary[]
	 */
	public $postingTransactionSummary;

	static $paramtypesmap = array(
		"postingTransactionSummary" => "PostingTransactionSummary[]",
	);
}
