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
 * PaymentMethodSearchRowBasic.
 */
class PaymentMethodSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $account;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $creditCard;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isDebitCard;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;

    public static $paramtypesmap = [
        'account' => 'SearchColumnSelectField[]',
        'creditCard' => 'SearchColumnBooleanField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isDebitCard' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'name' => 'SearchColumnStringField[]',
    ];
}
