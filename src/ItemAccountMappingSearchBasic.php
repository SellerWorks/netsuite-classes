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
 * ItemAccountMappingSearchBasic.
 */
class ItemAccountMappingSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $accountingBook;
    /**
     * @var SearchMultiSelectField
     */
    public $class;
    /**
     * @var SearchMultiSelectCustomField
     */
    public $customDimension;
    /**
     * @var SearchMultiSelectField
     */
    public $department;
    /**
     * @var SearchMultiSelectField
     */
    public $destinationAccount;
    /**
     * @var SearchDateField
     */
    public $effectiveDate;
    /**
     * @var SearchDateField
     */
    public $endDate;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $itemAccount;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchMultiSelectField
     */
    public $sourceAccount;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'accountingBook' => 'SearchMultiSelectField',
        'class' => 'SearchMultiSelectField',
        'customDimension' => 'SearchMultiSelectCustomField',
        'department' => 'SearchMultiSelectField',
        'destinationAccount' => 'SearchMultiSelectField',
        'effectiveDate' => 'SearchDateField',
        'endDate' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'itemAccount' => 'SearchEnumMultiSelectField',
        'location' => 'SearchMultiSelectField',
        'sourceAccount' => 'SearchMultiSelectField',
        'subsidiary' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
