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
 * DepositOther.
 */
class DepositOther
{
    /**
     * @var RecordRef
     */
    public $entity;
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
    public $paymentMethod;
    /**
     * @var string
     */
    public $refNum;
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

    public static $paramtypesmap = array(
        'entity' => 'RecordRef',
        'amount' => 'float',
        'account' => 'RecordRef',
        'paymentMethod' => 'RecordRef',
        'refNum' => 'string',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'memo' => 'string',
    );
}
