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
 * GetCustomizationIdRequest.
 */
class GetCustomizationIdRequest
{
    /**
     * @var CustomizationType
     */
    public $customizationType;
    /**
     * @var bool
     */
    public $includeInactives;

    public static $paramtypesmap = array(
        'customizationType' => 'CustomizationType',
        'includeInactives' => 'boolean',
    );
}
