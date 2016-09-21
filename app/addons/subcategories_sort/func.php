<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_subcategories_sort_get_categories_pre(&$params, &$lang_code)
{
    $default_params = array(
        'category_id' => 0,
        'visible' => false,
        'current_category_id' => 0,
        'simple' => true,
        'plain' => false,
        'limit' => 0,
        'item_ids' => '',
        'group_by_level' => true,
        'get_images' => false,
        'category_delimiter' => '/',
        'get_frontend_urls' => false,
        'max_nesting_level' => null,
        'sort_by' => 'name',
        'sort_order' => 'asc',
    );

    $params = array_merge($default_params, $params);
}
