<?php

class Stack {
    public $arr = array();

    public function isEmpty()
    {
        return count($this->arr) == 0;
    }

    public function get(){
        return !$this->isEmpty() ? $this->arr[count($this->arr)-1] : NULL;
    }

    public function push($value){
        $this->arr[] = $value;
    }
}

$stackList = new Stack();
$stackList->push(1);
$stackList->push(2);
$stackList->push(3);
$stackList->push(4);
$stackList->push(5);

echo '<pre/>';
print_r($stackList);
echo '<br/>';
echo 'GET last element : '.$stackList->get();