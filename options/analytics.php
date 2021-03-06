<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage bmqy-next
 * @since bmqy next 1.1
 */


$formName = wp_get_theme()->get('TextDomain'). '_options';
$baseItem = [
	'baidu_site_verification'=>[
		'type'=> 'input',
		'label'=> 'Baidu site verification',
		'tips'=> 'Please enter the contents of the content attribute in the HTML label validation mode.',
		'placeholder'=> 'meta content',
	],
	'baidu_analytics'=>[
		'type'=> 'input',
		'label'=> 'Baidu analytics',
		'tips'=> 'Baidu_analytics is not your Baidu id or Baidu stat id, is the string of statistical script id after "hm.js?"'
	],
	'cnzz_analytics'=>[
		'type'=> 'input',
		'label'=> 'CNZZ analytics',
		'placeholder'=> 'id',
	],
	'qihu_site_verification'=>[
		'type'=> 'input',
		'label'=> 'Qihu site verification',
		'placeholder'=> 'meta content',
	],
	'qihu_sitemap_auto'=>[
		'type'=> 'input',
		'label'=> 'Qihu sitemap auto',
	],
	'google_site_verification'=>[
		'type'=> 'input',
		'label'=> 'Google site verification',
	],
	'google_analytics'=>[
		'type'=> 'input',
		'label'=> 'Google analytics',
		'placeholder'=> 'id',
	],
	'yandex_site_verification'=>[
		'type'=> 'input',
		'label'=> 'Yandex site verification',
		'placeholder'=> 'meta content',
	],
	'bing_site_verification'=>[
		'type'=> 'input',
		'label'=> 'Bing site verification',
		'placeholder'=> 'meta content',
	],
	'bing_analytics'=>[
		'type'=> 'input',
		'label'=> 'Bing analytics',
		'placeholder'=> 'id',
	],
];

if ( isset( $_POST[ $formName ] ) ) {
	$siteFiled = [
		'keyword',
		'description'
	];

	foreach ($baseItem as $item=> $val){
		$field = !in_array($item, $siteFiled) ? $formName .'_'. $item : $item;
		if($baseItem[$item]['type']==='checkbox'){
			$value = !empty($_POST[$field]) ? $_POST[$field] : 0;
		}
		else{
			if($baseItem[$item]['type']==='textarea'){
				$value = !empty(esc_html($_POST[$field])) ? esc_html($_POST[$field]) : "";
			}else{
				$value = !empty($_POST[$field]) ? $_POST[$field] : "";
			}
		}

		update_option($field, $value);
	}

	bmqynext_show_udpate_success();
}

bmqynext_generate_form($formName, $baseItem);
?>