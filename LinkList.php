<?php
/**
 * 链表结构
 */
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
		// var_dump($r);
		// var_dump($list);
	}
	//die;
	// $test = new LinkList();
	// $test->val = 11111;
	// $test->next = null;
	// $r->next = $test;
	// $r = $test;
	// var_dump($list);
	// var_dump($r);die;
	return $list;
}



// foreach ($data as $key => $value) {
// 		if ($key === 0) {
// 			$r->val = $value;
// 			$r->next = null;
// 		} else {
// 			$link = new LinkList();
// 			$link->val = $value;
// 			$link->next = null;
// 			$r->next = $link;
// 			$r = $link;
// 		}
// 	}