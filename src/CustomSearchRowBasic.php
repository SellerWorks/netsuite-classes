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
 * CustomSearchRowBasic.
 */
class CustomSearchRowBasic
{
    /**
     * @var CustomizationRef
     */
    public $customizationRef;
    /**
     * @var SearchRowBasic
     */
    public $searchRowBasic;

    public static $paramtypesmap = [
        'customizationRef' => 'CustomizationRef',
        'searchRowBasic' => 'SearchRowBasic',
    ];
}
