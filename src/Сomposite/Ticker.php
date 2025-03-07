<?php


namespace Seleda\BybitTypes\Сomposite;


use Seleda\BybitTypes\Simple\Ask1Iv;
use Seleda\BybitTypes\Simple\Ask1Price;
use Seleda\BybitTypes\Simple\Ask1Size;
use Seleda\BybitTypes\Simple\Bid1Iv;
use Seleda\BybitTypes\Simple\Bid1Price;
use Seleda\BybitTypes\Simple\Bid1Size;
use Seleda\BybitTypes\Simple\Delta;
use Seleda\BybitTypes\Simple\Gamma;
use Seleda\BybitTypes\Simple\HighPrice24h;
use Seleda\BybitTypes\Simple\IndexPrice;
use Seleda\BybitTypes\Simple\LastPrice;
use Seleda\BybitTypes\Simple\LowPrice24h;
use Seleda\BybitTypes\Simple\MarkIv;
use Seleda\BybitTypes\Simple\MarkPrice;
use Seleda\BybitTypes\Simple\OpenInterest;
use Seleda\BybitTypes\Simple\PredictedDeliveryPrice;
use Seleda\BybitTypes\Simple\Symbol;
use Seleda\BybitTypes\Simple\Theta;
use Seleda\BybitTypes\Simple\TotalVolume;
use Seleda\BybitTypes\Simple\Turnover24h;
use Seleda\BybitTypes\Simple\UnderlyingPrice;
use Seleda\BybitTypes\Simple\Vega;
use Seleda\BybitTypes\Simple\Volume24h;

class Ticker
{
    private Symbol $symbol;

    private Bid1Price $bid1Price;

    private Bid1Size $bid1Size;

    private Bid1Iv $bid1Iv;

    private Ask1Price $ask1Price;

    private Ask1Size $ask1Size;

    private Ask1Iv $ask1Iv;

    private LastPrice $lastPrice;

    private HighPrice24h $highPrice24h;

    private LowPrice24h $lowPrice24h;

    private MarkPrice $markPrice;

    private IndexPrice $indexPrice;

    private MarkIv $markIv;

    private UnderlyingPrice $underlyingPrice;

    private OpenInterest $openInterest;

    private Turnover24h $turnover24h;

    private Volume24h $volume24h;

    private TotalVolume $totalVolume;

    private Delta $delta;

    private Gamma $gamma;

    private Vega $vega;

    private Theta $theta;

    private PredictedDeliveryPrice $predictedDeliveryPrice;

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