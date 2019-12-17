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
 * TransactionSearchBasic.
 */
class TransactionSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $account;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $accountType;
    /**
     * @var SearchMultiSelectField
     */
    public $acctCorpCardExp;
    /**
     * @var SearchDateField
     */
    public $actualShipDate;
    /**
     * @var SearchDoubleField
     */
    public $altSalesAmount;
    /**
     * @var SearchDoubleField
     */
    public $altSalesNetAmount;
    /**
     * @var SearchDoubleField
     */
    public $amount;
    /**
     * @var SearchDoubleField
     */
    public $amountPaid;
    /**
     * @var SearchDoubleField
     */
    public $amountRemaining;
    /**
     * @var SearchDoubleField
     */
    public $amountUnbilled;
    /**
     * @var SearchMultiSelectField
     */
    public $anyLineItem;
    /**
     * @var SearchDoubleField
     */
    public $appliedToForeignAmount;
    /**
     * @var SearchBooleanField
     */
    public $appliedToIsFxVariance;
    /**
     * @var SearchDoubleField
     */
    public $appliedToLinkAmount;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $appliedToLinkType;
    /**
     * @var SearchMultiSelectField
     */
    public $appliedToTransaction;
    /**
     * @var SearchDoubleField
     */
    public $applyingForeignAmount;
    /**
     * @var SearchBooleanField
     */
    public $applyingIsFxVariance;
    /**
     * @var SearchDoubleField
     */
    public $applyingLinkAmount;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $applyingLinkType;
    /**
     * @var SearchMultiSelectField
     */
    public $applyingTransaction;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $approvalStatus;
    /**
     * @var SearchStringField
     */
    public $authCode;
    /**
     * @var SearchBooleanField
     */
    public $autoCalculateLag;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $avsStreetMatch;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $avsZipMatch;
    /**
     * @var SearchBooleanField
     */
    public $billable;
    /**
     * @var SearchStringField
     */
    public $billAddress;
    /**
     * @var SearchStringField
     */
    public $billAddressee;
    /**
     * @var SearchStringField
     */
    public $billAttention;
    /**
     * @var SearchStringField
     */
    public $billCity;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $billCountry;
    /**
     * @var SearchStringField
     */
    public $billCounty;
    /**
     * @var SearchDateField
     */
    public $billedDate;
    /**
     * @var SearchMultiSelectField
     */
    public $billingAccount;
    /**
     * @var SearchMultiSelectField
     */
    public $billingSchedule;
    /**
     * @var SearchBooleanField
     */
    public $billingStatus;
    /**
     * @var SearchMultiSelectField
     */
    public $billingTransaction;
    /**
     * @var SearchStringField
     */
    public $billPhone;
    /**
     * @var SearchStringField
     */
    public $billState;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $billVarianceStatus;
    /**
     * @var SearchStringField
     */
    public $billZip;
    /**
     * @var SearchStringField
     */
    public $binNumber;
    /**
     * @var SearchDoubleField
     */
    public $binNumberQuantity;
    /**
     * @var SearchDoubleField
     */
    public $bomQuantity;
    /**
     * @var SearchBooleanField
     */
    public $bookSpecificTransaction;
    /**
     * @var SearchBooleanField
     */
    public $buildEntireAssembly;
    /**
     * @var SearchDoubleField
     */
    public $buildVariance;
    /**
     * @var SearchDoubleField
     */
    public $built;
    /**
     * @var SearchBooleanField
     */
    public $canHaveStackablePromotions;
    /**
     * @var SearchMultiSelectField
     */
    public $catchUpPeriod;
    /**
     * @var SearchStringField
     */
    public $ccCustomerCode;
    /**
     * @var SearchDateField
     */
    public $ccExpireDate;
    /**
     * @var SearchStringField
     */
    public $ccName;
    /**
     * @var SearchStringField
     */
    public $ccNumber;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $chargeType;
    /**
     * @var SearchMultiSelectField
     */
    public $class;
    /**
     * @var SearchBooleanField
     */
    public $cleared;
    /**
     * @var SearchBooleanField
     */
    public $closed;
    /**
     * @var SearchDateField
     */
    public $closeDate;
    /**
     * @var SearchBooleanField
     */
    public $cogs;
    /**
     * @var SearchDateField
     */
    public $commissionEffectiveDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $commit;
    /**
     * @var SearchDoubleField
     */
    public $componentYield;
    /**
     * @var SearchStringField
     */
    public $confirmationNumber;
    /**
     * @var SearchLongField
     */
    public $contribution;
    /**
     * @var SearchDoubleField
     */
    public $costComponentAmount;
    /**
     * @var SearchMultiSelectField
     */
    public $costComponentCategory;
    /**
     * @var SearchMultiSelectField
     */
    public $costComponentItem;
    /**
     * @var SearchDoubleField
     */
    public $costComponentQuantity;
    /**
     * @var SearchDoubleField
     */
    public $costComponentStandardCost;
    /**
     * @var SearchDoubleField
     */
    public $costEstimate;
    /**
     * @var SearchDoubleField
     */
    public $costEstimateRate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $costEstimateType;
    /**
     * @var SearchMultiSelectField
     */
    public $createdBy;
    /**
     * @var SearchMultiSelectField
     */
    public $createdFrom;
    /**
     * @var SearchDoubleField
     */
    public $creditAmount;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $cscMatch;
    /**
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @var SearchMultiSelectField
     */
    public $customerSubOf;
    /**
     * @var SearchMultiSelectField
     */
    public $customForm;
    /**
     * @var SearchBooleanField
     */
    public $customGL;
    /**
     * @var SearchMultiSelectField
     */
    public $custType;
    /**
     * @var SearchDateField
     */
    public $dateCreated;
    /**
     * @var SearchLongField
     */
    public $daysOpen;
    /**
     * @var SearchLongField
     */
    public $daysOverdue;
    /**
     * @var SearchDoubleField
     */
    public $debitAmount;
    /**
     * @var SearchDoubleField
     */
    public $deferredRevenue;
    /**
     * @var SearchBooleanField
     */
    public $deferRevRec;
    /**
     * @var SearchMultiSelectField
     */
    public $department;
    /**
     * @var SearchDateField
     */
    public $depositDate;
    /**
     * @var SearchMultiSelectField
     */
    public $depositTransaction;
    /**
     * @var SearchMultiSelectField
     */
    public $drAccount;
    /**
     * @var SearchDateField
     */
    public $dueDate;
    /**
     * @var SearchStringField
     */
    public $email;
    /**
     * @var SearchMultiSelectField
     */
    public $employee;
    /**
     * @var SearchDateField
     */
    public $endDate;
    /**
     * @var SearchMultiSelectField
     */
    public $entity;
    /**
     * @var SearchMultiSelectField
     */
    public $entityStatus;
    /**
     * @var SearchDoubleField
     */
    public $estGrossProfit;
    /**
     * @var SearchDoubleField
     */
    public $estGrossProfitPct;
    /**
     * @var SearchDoubleField
     */
    public $exchangeRate;
    /**
     * @var SearchBooleanField
     */
    public $excludeCommission;
    /**
     * @var SearchBooleanField
     */
    public $excludeFromRateRequest;
    /**
     * @var SearchDateField
     */
    public $expectedCloseDate;
    /**
     * @var SearchDateField
     */
    public $expectedReceiptDate;
    /**
     * @var SearchMultiSelectField
     */
    public $expenseCategory;
    /**
     * @var SearchDateField
     */
    public $expenseDate;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchBooleanField
     */
    public $finChrg;
    /**
     * @var SearchBooleanField
     */
    public $firmed;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $forecastType;
    /**
     * @var SearchMultiSelectField
     */
    public $fulfillingTransaction;
    /**
     * @var SearchMultiSelectField
     */
    public $fxAccount;
    /**
     * @var SearchDoubleField
     */
    public $fxAmount;
    /**
     * @var SearchDoubleField
     */
    public $fxCostEstimate;
    /**
     * @var SearchDoubleField
     */
    public $fxCostEstimateRate;
    /**
     * @var SearchDoubleField
     */
    public $fxEstGrossProfit;
    /**
     * @var SearchDoubleField
     */
    public $fxTranCostEstimate;
    /**
     * @var SearchDoubleField
     */
    public $fxVsoeAllocation;
    /**
     * @var SearchDoubleField
     */
    public $fxVsoeAmount;
    /**
     * @var SearchDoubleField
     */
    public $fxVsoePrice;
    /**
     * @var SearchBooleanField
     */
    public $gcoAvailabelToCharge;
    /**
     * @var SearchBooleanField
     */
    public $gcoAvailableToRefund;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $gcoAvsStreetMatch;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $gcoAvsZipMatch;
    /**
     * @var SearchLongField
     */
    public $gcoBuyerAccountAge;
    /**
     * @var SearchStringField
     */
    public $gcoBuyerIp;
    /**
     * @var SearchDoubleField
     */
    public $gcoChargeAmount;
    /**
     * @var SearchDoubleField
     */
    public $gcoChargebackAmount;
    /**
     * @var SearchDoubleField
     */
    public $gcoConfirmedChargedTotal;
    /**
     * @var SearchDoubleField
     */
    public $gcoConfirmedRefundedTotal;
    /**
     * @var SearchStringField
     */
    public $gcoCreditcardNumber;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $gcoCscMatch;
    /**
     * @var SearchStringField
     */
    public $gcoFinancialState;
    /**
     * @var SearchStringField
     */
    public $gcoFulfillmentState;
    /**
     * @var SearchStringField
     */
    public $gcoOrderId;
    /**
     * @var SearchDoubleField
     */
    public $gcoOrderTotal;
    /**
     * @var SearchDoubleField
     */
    public $gcoPromotionAmount;
    /**
     * @var SearchStringField
     */
    public $gcoPromotionName;
    /**
     * @var SearchDoubleField
     */
    public $gcoRefundAmount;
    /**
     * @var SearchDoubleField
     */
    public $gcoShippingTotal;
    /**
     * @var SearchStringField
     */
    public $gcoStateChangedDetail;
    /**
     * @var SearchStringField
     */
    public $giftCertificate;
    /**
     * @var SearchDoubleField
     */
    public $grossAmount;
    /**
     * @var SearchBooleanField
     */
    public $includeInForecast;
    /**
     * @var SearchMultiSelectField
     */
    public $incoterm;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $intercoStatus;
    /**
     * @var SearchMultiSelectField
     */
    public $intercoTransaction;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $inventoryLocation;
    /**
     * @var SearchMultiSelectField
     */
    public $inventorySubsidiary;
    /**
     * @var SearchBooleanField
     */
    public $inVsoeBundle;
    /**
     * @var SearchBooleanField
     */
    public $isAllocation;
    /**
     * @var SearchBooleanField
     */
    public $isBackflush;
    /**
     * @var SearchBooleanField
     */
    public $isGcoChargeback;
    /**
     * @var SearchBooleanField
     */
    public $isGcoChargeConfirmed;
    /**
     * @var SearchBooleanField
     */
    public $isGcoPaymentGuaranteed;
    /**
     * @var SearchBooleanField
     */
    public $isGcoRefundConfirmed;
    /**
     * @var SearchBooleanField
     */
    public $isInsideDelivery;
    /**
     * @var SearchBooleanField
     */
    public $isInsidePickup;
    /**
     * @var SearchBooleanField
     */
    public $isIntercompanyAdjustment;
    /**
     * @var SearchBooleanField
     */
    public $isInTransitPayment;
    /**
     * @var SearchBooleanField
     */
    public $isMultiShipTo;
    /**
     * @var SearchBooleanField
     */
    public $isPayPalMeth;
    /**
     * @var SearchBooleanField
     */
    public $isReversal;
    /**
     * @var SearchBooleanField
     */
    public $isRevRecTransaction;
    /**
     * @var SearchBooleanField
     */
    public $isScrap;
    /**
     * @var SearchBooleanField
     */
    public $isShipAddress;
    /**
     * @var SearchBooleanField
     */
    public $isTransferPriceCosting;
    /**
     * @var SearchBooleanField
     */
    public $isVsoeAlloc;
    /**
     * @var SearchBooleanField
     */
    public $isWip;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $itemFulfillmentChoice;
    /**
     * @var SearchMultiSelectField
     */
    public $itemRevision;
    /**
     * @var SearchMultiSelectField
     */
    public $itemSubOf;
    /**
     * @var SearchBooleanField
     */
    public $landedCostPerLine;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchMultiSelectField
     */
    public $leadSource;
    /**
     * @var SearchLongField
     */
    public $lineUniqueKey;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchBooleanField
     */
    public $locationAutoAssigned;
    /**
     * @var SearchBooleanField
     */
    public $mainLine;
    /**
     * @var SearchMultiSelectField
     */
    public $mainName;
    /**
     * @var SearchMultiSelectField
     */
    public $manufacturingRouting;
    /**
     * @var SearchBooleanField
     */
    public $matchBillToReceipt;
    /**
     * @var SearchStringField
     */
    public $memo;
    /**
     * @var SearchStringField
     */
    public $memoMain;
    /**
     * @var SearchBooleanField
     */
    public $memorized;
    /**
     * @var SearchStringField
     */
    public $merchantAccount;
    /**
     * @var SearchStringField
     */
    public $message;
    /**
     * @var SearchBooleanField
     */
    public $multiSubsidiary;
    /**
     * @var SearchStringField
     */
    public $nameText;
    /**
     * @var SearchDoubleField
     */
    public $netAmount;
    /**
     * @var SearchMultiSelectField
     */
    public $nextApprover;
    /**
     * @var SearchDateField
     */
    public $nextBillDate;
    /**
     * @var SearchMultiSelectField
     */
    public $nexus;
    /**
     * @var SearchBooleanField
     */
    public $noAutoAssignLocation;
    /**
     * @var SearchBooleanField
     */
    public $nonReimbursable;
    /**
     * @var SearchLongField
     */
    public $number;
    /**
     * @var SearchDoubleField
     */
    public $oneTimeTotal;
    /**
     * @var SearchMultiSelectField
     */
    public $opportunity;
    /**
     * @var SearchDoubleField
     */
    public $orderPriority;
    /**
     * @var SearchTextNumberField
     */
    public $otherRefNum;
    /**
     * @var SearchTextNumberField
     */
    public $otherRefNumNonDeposit;
    /**
     * @var SearchMultiSelectField
     */
    public $overheadParentItem;
    /**
     * @var SearchBooleanField
     */
    public $overrideInstallments;
    /**
     * @var SearchLongField
     */
    public $packageCount;
    /**
     * @var SearchMultiSelectField
     */
    public $paidTransaction;
    /**
     * @var SearchLongField
     */
    public $parent;
    /**
     * @var SearchMultiSelectField
     */
    public $partner;
    /**
     * @var SearchLongField
     */
    public $partnerContribution;
    /**
     * @var SearchMultiSelectField
     */
    public $partnerRole;
    /**
     * @var SearchMultiSelectField
     */
    public $partnerTeamMember;
    /**
     * @var SearchMultiSelectField
     */
    public $payingTransaction;
    /**
     * @var SearchBooleanField
     */
    public $paymentApproved;
    /**
     * @var SearchDateField
     */
    public $paymentEventDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $paymentEventHoldReason;
    /**
     * @var SearchBooleanField
     */
    public $paymentEventPurchaseCardUsed;
    /**
     * @var SearchBooleanField
     */
    public $paymentEventPurchaseDataSent;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $paymentEventResult;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $paymentEventType;
    /**
     * @var SearchBooleanField
     */
    public $paymentHold;
    /**
     * @var SearchMultiSelectField
     */
    public $paymentMethod;
    /**
     * @var SearchStringField
     */
    public $paymentOption;
    /**
     * @var SearchBooleanField
     */
    public $payPalPending;
    /**
     * @var SearchStringField
     */
    public $payPalStatus;
    /**
     * @var SearchStringField
     */
    public $payPalTranId;
    /**
     * @var SearchStringField
     */
    public $pnRefNum;
    /**
     * @var SearchStringField
     */
    public $poAsText;
    /**
     * @var SearchBooleanField
     */
    public $posting;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var PostingPeriodDate
     */
    public $postingPeriodRelative;
    /**
     * @var SearchMultiSelectField
     */
    public $priceLevel;
    /**
     * @var SearchBooleanField
     */
    public $printedPickingTicket;
    /**
     * @var SearchLongField
     */
    public $probability;
    /**
     * @var SearchDoubleField
     */
    public $projectedAmount;
    /**
     * @var SearchMultiSelectField
     */
    public $projectTask;
    /**
     * @var SearchMultiSelectField
     */
    public $promoCode;
    /**
     * @var SearchMultiSelectField
     */
    public $purchaseOrder;
    /**
     * @var SearchDoubleField
     */
    public $quantity;
    /**
     * @var SearchDoubleField
     */
    public $quantityBilled;
    /**
     * @var SearchDoubleField
     */
    public $quantityCommitted;
    /**
     * @var SearchDoubleField
     */
    public $quantityPacked;
    /**
     * @var SearchDoubleField
     */
    public $quantityPicked;
    /**
     * @var SearchDoubleField
     */
    public $quantityRevCommitted;
    /**
     * @var SearchDoubleField
     */
    public $quantityShipRecv;
    /**
     * @var SearchDoubleField
     */
    public $recognizedRevenue;
    /**
     * @var SearchStringField
     */
    public $recordType;
    /**
     * @var SearchDoubleField
     */
    public $recurAnnuallyTotal;
    /**
     * @var SearchDoubleField
     */
    public $recurMonthlyTotal;
    /**
     * @var SearchDoubleField
     */
    public $recurQuarterlyTotal;
    /**
     * @var SearchBooleanField
     */
    public $recurringBill;
    /**
     * @var SearchDoubleField
     */
    public $recurWeeklyTotal;
    /**
     * @var SearchLongField
     */
    public $refNumber;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $revCommitStatus;
    /**
     * @var SearchBooleanField
     */
    public $revCommittingStatus;
    /**
     * @var SearchMultiSelectField
     */
    public $revCommittingTransaction;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $revenueStatus;
    /**
     * @var SearchDateField
     */
    public $reversalDate;
    /**
     * @var SearchStringField
     */
    public $reversalNumber;
    /**
     * @var SearchDateField
     */
    public $revRecEndDate;
    /**
     * @var SearchBooleanField
     */
    public $revRecOnRevCommitment;
    /**
     * @var SearchDateField
     */
    public $revRecStartDate;
    /**
     * @var SearchLongField
     */
    public $revRecTermInMonths;
    /**
     * @var SearchDateField
     */
    public $salesEffectiveDate;
    /**
     * @var SearchMultiSelectField
     */
    public $salesOrder;
    /**
     * @var SearchMultiSelectField
     */
    public $salesRep;
    /**
     * @var SearchMultiSelectField
     */
    public $salesTeamMember;
    /**
     * @var SearchMultiSelectField
     */
    public $salesTeamRole;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $schedulingMethod;
    /**
     * @var SearchStringField
     */
    public $serialNumber;
    /**
     * @var SearchDoubleField
     */
    public $serialNumberCost;
    /**
     * @var SearchDoubleField
     */
    public $serialNumberCostAdjustment;
    /**
     * @var SearchDoubleField
     */
    public $serialNumberQuantity;
    /**
     * @var SearchStringField
     */
    public $serialNumbers;
    /**
     * @var SearchStringField
     */
    public $shipAddress;
    /**
     * @var SearchStringField
     */
    public $shipAddressee;
    /**
     * @var SearchStringField
     */
    public $shipAttention;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $shipCarrier;
    /**
     * @var SearchStringField
     */
    public $shipCity;
    /**
     * @var SearchBooleanField
     */
    public $shipComplete;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $shipCountry;
    /**
     * @var SearchStringField
     */
    public $shipCounty;
    /**
     * @var SearchDateField
     */
    public $shipDate;
    /**
     * @var SearchLongField
     */
    public $shipGroup;
    /**
     * @var SearchMultiSelectField
     */
    public $shipMethod;
    /**
     * @var SearchStringField
     */
    public $shipPhone;
    /**
     * @var SearchBooleanField
     */
    public $shipping;
    /**
     * @var SearchBooleanField
     */
    public $shipRecvStatus;
    /**
     * @var SearchBooleanField
     */
    public $shipRecvStatusLine;
    /**
     * @var SearchMultiSelectField
     */
    public $shipState;
    /**
     * @var SearchMultiSelectField
     */
    public $shipTo;
    /**
     * @var SearchStringField
     */
    public $shipZip;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $source;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchBooleanField
     */
    public $statistical;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var SearchMultiSelectField
     */
    public $subscription;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiaryTaxRegNum;
    /**
     * @var SearchMultiSelectField
     */
    public $subscriptionLine;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchMultiSelectField
     */
    public $taxItem;
    /**
     * @var SearchBooleanField
     */
    public $taxLine;
    /**
     * @var RecordRef
     */
    public $taxPeriod;
    /**
     * @var PostingPeriodDate
     */
    public $taxPeriodRelative;
    /**
     * @var SearchDateField
     */
    public $taxPointDate;
    /**
     * @var SearchDoubleField
     */
    public $taxRate;
    /**
     * @var SearchMultiSelectField
     */
    public $terms;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $termsOfSale;
    /**
     * @var SearchStringField
     */
    public $title;
    /**
     * @var SearchBooleanField
     */
    public $toBeEmailed;
    /**
     * @var SearchBooleanField
     */
    public $toBePrinted;
    /**
     * @var SearchMultiSelectField
     */
    public $toSubsidiary;
    /**
     * @var SearchDoubleField
     */
    public $totalAmount;
    /**
     * @var SearchStringField
     */
    public $trackingNumbers;
    /**
     * @var SearchDoubleField
     */
    public $tranCostEstimate;
    /**
     * @var SearchDateField
     */
    public $tranDate;
    /**
     * @var SearchDoubleField
     */
    public $tranEstGrossProfit;
    /**
     * @var SearchDoubleField
     */
    public $tranEstGrossProfitPct;
    /**
     * @var SearchDoubleField
     */
    public $tranFxEstGrossProfit;
    /**
     * @var SearchStringField
     */
    public $tranId;
    /**
     * @var SearchBooleanField
     */
    public $tranIsVsoeBundle;
    /**
     * @var SearchBooleanField
     */
    public $transactionDiscount;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $transactionLineType;
    /**
     * @var SearchStringField
     */
    public $transactionNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $transferLocation;
    /**
     * @var SearchDoubleField
     */
    public $transferOrderQuantityCommitted;
    /**
     * @var SearchDoubleField
     */
    public $transferOrderQuantityPacked;
    /**
     * @var SearchDoubleField
     */
    public $transferOrderQuantityPicked;
    /**
     * @var SearchDoubleField
     */
    public $transferOrderQuantityReceived;
    /**
     * @var SearchDoubleField
     */
    public $transferOrderQuantityShipped;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $type;
    /**
     * @var SearchMultiSelectField
     */
    public $unit;
    /**
     * @var SearchDoubleField
     */
    public $unitCostOverride;
    /**
     * @var SearchMultiSelectField
     */
    public $unitsType;
    /**
     * @var SearchMultiSelectField
     */
    public $vendType;
    /**
     * @var SearchBooleanField
     */
    public $visibleToCustomer;
    /**
     * @var SearchBooleanField
     */
    public $voided;
    /**
     * @var SearchDoubleField
     */
    public $vsoeAllocation;
    /**
     * @var SearchDoubleField
     */
    public $vsoeAmount;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $vsoeDeferral;
    /**
     * @var SearchBooleanField
     */
    public $vsoeDelivered;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $vsoePermitDiscount;
    /**
     * @var SearchDoubleField
     */
    public $vsoePrice;
    /**
     * @var SearchMultiSelectField
     */
    public $webSite;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'account' => 'SearchMultiSelectField',
        'accountType' => 'SearchEnumMultiSelectField',
        'acctCorpCardExp' => 'SearchMultiSelectField',
        'actualShipDate' => 'SearchDateField',
        'altSalesAmount' => 'SearchDoubleField',
        'altSalesNetAmount' => 'SearchDoubleField',
        'amount' => 'SearchDoubleField',
        'amountPaid' => 'SearchDoubleField',
        'amountRemaining' => 'SearchDoubleField',
        'amountUnbilled' => 'SearchDoubleField',
        'anyLineItem' => 'SearchMultiSelectField',
        'appliedToForeignAmount' => 'SearchDoubleField',
        'appliedToIsFxVariance' => 'SearchBooleanField',
        'appliedToLinkAmount' => 'SearchDoubleField',
        'appliedToLinkType' => 'SearchEnumMultiSelectField',
        'appliedToTransaction' => 'SearchMultiSelectField',
        'applyingForeignAmount' => 'SearchDoubleField',
        'applyingIsFxVariance' => 'SearchBooleanField',
        'applyingLinkAmount' => 'SearchDoubleField',
        'applyingLinkType' => 'SearchEnumMultiSelectField',
        'applyingTransaction' => 'SearchMultiSelectField',
        'approvalStatus' => 'SearchEnumMultiSelectField',
        'authCode' => 'SearchStringField',
        'autoCalculateLag' => 'SearchBooleanField',
        'avsStreetMatch' => 'SearchEnumMultiSelectField',
        'avsZipMatch' => 'SearchEnumMultiSelectField',
        'billable' => 'SearchBooleanField',
        'billAddress' => 'SearchStringField',
        'billAddressee' => 'SearchStringField',
        'billAttention' => 'SearchStringField',
        'billCity' => 'SearchStringField',
        'billCountry' => 'SearchEnumMultiSelectField',
        'billCounty' => 'SearchStringField',
        'billedDate' => 'SearchDateField',
        'billingAccount' => 'SearchMultiSelectField',
        'billingSchedule' => 'SearchMultiSelectField',
        'billingStatus' => 'SearchBooleanField',
        'billingTransaction' => 'SearchMultiSelectField',
        'billPhone' => 'SearchStringField',
        'billState' => 'SearchStringField',
        'billVarianceStatus' => 'SearchEnumMultiSelectField',
        'billZip' => 'SearchStringField',
        'binNumber' => 'SearchStringField',
        'binNumberQuantity' => 'SearchDoubleField',
        'bomQuantity' => 'SearchDoubleField',
        'bookSpecificTransaction' => 'SearchBooleanField',
        'buildEntireAssembly' => 'SearchBooleanField',
        'buildVariance' => 'SearchDoubleField',
        'built' => 'SearchDoubleField',
        'canHaveStackablePromotions' => 'SearchBooleanField',
        'catchUpPeriod' => 'SearchMultiSelectField',
        'ccCustomerCode' => 'SearchStringField',
        'ccExpireDate' => 'SearchDateField',
        'ccName' => 'SearchStringField',
        'ccNumber' => 'SearchStringField',
        'chargeType' => 'SearchEnumMultiSelectField',
        'class' => 'SearchMultiSelectField',
        'cleared' => 'SearchBooleanField',
        'closed' => 'SearchBooleanField',
        'closeDate' => 'SearchDateField',
        'cogs' => 'SearchBooleanField',
        'commissionEffectiveDate' => 'SearchDateField',
        'commit' => 'SearchEnumMultiSelectField',
        'componentYield' => 'SearchDoubleField',
        'confirmationNumber' => 'SearchStringField',
        'contribution' => 'SearchLongField',
        'costComponentAmount' => 'SearchDoubleField',
        'costComponentCategory' => 'SearchMultiSelectField',
        'costComponentItem' => 'SearchMultiSelectField',
        'costComponentQuantity' => 'SearchDoubleField',
        'costComponentStandardCost' => 'SearchDoubleField',
        'costEstimate' => 'SearchDoubleField',
        'costEstimateRate' => 'SearchDoubleField',
        'costEstimateType' => 'SearchEnumMultiSelectField',
        'createdBy' => 'SearchMultiSelectField',
        'createdFrom' => 'SearchMultiSelectField',
        'creditAmount' => 'SearchDoubleField',
        'cscMatch' => 'SearchEnumMultiSelectField',
        'currency' => 'SearchMultiSelectField',
        'customerSubOf' => 'SearchMultiSelectField',
        'customForm' => 'SearchMultiSelectField',
        'customGL' => 'SearchBooleanField',
        'custType' => 'SearchMultiSelectField',
        'dateCreated' => 'SearchDateField',
        'daysOpen' => 'SearchLongField',
        'daysOverdue' => 'SearchLongField',
        'debitAmount' => 'SearchDoubleField',
        'deferredRevenue' => 'SearchDoubleField',
        'deferRevRec' => 'SearchBooleanField',
        'department' => 'SearchMultiSelectField',
        'depositDate' => 'SearchDateField',
        'depositTransaction' => 'SearchMultiSelectField',
        'drAccount' => 'SearchMultiSelectField',
        'dueDate' => 'SearchDateField',
        'email' => 'SearchStringField',
        'employee' => 'SearchMultiSelectField',
        'endDate' => 'SearchDateField',
        'entity' => 'SearchMultiSelectField',
        'entityStatus' => 'SearchMultiSelectField',
        'estGrossProfit' => 'SearchDoubleField',
        'estGrossProfitPct' => 'SearchDoubleField',
        'exchangeRate' => 'SearchDoubleField',
        'excludeCommission' => 'SearchBooleanField',
        'excludeFromRateRequest' => 'SearchBooleanField',
        'expectedCloseDate' => 'SearchDateField',
        'expectedReceiptDate' => 'SearchDateField',
        'expenseCategory' => 'SearchMultiSelectField',
        'expenseDate' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'finChrg' => 'SearchBooleanField',
        'firmed' => 'SearchBooleanField',
        'forecastType' => 'SearchEnumMultiSelectField',
        'fulfillingTransaction' => 'SearchMultiSelectField',
        'fxAccount' => 'SearchMultiSelectField',
        'fxAmount' => 'SearchDoubleField',
        'fxCostEstimate' => 'SearchDoubleField',
        'fxCostEstimateRate' => 'SearchDoubleField',
        'fxEstGrossProfit' => 'SearchDoubleField',
        'fxTranCostEstimate' => 'SearchDoubleField',
        'fxVsoeAllocation' => 'SearchDoubleField',
        'fxVsoeAmount' => 'SearchDoubleField',
        'fxVsoePrice' => 'SearchDoubleField',
        'gcoAvailabelToCharge' => 'SearchBooleanField',
        'gcoAvailableToRefund' => 'SearchBooleanField',
        'gcoAvsStreetMatch' => 'SearchEnumMultiSelectField',
        'gcoAvsZipMatch' => 'SearchEnumMultiSelectField',
        'gcoBuyerAccountAge' => 'SearchLongField',
        'gcoBuyerIp' => 'SearchStringField',
        'gcoChargeAmount' => 'SearchDoubleField',
        'gcoChargebackAmount' => 'SearchDoubleField',
        'gcoConfirmedChargedTotal' => 'SearchDoubleField',
        'gcoConfirmedRefundedTotal' => 'SearchDoubleField',
        'gcoCreditcardNumber' => 'SearchStringField',
        'gcoCscMatch' => 'SearchEnumMultiSelectField',
        'gcoFinancialState' => 'SearchStringField',
        'gcoFulfillmentState' => 'SearchStringField',
        'gcoOrderId' => 'SearchStringField',
        'gcoOrderTotal' => 'SearchDoubleField',
        'gcoPromotionAmount' => 'SearchDoubleField',
        'gcoPromotionName' => 'SearchStringField',
        'gcoRefundAmount' => 'SearchDoubleField',
        'gcoShippingTotal' => 'SearchDoubleField',
        'gcoStateChangedDetail' => 'SearchStringField',
        'giftCertificate' => 'SearchStringField',
        'grossAmount' => 'SearchDoubleField',
        'includeInForecast' => 'SearchBooleanField',
        'incoterm' => 'SearchMultiSelectField',
        'intercoStatus' => 'SearchEnumMultiSelectField',
        'intercoTransaction' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'inventoryLocation' => 'SearchMultiSelectField',
        'inventorySubsidiary' => 'SearchMultiSelectField',
        'inVsoeBundle' => 'SearchBooleanField',
        'isAllocation' => 'SearchBooleanField',
        'isBackflush' => 'SearchBooleanField',
        'isGcoChargeback' => 'SearchBooleanField',
        'isGcoChargeConfirmed' => 'SearchBooleanField',
        'isGcoPaymentGuaranteed' => 'SearchBooleanField',
        'isGcoRefundConfirmed' => 'SearchBooleanField',
        'isInsideDelivery' => 'SearchBooleanField',
        'isInsidePickup' => 'SearchBooleanField',
        'isIntercompanyAdjustment' => 'SearchBooleanField',
        'isInTransitPayment' => 'SearchBooleanField',
        'isMultiShipTo' => 'SearchBooleanField',
        'isPayPalMeth' => 'SearchBooleanField',
        'isReversal' => 'SearchBooleanField',
        'isRevRecTransaction' => 'SearchBooleanField',
        'isScrap' => 'SearchBooleanField',
        'isShipAddress' => 'SearchBooleanField',
        'isTransferPriceCosting' => 'SearchBooleanField',
        'isVsoeAlloc' => 'SearchBooleanField',
        'isWip' => 'SearchBooleanField',
        'item' => 'SearchMultiSelectField',
        'itemFulfillmentChoice' => 'SearchEnumMultiSelectField',
        'itemRevision' => 'SearchMultiSelectField',
        'itemSubOf' => 'SearchMultiSelectField',
        'landedCostPerLine' => 'SearchBooleanField',
        'lastModifiedDate' => 'SearchDateField',
        'leadSource' => 'SearchMultiSelectField',
        'lineUniqueKey' => 'SearchLongField',
        'location' => 'SearchMultiSelectField',
        'locationAutoAssigned' => 'SearchBooleanField',
        'mainLine' => 'SearchBooleanField',
        'mainName' => 'SearchMultiSelectField',
        'manufacturingRouting' => 'SearchMultiSelectField',
        'matchBillToReceipt' => 'SearchBooleanField',
        'memo' => 'SearchStringField',
        'memoMain' => 'SearchStringField',
        'memorized' => 'SearchBooleanField',
        'merchantAccount' => 'SearchStringField',
        'message' => 'SearchStringField',
        'multiSubsidiary' => 'SearchBooleanField',
        'nameText' => 'SearchStringField',
        'netAmount' => 'SearchDoubleField',
        'nextApprover' => 'SearchMultiSelectField',
        'nextBillDate' => 'SearchDateField',
        'nexus' => 'SearchMultiSelectField',
        'noAutoAssignLocation' => 'SearchBooleanField',
        'nonReimbursable' => 'SearchBooleanField',
        'number' => 'SearchLongField',
        'oneTimeTotal' => 'SearchDoubleField',
        'opportunity' => 'SearchMultiSelectField',
        'orderPriority' => 'SearchDoubleField',
        'otherRefNum' => 'SearchTextNumberField',
        'otherRefNumNonDeposit' => 'SearchTextNumberField',
        'overheadParentItem' => 'SearchMultiSelectField',
        'overrideInstallments' => 'SearchBooleanField',
        'packageCount' => 'SearchLongField',
        'paidTransaction' => 'SearchMultiSelectField',
        'parent' => 'SearchLongField',
        'partner' => 'SearchMultiSelectField',
        'partnerContribution' => 'SearchLongField',
        'partnerRole' => 'SearchMultiSelectField',
        'partnerTeamMember' => 'SearchMultiSelectField',
        'payingTransaction' => 'SearchMultiSelectField',
        'paymentApproved' => 'SearchBooleanField',
        'paymentEventDate' => 'SearchDateField',
        'paymentEventHoldReason' => 'SearchEnumMultiSelectField',
        'paymentEventPurchaseCardUsed' => 'SearchBooleanField',
        'paymentEventPurchaseDataSent' => 'SearchBooleanField',
        'paymentEventResult' => 'SearchEnumMultiSelectField',
        'paymentEventType' => 'SearchEnumMultiSelectField',
        'paymentHold' => 'SearchBooleanField',
        'paymentMethod' => 'SearchMultiSelectField',
        'paymentOption' => 'SearchStringField',
        'payPalPending' => 'SearchBooleanField',
        'payPalStatus' => 'SearchStringField',
        'payPalTranId' => 'SearchStringField',
        'pnRefNum' => 'SearchStringField',
        'poAsText' => 'SearchStringField',
        'posting' => 'SearchBooleanField',
        'postingPeriod' => 'RecordRef',
        'postingPeriodRelative' => 'PostingPeriodDate',
        'priceLevel' => 'SearchMultiSelectField',
        'printedPickingTicket' => 'SearchBooleanField',
        'probability' => 'SearchLongField',
        'projectedAmount' => 'SearchDoubleField',
        'projectTask' => 'SearchMultiSelectField',
        'promoCode' => 'SearchMultiSelectField',
        'purchaseOrder' => 'SearchMultiSelectField',
        'quantity' => 'SearchDoubleField',
        'quantityBilled' => 'SearchDoubleField',
        'quantityCommitted' => 'SearchDoubleField',
        'quantityPacked' => 'SearchDoubleField',
        'quantityPicked' => 'SearchDoubleField',
        'quantityRevCommitted' => 'SearchDoubleField',
        'quantityShipRecv' => 'SearchDoubleField',
        'recognizedRevenue' => 'SearchDoubleField',
        'recordType' => 'SearchStringField',
        'recurAnnuallyTotal' => 'SearchDoubleField',
        'recurMonthlyTotal' => 'SearchDoubleField',
        'recurQuarterlyTotal' => 'SearchDoubleField',
        'recurringBill' => 'SearchBooleanField',
        'recurWeeklyTotal' => 'SearchDoubleField',
        'refNumber' => 'SearchLongField',
        'revCommitStatus' => 'SearchEnumMultiSelectField',
        'revCommittingStatus' => 'SearchBooleanField',
        'revCommittingTransaction' => 'SearchMultiSelectField',
        'revenueStatus' => 'SearchEnumMultiSelectField',
        'reversalDate' => 'SearchDateField',
        'reversalNumber' => 'SearchStringField',
        'revRecEndDate' => 'SearchDateField',
        'revRecOnRevCommitment' => 'SearchBooleanField',
        'revRecStartDate' => 'SearchDateField',
        'revRecTermInMonths' => 'SearchLongField',
        'salesEffectiveDate' => 'SearchDateField',
        'salesOrder' => 'SearchMultiSelectField',
        'salesRep' => 'SearchMultiSelectField',
        'salesTeamMember' => 'SearchMultiSelectField',
        'salesTeamRole' => 'SearchMultiSelectField',
        'schedulingMethod' => 'SearchEnumMultiSelectField',
        'serialNumber' => 'SearchStringField',
        'serialNumberCost' => 'SearchDoubleField',
        'serialNumberCostAdjustment' => 'SearchDoubleField',
        'serialNumberQuantity' => 'SearchDoubleField',
        'serialNumbers' => 'SearchStringField',
        'shipAddress' => 'SearchStringField',
        'shipAddressee' => 'SearchStringField',
        'shipAttention' => 'SearchStringField',
        'shipCarrier' => 'SearchEnumMultiSelectField',
        'shipCity' => 'SearchStringField',
        'shipComplete' => 'SearchBooleanField',
        'shipCountry' => 'SearchEnumMultiSelectField',
        'shipCounty' => 'SearchStringField',
        'shipDate' => 'SearchDateField',
        'shipGroup' => 'SearchLongField',
        'shipMethod' => 'SearchMultiSelectField',
        'shipPhone' => 'SearchStringField',
        'shipping' => 'SearchBooleanField',
        'shipRecvStatus' => 'SearchBooleanField',
        'shipRecvStatusLine' => 'SearchBooleanField',
        'shipState' => 'SearchMultiSelectField',
        'shipTo' => 'SearchMultiSelectField',
        'shipZip' => 'SearchStringField',
        'source' => 'SearchEnumMultiSelectField',
        'startDate' => 'SearchDateField',
        'statistical' => 'SearchBooleanField',
        'status' => 'SearchEnumMultiSelectField',
        'subscription' => 'SearchMultiSelectField',
        'subsidiaryTaxRegNum' => 'SearchMultiSelectField',
        'subscriptionLine' => 'SearchMultiSelectField',
        'subsidiary' => 'SearchMultiSelectField',
        'taxItem' => 'SearchMultiSelectField',
        'taxLine' => 'SearchBooleanField',
        'taxPeriod' => 'RecordRef',
        'taxPeriodRelative' => 'PostingPeriodDate',
        'taxPointDate' => 'SearchDateField',
        'taxRate' => 'SearchDoubleField',
        'terms' => 'SearchMultiSelectField',
        'termsOfSale' => 'SearchEnumMultiSelectField',
        'title' => 'SearchStringField',
        'toBeEmailed' => 'SearchBooleanField',
        'toBePrinted' => 'SearchBooleanField',
        'toSubsidiary' => 'SearchMultiSelectField',
        'totalAmount' => 'SearchDoubleField',
        'trackingNumbers' => 'SearchStringField',
        'tranCostEstimate' => 'SearchDoubleField',
        'tranDate' => 'SearchDateField',
        'tranEstGrossProfit' => 'SearchDoubleField',
        'tranEstGrossProfitPct' => 'SearchDoubleField',
        'tranFxEstGrossProfit' => 'SearchDoubleField',
        'tranId' => 'SearchStringField',
        'tranIsVsoeBundle' => 'SearchBooleanField',
        'transactionDiscount' => 'SearchBooleanField',
        'transactionLineType' => 'SearchEnumMultiSelectField',
        'transactionNumber' => 'SearchStringField',
        'transferLocation' => 'SearchMultiSelectField',
        'transferOrderQuantityCommitted' => 'SearchDoubleField',
        'transferOrderQuantityPacked' => 'SearchDoubleField',
        'transferOrderQuantityPicked' => 'SearchDoubleField',
        'transferOrderQuantityReceived' => 'SearchDoubleField',
        'transferOrderQuantityShipped' => 'SearchDoubleField',
        'type' => 'SearchEnumMultiSelectField',
        'unit' => 'SearchMultiSelectField',
        'unitCostOverride' => 'SearchDoubleField',
        'unitsType' => 'SearchMultiSelectField',
        'vendType' => 'SearchMultiSelectField',
        'visibleToCustomer' => 'SearchBooleanField',
        'voided' => 'SearchBooleanField',
        'vsoeAllocation' => 'SearchDoubleField',
        'vsoeAmount' => 'SearchDoubleField',
        'vsoeDeferral' => 'SearchEnumMultiSelectField',
        'vsoeDelivered' => 'SearchBooleanField',
        'vsoePermitDiscount' => 'SearchEnumMultiSelectField',
        'vsoePrice' => 'SearchDoubleField',
        'webSite' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
