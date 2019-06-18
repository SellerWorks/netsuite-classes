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
 * GetCurrencyRateResponse.
 */
class GetCurrencyRateResponse
{
    /**
     * @var GetCurrencyRateResult
     */
    public $getCurrencyRateResult;

    public static $paramtypesmap = array(
        'getCurrencyRateResult' => 'GetCurrencyRateResult',
    );
}
