<?php

declare(strict_types=1);

namespace JavaReact\FuluOpenApi;


/**
 * Class Other
 * @package JavaReact\FuluOpenApi
 */
class Other extends Client implements OtherInterface
{

    /**
     * @param string $phone
     * @param float $faceValue
     * @return FuluOpenApiResponse
     */
    public function fuluMobileInfoGet(string $phone, float $faceValue): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "phone" => $phone,
                "face_vaule" => $faceValue,
            ],
        ];
        return $this->request("POST", "fulu.mobile.info.get", $params);
    }
}