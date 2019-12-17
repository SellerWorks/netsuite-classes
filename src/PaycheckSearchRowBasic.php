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
 * PaycheckSearchRowBasic.
 */
class PaycheckSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $account;
    /**
     * @var SearchColumnDateField[]
     */
    public $amendedDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var SearchColumnLongField[]
     */
    public $batchNumber;
    /**
     * @var SearchColumnDateField[]
     */
    public $checkDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $employee;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $hasGLImpact;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $hours;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $payrollItem;
    /**
     * @var SearchColumnSelectField[]
     */
    public $payrollItemType;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $subjectWages;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $taxableWages;

    public static $paramtypesmap = [
        'account' => 'SearchColumnSelectField[]',
        'amendedDate' => 'SearchColumnDateField[]',
        'amount' => 'SearchColumnDoubleField[]',
        'batchNumber' => 'SearchColumnLongField[]',
        'checkDate' => 'SearchColumnDateField[]',
        'employee' => 'SearchColumnSelectField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'hasGLImpact' => 'SearchColumnBooleanField[]',
        'hours' => 'SearchColumnDoubleField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'payrollItem' => 'SearchColumnSelectField[]',
        'payrollItemType' => 'SearchColumnSelectField[]',
        'subjectWages' => 'SearchColumnDoubleField[]',
        'taxableWages' => 'SearchColumnDoubleField[]',
    ];
}
