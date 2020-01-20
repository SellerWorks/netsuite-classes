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
 * SearchDateField
 */
class SearchDateField {
	/**
	 * @access public
	 * @var SearchDate
	 */
	public $predefinedSearchValue;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchDateFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"predefinedSearchValue" => "SearchDate",
		"searchValue" => "dateTime",
		"searchValue2" => "dateTime",
		"operator" => "SearchDateFieldOperator",
	);
}
