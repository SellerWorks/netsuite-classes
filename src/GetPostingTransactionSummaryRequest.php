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
 * GetPostingTransactionSummaryRequest
 */
class GetPostingTransactionSummaryRequest {
	/**
	 * @access public
	 * @var PostingTransactionSummaryField
	 */
	public $fields;
	/**
	 * @access public
	 * @var PostingTransactionSummaryFilter
	 */
	public $filters;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;
	/**
	 * @access public
	 * @var string
	 */
	public $operationId;

	static $paramtypesmap = array(
		"fields" => "PostingTransactionSummaryField",
		"filters" => "PostingTransactionSummaryFilter",
		"pageIndex" => "integer",
		"operationId" => "string",
	);
}
