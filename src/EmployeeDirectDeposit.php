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
 * EmployeeDirectDeposit.
 */
class EmployeeDirectDeposit
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var bool
     */
    public $netAccount;
    /**
     * @var bool
     */
    public $savingsAccount;
    /**
     * @var bool
     */
    public $accountPrenoted;
    /**
     * @var EmployeeDirectDepositAccountStatus
     */
    public $accountStatus;
    /**
     * @var string
     */
    public $bankName;
    /**
     * @var string
     */
    public $bankId;
    /**
     * @var string
     */
    public $bankNumber;
    /**
     * @var string
     */
    public $bankRoutingNumber;
    /**
     * @var string
     */
    public $bankAccountNumber;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var bool
     */
    public $inactive;

    public static $paramtypesmap = array(
        'id' => 'integer',
        'netAccount' => 'boolean',
        'savingsAccount' => 'boolean',
        'accountPrenoted' => 'boolean',
        'accountStatus' => 'EmployeeDirectDepositAccountStatus',
        'bankName' => 'string',
        'bankId' => 'string',
        'bankNumber' => 'string',
        'bankRoutingNumber' => 'string',
        'bankAccountNumber' => 'string',
        'amount' => 'float',
        'inactive' => 'boolean',
    );
}
