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
 * CustomSearchJoin.
 */
class CustomSearchJoin
{
    /**
     * @var CustomizationRef
     */
    public $customizationRef;
    /**
     * @var SearchRecordBasic
     */
    public $searchRecordBasic;

    public static $paramtypesmap = array(
        'customizationRef' => 'CustomizationRef',
        'searchRecordBasic' => 'SearchRecordBasic',
    );
}
