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
 * RevRecTemplate.
 */
class RevRecTemplate extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var RevRecScheduleAmortizationType
     */
    public $amortizationType;
    /**
     * @var RevRecScheduleRecurrenceType
     */
    public $recurrenceType;
    /**
     * @var RevRecScheduleRecogIntervalSrc
     */
    public $recogIntervalSrc;
    /**
     * @var int
     */
    public $amortizationPeriod;
    /**
     * @var int
     */
    public $periodOffset;
    /**
     * @var int
     */
    public $revRecOffset;
    /**
     * @var float
     */
    public $initialAmount;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var RevRecTemplateRecurrenceList
     */
    public $recurrenceList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'name' => 'string',
        'amortizationType' => 'RevRecScheduleAmortizationType',
        'recurrenceType' => 'RevRecScheduleRecurrenceType',
        'recogIntervalSrc' => 'RevRecScheduleRecogIntervalSrc',
        'amortizationPeriod' => 'integer',
        'periodOffset' => 'integer',
        'revRecOffset' => 'integer',
        'initialAmount' => 'float',
        'isInactive' => 'boolean',
        'recurrenceList' => 'RevRecTemplateRecurrenceList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
