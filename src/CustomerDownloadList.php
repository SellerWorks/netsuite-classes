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
 * CustomerDownloadList.
 */
class CustomerDownloadList
{
    /**
     * @var CustomerDownload[]
     */
    public $download;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = [
        'download' => 'CustomerDownload[]',
        'replaceAll' => 'boolean',
    ];
}
