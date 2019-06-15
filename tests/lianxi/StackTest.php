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

class stack{
    private $top = null;
    public $size = 0;

    public function push($data)
    {
        if($this->top == null){
            $this->top = new Node($data);
        }else{
            $n = new Node($data);
            $n->prev = $this->top;
            $this->top = $n;
        }
        $this->size++;
    }

    public function pop()
    {
        $data = $this->top->data;
        $this->top = $this->top->prev;
        $this->size--;
        return $data;
    }

    public function getAll(){
        $result = [];
        while($this->top){
            $result[]=$this->top->data;
            $this->top = $this->top->prev;
        }
        return $result;
    }

}

class StackTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
     $s = new stack();
     $s->push("aaaa");
     $s->push("bbb");
     $s->push("dddddd");
     $s->push("cc");
     $s->push("eeee");
     echo '<pre>';
     echo $s->pop();

     var_dump($s->getAll());

    }
}
