<?php

declare(strict_types=1);

namespace JavaReact\FuluOpenApi;


/**
 * Class Order 订单API
 * @package JavaReact\FuluOpenApi
 */
class Order extends Client implements OrderInterface
{
    /**
     * @var int
     */
    const PACKET_KIND_HOUR = 1;
    /**
     *
     */
    const PACKET_KIND_DAY = 2;
    /**
     *
     */
    const PACKET_KIND_7DAY = 3;
    /**
     *
     */
    const PACKET_KIND_MONTH = 4;
    /**
     *
     */
    const PACKET_KIND_6MONTH = 5;
    /**
     *
     */
    const PACKET_KIND_YEAR = 6;

    /**
     * @param string $chargePhone
     * @param string $customerOrderNo
     * @param float $chargeValue
     * @param int $packetKind
     * @return FuluOpenApiResponse
     */
    public function fuluOrderDataAdd(string $chargePhone, string $customerOrderNo, float $chargeValue, int $packetKind): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "charge_phone"      => $chargePhone,
                "customer_order_no" => $customerOrderNo,
                "charge_value"      => $chargeValue,
                "packet_kind"       => $packetKind,
            ],
        ];
        return $this->request("POST", "fulu.order.data.add", $params);
    }

    /**
     * 查询订单详情接口
     * @param string $customerOrderNo
     * @return FuluOpenApiResponse
     */
    public function fuluOrderInfoGet(string $customerOrderNo): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "customer_order_no" => $customerOrderNo,
            ],
        ];
        return $this->request("POST", "fulu.order.info.get", $params);
    }

    /**
     * 话费商品下单接口
     * @param float $chargeValue 充值数额
     * @param string $chargePhone 充值手机号
     * @param string $customerOrderNo 外部订单号
     * @return FuluOpenApiResponse
     */
    public function fuluOrderMobileAdd(float $chargeValue, string $chargePhone, string $customerOrderNo): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "charge_value"      => $chargeValue,
                "charge_phone"      => $chargePhone,
                "customer_order_no" => $customerOrderNo,
            ],
        ];
        return $this->request("POST", "fulu.order.mobile.add", $params);
    }

    /**
     * 卡密商品取卡接口
     * @param int $buyNum 购买数量
     * @param int $productId 商品编号
     * @param string $customerOrderNo 外部订单号
     * @return FuluOpenApiResponse
     */
    public function fuluOrderCardAdd(int $buyNum, int $productId, string $customerOrderNo): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "buy_num"           => $buyNum,
                "product_id"        => $productId,
                "customer_order_no" => $customerOrderNo,
            ],
        ];
        return $this->request("POST", "fulu.order.card.add", $params);
    }

    /**
     * 直充商品下单接口
     * @param string $customerOrderNo 外部订单号
     * @param int $productId 商品编号
     * @param string $chargeAccount 充值账号
     * @param int $buyNum 购买数量
     * @param array $options 可选参数
     * @return FuluOpenApiResponse
     */
    public function fuluOrderDirectAdd(string $customerOrderNo, int $productId, string $chargeAccount, int $buyNum, array $options = []): FuluOpenApiResponse
    {
        $params = [
            "json" => array_merge([
                "customer_order_no" => $customerOrderNo,
                "product_id"        => $productId,
                "charge_account"    => $chargeAccount,
                "buy_num"           => $buyNum,
            ], $this->resolveOptions($options, [
                "remaining_number",
                "charge_type",
                "charge_password",
                "charge_ip",
                "charge_game_name",
                "charge_game_srv",
                "contact_qq",
                "contact_tel",
                "charge_game_region",
                "charge_game_role",
            ])),
        ];
        return $this->request("POST", "fulu.order.direct.add", $params);
    }
}