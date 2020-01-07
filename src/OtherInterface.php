<?php

declare(strict_types=1);

namespace JavaReact\FuluOpenApi;


interface OtherInterface
{
    public function fuluMobileInfoGet(string $phone, float $faceValue): FuluOpenApiResponse;
}