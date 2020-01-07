<?php

declare(strict_types=1);

namespace JavaReact\FuluOpenApi;


/**
 * Class Goods
 * @package JavaReact\FuluOpenApi
 */
class Goods extends Client implements GoodsInterface
{
    /**
     * @param string $productId
     * @return FuluOpenApiResponse
     */
    public function fuluGoodsInfoGet(string $productId): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "product_id" => $productId,
            ],
        ];
        return $this->request("POST", "fulu.goods.info.get", $params);
    }

    /**
     * @param string $templateId
     * @return FuluOpenApiResponse
     */
    public function fuluGoodsTemplateGet(string $templateId): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "template_id" => $templateId,
            ],
        ];
        return $this->request("POST", "fulu.goods.template.get", $params);
    }
}