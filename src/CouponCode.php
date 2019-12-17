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
 * CouponCode.
 */
class CouponCode extends Record
{
    /**
     * @var RecordRef
     */
    public $promotion;
    /**
     * @var string
     */
    public $code;
    /**
     * @var RecordRef
     */
    public $recipient;
    /**
     * @var dateTime
     */
    public $dateSent;
    /**
     * @var bool
     */
    public $used;
    /**
     * @var int
     */
    public $useCount;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'promotion' => 'RecordRef',
        'code' => 'string',
        'recipient' => 'RecordRef',
        'dateSent' => 'dateTime',
        'used' => 'boolean',
        'useCount' => 'integer',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
