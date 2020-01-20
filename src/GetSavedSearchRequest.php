<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * GetSavedSearchRequest
 */
class GetSavedSearchRequest {
	/**
	 * @access public
	 * @var GetSavedSearchRecord
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "GetSavedSearchRecord",
	);
}
