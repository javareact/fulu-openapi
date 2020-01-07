<?php

declare(strict_types=1);

namespace JavaReact\FuluOpenApi;


/**
 * Class Order
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
    const PACKET_KIND_DAY    = 2;
    /**
     *
     */
    const PACKET_KIND_7DAY   = 3;
    /**
     *
     */
    const PACKET_KIND_MONTH  = 4;
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
    public function fuluOrderDataAdd(string $chargePhone, string $customerOrderNo, float $chargeValue, int $packetKind) : FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "charge_phone" => $chargePhone,
                "customer_order_no" => $customerOrderNo,
                "charge_value" => $chargeValue,
                "packet_kind" => $packetKind,
            ],
        ];
        return $this->request("POST", "fulu.order.data.add", $params);
    }

    /**
     * @param string $customerOrderNo
     * @return FuluOpenApiResponse
     */
    public function fuluOrderInfoGet(string $customerOrderNo) : FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "customer_order_no" => $customerOrderNo,
            ],
        ];
        return $this->request("POST", "fulu.order.info.get", $params);
    }

    /**
     * @param float $chargeValue
     * @param string $chargePhone
     * @param string $customerOrderNo
     * @return FuluOpenApiResponse
     */
    public function fuluOrderMobileAdd(float $chargeValue, string $chargePhone, string $customerOrderNo) : FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "charge_value" => $chargeValue,
                "charge_phone" => $chargePhone,
                "customer_order_no" => $customerOrderNo,
            ],
        ];
        return $this->request("POST", "fulu.order.mobile.add", $params);
    }

    /**
     * @param int $buyNum
     * @param int $productId
     * @param string $customerOrderNo
     * @return FuluOpenApiResponse
     */
    public function fuluOrderCardAdd(int $buyNum, int $productId, string $customerOrderNo) : FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "buy_num" => $buyNum,
                "product_id" => $productId,
                "customer_order_no" => $customerOrderNo,
            ],
        ];
        return $this->request("POST", "fulu.order.card.add", $params);
    }

    /**
     * @param string $customerOrderNo
     * @param int $productId
     * @param string $chargeAccount
     * @param int $buyNum
     * @param array $options
     * @return FuluOpenApiResponse
     */
    public function fuluOrderDirectAdd(string $customerOrderNo, int $productId, string $chargeAccount, int $buyNum, array $options = []) : FuluOpenApiResponse
    {
        $params = [
            "json" => array_merge([
                "customer_order_no" => $customerOrderNo,
                "product_id" => $productId,
                "charge_account" => $chargeAccount,
                "buy_num" => $buyNum,
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