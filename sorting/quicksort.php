<?php

$arr = [10,25,18,3,99,87,88,45,3,5,9,22,15];

// 10
// l[3,3,5,9]
// r[25,18,99,87,88,45,22,15]

// l1 - 3
// l[]
// r[3,5,9]
// left + pivot + right = [3,3,5,9]

// r1 - 25
// l[18,22,15]
// r[99,87,88,45]

// l2 - 18
// l[15]
// r[22]
// left + pivot + right = [15,18,22]

// r2 - 99
// l[87,88,45]
// r[]
// left + pivot + right = [87,88,45,99]

// [87,88,45,99]
// p - 87
// l[45]
// r[88,99]
// left + pivot + right = [45,87,88,99]




function quicksort($arr) {
  // We return if the array is less than or equal to one, cause you cant sort
  // an array this small!
  if (count($arr) <= 1) {
    return $arr;
  } 

  // Let's split our results into left and right partitions. 
  $leftPartion = [];
  $rightPartition = [];
  $pivot = $arr[0];

  // Start $i at 1 so we dont have to repeat our pivot

  for ($i=1; $i<count($arr); $i++) {
    if ($arr[$i] < $pivot) {
      $leftPartion[] = $arr[$i];
    }
    else {
      $rightPartition[] = $arr[$i];
    }
  }

  var_dump("iteration: " . $i);
  var_dump($leftPartion);

  // Merges the left partition, pivot, and right partition into one array
  $merged = array_merge(quicksort($leftPartion), [$pivot], quicksort($rightPartition));
  return $merged;
}


$sorted = quicksort($arr);
var_dump($sorted);