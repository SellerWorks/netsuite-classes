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
 * SupportCaseSolutions.
 */
class SupportCaseSolutions
{
    /**
     * @var RecordRef
     */
    public $solution;
    /**
     * @var string
     */
    public $message;
    /**
     * @var dateTime
     */
    public $dateApplied;

    public static $paramtypesmap = array(
        'solution' => 'RecordRef',
        'message' => 'string',
        'dateApplied' => 'dateTime',
    );
}
