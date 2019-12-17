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
 * ItemAccountingBookDetail.
 */
class ItemAccountingBookDetail
{
    /**
     * @var RecordRef
     */
    public $accountingBook;
    /**
     * @var RecordRef
     */
    public $createRevenuePlansOn;
    /**
     * @var RecordRef
     */
    public $revenueRecognitionRule;
    /**
     * @var RecordRef
     */
    public $revRecForecastRule;
    /**
     * @var RecordRef
     */
    public $revRecSchedule;
    /**
     * @var bool
     */
    public $sameAsPrimaryRevRec;
    /**
     * @var RecordRef
     */
    public $amortizationTemplate;
    /**
     * @var bool
     */
    public $sameAsPrimaryAmortization;

    public static $paramtypesmap = [
        'accountingBook' => 'RecordRef',
        'createRevenuePlansOn' => 'RecordRef',
        'revenueRecognitionRule' => 'RecordRef',
        'revRecForecastRule' => 'RecordRef',
        'revRecSchedule' => 'RecordRef',
        'sameAsPrimaryRevRec' => 'boolean',
        'amortizationTemplate' => 'RecordRef',
        'sameAsPrimaryAmortization' => 'boolean',
    ];
}
