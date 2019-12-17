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
 * TokenPassportSignature.
 */
class TokenPassportSignature
{
    /**
     * @var string
     */
    public $_;
    /**
     * @var string
     */
    public $algorithm;

    public static $paramtypesmap = [
        '_' => 'string',
        'algorithm' => 'string',
    ];
}
