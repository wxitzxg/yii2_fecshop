<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
	'catalogsearch' => [
		'class' => '\fecshop\app\appfront\modules\Catalogsearch\Module',
		'params'=> [
			'categorysearch_filter_attr' =>[
				'color','size',
			],
			# 搜索页面的title 格式 ，%s 将会被替换成搜索词
			'search_page_title_format' => 'Search Text: %s ',
			# 搜索页面的 meta keywords格式 ，%s 将会被替换成搜索词
			'search_page_meta_keywords_format' => 'Search Text: %s ',
			# 搜索页面的 meta description格式 ，%s 将会被替换成搜索词
			'search_page_meta_description_format' => 'Search Text: %s ',
			# 搜索的最大个数
			'product_search_max_count'  => 1000,
			# 搜索页面是否开启面包屑导航
			'search_breadcrumbs'		=> true,
			
			//'search_filter_category' 	=> true,
			
			'search_query' =>[
				# 放到第一个的就是默认值，譬如下面的30
				'numPerPage' => [4,30,60,90],		# 产品显示个数的列举
				# 放到第一个的就是默认值，譬如下面的hot
				'sort' => [						# 所有排序方式
					# 下面的譬如hot  new  low-to-high 只能用 字母，数组，-，_ 这4种字符。 
					'hot' => [
						'label'   	=> 'Hot',   # 显示的字符
						'db_columns'=> 'score', # 对应数据库的字段
						'direction'	=> 'desc',  # 排序方式
					],
					'new' => [
						'label'   	=> 'New',
						'db_columns'=> 'created_at',
						'direction'	=> 'desc',
					],
					'low-to-high' => [
						'label'   	=> '$ Low to High',
						'db_columns'=> 'price',
						'direction'	=> 'asc',
					],
					'high-to-low' => [
						'label'   	=> '$ High to Low',
						'db_columns'=> 'price',
						'direction'	=> 'desc',
					],
				],
				# 价格区间设置，如果不想在搜索页面价格过滤，可以清空这个。
				'price_range' => [
					'0-10',
					'10-20',
					'20-30',
					'30-50',
					'50-100',
					'100-150',
					'150-300',
					'300-500',
					'500-1000',
					'1000-',
				],
			],
		],
	],
];



