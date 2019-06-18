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
 * PaymentMethod.
 */
class PaymentMethod extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $creditCard;
    /**
     * @var bool
     */
    public $undepFunds;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $isOnline;
    /**
     * @var PaymentMethodVisualsList
     */
    public $visualsList;
    /**
     * @var bool
     */
    public $isDebitCard;
    /**
     * @var RecordRefList
     */
    public $merchantAccountsList;
    /**
     * @var string
     */
    public $payPalEmailAddress;
    /**
     * @var string
     */
    public $expressCheckoutArrangement;
    /**
     * @var bool
     */
    public $useExpressCheckout;
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
        'creditCard' => 'boolean',
        'undepFunds' => 'boolean',
        'account' => 'RecordRef',
        'isInactive' => 'boolean',
        'isOnline' => 'boolean',
        'visualsList' => 'PaymentMethodVisualsList',
        'isDebitCard' => 'boolean',
        'merchantAccountsList' => 'RecordRefList',
        'payPalEmailAddress' => 'string',
        'expressCheckoutArrangement' => 'string',
        'useExpressCheckout' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
