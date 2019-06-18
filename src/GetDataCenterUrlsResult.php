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
 * GetDataCenterUrlsResult.
 */
class GetDataCenterUrlsResult
{
    /**
     * @var Status
     */
    public $status;
    /**
     * @var DataCenterUrls
     */
    public $dataCenterUrls;

    public static $paramtypesmap = array(
        'status' => 'Status',
        'dataCenterUrls' => 'DataCenterUrls',
    );
}
