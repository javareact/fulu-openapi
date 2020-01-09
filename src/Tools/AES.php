<?php


namespace JavaReact\FuluOpenApi\Tools;


class AES
{

    /**
     * 解密
     * @param string $enpass 密文
     * @param string $secret
     * @return string
     */
    public static function decode(string $enpass, string $secret)
    {
        $encryptString = base64_decode($enpass);
        $decryptedpass = rtrim(openssl_decrypt($encryptString, 'aes-256-ecb', $secret, OPENSSL_RAW_DATA));
        return trim($decryptedpass);
    }

}