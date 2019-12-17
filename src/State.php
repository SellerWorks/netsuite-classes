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
 * State.
 */
class State extends Record
{
    /**
     * @var Country
     */
    public $country;
    /**
     * @var string
     */
    public $fullName;
    /**
     * @var string
     */
    public $shortname;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = [
        'country' => 'Country',
        'fullName' => 'string',
        'shortname' => 'string',
        'internalId' => 'string',
    ];
}
