<?php

declare(strict_types=1);

namespace JavaReact\FuluOpenApi\Tools;

/**
 * fulu提供的签名算法
 * Class Sign
 * @package JavaReact\FuluOpenApi
 */
class Sign
{
    /**
     * 计算POST签名
     * @param array $Parameters
     * @param string $secret
     * @return string
     */
    public static function getSign(array $Parameters, string $secret): string
    {
        //签名步骤一：把字典json序列化
        $json = json_encode($Parameters, 320);
        //签名步骤二：转化为数组
        $jsonArr = self::mb_str_split($json);
        //签名步骤三：排序
        sort($jsonArr);
        //签名步骤四：转化为字符串
        $string = implode('', $jsonArr);
        //签名步骤五：在string后加入secret
        $string = $string . $secret;
        //签名步骤六：MD5加密
        $result = strtolower(md5($string));
        return $result;
    }

    /**
     * @param string $str
     * @return array
     */
    public static function mb_str_split(string $str): array
    {
        return preg_split('/(?<!^)(?!$)/u', $str);
    }

    /**
     * 验证Response签名
     * @param $results
     * @param string $secret
     * @return bool
     */
    public static function verifySign(string $results, string $secret)
    {
        $results = json_encode(json_decode($results), JSON_UNESCAPED_UNICODE);
        if (empty($results)) {
            return false;
        }
        $oriArr = json_decode($results, true);
        if (empty($oriArr['sign'])) {
            return false;
        }
        $resultArr = mb_str_split($results);
        sort($resultArr, SORT_STRING);
        $data = implode('', $resultArr) . $secret;
        return strtolower(md5($data)) === $oriArr['sign'];
    }

}