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
 * DocumentInfo.
 */
class DocumentInfo
{
    /**
     * @var string
     */
    public $nsId;

    public static $paramtypesmap = [
        'nsId' => 'string',
    ];
}