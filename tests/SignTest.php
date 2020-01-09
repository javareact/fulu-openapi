<?php

namespace Test\FuluOpenApi;

use JavaReact\FuluOpenApi\Tools\Sign;
use PHPUnit\Framework\TestCase;

/**
 * Class SignTest 签名测试
 * @package Test\FuluOpenApi
 */
class SignTest extends TestCase
{

    /**
     * 测试MD5
     */
    public function testMd5()
    {
        var_export(md5('"""""""""""""""""""""""""""""""""""""""""""""""""",,,,,,,,,,,,,,---./000000000000000111111111111122222222233333333333444444555555678888888999:::::::::::::::::______________aaaaaaaaaabbccccccccddddddddddeeeeeeeeeeeeeeeeeeeeeeeefghhiiiiiiiilllmmmmmmnnnnnnnnoooooooooooopppppprrrrrrrrrrrrrrrrrrrrrrrrsssssttttttttttttttuuuuuuuuuvyyy{}值充充品商回失娱文测直视试败返频0a091b3aa4324435aab703142518a8f7'));
    }

    /**
     * 测试验签
     */
    public function testVerifySign()
    {
        $a      = '{"order_id":"19102237851777002017","charge_finish_time":"2019-10-22 20:17:57","customer_order_no":"123456","order_status":"success","recharge_description":"充值成功","product_id":"10000489","price":"50.0000","buy_num":"1","operator_serial_number":"--","sign":"35d1c3403c42d2df58ed4e37991deee3"}';
        $result = Sign::verifySign($a, Contains::TEST_AES_SECRET);
        var_export($result);
    }

}