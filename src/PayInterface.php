<?php
declare(strict_types=1);

namespace JavaReact\FuluOpenApi;
/**
 * Interface PayInterface
 * @package JavaReact\FuluOpenApi
 */
interface PayInterface
{
    /**
     * 支付宝H5接口
     * @param string $outTradeNo 商户订单号
     * @param float $totalAmount 支付金额
     * @param string $subject 商品的标题/交易标题/订单标题/订单关键字等。
     * @param string $passbackParams 异步回调地址
     * @param string $return_url 同步回调地址
     * @return FuluOpenApiResponse
     */
    public function fuluAlipayH5Pay(string $outTradeNo, float $totalAmount, string $subject, string $passbackParams, string $return_url): FuluOpenApiResponse;

    /**
     * 支付宝App支付接口
     * @param string $outTradeNo out_trade_no
     * @param float $totalAmount
     * @param string $subject
     * @param string $passbackParams
     * @return FuluOpenApiResponse
     */
    public function fuluAlipayAppPay(string $outTradeNo, float $totalAmount, string $subject, string $passbackParams): FuluOpenApiResponse;

    /**
     * 支付宝查单接口
     * @param string $outTradeNo 商户订单号
     * @param string $trade_no 支付宝交易号
     * @return FuluOpenApiResponse
     */
    public function fuluAlipayH5Query(array $options = []): FuluOpenApiResponse;

    /**
     * 支付宝退款接口
     * @param string $outTradeNo 订单支付时传入的商户订单号(该订单号必须和支付的商户订单号一致)
     * @param float $refundAmount 需要退款的金额，该金额不能大于订单金额,单位为元，支持两位小数
     * @return FuluOpenApiResponse
     */
    public function fuluAlipayH5Refund(string $outTradeNo, float $refundAmount): FuluOpenApiResponse;

    /**
     * 支付宝退款查询
     * @param string $outTradeNo 订单支付时传入的商户订单号(该订单号必须和支付的商户订单号一致)
     * @return FuluOpenApiResponse
     */
    public function fuluAlipayRefundQuery(string $outTradeNo): FuluOpenApiResponse;

    /**
     * 微信H5支付接口
     * @param string $outTradeNo 商户网站唯一订单号
     * @param float $totalFee 订单总金额，单位为分
     * @param string $spbillCreateIp 请求的IP地址
     * @param string $passbackParams 异步回调地址 https://www.xxxxx.com/
     * @param array $options
     * @return FuluOpenApiResponse
     */
    public function fuluWechatH5Pay(string $outTradeNo, float $totalFee, string $spbillCreateIp, string $passbackParams, array $options = []): FuluOpenApiResponse;

    /**
     * 微信查单接口
     * @param string $outTradeNo 商户网站唯一订单号
     * @return FuluOpenApiResponse
     */
    public function fuluWechatH5Query(string $outTradeNo): FuluOpenApiResponse;

    /**
     * 微信退款接口
     * @param string $outTradeNo 商户网站唯一订单号
     * @param float $totalFee 订单总金额
     * @param float $refundFee 退款金额,这里和订单金额一致，如不一致只能退部分，后面不能继续退款
     * @param string $outRefundNo 退款账户，这里单号只要唯一即可
     * @return FuluOpenApiResponse
     */
    public function fuluWechatH5Refund(string $outTradeNo, float $totalFee, float $refundFee, string $outRefundNo): FuluOpenApiResponse;

    /**
     * 微信退款查询接口
     * @param string $outTradeNo 商户网站唯一订单号
     * @return FuluOpenApiResponse
     */
    public function fuluWechatRefundQuery(string $outTradeNo): FuluOpenApiResponse;
}