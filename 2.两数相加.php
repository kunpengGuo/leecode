<?php
/**
2.两数相加
给你两个 非空 的链表，表示两个非负的整数。它们每位数字都是按照 逆序 的方式存储的，并且每个节点只能存储 一位 数字。

请你将两个数相加，并以相同形式返回一个表示和的链表。

你可以假设除了数字 0 之外，这两个数都不会以 0 开头。
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($listNode1, $listNode2) {
        $newArr = [];
        $j = 0;
        // 先将链表转为数组操作
        $arr1 = [];
        $arr2 = [];
        $next = true;
        while ($next) {
            $arr1[] = $listNode1->val;
            if ($listNode1->next == null) {
                $next = false;
                break;
            }
            $listNode1 = $listNode1->next;
        }
        $next = true;
        while ($next) {
            $arr2[] = $listNode2->val;
            if ($listNode2->next == null) {
                $next = false;
                break;
            }
            $listNode2 = $listNode2->next;
        }
        // 比较两个数组长度，需要遍历长那个数组
        if (count($arr1) < count($arr2)) {
            $temp = $arr1;
            $arr1 = $arr2;
            $arr2 = $temp;
        }
        foreach ($arr1 as $key => $value) {
            $num1 = $arr1[$key];// 第一链表数
            $num2 = isset($arr2[$key]) ? $arr2[$key] : 0;// 第二个链表数
            $sum = $num2 + $num1;// 相加并判断上一位是否有进一
            if ($j) {
                $sum += $j;
                $j = 0;
            }
            if ($sum >= 10) {
                // 进一
                $j = 1;
            }
            // 余数
            $y = $sum % 10;
            $newArr[] = $y;
        }
        // 如果最后还有进一，需要在最后一位加上1
        if ($j) {
            $newArr[] = 1;
        }
        return init($newArr);
    }
}

class LinkList
{
	public $val;
	public $next;
}

/**
 * 生成链表
 */
function createLinkList()
{
	$list = new LinkList();
	$list->val = null;
	$list->next = null;
	return $list;
}

function init($data)
{
	$list = createLinkList();
	$r = $list;
	foreach ($data as $key => $value) {
		if ($key === 0) {
			$r->val = $value;
			$r->next = null;
		} else {
			$link = new LinkList();
			$link->val = $value;
			$link->next = null;
			$r->next = $link;
			$r = $link;
		}
	}
	return $list;
}