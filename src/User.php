<?php

declare(strict_types=1);

namespace JavaReact\FuluOpenApi;


/**
 * Class User
 * @package JavaReact\FuluOpenApi
 */
class User extends Client implements UserInterface
{
    /**
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