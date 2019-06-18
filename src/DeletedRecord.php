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
 * DeletedRecord.
 */
class DeletedRecord
{
    /**
     * @var dateTime
     */
    public $deletedDate;
    /**
     * @var BaseRef
     */
    public $record;

    public static $paramtypesmap = array(
        'deletedDate' => 'dateTime',
        'record' => 'BaseRef',
    );
}
