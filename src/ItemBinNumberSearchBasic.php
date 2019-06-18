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
 * ItemBinNumberSearchBasic.
 */
class ItemBinNumberSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $binNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchDoubleField
     */
    public $quantityAvailable;
    /**
     * @var SearchDoubleField
     */
    public $quantityOnHand;

    public static $paramtypesmap = array(
        'binNumber' => 'SearchMultiSelectField',
        'location' => 'SearchMultiSelectField',
        'quantityAvailable' => 'SearchDoubleField',
        'quantityOnHand' => 'SearchDoubleField',
    );
}
