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
 * WriteResponse.
 */
class WriteResponse
{
    /**
     * @var Status
     */
    public $status;
    /**
     * @var BaseRef
     */
    public $baseRef;

    public static $paramtypesmap = array(
        'status' => 'Status',
        'baseRef' => 'BaseRef',
    );
}
