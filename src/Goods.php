<?php

declare(strict_types=1);

namespace JavaReact\FuluOpenApi;


/**
 * Class Goods 商品API
 * @package JavaReact\FuluOpenApi
 */
class Goods extends Client implements GoodsInterface
{

    /**
     * 获取商品列表接口
     * @param int $firstCategoryId 商品分类Id（一级）
     * @param int $secondCategoryId 商品分类Id（二级）
     * @param int $thirdCategoryId 商品分类Id（三级）
     * @param string $productId 商品编号
     * @param string $productName 商品名称
     * @param string $productType 库存类型：卡密、直充
     * @param float $faceValue 面值
     * @return FuluOpenApiResponse
     */
    public function fuluGoodsListGet(array $options = []): FuluOpenApiResponse
    {
        $params = [
            "json" =>
                $this->resolveOptions($options, [
                    "first_category_id",
                    "second_category_id",
                    "third_category_id",
                    "product_id",
                    "product_name",
                    "product_type",
                    "face_value",
                ])
        ];
        return $this->request("POST", "fulu.goods.list.get", $params);
    }

    /**
     * 获取商品列表接口
     * @param string $productId 商品编号
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
     * 获取商品模板信息
     * @param string $templateId 商品编号
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