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
 * InitializeRecord.
 */
class InitializeRecord
{
    /**
     * @var InitializeType
     */
    public $type;
    /**
     * @var InitializeRef
     */
    public $reference;
    /**
     * @var InitializeAuxRef
     */
    public $auxReference;
    /**
     * @var InitializeRefList
     */
    public $referenceList;

    public static $paramtypesmap = array(
        'type' => 'InitializeType',
        'reference' => 'InitializeRef',
        'auxReference' => 'InitializeAuxRef',
        'referenceList' => 'InitializeRefList',
    );
}
