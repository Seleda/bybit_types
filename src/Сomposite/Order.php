<?php


namespace Seleda\BybitTypes\Сomposite;


use Seleda\BybitTypes\Simple\AvgPrice;
use Seleda\BybitTypes\Simple\BlockTradeId;
use Seleda\BybitTypes\Simple\CancelType;
use Seleda\BybitTypes\Simple\Category;
use Seleda\BybitTypes\Simple\ClosedPnl;
use Seleda\BybitTypes\Simple\CloseOnTrigger;
use Seleda\BybitTypes\Simple\CreatedTime;
use Seleda\BybitTypes\Simple\CreateType;
use Seleda\BybitTypes\Simple\CumExecFee;
use Seleda\BybitTypes\Simple\CumExecQty;
use Seleda\BybitTypes\Simple\CumExecValue;
use Seleda\BybitTypes\Simple\FeeCurrency;
use Seleda\BybitTypes\Simple\IsLeverage;
use Seleda\BybitTypes\Simple\LastPriceOnCreated;
use Seleda\BybitTypes\Simple\LeavesQty;
use Seleda\BybitTypes\Simple\LeavesValue;
use Seleda\BybitTypes\Simple\MarketUnit;
use Seleda\BybitTypes\Simple\OcoTriggerBy;
use Seleda\BybitTypes\Simple\OrderId;
use Seleda\BybitTypes\Simple\OrderIv;
use Seleda\BybitTypes\Simple\OrderLinkId;
use Seleda\BybitTypes\Simple\OrderStatus;
use Seleda\BybitTypes\Simple\OrderType;
use Seleda\BybitTypes\Simple\PlaceType;
use Seleda\BybitTypes\Simple\PositionIdx;
use Seleda\BybitTypes\Simple\Price;
use Seleda\BybitTypes\Simple\Qty;
use Seleda\BybitTypes\Simple\ReduceOnly;
use Seleda\BybitTypes\Simple\RejectReason;
use Seleda\BybitTypes\Simple\Side;
use Seleda\BybitTypes\Simple\SlLimitPrice;
use Seleda\BybitTypes\Simple\SlTriggerBy;
use Seleda\BybitTypes\Simple\SmpGroup;
use Seleda\BybitTypes\Simple\SmpOrderId;
use Seleda\BybitTypes\Simple\SmpType;
use Seleda\BybitTypes\Simple\StopLoss;
use Seleda\BybitTypes\Simple\StopOrderType;
use Seleda\BybitTypes\Simple\Symbol;
use Seleda\BybitTypes\Simple\TakeProfit;
use Seleda\BybitTypes\Simple\TimeInForce;
use Seleda\BybitTypes\Simple\TpLimitPrice;
use Seleda\BybitTypes\Simple\TpslMode;
use Seleda\BybitTypes\Simple\TpTriggerBy;
use Seleda\BybitTypes\Simple\TriggerBy;
use Seleda\BybitTypes\Simple\TriggerDirection;
use Seleda\BybitTypes\Simple\TriggerPrice;
use Seleda\BybitTypes\Simple\UpdatedTime;

class Order
{
    public readonly Category $category;
    public readonly OrderId $orderId;
    public readonly OrderLinkId $orderLinkId;
    public readonly IsLeverage $isLeverage;
    public readonly BlockTradeId $blockTradeId;
    public readonly Symbol $symbol;
    public readonly Price $price;
    public readonly Qty $qty;
    public readonly Side $side;
    public readonly PositionIdx $positionIdx;
    public readonly OrderStatus $orderStatus;
    public readonly CreateType $createType;
    public readonly CancelType $cancelType;
    public readonly RejectReason $rejectReason;
    public readonly AvgPrice $avgPrice;
    public readonly LeavesQty $leavesQty;
    public readonly LeavesValue $leavesValue;
    public readonly CumExecQty $cumExecQty;
    public readonly CumExecValue $cumExecValue;
    public readonly CumExecFee $cumExecFee;
    public readonly ClosedPnl $closedPnl;
    public readonly FeeCurrency $feeCurrency;
    public readonly TimeInForce $timeInForce;
    public readonly OrderType $orderType;
    public readonly StopOrderType $stopOrderType;
    public readonly OcoTriggerBy $ocoTriggerBy;
    public readonly OrderIv $orderIv;
    public readonly MarketUnit $marketUnit;
    public readonly TriggerPrice $triggerPrice;
    public readonly TakeProfit $takeProfit;
    public readonly StopLoss $stopLoss;
    public readonly TpslMode $tpslMode;
    public readonly TpLimitPrice $tpLimitPrice;
    public readonly SlLimitPrice $slLimitPrice;
    public readonly TpTriggerBy $tpTriggerBy;
    public readonly SlTriggerBy $slTriggerBy;
    public readonly TriggerDirection $triggerDirection;
    public readonly TriggerBy $triggerBy;
    public readonly LastPriceOnCreated $lastPriceOnCreated;
    public readonly ReduceOnly $reduceOnly;
    public readonly CloseOnTrigger $closeOnTrigger;
    public readonly PlaceType $placeType;
    public readonly SmpType $smpType;
    public readonly SmpGroup $smpGroup;
    public readonly SmpOrderId $smpOrderId;
    public readonly CreatedTime $createdTime;
    public readonly UpdatedTime $updatedTime;

    public function __construct(array $order)
    {
        foreach (get_class_vars(self::class) as $var => $_) {
            if (isset($order[$var])) {
                $class = '\\Seleda\\BybitTypes\\Simple\\'.ucfirst($var);
                $this->{$var} = new $class($order[$var]);
            }
        }
    }
}