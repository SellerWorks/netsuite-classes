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
 * CustomRecordTypeAccessType.
 */
class CustomRecordTypeAccessType
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _noPermissionRequired = '_noPermissionRequired';
    /**
     * @var string
     */
    const _requireCustomRecordEntriesPermission = '_requireCustomRecordEntriesPermission';
    /**
     * @var string
     */
    const _usePermissionList = '_usePermissionList';
}
