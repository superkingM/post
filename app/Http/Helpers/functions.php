<?php

//字符串分割为数组
function strsToArray($strs) {
    $result = array();
    $array = array();
    $strs = str_replace('，', ',', $strs);
    $strs = str_replace("\r\n", ',', $strs);
    $strs = str_replace(' ', ',', $strs);
    $strs = str_replace(';', ',', $strs);
    $strs = str_replace('；', ',', $strs);
    $array = explode(',', $strs);
    foreach ($array as $key => $value) {
        if ('' != ($value = trim($value))) {
            $result[] = $value;
        }
    }
    return $result;
}

//标签对象集合转字符串
function objToString($obj,$value){
    $result ='';
    $obj = collect($obj)->pluck($value)->toArray();
    $result = implode(',',$obj);
    return $result;

}