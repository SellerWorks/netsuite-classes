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
 * GetPostingTransactionSummaryResult.
 */
class GetPostingTransactionSummaryResult
{
    /**
     * @var Status
     */
    public $status;
    /**
     * @var int
     */
    public $totalRecords;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $totalPages;
    /**
     * @var int
     */
    public $pageIndex;
    /**
     * @var string
     */
    public $operationId;
    /**
     * @var PostingTransactionSummaryList
     */
    public $postingTransactionSummaryList;

    public static $paramtypesmap = [
        'status' => 'Status',
        'totalRecords' => 'integer',
        'pageSize' => 'integer',
        'totalPages' => 'integer',
        'pageIndex' => 'integer',
        'operationId' => 'string',
        'postingTransactionSummaryList' => 'PostingTransactionSummaryList',
    ];
}
