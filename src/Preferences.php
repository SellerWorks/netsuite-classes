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
 * Preferences.
 */
class Preferences
{
    /**
     * @var bool
     */
    public $warningAsError;
    /**
     * @var bool
     */
    public $disableMandatoryCustomFieldValidation;
    /**
     * @var bool
     */
    public $disableSystemNotesForCustomFields;
    /**
     * @var bool
     */
    public $ignoreReadOnlyFields;
    /**
     * @var bool
     */
    public $runServerSuiteScriptAndTriggerWorkflows;

    public static $paramtypesmap = array(
        'warningAsError' => 'boolean',
        'disableMandatoryCustomFieldValidation' => 'boolean',
        'disableSystemNotesForCustomFields' => 'boolean',
        'ignoreReadOnlyFields' => 'boolean',
        'runServerSuiteScriptAndTriggerWorkflows' => 'boolean',
    );
}
