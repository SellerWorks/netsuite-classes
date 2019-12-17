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
 * TermSearchBasic.
 */
class TermSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchBooleanField
     */
    public $dateDriven;
    /**
     * @var SearchLongField
     */
    public $dayDiscountExpires;
    /**
     * @var SearchLongField
     */
    public $dayOfMonthNetDue;
    /**
     * @var SearchLongField
     */
    public $daysUntilExpiry;
    /**
     * @var SearchLongField
     */
    public $daysUntilNetDue;
    /**
     * @var SearchDoubleField
     */
    public $discountPercent;
    /**
     * @var SearchDoubleField
     */
    public $discountPercentDateDriven;
    /**
     * @var SearchLongField
     */
    public $dueNextMonthIfWithinDays;
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
    public $installment;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchBooleanField
     */
    public $preferred;
    /**
     * @var SearchLongField
     */
    public $recurrenceCount;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $recurrenceFrequency;
    /**
     * @var SearchLongField
     */
    public $repeatEvery;
    /**
     * @var SearchBooleanField
     */
    public $splitEvenly;

    public static $paramtypesmap = [
        'dateDriven' => 'SearchBooleanField',
        'dayDiscountExpires' => 'SearchLongField',
        'dayOfMonthNetDue' => 'SearchLongField',
        'daysUntilExpiry' => 'SearchLongField',
        'daysUntilNetDue' => 'SearchLongField',
        'discountPercent' => 'SearchDoubleField',
        'discountPercentDateDriven' => 'SearchDoubleField',
        'dueNextMonthIfWithinDays' => 'SearchLongField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'installment' => 'SearchBooleanField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'name' => 'SearchStringField',
        'preferred' => 'SearchBooleanField',
        'recurrenceCount' => 'SearchLongField',
        'recurrenceFrequency' => 'SearchEnumMultiSelectField',
        'repeatEvery' => 'SearchLongField',
        'splitEvenly' => 'SearchBooleanField',
    ];
}
