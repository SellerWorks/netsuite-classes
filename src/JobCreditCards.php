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
 * JobCreditCards.
 */
class JobCreditCards
{
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $ccNumber;
    /**
     * @var dateTime
     */
    public $ccExpireDate;
    /**
     * @var string
     */
    public $ccName;
    /**
     * @var RecordRef
     */
    public $paymentMethod;
    /**
     * @var string
     */
    public $ccMemo;
    /**
     * @var bool
     */
    public $ccDefault;
    /**
     * @var string
     */
    public $debitCardIssueNo;
    /**
     * @var dateTime
     */
    public $validFrom;

    public static $paramtypesmap = array(
        'internalId' => 'string',
        'ccNumber' => 'string',
        'ccExpireDate' => 'dateTime',
        'ccName' => 'string',
        'paymentMethod' => 'RecordRef',
        'ccMemo' => 'string',
        'ccDefault' => 'boolean',
        'debitCardIssueNo' => 'string',
        'validFrom' => 'dateTime',
    );
}
