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
        // TODO: Implement fuluAlipayH5Pay() method.
    }

    /**
     * @inheritDoc
     */
    public function fuluAlipayAppPay(string $outTradeNo, float $totalAmount, string $subject, string $passbackParams): FuluOpenApiResponse
    {
        // TODO: Implement fuluAlipayAppPay() method.
    }

    /**
     * @inheritDoc
     */
    public function fuluAlipayH5Query(array $options = []): FuluOpenApiResponse
    {
        // TODO: Implement fuluAlipayH5Query() method.
    }

    /**
     * @inheritDoc
     */
    public function fuluAlipayH5Refund(string $outTradeNo, float $refundAmount): FuluOpenApiResponse
    {
        // TODO: Implement fuluAlipayH5Refund() method.
    }

    /**
     * @inheritDoc
     */
    public function fuluAlipayRefundQuery(string $outTradeNo): FuluOpenApiResponse
    {
        // TODO: Implement fuluAlipayRefundQuery() method.
    }

    /**
     * @inheritDoc
     */
    public function fuluWechatH5Pay(string $outTradeNo, float $totalFee, string $spbillCreateIp, string $passbackParams, array $options = []): FuluOpenApiResponse
    {
        // TODO: Implement fuluWechatH5Pay() method.
    }

    /**
     * @inheritDoc
     */
    public function fuluWechatH5Query(string $outTradeNo): FuluOpenApiResponse
    {
        // TODO: Implement fuluWechatH5Query() method.
    }

    /**
     * @inheritDoc
     */
    public function fuluWechatH5Refund(string $outTradeNo, float $totalFee, float $refundFee, string $outRefundNo): FuluOpenApiResponse
    {
        // TODO: Implement fuluWechatH5Refund() method.
    }

    /**
     * @inheritDoc
     */
    public function fuluWechatRefundQuery(string $outTradeNo): FuluOpenApiResponse
    {
        // TODO: Implement fuluWechatRefundQuery() method.
    }
}