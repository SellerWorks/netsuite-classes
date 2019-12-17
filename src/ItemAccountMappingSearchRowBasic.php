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
 * ItemAccountMappingSearchRowBasic.
 */
class ItemAccountMappingSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $accountingBook;
    /**
     * @var SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var SearchColumnSelectCustomField[]
     */
    public $customDimension;
    /**
     * @var SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var SearchColumnSelectField[]
     */
    public $destinationAccount;
    /**
     * @var SearchColumnDateField[]
     */
    public $effectiveDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $itemAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnSelectField[]
     */
    public $sourceAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'accountingBook' => 'SearchColumnSelectField[]',
        'class' => 'SearchColumnSelectField[]',
        'customDimension' => 'SearchColumnSelectCustomField[]',
        'department' => 'SearchColumnSelectField[]',
        'destinationAccount' => 'SearchColumnSelectField[]',
        'effectiveDate' => 'SearchColumnDateField[]',
        'endDate' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'itemAccount' => 'SearchColumnEnumSelectField[]',
        'location' => 'SearchColumnSelectField[]',
        'sourceAccount' => 'SearchColumnSelectField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
