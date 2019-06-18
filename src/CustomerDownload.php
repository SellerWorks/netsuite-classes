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
 * CustomerDownload.
 */
class CustomerDownload
{
    /**
     * @var RecordRef
     */
    public $file;
    /**
     * @var string
     */
    public $licenseCode;
    /**
     * @var int
     */
    public $remainingDownloads;
    /**
     * @var dateTime
     */
    public $expiration;

    public static $paramtypesmap = array(
        'file' => 'RecordRef',
        'licenseCode' => 'string',
        'remainingDownloads' => 'integer',
        'expiration' => 'dateTime',
    );
}
