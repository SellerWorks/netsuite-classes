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
 * BinWorksheet.
 */
class BinWorksheet extends Record
{
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var BinWorksheetItemList
     */
    public $itemList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'tranDate' => 'dateTime',
        'memo' => 'string',
        'location' => 'RecordRef',
        'tranId' => 'string',
        'itemList' => 'BinWorksheetItemList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
