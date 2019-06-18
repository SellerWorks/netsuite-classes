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
 * GetPostingTransactionSummaryRequest.
 */
class GetPostingTransactionSummaryRequest
{
    /**
     * @var PostingTransactionSummaryField
     */
    public $fields;
    /**
     * @var PostingTransactionSummaryFilter
     */
    public $filters;
    /**
     * @var int
     */
    public $pageIndex;
    /**
     * @var string
     */
    public $operationId;

    public static $paramtypesmap = array(
        'fields' => 'PostingTransactionSummaryField',
        'filters' => 'PostingTransactionSummaryFilter',
        'pageIndex' => 'integer',
        'operationId' => 'string',
    );
}
