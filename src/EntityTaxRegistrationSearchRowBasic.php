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
 * EntityTaxRegistrationSearchRowBasic.
 */
class EntityTaxRegistrationSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $address;
    /**
     * @var SearchColumnLongField[]
     */
    public $id;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $nexusCountry;
    /**
     * @var SearchColumnStringField[]
     */
    public $taxRegistrationNumber;

    public static $paramtypesmap = array(
        'address' => 'SearchColumnSelectField[]',
        'id' => 'SearchColumnLongField[]',
        'nexusCountry' => 'SearchColumnEnumSelectField[]',
        'taxRegistrationNumber' => 'SearchColumnStringField[]',
    );
}
