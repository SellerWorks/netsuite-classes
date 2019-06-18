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
 * TransactionSearchRowBasic.
 */
class TransactionSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $abbrev;
    /**
     * @var SearchColumnSelectField[]
     */
    public $account;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $accountType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $acctCorpCardExp;
    /**
     * @var SearchColumnDateField[]
     */
    public $actualShipDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $altSalesAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $altSalesNetAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amountPaid;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amountRemaining;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amountUnbilled;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $appliedToForeignAmount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $appliedToIsFxVariance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $appliedToLinkAmount;
    /**
     * @var SearchColumnStringField[]
     */
    public $appliedToLinkType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $appliedToTransaction;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $applyingForeignAmount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $applyingIsFxVariance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $applyingLinkAmount;
    /**
     * @var SearchColumnStringField[]
     */
    public $applyingLinkType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $applyingTransaction;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $approvalStatus;
    /**
     * @var SearchColumnStringField[]
     */
    public $authCode;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $autoCalculateLag;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $avsStreetMatch;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $avsZipMatch;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $billable;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddress;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddress1;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddress2;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddress3;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddressee;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAttention;
    /**
     * @var SearchColumnStringField[]
     */
    public $billCity;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $billCountry;
    /**
     * @var SearchColumnStringField[]
     */
    public $billCountryCode;
    /**
     * @var SearchColumnDateField[]
     */
    public $billedDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billingAccount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $billingAmount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billingSchedule;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billingTransaction;
    /**
     * @var SearchColumnStringField[]
     */
    public $billPhone;
    /**
     * @var SearchColumnStringField[]
     */
    public $billState;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $billVarianceStatus;
    /**
     * @var SearchColumnStringField[]
     */
    public $billZip;
    /**
     * @var SearchColumnStringField[]
     */
    public $binNumber;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $binNumberQuantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $bomQuantity;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $buildEntireAssembly;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $buildVariance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $built;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $canHaveStackablePromotions;
    /**
     * @var SearchColumnStringField[]
     */
    public $catchUpPeriod;
    /**
     * @var SearchColumnStringField[]
     */
    public $ccCustomerCode;
    /**
     * @var SearchColumnDateField[]
     */
    public $ccExpDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $ccHolderName;
    /**
     * @var SearchColumnStringField[]
     */
    public $ccNumber;
    /**
     * @var SearchColumnStringField[]
     */
    public $ccStreet;
    /**
     * @var SearchColumnStringField[]
     */
    public $ccZipCode;
    /**
     * @var SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $cleared;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $closed;
    /**
     * @var SearchColumnDateField[]
     */
    public $closeDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $cogsAmount;
    /**
     * @var SearchColumnDateField[]
     */
    public $commissionEffectiveDate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $commit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $componentYield;
    /**
     * @var SearchColumnStringField[]
     */
    public $confirmationNumber;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $contribution;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $contributionPrimary;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costComponentAmount;
    /**
     * @var SearchColumnStringField[]
     */
    public $costComponentCategory;
    /**
     * @var SearchColumnStringField[]
     */
    public $costComponentItem;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costComponentQuantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costComponentStandardCost;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costEstimate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costEstimateRate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $costEstimateType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $createdBy;
    /**
     * @var SearchColumnSelectField[]
     */
    public $createdFrom;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $creditAmount;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $cscMatch;
    /**
     * @var SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var SearchColumnSelectField[]
     */
    public $customForm;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $customGL;
    /**
     * @var SearchColumnSelectField[]
     */
    public $custType;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var SearchColumnLongField[]
     */
    public $daysOpen;
    /**
     * @var SearchColumnLongField[]
     */
    public $daysOverdue;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $debitAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $deferredRevenue;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $deferRevRec;
    /**
     * @var SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var SearchColumnDateField[]
     */
    public $depositDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $depositTransaction;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $discountAmount;
    /**
     * @var SearchColumnStringField[]
     */
    public $docUnit;
    /**
     * @var SearchColumnStringField[]
     */
    public $drAccount;
    /**
     * @var SearchColumnDateField[]
     */
    public $dueDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $effectiveRate;
    /**
     * @var SearchColumnStringField[]
     */
    public $email;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $entity;
    /**
     * @var SearchColumnSelectField[]
     */
    public $entityStatus;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estGrossProfit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estGrossProfitPct;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estGrossProfitPercent;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $exchangeRate;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $excludeCommission;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $excludeFromRateRequest;
    /**
     * @var SearchColumnDateField[]
     */
    public $expectedCloseDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $expectedReceiptDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $expenseCategory;
    /**
     * @var SearchColumnDateField[]
     */
    public $expenseDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $firmed;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $forecastType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $fulfillingTransaction;
    /**
     * @var SearchColumnStringField[]
     */
    public $fxAccount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxCostEstimate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxCostEstimateRate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxEstGrossProfit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxTranCostEstimate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxVsoeAllocation;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxVsoeAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxVsoePrice;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $gcoAvailabelToCharge;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $gcoAvailableToRefund;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $gcoAvsStreetMatch;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $gcoAvsZipMatch;
    /**
     * @var SearchColumnLongField[]
     */
    public $gcoBuyerAccountAge;
    /**
     * @var SearchColumnStringField[]
     */
    public $gcoBuyerIp;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $gcoChargeAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $gcoChargebackAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $gcoConfirmedChargedTotal;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $gcoConfirmedRefundedTotal;
    /**
     * @var SearchColumnStringField[]
     */
    public $gcoCreditcardNumber;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $gcoCscMatch;
    /**
     * @var SearchColumnStringField[]
     */
    public $gcoFinancialState;
    /**
     * @var SearchColumnStringField[]
     */
    public $gcoFulfillmentState;
    /**
     * @var SearchColumnStringField[]
     */
    public $gcoOrderId;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $gcoOrderTotal;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $gcoPromotionAmount;
    /**
     * @var SearchColumnStringField[]
     */
    public $gcoPromotionName;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $gcoRefundAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $gcoShippingTotal;
    /**
     * @var SearchColumnStringField[]
     */
    public $gcoStateChangedDetail;
    /**
     * @var SearchColumnStringField[]
     */
    public $giftCert;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $grossAmount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $includeInForecast;
    /**
     * @var SearchColumnSelectField[]
     */
    public $incoterm;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $intercoStatus;
    /**
     * @var SearchColumnStringField[]
     */
    public $intercoTransaction;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $inventoryLocation;
    /**
     * @var SearchColumnSelectField[]
     */
    public $inventorySubsidiary;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $inVsoeBundle;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isAllocation;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isBackflush;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isGcoChargeback;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isGcoChargeConfirmed;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isGcoPaymentGuaranteed;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isGcoRefundConfirmed;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInsideDelivery;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInsidePickup;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isIntercompanyAdjustment;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInTransitPayment;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isMultiShipTo;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isReversal;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isRevRecTransaction;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isScrap;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isShipAddress;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isTransferPriceCosting;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isWip;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $itemFulfillmentChoice;
    /**
     * @var SearchColumnSelectField[]
     */
    public $itemRevision;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $landedCostPerLine;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $leadSource;
    /**
     * @var SearchColumnLongField[]
     */
    public $line;
    /**
     * @var SearchColumnLongField[]
     */
    public $lineSequenceNumber;
    /**
     * @var SearchColumnLongField[]
     */
    public $lineUniqueKey;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $locationAutoAssigned;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $mainLine;
    /**
     * @var SearchColumnStringField[]
     */
    public $mainName;
    /**
     * @var SearchColumnSelectField[]
     */
    public $manufacturingRouting;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $matchBillToReceipt;
    /**
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnStringField[]
     */
    public $memoMain;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $memorized;
    /**
     * @var SearchColumnSelectField[]
     */
    public $merchantAccount;
    /**
     * @var SearchColumnStringField[]
     */
    public $message;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $multiSubsidiary;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $netAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $netAmountNoTax;
    /**
     * @var SearchColumnSelectField[]
     */
    public $nextApprover;
    /**
     * @var SearchColumnDateField[]
     */
    public $nextBillDate;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $noAutoAssignLocation;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $nonReimbursable;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $oneTimeTotal;
    /**
     * @var SearchColumnSelectField[]
     */
    public $opportunity;
    /**
     * @var SearchColumnStringField[]
     */
    public $options;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $orderPriority;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $originator;
    /**
     * @var SearchColumnTextNumberField[]
     */
    public $otherRefNum;
    /**
     * @var SearchColumnSelectField[]
     */
    public $overheadParentItem;
    /**
     * @var SearchColumnLongField[]
     */
    public $packageCount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $paidAmount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $paidTransaction;
    /**
     * @var SearchColumnSelectField[]
     */
    public $partner;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $partnerContribution;
    /**
     * @var SearchColumnSelectField[]
     */
    public $partnerRole;
    /**
     * @var SearchColumnSelectField[]
     */
    public $partnerTeamMember;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $payingAmount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $payingTransaction;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $paymentApproved;
    /**
     * @var SearchColumnDateField[]
     */
    public $paymentEventDate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $paymentEventHoldReason;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $paymentEventPurchaseCardUsed;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $paymentEventPurchaseDataSent;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $paymentEventResult;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $paymentEventType;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $paymentHold;
    /**
     * @var SearchColumnSelectField[]
     */
    public $paymentMethod;
    /**
     * @var SearchColumnSelectField[]
     */
    public $paymentOption;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $payPalPending;
    /**
     * @var SearchColumnStringField[]
     */
    public $payPalStatus;
    /**
     * @var SearchColumnStringField[]
     */
    public $payPalTranId;
    /**
     * @var SearchColumnStringField[]
     */
    public $payrollBatch;
    /**
     * @var SearchColumnStringField[]
     */
    public $pnRefNum;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $poRate;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $posting;
    /**
     * @var SearchColumnSelectField[]
     */
    public $postingPeriod;
    /**
     * @var SearchColumnSelectField[]
     */
    public $priceLevel;
    /**
     * @var SearchColumnStringField[]
     */
    public $print;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $probability;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $projectedAmount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $projectTask;
    /**
     * @var SearchColumnSelectField[]
     */
    public $promoCode;
    /**
     * @var SearchColumnSelectField[]
     */
    public $purchaseOrder;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityBilled;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityCommitted;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityPacked;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityPicked;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityRevCommitted;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityShipRecv;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityUom;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $rate;
    /**
     * @var SearchColumnStringField[]
     */
    public $realizedGainPostingTransaction;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $recognizedRevenue;
    /**
     * @var SearchColumnStringField[]
     */
    public $recordType;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $recurAnnuallyTotal;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $recurMonthlyTotal;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $recurQuarterlyTotal;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $recurringBill;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $recurWeeklyTotal;
    /**
     * @var SearchColumnLongField[]
     */
    public $refNumber;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $revCommitStatus;
    /**
     * @var SearchColumnSelectField[]
     */
    public $revCommittingTransaction;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $revenueStatus;
    /**
     * @var SearchColumnDateField[]
     */
    public $reversalDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $reversalNumber;
    /**
     * @var SearchColumnDateField[]
     */
    public $revRecEndDate;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $revRecOnRevCommitment;
    /**
     * @var SearchColumnDateField[]
     */
    public $revRecStartDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $rgAccount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $rgAmount;
    /**
     * @var SearchColumnDateField[]
     */
    public $salesEffectiveDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $salesOrder;
    /**
     * @var SearchColumnSelectField[]
     */
    public $salesRep;
    /**
     * @var SearchColumnSelectField[]
     */
    public $salesTeamMember;
    /**
     * @var SearchColumnSelectField[]
     */
    public $salesTeamRole;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $schedulingMethod;
    /**
     * @var SearchColumnStringField[]
     */
    public $serialNumber;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $serialNumberCost;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $serialNumberCostAdjustment;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $serialNumberQuantity;
    /**
     * @var SearchColumnStringField[]
     */
    public $serialNumbers;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddress;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddress1;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddress2;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddress3;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddressee;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAttention;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $shipCarrier;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipCity;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $shipComplete;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $shipCountry;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipCountryCode;
    /**
     * @var SearchColumnDateField[]
     */
    public $shipDate;
    /**
     * @var SearchColumnLongField[]
     */
    public $shipGroup;
    /**
     * @var SearchColumnSelectField[]
     */
    public $shipMethod;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipPhone;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $shippingAmount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $shipRecvStatusLine;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipState;
    /**
     * @var SearchColumnSelectField[]
     */
    public $shipTo;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipZip;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $signedAmount;
    /**
     * @var SearchColumnStringField[]
     */
    public $source;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subscription;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subscriptionLine;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $taxAmount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxCode;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $taxLine;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxPeriod;
    /**
     * @var SearchColumnDateField[]
     */
    public $taxPointDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $taxTotal;
    /**
     * @var SearchColumnLongField[]
     */
    public $termInMonths;
    /**
     * @var SearchColumnSelectField[]
     */
    public $terms;
    /**
     * @var SearchColumnStringField[]
     */
    public $termsOfSale;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $toBeEmailed;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $toBePrinted;
    /**
     * @var SearchColumnSelectField[]
     */
    public $toSubsidiary;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $total;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $totalCostEstimate;
    /**
     * @var SearchColumnStringField[]
     */
    public $trackingNumbers;
    /**
     * @var SearchColumnDateField[]
     */
    public $tranDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $tranEstGrossProfit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $tranFxEstGrossProfit;
    /**
     * @var SearchColumnStringField[]
     */
    public $tranId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $tranIsVsoeBundle;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $transactionDiscount;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $transactionLineType;
    /**
     * @var SearchColumnStringField[]
     */
    public $transactionNumber;
    /**
     * @var SearchColumnSelectField[]
     */
    public $transferLocation;
    /**
     * @var SearchColumnStringField[]
     */
    public $transferOrderItemLine;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $transferOrderQuantityCommitted;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $transferOrderQuantityPacked;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $transferOrderQuantityPicked;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $transferOrderQuantityReceived;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $transferOrderQuantityShipped;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $type;
    /**
     * @var SearchColumnStringField[]
     */
    public $unit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unitCostOverride;
    /**
     * @var SearchColumnSelectField[]
     */
    public $vendType;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $visibleToCustomer;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $vsoeAllocation;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $vsoeAmount;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $vsoeDeferral;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $vsoeDelivered;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $vsoePermitDiscount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $vsoePrice;
    /**
     * @var SearchColumnStringField[]
     */
    public $webSite;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'abbrev' => 'SearchColumnStringField[]',
        'account' => 'SearchColumnSelectField[]',
        'accountType' => 'SearchColumnEnumSelectField[]',
        'acctCorpCardExp' => 'SearchColumnSelectField[]',
        'actualShipDate' => 'SearchColumnDateField[]',
        'altSalesAmount' => 'SearchColumnDoubleField[]',
        'altSalesNetAmount' => 'SearchColumnDoubleField[]',
        'amount' => 'SearchColumnDoubleField[]',
        'amountPaid' => 'SearchColumnDoubleField[]',
        'amountRemaining' => 'SearchColumnDoubleField[]',
        'amountUnbilled' => 'SearchColumnDoubleField[]',
        'appliedToForeignAmount' => 'SearchColumnDoubleField[]',
        'appliedToIsFxVariance' => 'SearchColumnBooleanField[]',
        'appliedToLinkAmount' => 'SearchColumnDoubleField[]',
        'appliedToLinkType' => 'SearchColumnStringField[]',
        'appliedToTransaction' => 'SearchColumnSelectField[]',
        'applyingForeignAmount' => 'SearchColumnDoubleField[]',
        'applyingIsFxVariance' => 'SearchColumnBooleanField[]',
        'applyingLinkAmount' => 'SearchColumnDoubleField[]',
        'applyingLinkType' => 'SearchColumnStringField[]',
        'applyingTransaction' => 'SearchColumnSelectField[]',
        'approvalStatus' => 'SearchColumnEnumSelectField[]',
        'authCode' => 'SearchColumnStringField[]',
        'autoCalculateLag' => 'SearchColumnBooleanField[]',
        'avsStreetMatch' => 'SearchColumnEnumSelectField[]',
        'avsZipMatch' => 'SearchColumnEnumSelectField[]',
        'billable' => 'SearchColumnBooleanField[]',
        'billAddress' => 'SearchColumnStringField[]',
        'billAddress1' => 'SearchColumnStringField[]',
        'billAddress2' => 'SearchColumnStringField[]',
        'billAddress3' => 'SearchColumnStringField[]',
        'billAddressee' => 'SearchColumnStringField[]',
        'billAttention' => 'SearchColumnStringField[]',
        'billCity' => 'SearchColumnStringField[]',
        'billCountry' => 'SearchColumnEnumSelectField[]',
        'billCountryCode' => 'SearchColumnStringField[]',
        'billedDate' => 'SearchColumnDateField[]',
        'billingAccount' => 'SearchColumnSelectField[]',
        'billingAmount' => 'SearchColumnDoubleField[]',
        'billingSchedule' => 'SearchColumnSelectField[]',
        'billingTransaction' => 'SearchColumnSelectField[]',
        'billPhone' => 'SearchColumnStringField[]',
        'billState' => 'SearchColumnStringField[]',
        'billVarianceStatus' => 'SearchColumnEnumSelectField[]',
        'billZip' => 'SearchColumnStringField[]',
        'binNumber' => 'SearchColumnStringField[]',
        'binNumberQuantity' => 'SearchColumnDoubleField[]',
        'bomQuantity' => 'SearchColumnDoubleField[]',
        'buildEntireAssembly' => 'SearchColumnBooleanField[]',
        'buildVariance' => 'SearchColumnDoubleField[]',
        'built' => 'SearchColumnDoubleField[]',
        'canHaveStackablePromotions' => 'SearchColumnBooleanField[]',
        'catchUpPeriod' => 'SearchColumnStringField[]',
        'ccCustomerCode' => 'SearchColumnStringField[]',
        'ccExpDate' => 'SearchColumnDateField[]',
        'ccHolderName' => 'SearchColumnStringField[]',
        'ccNumber' => 'SearchColumnStringField[]',
        'ccStreet' => 'SearchColumnStringField[]',
        'ccZipCode' => 'SearchColumnStringField[]',
        'class' => 'SearchColumnSelectField[]',
        'cleared' => 'SearchColumnBooleanField[]',
        'closed' => 'SearchColumnBooleanField[]',
        'closeDate' => 'SearchColumnDateField[]',
        'cogsAmount' => 'SearchColumnDoubleField[]',
        'commissionEffectiveDate' => 'SearchColumnDateField[]',
        'commit' => 'SearchColumnEnumSelectField[]',
        'componentYield' => 'SearchColumnDoubleField[]',
        'confirmationNumber' => 'SearchColumnStringField[]',
        'contribution' => 'SearchColumnDoubleField[]',
        'contributionPrimary' => 'SearchColumnDoubleField[]',
        'costComponentAmount' => 'SearchColumnDoubleField[]',
        'costComponentCategory' => 'SearchColumnStringField[]',
        'costComponentItem' => 'SearchColumnStringField[]',
        'costComponentQuantity' => 'SearchColumnDoubleField[]',
        'costComponentStandardCost' => 'SearchColumnDoubleField[]',
        'costEstimate' => 'SearchColumnDoubleField[]',
        'costEstimateRate' => 'SearchColumnDoubleField[]',
        'costEstimateType' => 'SearchColumnEnumSelectField[]',
        'createdBy' => 'SearchColumnSelectField[]',
        'createdFrom' => 'SearchColumnSelectField[]',
        'creditAmount' => 'SearchColumnDoubleField[]',
        'cscMatch' => 'SearchColumnEnumSelectField[]',
        'currency' => 'SearchColumnSelectField[]',
        'customForm' => 'SearchColumnSelectField[]',
        'customGL' => 'SearchColumnBooleanField[]',
        'custType' => 'SearchColumnSelectField[]',
        'dateCreated' => 'SearchColumnDateField[]',
        'daysOpen' => 'SearchColumnLongField[]',
        'daysOverdue' => 'SearchColumnLongField[]',
        'debitAmount' => 'SearchColumnDoubleField[]',
        'deferredRevenue' => 'SearchColumnDoubleField[]',
        'deferRevRec' => 'SearchColumnBooleanField[]',
        'department' => 'SearchColumnSelectField[]',
        'depositDate' => 'SearchColumnDateField[]',
        'depositTransaction' => 'SearchColumnSelectField[]',
        'discountAmount' => 'SearchColumnDoubleField[]',
        'docUnit' => 'SearchColumnStringField[]',
        'drAccount' => 'SearchColumnStringField[]',
        'dueDate' => 'SearchColumnDateField[]',
        'effectiveRate' => 'SearchColumnDoubleField[]',
        'email' => 'SearchColumnStringField[]',
        'endDate' => 'SearchColumnDateField[]',
        'entity' => 'SearchColumnSelectField[]',
        'entityStatus' => 'SearchColumnSelectField[]',
        'estGrossProfit' => 'SearchColumnDoubleField[]',
        'estGrossProfitPct' => 'SearchColumnDoubleField[]',
        'estGrossProfitPercent' => 'SearchColumnDoubleField[]',
        'exchangeRate' => 'SearchColumnDoubleField[]',
        'excludeCommission' => 'SearchColumnBooleanField[]',
        'excludeFromRateRequest' => 'SearchColumnBooleanField[]',
        'expectedCloseDate' => 'SearchColumnDateField[]',
        'expectedReceiptDate' => 'SearchColumnDateField[]',
        'expenseCategory' => 'SearchColumnSelectField[]',
        'expenseDate' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'firmed' => 'SearchColumnBooleanField[]',
        'forecastType' => 'SearchColumnEnumSelectField[]',
        'fulfillingTransaction' => 'SearchColumnSelectField[]',
        'fxAccount' => 'SearchColumnStringField[]',
        'fxAmount' => 'SearchColumnDoubleField[]',
        'fxCostEstimate' => 'SearchColumnDoubleField[]',
        'fxCostEstimateRate' => 'SearchColumnDoubleField[]',
        'fxEstGrossProfit' => 'SearchColumnDoubleField[]',
        'fxTranCostEstimate' => 'SearchColumnDoubleField[]',
        'fxVsoeAllocation' => 'SearchColumnDoubleField[]',
        'fxVsoeAmount' => 'SearchColumnDoubleField[]',
        'fxVsoePrice' => 'SearchColumnDoubleField[]',
        'gcoAvailabelToCharge' => 'SearchColumnBooleanField[]',
        'gcoAvailableToRefund' => 'SearchColumnBooleanField[]',
        'gcoAvsStreetMatch' => 'SearchColumnEnumSelectField[]',
        'gcoAvsZipMatch' => 'SearchColumnEnumSelectField[]',
        'gcoBuyerAccountAge' => 'SearchColumnLongField[]',
        'gcoBuyerIp' => 'SearchColumnStringField[]',
        'gcoChargeAmount' => 'SearchColumnDoubleField[]',
        'gcoChargebackAmount' => 'SearchColumnDoubleField[]',
        'gcoConfirmedChargedTotal' => 'SearchColumnDoubleField[]',
        'gcoConfirmedRefundedTotal' => 'SearchColumnDoubleField[]',
        'gcoCreditcardNumber' => 'SearchColumnStringField[]',
        'gcoCscMatch' => 'SearchColumnEnumSelectField[]',
        'gcoFinancialState' => 'SearchColumnStringField[]',
        'gcoFulfillmentState' => 'SearchColumnStringField[]',
        'gcoOrderId' => 'SearchColumnStringField[]',
        'gcoOrderTotal' => 'SearchColumnDoubleField[]',
        'gcoPromotionAmount' => 'SearchColumnDoubleField[]',
        'gcoPromotionName' => 'SearchColumnStringField[]',
        'gcoRefundAmount' => 'SearchColumnDoubleField[]',
        'gcoShippingTotal' => 'SearchColumnDoubleField[]',
        'gcoStateChangedDetail' => 'SearchColumnStringField[]',
        'giftCert' => 'SearchColumnStringField[]',
        'grossAmount' => 'SearchColumnDoubleField[]',
        'includeInForecast' => 'SearchColumnBooleanField[]',
        'incoterm' => 'SearchColumnSelectField[]',
        'intercoStatus' => 'SearchColumnEnumSelectField[]',
        'intercoTransaction' => 'SearchColumnStringField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'inventoryLocation' => 'SearchColumnSelectField[]',
        'inventorySubsidiary' => 'SearchColumnSelectField[]',
        'inVsoeBundle' => 'SearchColumnBooleanField[]',
        'isAllocation' => 'SearchColumnBooleanField[]',
        'isBackflush' => 'SearchColumnBooleanField[]',
        'isGcoChargeback' => 'SearchColumnBooleanField[]',
        'isGcoChargeConfirmed' => 'SearchColumnBooleanField[]',
        'isGcoPaymentGuaranteed' => 'SearchColumnBooleanField[]',
        'isGcoRefundConfirmed' => 'SearchColumnBooleanField[]',
        'isInsideDelivery' => 'SearchColumnBooleanField[]',
        'isInsidePickup' => 'SearchColumnBooleanField[]',
        'isIntercompanyAdjustment' => 'SearchColumnBooleanField[]',
        'isInTransitPayment' => 'SearchColumnBooleanField[]',
        'isMultiShipTo' => 'SearchColumnBooleanField[]',
        'isReversal' => 'SearchColumnBooleanField[]',
        'isRevRecTransaction' => 'SearchColumnBooleanField[]',
        'isScrap' => 'SearchColumnBooleanField[]',
        'isShipAddress' => 'SearchColumnBooleanField[]',
        'isTransferPriceCosting' => 'SearchColumnBooleanField[]',
        'isWip' => 'SearchColumnBooleanField[]',
        'item' => 'SearchColumnSelectField[]',
        'itemFulfillmentChoice' => 'SearchColumnEnumSelectField[]',
        'itemRevision' => 'SearchColumnSelectField[]',
        'landedCostPerLine' => 'SearchColumnBooleanField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'leadSource' => 'SearchColumnSelectField[]',
        'line' => 'SearchColumnLongField[]',
        'lineSequenceNumber' => 'SearchColumnLongField[]',
        'lineUniqueKey' => 'SearchColumnLongField[]',
        'location' => 'SearchColumnSelectField[]',
        'locationAutoAssigned' => 'SearchColumnBooleanField[]',
        'mainLine' => 'SearchColumnBooleanField[]',
        'mainName' => 'SearchColumnStringField[]',
        'manufacturingRouting' => 'SearchColumnSelectField[]',
        'matchBillToReceipt' => 'SearchColumnBooleanField[]',
        'memo' => 'SearchColumnStringField[]',
        'memoMain' => 'SearchColumnStringField[]',
        'memorized' => 'SearchColumnBooleanField[]',
        'merchantAccount' => 'SearchColumnSelectField[]',
        'message' => 'SearchColumnStringField[]',
        'multiSubsidiary' => 'SearchColumnBooleanField[]',
        'netAmount' => 'SearchColumnDoubleField[]',
        'netAmountNoTax' => 'SearchColumnDoubleField[]',
        'nextApprover' => 'SearchColumnSelectField[]',
        'nextBillDate' => 'SearchColumnDateField[]',
        'noAutoAssignLocation' => 'SearchColumnBooleanField[]',
        'nonReimbursable' => 'SearchColumnBooleanField[]',
        'oneTimeTotal' => 'SearchColumnDoubleField[]',
        'opportunity' => 'SearchColumnSelectField[]',
        'options' => 'SearchColumnStringField[]',
        'orderPriority' => 'SearchColumnDoubleField[]',
        'originator' => 'SearchColumnEnumSelectField[]',
        'otherRefNum' => 'SearchColumnTextNumberField[]',
        'overheadParentItem' => 'SearchColumnSelectField[]',
        'packageCount' => 'SearchColumnLongField[]',
        'paidAmount' => 'SearchColumnDoubleField[]',
        'paidTransaction' => 'SearchColumnSelectField[]',
        'partner' => 'SearchColumnSelectField[]',
        'partnerContribution' => 'SearchColumnDoubleField[]',
        'partnerRole' => 'SearchColumnSelectField[]',
        'partnerTeamMember' => 'SearchColumnSelectField[]',
        'payingAmount' => 'SearchColumnDoubleField[]',
        'payingTransaction' => 'SearchColumnSelectField[]',
        'paymentApproved' => 'SearchColumnBooleanField[]',
        'paymentEventDate' => 'SearchColumnDateField[]',
        'paymentEventHoldReason' => 'SearchColumnEnumSelectField[]',
        'paymentEventPurchaseCardUsed' => 'SearchColumnBooleanField[]',
        'paymentEventPurchaseDataSent' => 'SearchColumnBooleanField[]',
        'paymentEventResult' => 'SearchColumnEnumSelectField[]',
        'paymentEventType' => 'SearchColumnEnumSelectField[]',
        'paymentHold' => 'SearchColumnBooleanField[]',
        'paymentMethod' => 'SearchColumnSelectField[]',
        'paymentOption' => 'SearchColumnSelectField[]',
        'payPalPending' => 'SearchColumnBooleanField[]',
        'payPalStatus' => 'SearchColumnStringField[]',
        'payPalTranId' => 'SearchColumnStringField[]',
        'payrollBatch' => 'SearchColumnStringField[]',
        'pnRefNum' => 'SearchColumnStringField[]',
        'poRate' => 'SearchColumnDoubleField[]',
        'posting' => 'SearchColumnBooleanField[]',
        'postingPeriod' => 'SearchColumnSelectField[]',
        'priceLevel' => 'SearchColumnSelectField[]',
        'print' => 'SearchColumnStringField[]',
        'probability' => 'SearchColumnDoubleField[]',
        'projectedAmount' => 'SearchColumnDoubleField[]',
        'projectTask' => 'SearchColumnSelectField[]',
        'promoCode' => 'SearchColumnSelectField[]',
        'purchaseOrder' => 'SearchColumnSelectField[]',
        'quantity' => 'SearchColumnDoubleField[]',
        'quantityBilled' => 'SearchColumnDoubleField[]',
        'quantityCommitted' => 'SearchColumnDoubleField[]',
        'quantityPacked' => 'SearchColumnDoubleField[]',
        'quantityPicked' => 'SearchColumnDoubleField[]',
        'quantityRevCommitted' => 'SearchColumnDoubleField[]',
        'quantityShipRecv' => 'SearchColumnDoubleField[]',
        'quantityUom' => 'SearchColumnDoubleField[]',
        'rate' => 'SearchColumnDoubleField[]',
        'realizedGainPostingTransaction' => 'SearchColumnStringField[]',
        'recognizedRevenue' => 'SearchColumnDoubleField[]',
        'recordType' => 'SearchColumnStringField[]',
        'recurAnnuallyTotal' => 'SearchColumnDoubleField[]',
        'recurMonthlyTotal' => 'SearchColumnDoubleField[]',
        'recurQuarterlyTotal' => 'SearchColumnDoubleField[]',
        'recurringBill' => 'SearchColumnBooleanField[]',
        'recurWeeklyTotal' => 'SearchColumnDoubleField[]',
        'refNumber' => 'SearchColumnLongField[]',
        'revCommitStatus' => 'SearchColumnEnumSelectField[]',
        'revCommittingTransaction' => 'SearchColumnSelectField[]',
        'revenueStatus' => 'SearchColumnEnumSelectField[]',
        'reversalDate' => 'SearchColumnDateField[]',
        'reversalNumber' => 'SearchColumnStringField[]',
        'revRecEndDate' => 'SearchColumnDateField[]',
        'revRecOnRevCommitment' => 'SearchColumnBooleanField[]',
        'revRecStartDate' => 'SearchColumnDateField[]',
        'rgAccount' => 'SearchColumnSelectField[]',
        'rgAmount' => 'SearchColumnDoubleField[]',
        'salesEffectiveDate' => 'SearchColumnDateField[]',
        'salesOrder' => 'SearchColumnSelectField[]',
        'salesRep' => 'SearchColumnSelectField[]',
        'salesTeamMember' => 'SearchColumnSelectField[]',
        'salesTeamRole' => 'SearchColumnSelectField[]',
        'schedulingMethod' => 'SearchColumnEnumSelectField[]',
        'serialNumber' => 'SearchColumnStringField[]',
        'serialNumberCost' => 'SearchColumnDoubleField[]',
        'serialNumberCostAdjustment' => 'SearchColumnDoubleField[]',
        'serialNumberQuantity' => 'SearchColumnDoubleField[]',
        'serialNumbers' => 'SearchColumnStringField[]',
        'shipAddress' => 'SearchColumnStringField[]',
        'shipAddress1' => 'SearchColumnStringField[]',
        'shipAddress2' => 'SearchColumnStringField[]',
        'shipAddress3' => 'SearchColumnStringField[]',
        'shipAddressee' => 'SearchColumnStringField[]',
        'shipAttention' => 'SearchColumnStringField[]',
        'shipCarrier' => 'SearchColumnEnumSelectField[]',
        'shipCity' => 'SearchColumnStringField[]',
        'shipComplete' => 'SearchColumnBooleanField[]',
        'shipCountry' => 'SearchColumnEnumSelectField[]',
        'shipCountryCode' => 'SearchColumnStringField[]',
        'shipDate' => 'SearchColumnDateField[]',
        'shipGroup' => 'SearchColumnLongField[]',
        'shipMethod' => 'SearchColumnSelectField[]',
        'shipPhone' => 'SearchColumnStringField[]',
        'shippingAmount' => 'SearchColumnDoubleField[]',
        'shipRecvStatusLine' => 'SearchColumnBooleanField[]',
        'shipState' => 'SearchColumnStringField[]',
        'shipTo' => 'SearchColumnSelectField[]',
        'shipZip' => 'SearchColumnStringField[]',
        'signedAmount' => 'SearchColumnDoubleField[]',
        'source' => 'SearchColumnStringField[]',
        'startDate' => 'SearchColumnDateField[]',
        'status' => 'SearchColumnEnumSelectField[]',
        'subscription' => 'SearchColumnSelectField[]',
        'subscriptionLine' => 'SearchColumnSelectField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'taxAmount' => 'SearchColumnDoubleField[]',
        'taxCode' => 'SearchColumnSelectField[]',
        'taxLine' => 'SearchColumnBooleanField[]',
        'taxPeriod' => 'SearchColumnSelectField[]',
        'taxPointDate' => 'SearchColumnDateField[]',
        'taxTotal' => 'SearchColumnDoubleField[]',
        'termInMonths' => 'SearchColumnLongField[]',
        'terms' => 'SearchColumnSelectField[]',
        'termsOfSale' => 'SearchColumnStringField[]',
        'title' => 'SearchColumnStringField[]',
        'toBeEmailed' => 'SearchColumnBooleanField[]',
        'toBePrinted' => 'SearchColumnBooleanField[]',
        'toSubsidiary' => 'SearchColumnSelectField[]',
        'total' => 'SearchColumnDoubleField[]',
        'totalCostEstimate' => 'SearchColumnDoubleField[]',
        'trackingNumbers' => 'SearchColumnStringField[]',
        'tranDate' => 'SearchColumnDateField[]',
        'tranEstGrossProfit' => 'SearchColumnDoubleField[]',
        'tranFxEstGrossProfit' => 'SearchColumnDoubleField[]',
        'tranId' => 'SearchColumnStringField[]',
        'tranIsVsoeBundle' => 'SearchColumnBooleanField[]',
        'transactionDiscount' => 'SearchColumnBooleanField[]',
        'transactionLineType' => 'SearchColumnEnumSelectField[]',
        'transactionNumber' => 'SearchColumnStringField[]',
        'transferLocation' => 'SearchColumnSelectField[]',
        'transferOrderItemLine' => 'SearchColumnStringField[]',
        'transferOrderQuantityCommitted' => 'SearchColumnDoubleField[]',
        'transferOrderQuantityPacked' => 'SearchColumnDoubleField[]',
        'transferOrderQuantityPicked' => 'SearchColumnDoubleField[]',
        'transferOrderQuantityReceived' => 'SearchColumnDoubleField[]',
        'transferOrderQuantityShipped' => 'SearchColumnDoubleField[]',
        'type' => 'SearchColumnEnumSelectField[]',
        'unit' => 'SearchColumnStringField[]',
        'unitCostOverride' => 'SearchColumnDoubleField[]',
        'vendType' => 'SearchColumnSelectField[]',
        'visibleToCustomer' => 'SearchColumnBooleanField[]',
        'vsoeAllocation' => 'SearchColumnDoubleField[]',
        'vsoeAmount' => 'SearchColumnDoubleField[]',
        'vsoeDeferral' => 'SearchColumnEnumSelectField[]',
        'vsoeDelivered' => 'SearchColumnBooleanField[]',
        'vsoePermitDiscount' => 'SearchColumnEnumSelectField[]',
        'vsoePrice' => 'SearchColumnDoubleField[]',
        'webSite' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
