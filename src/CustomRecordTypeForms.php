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
 * CustomRecordTypeForms.
 */
class CustomRecordTypeForms
{
    /**
     * @var string
     */
    public $formEdit;
    /**
     * @var string
     */
    public $formName;
    /**
     * @var bool
     */
    public $formPref;

    public static $paramtypesmap = array(
        'formEdit' => 'string',
        'formName' => 'string',
        'formPref' => 'boolean',
    );
}
