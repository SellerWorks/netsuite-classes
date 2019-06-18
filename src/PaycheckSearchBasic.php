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
 * PaycheckSearchBasic.
 */
class PaycheckSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $account;
    /**
     * @var SearchLongField
     */
    public $batchNumber;
    /**
     * @var SearchDateField
     */
    public $checkDate;
    /**
     * @var SearchMultiSelectField
     */
    public $employee;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchBooleanField
     */
    public $hasGLImpact;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $payrollItem;
    /**
     * @var SearchMultiSelectField
     */
    public $payrollItemType;

    public static $paramtypesmap = [
        'account' => 'SearchMultiSelectField',
        'batchNumber' => 'SearchLongField',
        'checkDate' => 'SearchDateField',
        'employee' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'hasGLImpact' => 'SearchBooleanField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'payrollItem' => 'SearchMultiSelectField',
        'payrollItemType' => 'SearchMultiSelectField',
    ];
}
