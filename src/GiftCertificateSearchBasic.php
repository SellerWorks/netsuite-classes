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
 * GiftCertificateSearchBasic.
 */
class GiftCertificateSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDoubleField
     */
    public $amountAvailableBilled;
    /**
     * @var SearchDoubleField
     */
    public $amountRemaining;
    /**
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @var SearchStringField
     */
    public $email;
    /**
     * @var SearchDateField
     */
    public $expirationDate;
    /**
     * @var SearchStringField
     */
    public $giftCertCode;
    /**
     * @var SearchMultiSelectField
     */
    public $incomeAccount;
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
    public $isActive;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchMultiSelectField
     */
    public $liabilityAccount;
    /**
     * @var SearchStringField
     */
    public $message;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchDoubleField
     */
    public $originalAmount;
    /**
     * @var SearchDateField
     */
    public $purchaseDate;
    /**
     * @var SearchStringField
     */
    public $sender;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'amountAvailableBilled' => 'SearchDoubleField',
        'amountRemaining' => 'SearchDoubleField',
        'createdDate' => 'SearchDateField',
        'email' => 'SearchStringField',
        'expirationDate' => 'SearchDateField',
        'giftCertCode' => 'SearchStringField',
        'incomeAccount' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isActive' => 'SearchBooleanField',
        'item' => 'SearchMultiSelectField',
        'liabilityAccount' => 'SearchMultiSelectField',
        'message' => 'SearchStringField',
        'name' => 'SearchStringField',
        'originalAmount' => 'SearchDoubleField',
        'purchaseDate' => 'SearchDateField',
        'sender' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
