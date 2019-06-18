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
 * ItemReceiptExpense.
 */
class ItemReceiptExpense
{
    /**
     * @var bool
     */
    public $markReceived;
    /**
     * @var int
     */
    public $orderLine;
    /**
     * @var int
     */
    public $line;
    /**
     * @var string
     */
    public $account;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'markReceived' => 'boolean',
        'orderLine' => 'integer',
        'line' => 'integer',
        'account' => 'string',
        'memo' => 'string',
        'amount' => 'float',
        'customFieldList' => 'CustomFieldList',
    );
}
