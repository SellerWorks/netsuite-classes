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
 * NullField.
 */
class NullField
{
    /**
     * @var string[]
     */
    public $name;

    public static $paramtypesmap = array(
        'name' => 'string[]',
    );
}
