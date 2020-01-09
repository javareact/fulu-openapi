<?php

declare(strict_types=1);

namespace JavaReact\FuluOpenApi;


/**
 * Class User 用户API
 * @package JavaReact\FuluOpenApi
 */
class User extends Client implements UserInterface
{
    /**
     * 获取用户信息接口
     * @return FuluOpenApiResponse
     */
    public function fuluUserInfoGet(): FuluOpenApiResponse
    {
        $params = [
            "json" => [],
        ];
        return $this->request("POST", "fulu.user.info.get", $params);
    }
}