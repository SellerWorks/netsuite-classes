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
 * BillingScheduleSearchBasic.
 */
class BillingScheduleSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchBooleanField
     */
    public $applyToSubtotal;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $frequency;
    /**
     * @var SearchBooleanField
     */
    public $inArrears;
    /**
     * @var SearchDoubleField
     */
    public $initialAmount;
    /**
     * @var SearchMultiSelectField
     */
    public $initialTerms;
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
     * @var SearchBooleanField
     */
    public $isPublic;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchLongField
     */
    public $recurrenceCount;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $recurrencePattern;
    /**
     * @var SearchMultiSelectField
     */
    public $recurrenceTerms;
    /**
     * @var SearchLongField
     */
    public $repeatEvery;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $type;

    public static $paramtypesmap = array(
        'applyToSubtotal' => 'SearchBooleanField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'frequency' => 'SearchEnumMultiSelectField',
        'inArrears' => 'SearchBooleanField',
        'initialAmount' => 'SearchDoubleField',
        'initialTerms' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'isPublic' => 'SearchBooleanField',
        'name' => 'SearchStringField',
        'recurrenceCount' => 'SearchLongField',
        'recurrencePattern' => 'SearchEnumMultiSelectField',
        'recurrenceTerms' => 'SearchMultiSelectField',
        'repeatEvery' => 'SearchLongField',
        'type' => 'SearchEnumMultiSelectField',
    );
}
