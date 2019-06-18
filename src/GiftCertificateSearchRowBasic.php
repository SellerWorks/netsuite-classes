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
 * GiftCertificateSearchRowBasic.
 */
class GiftCertificateSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amountRemaining;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amtAvailBilled;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $email;
    /**
     * @var SearchColumnDateField[]
     */
    public $expirationDate;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $gcActive;
    /**
     * @var SearchColumnStringField[]
     */
    public $giftCertCode;
    /**
     * @var SearchColumnStringField[]
     */
    public $incomeAcct;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnStringField[]
     */
    public $liabilityAcct;
    /**
     * @var SearchColumnStringField[]
     */
    public $message;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $originalAmount;
    /**
     * @var SearchColumnDateField[]
     */
    public $purchaseDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $sender;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'amountRemaining' => 'SearchColumnDoubleField[]',
        'amtAvailBilled' => 'SearchColumnDoubleField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'email' => 'SearchColumnStringField[]',
        'expirationDate' => 'SearchColumnDateField[]',
        'gcActive' => 'SearchColumnBooleanField[]',
        'giftCertCode' => 'SearchColumnStringField[]',
        'incomeAcct' => 'SearchColumnStringField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'item' => 'SearchColumnSelectField[]',
        'liabilityAcct' => 'SearchColumnStringField[]',
        'message' => 'SearchColumnStringField[]',
        'name' => 'SearchColumnStringField[]',
        'originalAmount' => 'SearchColumnDoubleField[]',
        'purchaseDate' => 'SearchColumnDateField[]',
        'sender' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
