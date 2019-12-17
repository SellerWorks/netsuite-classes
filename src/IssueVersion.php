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
 * IssueVersion.
 */
class IssueVersion
{
    /**
     * @var bool
     */
    public $primary;
    /**
     * @var RecordRef
     */
    public $version;
    /**
     * @var RecordRef
     */
    public $build;

    public static $paramtypesmap = [
        'primary' => 'boolean',
        'version' => 'RecordRef',
        'build' => 'RecordRef',
    ];
}
