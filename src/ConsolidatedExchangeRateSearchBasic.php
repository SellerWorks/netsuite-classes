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
 * ConsolidatedExchangeRateSearchBasic.
 */
class ConsolidatedExchangeRateSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $accountingBook;
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
    public $fromSubsidiary;
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
    public $isDerivedRate;
    /**
     * @var SearchMultiSelectField
     */
    public $period;
    /**
     * @var SearchDateField
     */
    public $periodStartDate;
    /**
     * @var SearchMultiSelectField
     */
    public $toSubsidiary;

    public static $paramtypesmap = [
        'accountingBook' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'fromSubsidiary' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isDerivedRate' => 'SearchBooleanField',
        'period' => 'SearchMultiSelectField',
        'periodStartDate' => 'SearchDateField',
        'toSubsidiary' => 'SearchMultiSelectField',
    ];
}
