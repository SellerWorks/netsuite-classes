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
 * GlobalAccountMapping.
 */
class GlobalAccountMapping extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var dateTime
     */
    public $effectiveDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var RecordRef
     */
    public $accountingBook;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $sourceAccount;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $destinationAccount;
    /**
     * @var BaseRef
     */
    public $customDimension;
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
        'customForm' => 'RecordRef',
        'effectiveDate' => 'dateTime',
        'endDate' => 'dateTime',
        'accountingBook' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'sourceAccount' => 'RecordRef',
        'class' => 'RecordRef',
        'department' => 'RecordRef',
        'location' => 'RecordRef',
        'destinationAccount' => 'RecordRef',
        'customDimension' => 'BaseRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
