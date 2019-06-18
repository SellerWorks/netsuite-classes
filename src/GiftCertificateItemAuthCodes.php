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
 * GiftCertificateItemAuthCodes.
 */
class GiftCertificateItemAuthCodes
{
    /**
     * @var string
     */
    public $authCode;
    /**
     * @var bool
     */
    public $used;

    public static $paramtypesmap = array(
        'authCode' => 'string',
        'used' => 'boolean',
    );
}
