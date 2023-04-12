<?php

  // php 함수는 자바스크립트와 같이 정의부와 호출부로 구성된다.

  // 정의부
  function sayHello(){
    echo '마샬 바보~~';
  };

  // 호출부
  sayHello();

  
  function sumAll($n){
    $sum = 0;
    for($i = 1; $i <= $n; $i++){
      $sum += $i;
    }
    return $sum;
  }

  echo sumAll(1000).'<br>';

  function sumAllWhile($n){
    $num = 1; 
    $sum = 0; 
    while($num <= $n){ 
      $sum += $num;
      $num++;
    }
    return $sum;
  }

  echo sumAllWhile(50);

?>