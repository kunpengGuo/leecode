<?php

$questionNum = isset($_GET['qn']) ? $_GET['qn'] : 1;
switch ($questionNum) {
	case 1:
		$res = twoSum([1,2,3], 5);
		break;
	case 2:
		$res = addTwoNumbers(json_encode([1,2,3]), json_encode([1,2,3]));var_dump($res);
		break;
	case 3:
		$res = lengthOfLongestSubstring('124512223');var_dump($res);
		break;
	case 4:
		$res = reverse(123);var_dump($res);
		break;
	default:
		# code...
		break;
}

/**
 * 01 两数之和
 * @param Array $nums
 * @param Int $target
 */
function twoSum($nums, $target){
	$arr = [];
	for ($i = 0; $i < count($nums); $i++) {
	    if (!empty($arr)) {
	    	break;
	    }
	    // 第二次循环以下一个键值开始循环 
		for ($j = $i+1; $j < count($nums); $j++) {
			// 判断两次循环值的和是否等于目标值 
			if ($nums[$i] + $nums[$j] == $target) {
				$arr = [$i, $j];
				break;
			}
		}
	}
	return $arr;
}

/**
 * 02 两数相加 未完成
 * @param ListNode $l1
 * @param ListNode $l2
 * @return ListNode
 */
function addTwoNumbers($l1, $l2) {
	$count1 = count($l1);
	$count2 = count($l2);
	$modulo = 0;
	$num = ($count1 > $count2) ? $count1 : $count2;
	for ($i=0; $i < $num; $i++) {
		$l1Val = isset($l1->$i) ? $l1->$i : 0;
		$l2Val = isset($l2->$i) ? $l2->$i : 0;  
		$item = $l1Val + $l2Val + $modulo;
		$modulo = 0;
		if ($item > 9) {
			$modulo = $item%10;
		}
		if ($modulo > 0){
			$item = 9;
		}
		$arr[$i] = $item;
	}
	return $arr;
}

/**
 * 无重复字符的最长子串
 * @param String $s
 * @return Integer
 */
function lengthOfLongestSubstring($s) {
	$length = strlen($s);// 字符串长度
	$arr = str_split($s, 1);
	$tmp_arr = [];
	$tmp_len = 0;
	for ($i = 0; $i < $length; $i++) {
		$tmp_arr[] = $s[$i]; 
		for ($j = $i + 1; $j < $length; $j++) { 
			if (in_array($s[$j], $tmp_arr)) {
				break;
			}
			$tmp_arr[] = $s[$j];
		}
		$arr_len = count($tmp_arr);
		$tmp_len = ($tmp_len > $arr_len) ? $tmp_len : $arr_len;
		$tmp_arr = [];  
	}
	return $tmp_len;
}

/**
 * @param Integer $x
 * @return Integer
 */
function reverse($x) {
	$newStr = '';
	if ($)
	for ($i = 0; $i < strlen($x); $i++) { 
		$newStr .= substr($x, -1 - $i, 1);
	}
	return $newStr;
}