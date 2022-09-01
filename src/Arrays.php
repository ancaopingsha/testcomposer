<?php
namespace chadsmile\testcomposer;
/**
 * 数组
 */
class Arrays{
   public static function test($json){
      $data = [
        'asd' => 234234,
        'cs' => $json,
      ];
       return $data;
   }
}
