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
 * CustomRecordTypeManagers.
 */
class CustomRecordTypeManagers
{
    /**
     * @var RecordRef
     */
    public $managerEmp;

    public static $paramtypesmap = [
        'managerEmp' => 'RecordRef',
    ];
}
