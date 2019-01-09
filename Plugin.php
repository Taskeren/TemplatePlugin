<?php
/**
 * TemplatePlugin 是一个 Typecho 插件的模版。
 *
 * @package TemplatePlugin
 * @author Taskeren
 * @version 1.0
 * @link https://github.com/nitu2003/TemplatePlugin/
 */

// 上面是插件信息，显示于插件配置页面。
// @package: 插件名称（插件文件夹名，插件包名，插件类名必须保持一致）
// @author: 作者名称
// @version: 版本号
// @link: 作者的链接

// 类名必须为 『{@package}_Plugin』 。（插件文件夹名，插件包名，插件类名必须保持一致）
// 关于插件实现，请看 http://docs.typecho.org/plugins/hello-world
class TemplatePlugin_Plugin implements Typecho_Plugin_Interface{

	/* 激活插件方法 */
	public static function activate(){
		// Typecho_Plugin::factory('『一个页面的地址』') -> 『该页面下的方法名称』 = array(__CLASS__, '『主类中的实现方法』'); （详见 Typecho Doc）
		// 页面地址拥有特殊的表达式，如 『./var/Widget/Comments/Archive.php』 则表示为 『Widget_Comments_Archive』
		// 『__CLASS__』 表示这个类
		Typecho_Plugin::factory('Widget_Archive')->header = array(__CLASS__, 'render');
	}

	/* 禁用插件方法 */
	public static function deactivate(){}

	/* 插件配置方法 */
	public static function config(Typecho_Widget_Helper_Form $form){}

	/* 个人用户的配置方法 */
	public static function personalConfig(Typecho_Widget_Helper_Form $form){}

	/* 插件实现方法 */
	public static function render(){
		// 根据上面的注册："Widget_Archive"，应该在 『文章』 中的 『header』 中。
		// Ps：Cloudflare 的 HTML 加速会把注解删掉，不要像我一样蠢蠢的还以为是 Bug。
		echo("<!-- 我是实现方法 -->");
	}
}

// 以 WTFPL 开源，爱咋咋地。
