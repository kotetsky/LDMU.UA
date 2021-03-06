<?php

/**
 * Zt Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 * 
 * @name        Zt Shortcodes
 * @version     2.0.0
 * @package     Plugin
 * @subpackage  System
 * @author      ZooTemplate 
 * @email       support@zootemplate.com 
 * @link        http://www.zootemplate.com 
 * @copyright   Copyright (c) 2015 ZooTemplate
 * @license     GPL v2 
 */
defined('_JEXEC') or die('Restricted access');

$html = '';
$html .= '<div class="zt-quote ' . $attributes->get('type') . '-quote ' . $attributes->get('extraclass') . '">';
$html .= '<div class="zt-quote-inner">';
if ($attributes->get('type') == "box")
{
    $html .= '<i class="fa fa-quote-left"></i>';
}
$html .= '<p>' . $content . '</p>';
$html .= '<a class="zt-quote-author" href="' . $attributes->get('authorlink') . '">&#8212 ' . $attributes->get('author') . '</a>';
$html .= '</div>';
$html .= '</div>';

echo $html;
