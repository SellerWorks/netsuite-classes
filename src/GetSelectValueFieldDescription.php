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
 * GetSelectValueFieldDescription.
 */
class GetSelectValueFieldDescription
{
    /**
     * @var RecordType
     */
    public $recordType;
    /**
     * @var RecordRef
     */
    public $customRecordType;
    /**
     * @var RecordRef
     */
    public $customTransactionType;
    /**
     * @var string
     */
    public $sublist;
    /**
     * @var string
     */
    public $field;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var GetSelectValueFilter
     */
    public $filter;
    /**
     * @var GetSelectFilterByFieldValueList
     */
    public $filterByValueList;

    public static $paramtypesmap = [
        'recordType' => 'RecordType',
        'customRecordType' => 'RecordRef',
        'customTransactionType' => 'RecordRef',
        'sublist' => 'string',
        'field' => 'string',
        'customForm' => 'RecordRef',
        'filter' => 'GetSelectValueFilter',
        'filterByValueList' => 'GetSelectFilterByFieldValueList',
    ];
}
