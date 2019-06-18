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
 * CustomerCreditCards.
 */
class CustomerCreditCards
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
     * @var RecordRef
     */
    public $cardState;
    /**
     * @var dateTime
     */
    public $stateFrom;
    /**
     * @var string
     */
    public $debitcardIssueNo;
    /**
     * @var string
     */
    public $ccMemo;
    /**
     * @var dateTime
     */
    public $validfrom;
    /**
     * @var bool
     */
    public $ccDefault;

    public static $paramtypesmap = array(
        'internalId' => 'string',
        'ccNumber' => 'string',
        'ccExpireDate' => 'dateTime',
        'ccName' => 'string',
        'paymentMethod' => 'RecordRef',
        'cardState' => 'RecordRef',
        'stateFrom' => 'dateTime',
        'debitcardIssueNo' => 'string',
        'ccMemo' => 'string',
        'validfrom' => 'dateTime',
        'ccDefault' => 'boolean',
    );
}
