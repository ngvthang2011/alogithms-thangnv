<?php

class Queue {
    public $arr = array();

    public function isEmpty()
    {
        return count($this->arr) == 0;
    }

    public function get(){
        return !$this->isEmpty() ? $this->arr[0] : NULL;
    }

    public function push($value){
        $this->arr[] = $value;
    }
}

$queueList = new Queue();
$queueList->push(1);
$queueList->push(2);
$queueList->push(3);
$queueList->push(4);
$queueList->push(5);

echo '<pre/>';
print_r($queueList);
echo '<br/>';
echo 'GET firt element : '.$queueList->get();
