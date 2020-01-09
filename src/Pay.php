<?php

namespace JavaReact\FuluOpenApi;

/**
 * Class Pay 支付API
 * @package JavaReact\FuluOpenApi
 */
class Pay extends Client implements PayInterface
{

    /**
     * @inheritDoc
     */
    public function fuluAlipayH5Pay(string $outTradeNo, float $totalAmount, string $subject, string $passbackParams, string $return_url): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                'out_trade_no'    => $outTradeNo,
                'total_amount'    => $totalAmount,
                'subject'         => $subject,
                'passback_params' => $passbackParams,
                'return_url'      => $return_url,
            ],
        ];
        return $this->request("POST", "fulu.alipay.h5.pay", $params);
    }

    /**
     * @inheritDoc
     */
    public function fuluAlipayAppPay(string $outTradeNo, float $totalAmount, string $subject, string $passbackParams): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                'out_trade_no'    => $outTradeNo,
                'total_amount'    => $totalAmount,
                'subject'         => $subject,
                'passback_params' => $passbackParams,
            ],
        ];
        return $this->request("POST", "fulu.alipay.app.pay", $params);
    }

    /**
     * @inheritDoc
     */
    public function fuluAlipayH5Query(array $options = []): FuluOpenApiResponse
    {
        $params = [
            "json" => $this->resolveOptions($options, [
                "out_trade_no",
                "trade_no",
            ])
        ];
        return $this->request("POST", "fulu.alipay.h5.query", $params);
    }

    /**
     * @inheritDoc
     */
    public function fuluAlipayH5Refund(string $outTradeNo, float $refundAmount): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                'out_trade_no'  => $outTradeNo,
                'refund_amount' => $refundAmount,
            ],
        ];
        return $this->request("POST", "fulu.alipay.h5.refund", $params);
    }

    /**
     * @inheritDoc
     */
    public function fuluAlipayRefundQuery(string $outTradeNo): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                'out_trade_no' => $outTradeNo,
            ],
        ];
        return $this->request("POST", "fulu.alipay.refund.query", $params);
    }

    /**
     * @inheritDoc
     */
    public function fuluWechatH5Pay(string $outTradeNo, float $totalFee, string $spbillCreateIp, string $passbackParams, array $options = []): FuluOpenApiResponse
    {
        $params = [
            "json" => array_merge([
                "out_trade_no"     => $outTradeNo,
                "total_fee"        => $totalFee,
                "spbill_create_ip" => $spbillCreateIp,
                "passback_params"  => $passbackParams
            ], $this->resolveOptions($options, [
                "body",
                "return_url"
            ])),
        ];
        return $this->request("POST", "fulu.wechatpay.h5.pay", $params);
    }

    /**
     * @inheritDoc
     */
    public function fuluWechatH5Query(string $outTradeNo): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                'out_trade_no' => $outTradeNo,
            ],
        ];
        return $this->request("POST", "fulu.wechatpay.h5.query", $params);
    }

    /**
     * @inheritDoc
     */
    public function fuluWechatH5Refund(string $outTradeNo, float $totalFee, float $refundFee, string $outRefundNo): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                'out_trade_no'  => $outTradeNo,
                'total_fee'     => $totalFee,
                'refund_fee'    => $refundFee,
                'out_refund_no' => $outRefundNo,
            ],
        ];
        return $this->request("POST", "fulu.wechatpay.h5.refund", $params);
    }

    /**
     * @inheritDoc
     */
    public function fuluWechatRefundQuery(string $outTradeNo): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                'out_trade_no' => $outTradeNo,
            ],
        ];
        return $this->request("POST", "fulu.wechatpay.refund.query", $params);
    }
}