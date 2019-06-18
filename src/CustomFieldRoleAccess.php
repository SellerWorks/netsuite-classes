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
 * CustomFieldRoleAccess.
 */
class CustomFieldRoleAccess
{
    /**
     * @var RecordRef
     */
    public $role;
    /**
     * @var CustomizationAccessLevel
     */
    public $accessLevel;
    /**
     * @var CustomizationSearchLevel
     */
    public $searchLevel;

    public static $paramtypesmap = array(
        'role' => 'RecordRef',
        'accessLevel' => 'CustomizationAccessLevel',
        'searchLevel' => 'CustomizationSearchLevel',
    );
}
