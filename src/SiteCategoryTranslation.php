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
 * SiteCategoryTranslation
 */
class SiteCategoryTranslation {
	/**
	 * @access public
	 * @var Language
	 */
	public $locale;
	/**
	 * @access public
	 * @var string
	 */
	public $language;
	/**
	 * @access public
	 * @var string
	 */
	public $displayName;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var string
	 */
	public $storeDetailedDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $pageTitle;

	static $paramtypesmap = array(
		"locale" => "Language",
		"language" => "string",
		"displayName" => "string",
		"description" => "string",
		"storeDetailedDescription" => "string",
		"pageTitle" => "string",
	);
}
