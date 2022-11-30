/*
4. 寻找两个正序数组的中位数
给定两个大小分别为 m 和 n 的正序（从小到大）数组 nums1 和 nums2。请你找出并返回这两个正序数组的 中位数 。

算法的时间复杂度应该为 O(log (m+n)) 。
*/

/**
 * @param {number[]} nums1
 * @param {number[]} nums2
 * @return {number}
 */
var findMedianSortedArrays = function(nums1, nums2) {
	let arr = [...nums1, ...nums2];
	arr.sort((x, y) => x - y);
	let l = arr.length;
	let z;
	// 判断奇数偶数
	if ((l % 2) == 0) {
		// 偶数
		let i = Math.floor(l / 2);
		z = (arr[i] + arr[i-1]) / 2;
	} else {
		let i = Math.floor(l / 2);
		z = arr[i];
	}
	console.log(z);
};

let arr1 = [1,1];
let arr2 = [1,2];
findMedianSortedArrays(arr1, arr2);