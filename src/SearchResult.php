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
 * SearchResult.
 */
class SearchResult
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
    public $searchId;
    /**
     * @var RecordList
     */
    public $recordList;
    /**
     * @var SearchRowList
     */
    public $searchRowList;

    public static $paramtypesmap = array(
        'status' => 'Status',
        'totalRecords' => 'integer',
        'pageSize' => 'integer',
        'totalPages' => 'integer',
        'pageIndex' => 'integer',
        'searchId' => 'string',
        'recordList' => 'RecordList',
        'searchRowList' => 'SearchRowList',
    );
}
