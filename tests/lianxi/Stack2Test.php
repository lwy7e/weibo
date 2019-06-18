<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
class Node{
    public $data = null;
    public $prev = null;

    public function __construct($data){
        $this->data = $data;
    }
}



class Stack2Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);

        $arr = array();
        $arr_r['label'] ='添加运费模板';
        $arr_r['value'] =2;
        array_unshift($arr,$arr_r);
        $arr_t['label'] ='全国包邮';
        $arr_t['value'] =1;
        array_unshift($arr,$arr_t);
        $arr = array_values($arr);
        $field = 'value';
        $sortby = 'desc';

        $list_c = list_sort_by($arr,$field,$sortby);
        var_dump($list_c);

    }
}

function list_sort_by($list,$field, $sortby='asc') {
    if(is_array($list)){
        $refer = $resultSet = array();
        foreach ($list as $i => $data)
            $refer[$i] = &$data[$field];
        switch ($sortby) {
            case 'asc': // 正向排序
                asort($refer);
                break;
            case 'desc':// 逆向排序
                arsort($refer);
                break;
            case 'nat': // 自然排序
                natcasesort($refer);
                break;
        }
        foreach ( $refer as $key=> $val)
            $resultSet[] = &$list[$key];
        return $resultSet;
    }
    return false;
}