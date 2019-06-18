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
 * SupportCaseEscalateTo.
 */
class SupportCaseEscalateTo
{
    /**
     * @var RecordRef
     */
    public $escalatee;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $phone;

    public static $paramtypesmap = array(
        'escalatee' => 'RecordRef',
        'email' => 'string',
        'phone' => 'string',
    );
}
