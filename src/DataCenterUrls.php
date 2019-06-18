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
 * DataCenterUrls.
 */
class DataCenterUrls
{
    /**
     * @var string
     */
    public $restDomain;
    /**
     * @var string
     */
    public $webservicesDomain;
    /**
     * @var string
     */
    public $systemDomain;

    public static $paramtypesmap = array(
        'restDomain' => 'string',
        'webservicesDomain' => 'string',
        'systemDomain' => 'string',
    );
}
