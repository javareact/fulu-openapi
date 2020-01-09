<?php

declare(strict_types=1);

namespace JavaReact\FuluOpenApi;


/**
 * Class Other 其他API
 * @package JavaReact\FuluOpenApi
 */
class Other extends Client implements OtherInterface
{

    /**
     * 根据手机号查询归属地和城市编码，面值，城市等信息
     * @param string $phone 手机号
     * @param float $faceValue 面值
     * @return FuluOpenApiResponse
     */
    public function fuluMobileInfoGet(string $phone, float $faceValue): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "phone"      => $phone,
                "face_vaule" => $faceValue,
            ],
        ];
        return $this->request("POST", "fulu.mobile.info.get", $params);
    }

    /**
     * 根据手机号查询归属地和城市编码，面值，城市等信息
     * @param string $mobile 手机号
     * @param int $platform 平台值，默认0（0：其他 1：android(安卓端) 2：ios 3：PCW(PC网页) 4：H5 5：PCA 6：微信小程序 7：android tv 8：UWP）
     * @return FuluOpenApiResponse
     */
    public function fuluAiqiyiUserCheck(string $mobile, int $platform): FuluOpenApiResponse
    {
        $params = [
            "json" => [
                "mobile"   => $mobile,
                "platform" => $platform,
            ],
        ];
        return $this->request("POST", "fulu.aiqiyi.user.check", $params);
    }
}