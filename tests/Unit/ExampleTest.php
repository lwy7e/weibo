<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);


        $str="http://www.test.com.cn/abc/de/fg.php?id=1";//先定义一个字符串
        $str2=getExt($str);
        echo $str2;
    }
}
    function getExt($url){
        $arr = parse_url($url);//通过此函数解析url 地址

    //    var_dump($arr);
        /*
         * array(4) {
              ["scheme"]=>
              string(4) "http"
              ["host"]=>
              string(15) "www.test.com.cn"
              ["path"]=>
              string(14) "/abc/de/fg.php"
              ["query"]=>
              string(4) "id=1"
            }
         */
        $file = basename($arr['path']);//显示带有文件扩展名的文件名
        var_dump($file);
        /*
         * string(6) "fg.php"
         */
        $ext = explode(".",$file);//最后通过此函数切割字符串
        return $ext[1];//取出第一个就是后缀咯～
    }