<?php

declare(strict_types=1);

namespace JavaReact\FuluOpenApi;


interface UserInterface
{
    public function fuluUserInfoGet(): FuluOpenApiResponse;
}