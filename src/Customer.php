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
 * Customer.
 */
class Customer extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $entityId;
    /**
     * @var string
     */
    public $altName;
    /**
     * @var bool
     */
    public $isPerson;
    /**
     * @var string
     */
    public $phoneticName;
    /**
     * @var string
     */
    public $salutation;
    /**
     * @var string
     */
    public $firstName;
    /**
     * @var string
     */
    public $middleName;
    /**
     * @var string
     */
    public $lastName;
    /**
     * @var string
     */
    public $companyName;
    /**
     * @var RecordRef
     */
    public $entityStatus;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $defaultAddress;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var RecordRef
     */
    public $category;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $printOnCheckAs;
    /**
     * @var string
     */
    public $altPhone;
    /**
     * @var string
     */
    public $homePhone;
    /**
     * @var string
     */
    public $mobilePhone;
    /**
     * @var string
     */
    public $altEmail;
    /**
     * @var Language
     */
    public $language;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var CustomerNumberFormat
     */
    public $numberFormat;
    /**
     * @var CustomerNegativeNumberFormat
     */
    public $negativeNumberFormat;
    /**
     * @var dateTime
     */
    public $dateCreated;
    /**
     * @var RecordRef
     */
    public $image;
    /**
     * @var EmailPreference
     */
    public $emailPreference;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $representingSubsidiary;
    /**
     * @var RecordRef
     */
    public $salesRep;
    /**
     * @var RecordRef
     */
    public $territory;
    /**
     * @var string
     */
    public $contribPct;
    /**
     * @var RecordRef
     */
    public $partner;
    /**
     * @var RecordRef
     */
    public $salesGroup;
    /**
     * @var string
     */
    public $vatRegNumber;
    /**
     * @var string
     */
    public $accountNumber;
    /**
     * @var bool
     */
    public $taxExempt;
    /**
     * @var RecordRef
     */
    public $terms;
    /**
     * @var float
     */
    public $creditLimit;
    /**
     * @var CustomerCreditHoldOverride
     */
    public $creditHoldOverride;
    /**
     * @var CustomerMonthlyClosing
     */
    public $monthlyClosing;
    /**
     * @var bool
     */
    public $overrideCurrencyFormat;
    /**
     * @var string
     */
    public $displaySymbol;
    /**
     * @var CurrencySymbolPlacement
     */
    public $symbolPlacement;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var float
     */
    public $overdueBalance;
    /**
     * @var int
     */
    public $daysOverdue;
    /**
     * @var float
     */
    public $unbilledOrders;
    /**
     * @var float
     */
    public $consolUnbilledOrders;
    /**
     * @var float
     */
    public $consolOverdueBalance;
    /**
     * @var float
     */
    public $consolDepositBalance;
    /**
     * @var float
     */
    public $consolBalance;
    /**
     * @var float
     */
    public $consolAging;
    /**
     * @var float
     */
    public $consolAging1;
    /**
     * @var float
     */
    public $consolAging2;
    /**
     * @var float
     */
    public $consolAging3;
    /**
     * @var float
     */
    public $consolAging4;
    /**
     * @var int
     */
    public $consolDaysOverdue;
    /**
     * @var RecordRef
     */
    public $priceLevel;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $prefCCProcessor;
    /**
     * @var float
     */
    public $depositBalance;
    /**
     * @var bool
     */
    public $shipComplete;
    /**
     * @var bool
     */
    public $taxable;
    /**
     * @var RecordRef
     */
    public $taxItem;
    /**
     * @var string
     */
    public $resaleNumber;
    /**
     * @var float
     */
    public $aging;
    /**
     * @var float
     */
    public $aging1;
    /**
     * @var float
     */
    public $aging2;
    /**
     * @var float
     */
    public $aging3;
    /**
     * @var float
     */
    public $aging4;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var AlcoholRecipientType
     */
    public $alcoholRecipientType;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var int
     */
    public $reminderDays;
    /**
     * @var RecordRef
     */
    public $shippingItem;
    /**
     * @var string
     */
    public $thirdPartyAcct;
    /**
     * @var string
     */
    public $thirdPartyZipcode;
    /**
     * @var Country
     */
    public $thirdPartyCountry;
    /**
     * @var bool
     */
    public $giveAccess;
    /**
     * @var float
     */
    public $estimatedBudget;
    /**
     * @var RecordRef
     */
    public $accessRole;
    /**
     * @var bool
     */
    public $sendEmail;
    /**
     * @var RecordRef
     */
    public $assignedWebSite;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $password2;
    /**
     * @var bool
     */
    public $requirePwdChange;
    /**
     * @var RecordRef
     */
    public $campaignCategory;
    /**
     * @var RecordRef
     */
    public $sourceWebSite;
    /**
     * @var RecordRef
     */
    public $leadSource;
    /**
     * @var RecordRef
     */
    public $receivablesAccount;
    /**
     * @var RecordRef
     */
    public $drAccount;
    /**
     * @var RecordRef
     */
    public $fxAccount;
    /**
     * @var float
     */
    public $defaultOrderPriority;
    /**
     * @var string
     */
    public $webLead;
    /**
     * @var string
     */
    public $referrer;
    /**
     * @var string
     */
    public $keywords;
    /**
     * @var string
     */
    public $clickStream;
    /**
     * @var string
     */
    public $lastPageVisited;
    /**
     * @var int
     */
    public $visits;
    /**
     * @var dateTime
     */
    public $firstVisit;
    /**
     * @var dateTime
     */
    public $lastVisit;
    /**
     * @var bool
     */
    public $billPay;
    /**
     * @var float
     */
    public $openingBalance;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var dateTime
     */
    public $openingBalanceDate;
    /**
     * @var RecordRef
     */
    public $openingBalanceAccount;
    /**
     * @var CustomerStage
     */
    public $stage;
    /**
     * @var bool
     */
    public $emailTransactions;
    /**
     * @var bool
     */
    public $printTransactions;
    /**
     * @var bool
     */
    public $faxTransactions;
    /**
     * @var RecordRef
     */
    public $defaultTaxReg;
    /**
     * @var bool
     */
    public $syncPartnerTeams;
    /**
     * @var bool
     */
    public $isBudgetApproved;
    /**
     * @var GlobalSubscriptionStatus
     */
    public $globalSubscriptionStatus;
    /**
     * @var RecordRef
     */
    public $salesReadiness;
    /**
     * @var CustomerSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var RecordRef
     */
    public $buyingReason;
    /**
     * @var CustomerDownloadList
     */
    public $downloadList;
    /**
     * @var RecordRef
     */
    public $buyingTimeFrame;
    /**
     * @var CustomerAddressbookList
     */
    public $addressbookList;
    /**
     * @var SubscriptionsList
     */
    public $subscriptionsList;
    /**
     * @var ContactAccessRolesList
     */
    public $contactRolesList;
    /**
     * @var CustomerCurrencyList
     */
    public $currencyList;
    /**
     * @var CustomerCreditCardsList
     */
    public $creditCardsList;
    /**
     * @var CustomerPartnersList
     */
    public $partnersList;
    /**
     * @var CustomerGroupPricingList
     */
    public $groupPricingList;
    /**
     * @var CustomerItemPricingList
     */
    public $itemPricingList;
    /**
     * @var CustomerTaxRegistrationList
     */
    public $taxRegistrationList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'customForm' => 'RecordRef',
        'entityId' => 'string',
        'altName' => 'string',
        'isPerson' => 'boolean',
        'phoneticName' => 'string',
        'salutation' => 'string',
        'firstName' => 'string',
        'middleName' => 'string',
        'lastName' => 'string',
        'companyName' => 'string',
        'entityStatus' => 'RecordRef',
        'parent' => 'RecordRef',
        'phone' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'url' => 'string',
        'defaultAddress' => 'string',
        'isInactive' => 'boolean',
        'category' => 'RecordRef',
        'title' => 'string',
        'printOnCheckAs' => 'string',
        'altPhone' => 'string',
        'homePhone' => 'string',
        'mobilePhone' => 'string',
        'altEmail' => 'string',
        'language' => 'Language',
        'comments' => 'string',
        'numberFormat' => 'CustomerNumberFormat',
        'negativeNumberFormat' => 'CustomerNegativeNumberFormat',
        'dateCreated' => 'dateTime',
        'image' => 'RecordRef',
        'emailPreference' => 'EmailPreference',
        'subsidiary' => 'RecordRef',
        'representingSubsidiary' => 'RecordRef',
        'salesRep' => 'RecordRef',
        'territory' => 'RecordRef',
        'contribPct' => 'string',
        'partner' => 'RecordRef',
        'salesGroup' => 'RecordRef',
        'vatRegNumber' => 'string',
        'accountNumber' => 'string',
        'taxExempt' => 'boolean',
        'terms' => 'RecordRef',
        'creditLimit' => 'float',
        'creditHoldOverride' => 'CustomerCreditHoldOverride',
        'monthlyClosing' => 'CustomerMonthlyClosing',
        'overrideCurrencyFormat' => 'boolean',
        'displaySymbol' => 'string',
        'symbolPlacement' => 'CurrencySymbolPlacement',
        'balance' => 'float',
        'overdueBalance' => 'float',
        'daysOverdue' => 'integer',
        'unbilledOrders' => 'float',
        'consolUnbilledOrders' => 'float',
        'consolOverdueBalance' => 'float',
        'consolDepositBalance' => 'float',
        'consolBalance' => 'float',
        'consolAging' => 'float',
        'consolAging1' => 'float',
        'consolAging2' => 'float',
        'consolAging3' => 'float',
        'consolAging4' => 'float',
        'consolDaysOverdue' => 'integer',
        'priceLevel' => 'RecordRef',
        'currency' => 'RecordRef',
        'prefCCProcessor' => 'RecordRef',
        'depositBalance' => 'float',
        'shipComplete' => 'boolean',
        'taxable' => 'boolean',
        'taxItem' => 'RecordRef',
        'resaleNumber' => 'string',
        'aging' => 'float',
        'aging1' => 'float',
        'aging2' => 'float',
        'aging3' => 'float',
        'aging4' => 'float',
        'startDate' => 'dateTime',
        'alcoholRecipientType' => 'AlcoholRecipientType',
        'endDate' => 'dateTime',
        'reminderDays' => 'integer',
        'shippingItem' => 'RecordRef',
        'thirdPartyAcct' => 'string',
        'thirdPartyZipcode' => 'string',
        'thirdPartyCountry' => 'Country',
        'giveAccess' => 'boolean',
        'estimatedBudget' => 'float',
        'accessRole' => 'RecordRef',
        'sendEmail' => 'boolean',
        'assignedWebSite' => 'RecordRef',
        'password' => 'string',
        'password2' => 'string',
        'requirePwdChange' => 'boolean',
        'campaignCategory' => 'RecordRef',
        'sourceWebSite' => 'RecordRef',
        'leadSource' => 'RecordRef',
        'receivablesAccount' => 'RecordRef',
        'drAccount' => 'RecordRef',
        'fxAccount' => 'RecordRef',
        'defaultOrderPriority' => 'float',
        'webLead' => 'string',
        'referrer' => 'string',
        'keywords' => 'string',
        'clickStream' => 'string',
        'lastPageVisited' => 'string',
        'visits' => 'integer',
        'firstVisit' => 'dateTime',
        'lastVisit' => 'dateTime',
        'billPay' => 'boolean',
        'openingBalance' => 'float',
        'lastModifiedDate' => 'dateTime',
        'openingBalanceDate' => 'dateTime',
        'openingBalanceAccount' => 'RecordRef',
        'stage' => 'CustomerStage',
        'emailTransactions' => 'boolean',
        'printTransactions' => 'boolean',
        'faxTransactions' => 'boolean',
        'defaultTaxReg' => 'RecordRef',
        'syncPartnerTeams' => 'boolean',
        'isBudgetApproved' => 'boolean',
        'globalSubscriptionStatus' => 'GlobalSubscriptionStatus',
        'salesReadiness' => 'RecordRef',
        'salesTeamList' => 'CustomerSalesTeamList',
        'buyingReason' => 'RecordRef',
        'downloadList' => 'CustomerDownloadList',
        'buyingTimeFrame' => 'RecordRef',
        'addressbookList' => 'CustomerAddressbookList',
        'subscriptionsList' => 'SubscriptionsList',
        'contactRolesList' => 'ContactAccessRolesList',
        'currencyList' => 'CustomerCurrencyList',
        'creditCardsList' => 'CustomerCreditCardsList',
        'partnersList' => 'CustomerPartnersList',
        'groupPricingList' => 'CustomerGroupPricingList',
        'itemPricingList' => 'CustomerItemPricingList',
        'taxRegistrationList' => 'CustomerTaxRegistrationList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
