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
 * BillingScheduleSearchRowBasic.
 */
class BillingScheduleSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnBooleanField[]
     */
    public $applyToSubtotal;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $frequency;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $inArrears;
    /**
     * @var SearchColumnStringField[]
     */
    public $initialAmount;
    /**
     * @var SearchColumnStringField[]
     */
    public $initialTerms;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isPublic;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnLongField[]
     */
    public $recurrenceCount;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $recurrencePattern;
    /**
     * @var SearchColumnStringField[]
     */
    public $recurrenceTerms;
    /**
     * @var SearchColumnLongField[]
     */
    public $repeatEvery;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $type;

    public static $paramtypesmap = [
        'applyToSubtotal' => 'SearchColumnBooleanField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'frequency' => 'SearchColumnEnumSelectField[]',
        'inArrears' => 'SearchColumnBooleanField[]',
        'initialAmount' => 'SearchColumnStringField[]',
        'initialTerms' => 'SearchColumnStringField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'isPublic' => 'SearchColumnBooleanField[]',
        'name' => 'SearchColumnStringField[]',
        'recurrenceCount' => 'SearchColumnLongField[]',
        'recurrencePattern' => 'SearchColumnEnumSelectField[]',
        'recurrenceTerms' => 'SearchColumnStringField[]',
        'repeatEvery' => 'SearchColumnLongField[]',
        'type' => 'SearchColumnEnumSelectField[]',
    ];
}
