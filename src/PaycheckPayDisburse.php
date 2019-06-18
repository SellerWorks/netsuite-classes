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
 * PaycheckPayDisburse.
 */
class PaycheckPayDisburse
{
    /**
     * @var string
     */
    public $method;
    /**
     * @var string
     */
    public $bankName;
    /**
     * @var string
     */
    public $bankAccountDecrypt;
    /**
     * @var string
     */
    public $statusName;
    /**
     * @var float
     */
    public $amount;

    public static $paramtypesmap = array(
        'method' => 'string',
        'bankName' => 'string',
        'bankAccountDecrypt' => 'string',
        'statusName' => 'string',
        'amount' => 'float',
    );
}
