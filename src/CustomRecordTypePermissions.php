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
 * CustomRecordTypePermissions.
 */
class CustomRecordTypePermissions
{
    /**
     * @var RecordRef
     */
    public $permittedRole;
    /**
     * @var CustomRecordTypePermissionsPermittedLevel
     */
    public $permittedLevel;
    /**
     * @var CustomRecordTypePermissionsRestriction
     */
    public $restriction;
    /**
     * @var RecordRef
     */
    public $defaultForm;
    /**
     * @var bool
     */
    public $restrictForm;
    /**
     * @var RecordRef
     */
    public $searchForm;
    /**
     * @var RecordRef
     */
    public $searchResults;
    /**
     * @var RecordRef
     */
    public $listView;
    /**
     * @var bool
     */
    public $listViewRestricted;
    /**
     * @var RecordRef
     */
    public $dashboardView;
    /**
     * @var bool
     */
    public $restrictDashboardView;
    /**
     * @var RecordRef
     */
    public $sublistView;
    /**
     * @var bool
     */
    public $restrictSublistView;

    public static $paramtypesmap = [
        'permittedRole' => 'RecordRef',
        'permittedLevel' => 'CustomRecordTypePermissionsPermittedLevel',
        'restriction' => 'CustomRecordTypePermissionsRestriction',
        'defaultForm' => 'RecordRef',
        'restrictForm' => 'boolean',
        'searchForm' => 'RecordRef',
        'searchResults' => 'RecordRef',
        'listView' => 'RecordRef',
        'listViewRestricted' => 'boolean',
        'dashboardView' => 'RecordRef',
        'restrictDashboardView' => 'boolean',
        'sublistView' => 'RecordRef',
        'restrictSublistView' => 'boolean',
    ];
}
