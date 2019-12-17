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
 * GiftCertRedemption.
 */
class GiftCertRedemption
{
    /**
     * @var RecordRef
     */
    public $authCode;
    /**
     * @var float
     */
    public $authCodeApplied;
    /**
     * @var float
     */
    public $authCodeAmtRemaining;
    /**
     * @var float
     */
    public $giftCertAvailable;

    public static $paramtypesmap = [
        'authCode' => 'RecordRef',
        'authCodeApplied' => 'float',
        'authCodeAmtRemaining' => 'float',
        'giftCertAvailable' => 'float',
    ];
}
