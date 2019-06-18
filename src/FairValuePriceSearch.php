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
 * FairValuePriceSearch.
 */
class FairValuePriceSearch extends SearchRecord
{
    /**
     * @var FairValuePriceSearchBasic
     */
    public $basic;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'FairValuePriceSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
