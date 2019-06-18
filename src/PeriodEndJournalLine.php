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
 * PeriodEndJournalLine.
 */
class PeriodEndJournalLine
{
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var float
     */
    public $debit;
    /**
     * @var float
     */
    public $credit;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var int
     */
    public $line;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'account' => 'RecordRef',
        'debit' => 'float',
        'credit' => 'float',
        'memo' => 'string',
        'line' => 'integer',
        'customFieldList' => 'CustomFieldList',
    ];
}
