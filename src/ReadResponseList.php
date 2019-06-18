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
 * ReadResponseList.
 */
class ReadResponseList
{
    /**
     * @var Status
     */
    public $status;
    /**
     * @var ReadResponse[]
     */
    public $readResponse;

    public static $paramtypesmap = array(
        'status' => 'Status',
        'readResponse' => 'ReadResponse[]',
    );
}
