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
 * JournalEntryLineList.
 */
class JournalEntryLineList
{
    /**
     * @var JournalEntryLine[]
     */
    public $line;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = [
        'line' => 'JournalEntryLine[]',
        'replaceAll' => 'boolean',
    ];
}
