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
 * CouponCodeSearchRowBasic.
 */
class CouponCodeSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $code;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateSent;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnLongField[]
     */
    public $id;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $promotion;
    /**
     * @var SearchColumnStringField[]
     */
    public $recipient;
    /**
     * @var SearchColumnLongField[]
     */
    public $useCount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $used;

    public static $paramtypesmap = [
        'code' => 'SearchColumnStringField[]',
        'dateSent' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'id' => 'SearchColumnLongField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'promotion' => 'SearchColumnStringField[]',
        'recipient' => 'SearchColumnStringField[]',
        'useCount' => 'SearchColumnLongField[]',
        'used' => 'SearchColumnBooleanField[]',
    ];
}
