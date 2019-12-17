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
 * DepositCashBack.
 */
class DepositCashBack
{
    /**
     * @var float
     */
    public $amount;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var string
     */
    public $memo;

    public static $paramtypesmap = [
        'amount' => 'float',
        'account' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'memo' => 'string',
    ];
}
