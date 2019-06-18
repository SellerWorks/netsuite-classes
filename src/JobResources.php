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
 * JobResources.
 */
class JobResources
{
    /**
     * @var RecordRef
     */
    public $jobResource;
    /**
     * @var string
     */
    public $email;
    /**
     * @var RecordRef
     */
    public $role;

    public static $paramtypesmap = [
        'jobResource' => 'RecordRef',
        'email' => 'string',
        'role' => 'RecordRef',
    ];
}
