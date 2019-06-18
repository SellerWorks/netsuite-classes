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
 * GiftCertificate.
 */
class GiftCertificate extends Record
{
    /**
     * @var string
     */
    public $giftCertCode;
    /**
     * @var string
     */
    public $sender;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $message;
    /**
     * @var dateTime
     */
    public $expirationDate;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var float
     */
    public $originalAmount;
    /**
     * @var float
     */
    public $amountRemaining;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = array(
        'giftCertCode' => 'string',
        'sender' => 'string',
        'name' => 'string',
        'email' => 'string',
        'message' => 'string',
        'expirationDate' => 'dateTime',
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'originalAmount' => 'float',
        'amountRemaining' => 'float',
        'internalId' => 'string',
    );
}
