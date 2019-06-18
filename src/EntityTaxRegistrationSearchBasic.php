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
 * EntityTaxRegistrationSearchBasic.
 */
class EntityTaxRegistrationSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $address;
    /**
     * @var SearchLongField
     */
    public $id;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $nexusCountry;
    /**
     * @var SearchStringField
     */
    public $taxRegistrationNumber;

    public static $paramtypesmap = array(
        'address' => 'SearchMultiSelectField',
        'id' => 'SearchLongField',
        'nexusCountry' => 'SearchEnumMultiSelectField',
        'taxRegistrationNumber' => 'SearchStringField',
    );
}
