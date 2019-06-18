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
 * CustomFieldType.
 */
class CustomFieldType extends Record
{
    /**
     * @var CustomizationFieldType
     */
    public $fieldType;
    /**
     * @var string
     */
    public $scriptId;

    public static $paramtypesmap = array(
        'fieldType' => 'CustomizationFieldType',
        'scriptId' => 'string',
    );
}
