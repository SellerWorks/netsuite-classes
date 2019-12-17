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
 * CustomFieldSubAccess.
 */
class CustomFieldSubAccess
{
    /**
     * @var RecordRef
     */
    public $sub;
    /**
     * @var CustomizationAccessLevel
     */
    public $accessLevel;
    /**
     * @var CustomizationSearchLevel
     */
    public $searchLevel;

    public static $paramtypesmap = [
        'sub' => 'RecordRef',
        'accessLevel' => 'CustomizationAccessLevel',
        'searchLevel' => 'CustomizationSearchLevel',
    ];
}
