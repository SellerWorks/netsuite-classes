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
 * GetItemAvailabilityResponse.
 */
class GetItemAvailabilityResponse
{
    /**
     * @var GetItemAvailabilityResult
     */
    public $getItemAvailabilityResult;

    public static $paramtypesmap = array(
        'getItemAvailabilityResult' => 'GetItemAvailabilityResult',
    );
}
