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
 * GetCustomizationIdResponse.
 */
class GetCustomizationIdResponse
{
    /**
     * @var GetCustomizationIdResult
     */
    public $getCustomizationIdResult;

    public static $paramtypesmap = [
        'getCustomizationIdResult' => 'GetCustomizationIdResult',
    ];
}