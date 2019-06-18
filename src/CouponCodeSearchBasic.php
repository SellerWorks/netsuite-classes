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
 * CouponCodeSearchBasic.
 */
class CouponCodeSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchStringField
     */
    public $code;
    /**
     * @var SearchDateField
     */
    public $dateSent;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchLongField
     */
    public $id;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $promotion;
    /**
     * @var SearchMultiSelectField
     */
    public $recipient;
    /**
     * @var SearchLongField
     */
    public $useCount;
    /**
     * @var SearchBooleanField
     */
    public $used;

    public static $paramtypesmap = array(
        'code' => 'SearchStringField',
        'dateSent' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'id' => 'SearchLongField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'promotion' => 'SearchMultiSelectField',
        'recipient' => 'SearchMultiSelectField',
        'useCount' => 'SearchLongField',
        'used' => 'SearchBooleanField',
    );
}
