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
 * LocationAutoAssignmentRegionSetting
 */
class LocationAutoAssignmentRegionSetting {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _allowSpecifiedRegionsOnly = "_allowSpecifiedRegionsOnly";
	/**
	 * @var string
	 */
	const _allowWorldwide = "_allowWorldwide";
	/**
	 * @var string
	 */
	const _allowWorldwideExceptExcludedRegions = "_allowWorldwideExceptExcludedRegions";
	/**
	 * @var string
	 */
	const _disallow = "_disallow";
}
