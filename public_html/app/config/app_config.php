<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['controller'] = [
    'user' => [
        'statistics'       => ['name' => 'Statistics',      'icon' => 'fa fa-bar-chart',     'area_title' => false, 'route-name' => 'statistics', 'menu-level' => 0],
        'new_order'        => ['name' => 'New_order',       'icon' => 'fe fe-shopping-cart', 'area_title' => false, 'route-name' => 'new_order', 'menu-level' => 0],
        'order'            => ['name' => 'order_logs',       'icon' => 'fe fe-calendar', 'area_title' => false, 'route-name' => 'order', 'menu-level' => 0],
        'dripfeed'         => ['name' => 'dripfeed',        'icon' => 'fe fe-droplet',       'area_title' => false, 'route-name' => 'dripfeed', 'menu-level' => 1],
        'subscriptions'    => ['name' => 'Subscriptions',   'icon' => 'fe fe-thumbs-up',     'area_title' => false, 'route-name' => 'subscriptions', 'menu-level' => 1],
        'refill'           => ['name' => 'refill',          'icon' => 'fe fe-refresh-cw',     'area_title' => false, 'route-name' => 'refill', 'menu-level' => 1],
        'services'         => ['name' => 'Services',        'icon' => 'fa fa-list-ul',       'area_title' => false, 'route-name' => 'services', 'menu-level' => 1],
        'add_funds'        => ['name' => 'Add_funds',       'icon' => 'fa fa-file-text-o',   'area_title' => false, 'route-name' => 'add_funds', 'menu-level' => 0],
        'transactions'     => ['name' => 'Transaction_logs','icon' => 'fa fa-file-text-o',   'area_title' => false, 'route-name' => 'transactions', 'menu-level' => 0],
        'tickets'          => ['name' => 'Tickets',          'icon' => 'fa fa-comments-o',    'area_title' => false, 'route-name' => 'tickets', 'menu-level' => 1],
        'faq'              => ['name' => 'FAQs',            'icon' => 'fe fe-help-circle',   'area_title' => false, 'route-name' => 'faq', 'menu-level' => 1],
        'api'              => ['name' => 'API', 'icon' => 'fe fe-share-2',   'area_title' => false, 'route-name' => 'api/docs', 'menu-level' => 0],
        'affiliates'       => ['name' => 'Affiliates', 'icon' => 'fe fe-percent',   'area_title' => false, 'route-name' => 'affiliates', 'menu-level' => 0],
        'terms'            => ['name' => 'terms__conditions', 'icon' => 'fe fe-link',   'area_title' => false, 'route-name' => 'terms', 'menu-level' => 0],
    ],
    'admin' => [
        'general_area'     => ['name' => 'General',         'icon' => '',                    'area_title' => true,  'route-name' => '#'],
        'statistics'       => ['name' => 'Statistics',      'icon' => 'fa fa-bar-chart',     'area_title' => false, 'route-name' => 'statistics'],
        'service_area'     => ['name' => 'Service',         'icon' => '',                    'area_title' => true,  'route-name' => '#'],
        'order'            => ['name' => 'Orders',          'icon' => 'fe fe-shopping-cart', 'area_title' => false, 'route-name' => 'order'],
        'dripfeed'         => ['name' => 'Dripfeed',        'icon' => 'fe fe-droplet',       'area_title' => false, 'route-name' => 'dripfeed'],
        'subscriptions'    => ['name' => 'Subscriptions',   'icon' => 'fe fe-thumbs-up',     'area_title' => false, 'route-name' => 'subscriptions'],
        'refill'           => ['name' => 'Refill',          'icon' => 'fe fe-refresh-cw',    'area_title' => false, 'route-name' => 'refill'],
        'services'         => ['name' => 'Services',        'icon' => 'fa fa-list-ul',       'area_title' => false, 'route-name' => 'services'],
        'transactions'     => ['name' => 'Transaction logs','icon' => 'fa fa-file-text-o',   'area_title' => false, 'route-name' => 'transactions'],
        'category'         => ['name' => 'Category',        'icon' => 'fa fa-th-large',      'area_title' => false, 'route-name' => 'category'],
        'support_area'     => ['name' => 'Support Area',    'icon' => '',                    'area_title' => true,  'route-name' => '#'],
        'tickets'          => ['name' => 'Ticket',          'icon' => 'fa fa-comments-o',    'area_title' => false, 'route-name' => 'tickets'],
        'users_area'       => ['name' => 'Manage Users',    'icon' => '',                    'area_title' => true, 'route-name' => '#'],
        'users'            => ['name' => 'Users',           'icon' => 'fe fe-users',         'area_title' => false, 'route-name' => 'users'],
        'subscribers'      => ['name' => 'Subscribers',     'icon' => 'fe fe-user-plus',     'area_title' => false, 'route-name' => 'subscribers'],
        'users_activity'   => ['name' => 'User activity log', 'icon' => 'icon-fa fa fa-history', 'area_title' => false, 'route-name' => 'users_activity'],
        'users_banned_ip'  => ['name' => 'Banned IP',       'icon' => 'icon-fa fa fa-user-times', 'area_title' => false, 'route-name' => 'users_banned_ip'],
        'setting_area'     => ['name' => 'Settings',        'icon' => '',                    'area_title' => true,  'route-name' => '#'],
        'settings'         => ['name' => 'Settings',        'icon' => 'fe fe-settings',      'area_title' => false, 'route-name' => 'settings'],
        'provider'         => ['name' => 'Providers',    'icon' => 'fe fe-link',      'area_title' => false, 'route-name' => 'provider'],
        'payments'         => ['name' => 'Payments',        'icon' => 'fe fe-dollar-sign',   'area_title' => false, 'route-name' => 'payments'],
        'payments_bonuses' => ['name' => 'Payment Bonuses', 'icon' => 'fe fe-award',         'area_title' => false, 'route-name' => 'payments_bonuses'],
        'affiliates'       => ['name' => 'Affiliates',      'icon' => 'fe fe-percent',   'area_title' => false, 'route-name' => 'affiliates'],
        'plugins'          => ['name' => 'Modules',         'icon' => 'fe fe-award',         'area_title' => false, 'route-name' => 'plugins'],
        'news'             => ['name' => 'News',            'icon' => 'fe fe-bell',          'area_title' => false, 'route-name' => 'news'],
        'language'         => ['name' => 'Languages',       'icon' => 'fa fa-language',      'area_title' => false, 'route-name' => 'language'],
        'faqs'             => ['name' => 'FAQs',            'icon' => 'fe fe-help-circle',   'area_title' => false, 'route-name' => 'faqs'],
    ]
];

$config['template'] = [
    'form' => [
        'class_element'            => 'form-control',
        'class_element_checkbox'   => 'form-check-input',
        'class_element_editor'     => 'form-control plugin_editor',
        'class_element_datepicker' => 'form-control datepicker',
        'class_element_text_emoji' => 'form-control text-emoji',
    ],
    'datetime' => [
        'long' => 'Y-m-d H:i:s',
        'short' => 'Y-m-d',
    ],
    'news' => [
        'new_services'      => ['name' => 'New services',      'class' => 'btn-info'],
        'disabled_services' => ['name' => 'Disabled services', 'class' => 'btn-orange'],
        'updated_services'  => ['name' => 'Updated services',  'class' => 'btn-lime'],
        'announcement'      => ['name' => 'Announcement',      'class' => 'btn-primary'],
    ],
    'status' => [
        '1'      => ['name' => 'Active',   'class' => 'bg-indigo', 'class-badge' => 'bg-indigo-lt'],
        '0'      => ['name' => 'Deactive', 'class' => 'bg-orange', 'class-badge' => 'bg-orange-lt'],
        '2'      => ['name' => 'Unknow',   'class' => 'bg-orange', 'class-badge' => 'bg-orange-lt'],
        '3'      => ['name' => 'All',      'class' => 'bg-azure'],
    ],
    'tickets_status' => [
        'pending'     => ['name' => 'Pending',  'class' => 'bg-purple', 'class-badge' => 'bg-purple-lt'],
        'answered'    => ['name' => 'Answered', 'class' => 'bg-green',  'class-badge' => 'bg-secondary'],
        'closed'      => ['name' => 'Closed',   'class' => 'bg-indigo', 'class-badge' => 'bg-indigo-lt'],
    ], 
    'order_status' => [
        'all'             => ['name' => 'All',       'class' => 'bg-purple', 'class-badge' => 'bg-purple'],
        'active'          => ['name' => 'Active',       'class' => 'bg-purple', 'class-badge' => 'bg-green'],
        'completed'       => ['name' => 'Completed',    'class' => 'bg-green',  'class-badge' => 'bg-indigo'],
        'processing'      => ['name' => 'Processing',   'class' => 'bg-indigo', 'class-badge' => 'bg-blue'],
        'inprogress'      => ['name' => 'In progress',   'class' => 'bg-indigo', 'class-badge' => 'bg-cyan'],
        'pending'         => ['name' => 'Pending',      'class' => 'bg-indigo', 'class-badge' => 'bg-green'],
        'partial'         => ['name' => 'Partial',      'class' => 'bg-indigo', 'class-badge' => 'bg-pink'],
        'canceled'        => ['name' => 'Canceled',     'class' => 'bg-secondary', 'class-badge' => 'bg-secondary'],
        'error'           => ['name' => 'Error',        'class' => 'bg-red', 'class-badge' => 'bg-red'],
        'fail'            => ['name' => 'Fail',         'class' => 'bg-red', 'class-badge' => 'bg-red'],
        'paused'          => ['name' => 'Paused',     'class' => 'bg-red', 'class-badge' => 'bg-red'],
        'expired'         => ['name' => 'Expired',     'class' => 'bg-red', 'class-badge' => 'bg-red'],
        'awaiting'        => ['name' => 'Awaiting',     'class' => 'bg-lime', 'class-badge' => 'bg-lime'],
        'rejected'        => ['name' => 'Rejected',     'class' => 'bg-secondary', 'class-badge' => 'bg-secondary'],
        'refunded'        => ['name' => 'Refunded',     'class' => 'bg-indigo', 'class-badge' => 'bg-indigo'],
        'approved'        => ['name' => 'Approved',     'class' => 'bg-indigo', 'class-badge' => 'bg-indigo'],
    ], 
    'transactions_status' => [
        '-1'     => ['name' => 'Cancelled', 'class' => 'bg-red',    'class-badge' => 'bg-red'],
        '1'      => ['name' => 'Paid',      'class' => 'bg-indigo', 'class-badge' => 'bg-indigo-lt'],
        '0'      => ['name' => 'Waiting',   'class' => 'bg-orange', 'class-badge' => 'bg-orange-lt'],
        '2'      => ['name' => 'Unknow',    'class' => 'bg-orange', 'class-badge' => 'bg-orange-lt'],
        '3'      => ['name' => 'All',      'class' => 'bg-azure'],
    ],
    'button' => [
        'edit'         => ['name' => 'Edit',   'class' => 'ajaxModal',      'icon' => 'fe fe-edit', 'route-name' => '/update/'],
        'edit2'         => ['name' => 'Edit',   'class' => '',      'icon' => 'fe fe-edit', 'route-name' => '/update/'],
        'delete'       => ['name' => 'Delete', 'class' => 'ajaxDeleteItem', 'icon' => 'fe fe-trash-2', 'route-name' => '/delete/'],
        'delete_custom_rate' => ['name' => 'Delete custom rates', 'class' => 'ajaxDeleteItem', 'icon' => 'fe fe-trash', 'route-name' => '/delete_custom_rate/'],
        'view_user'    => ['name' => 'View User', 'class' => 'ajaxViewUser', 'icon' => 'fe fe-eye', 'route-name' => '/view_user/'],
        'view'         => ['name' => 'View', 'class' => 'ajaxModal', 'icon' => 'fe fe-eye', 'route-name' => '/view/'],
        'more_detail'  => ['name' => 'More detail', 'class' => 'ajaxModal', 'icon' => 'fe fe-help-circle', 'route-name' => '/info/'],
        'set_password'  => ['name' => 'Set Password', 'class' => 'ajaxModal', 'icon' => 'fe fe-lock', 'route-name' => '/set_password/'],
        'add_funds'     => ['name' => 'Add Funds', 'class' => 'ajaxModal', 'icon' => 'fe fe-dollar-sign', 'route-name' => '/add_funds/'],
        'set_balance'   => ['name' => 'Set balance', 'class' => 'ajaxModal', 'icon' => 'fe fe-credit-card', 'route-name' => '/edit_funds/'],
        'send_mail'     => ['name' => 'Send Mail', 'class' => 'ajaxModal', 'icon' => 'fe fe-mail', 'route-name' => '/mail/'],
        'balance'       => ['name' => 'Update balance', 'class' => 'ajaxUpdateApiProvider', 'icon' => 'fe fe-dollar-sign', 'route-name' => '/balance/'],
        'sync_services' => ['name' => 'Sync services', 'class' => 'ajaxModal', 'icon' => 'fe fe-refresh-cw', 'route-name' => '/sync_services/'],
        'services'      => ['name' => 'Services Lists', 'class' => '', 'icon' => 'fe fe-list', 'route-name' => '/services/'],
        'resend'        => ['name'  => 'Resend Order', 'class' => '', 'icon' => 'fe fe-refresh-cw', 'route-name' => '/resend/'],
    ],
    'bulk_action' => [
        'delete'   => ['name' => 'Delete', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-trash-2',      'route-name' => '/bulk_action/'],
        'empty'    => ['name' => 'Empty The Data', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-trash-2',      'route-name' => '/bulk_action/'],
        'delete_custom_rates'   => ['name' => 'Delete custom rates', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-trash',      'route-name' => '/bulk_action/'],
        'deactive' => ['name' => 'Deactive All', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-x-square',     'route-name' => '/bulk_action/'],
        'active'   => ['name' => 'Active', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-check-square', 'route-name' => '/bulk_action/'],
        'pending'  => ['name' => 'Mark as Pending',  'class' => 'ajaxActionOptions', 'icon' => 'fe fe-navigation',  'route-name' => '/bulk_action/'],
        'closed'   => ['name' => 'Mark as Closed',   'class' => 'ajaxActionOptions', 'icon' => 'fe fe-lock',        'route-name' => '/bulk_action/'],
        'answered' => ['name' => 'Mark as Answered', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-check',       'route-name' => '/bulk_action/'],
        'unread'   => ['name' => 'Mark as Unread', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-mail',       'route-name' => '/bulk_action/'],
        'csv'      => ['name' => 'Export CSV',   'class' => '', 'icon' => 'fe fe-download',  'route-name' => '/export/'],
        'excel'    => ['name' => 'Export excel', 'class' => '', 'icon' => 'fe fe-download',  'route-name' => '/export/'],
        'pending'      => ['name' => 'Pending', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-clock', 'route-name' => '/bulk_action/'],
        'inprogress'   => ['name' => 'In progress', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-loader', 'route-name' => '/bulk_action/'],
        'completed'    => ['name' => 'Completed', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-check-square', 'route-name' => '/bulk_action/'],
        'resend'       => ['name' => 'Resend Order', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-refresh-cw', 'route-name' => '/bulk_action/'],
        'cancel'       => ['name' => 'Cancel and Refund', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-x', 'route-name' => '/bulk_action/'],
        'rejected'     => ['name' => 'Rejected', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-x', 'route-name' => '/bulk_action/'],
        'paused'       => ['name' => 'Paused', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-alert-triangle', 'route-name' => '/bulk_action/'],
        'copy_id'      => ['name' => 'Copy to Clipboard (ID)', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-copy', 'route-name' => '/bulk_action/'],
        'copy_order_id' => ['name' => 'Copy to Clipboard (Order ID)', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-copy', 'route-name' => '/bulk_action/'],
        'copy_api_order_id' => ['name' => 'Copy to Clipboard (API Order ID)', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-copy', 'route-name' => '/bulk_action/'],
        'copy_api_refill_id' => ['name' => 'Copy to Clipboard (API Refill ID)', 'class' => 'ajaxActionOptions', 'icon' => 'fe fe-copy', 'route-name' => '/bulk_action/'],
    ],
    'search_field' => [
        'all'           => ['name' => 'All'],
        'id'            => ['name' => 'ID'],
        'email'         => ['name' => 'Email'],
        'name'          => ['name' => 'Name'],
        'order_id'      => ['name' => 'Order ID'],
        'sort'          => ['name' => 'Sort'],
        'question'      => ['name' => 'Question'],
        'answer'        => ['name' => 'Answer'],
        'description'    => ['name' => 'Description'],
        'ip'             => ['name' => 'IP address'],
        'history_ip'     => ['name' => 'History ip'],
        'country'        => ['name' => 'Location'],
        'first_name'     => ['name' => 'First name'],
        'last_name'      => ['name' => 'Last name'],
        'username'      => ['name'  => 'Username'],
        'transaction_id' => ['name' => 'Transaction id'],
        'note'           => ['name' => 'Note'],
        'subject'        => ['name' => 'Subject'],
        'api_service_id' => ['name' => 'API service id'],
        'api_order_id'   => ['name' => 'API Order id'],
        'service_id'     => ['name' => 'Service id'],
        'link'           => ['name' => 'Link'],
    ],
    'service_type' => [
        'default'                 => 'Default',
        'subscriptions'           => 'Subscriptions',
        'custom_comments'         => 'Custom comments',
        'custom_comments_package' => 'Custom comments package',
        'mentions_with_hashtags'  => 'Mentions with hashtags',
        'mentions_custom_list'    => 'Mentions custom list',
        'mentions_hashtag'        => 'Mentions hashtag',
        'mentions_user_followers' => 'Mentions user followers',
        'mentions_media_likers'   => 'Mentions media likers',
        'package'                 => 'Package',
        'comment_likes'           => 'Comment likes',
    ]
];

$config['config'] = [
    'button' => [
        'default'          => ['edit', 'delete'],
        'language'         => ['edit2', 'delete'],
        'order'            => ['edit', 'resend' ,'delete'],
        'news'             => ['edit', 'view' ,'delete'],
        'dripfeed'         => ['edit', 'resend' ,'delete'],
        'subscriptions'    => ['edit', 'resend' ,'delete'],
        'tickets'          => ['delete'],
        'category'         => ['edit', 'delete'],
        'services'         => ['edit', 'delete_custom_rate', 'delete'],
        'payments'         => ['edit'],
        'payments_bonuses' => ['edit', 'delete'],
        'provider'         => ['edit', 'balance', 'sync_services', 'services','delete'],
        'subscribers'      => ['delete', 'send_mail'],
        'users'            => ['edit', 'view_user', 'add_funds', 'set_password', 'send_mail', 'more_detail', 'delete',],
        'users_banned_ip'  => ['edit', 'delete'],
        'refill'           => ['view'],
    ],
    'status' => [
        'default'  => [
            '0' => 'inactive', 
            '1' => 'active'
        ],
        'transactions'  => [
            '-1' => 'waiting', 
            '0' => 'pending', 
            '1' => 'paid'
        ],
        'tickets'  => [
            'pending'   => 'pending', 
            'answered'  => 'answered', 
            'closed'    => 'closed'
        ],
        'order'          => ['all', 'processing', 'inprogress', 'pending', 'completed', 'partial', 'canceled', 'error', 'fail'],
        'dripfeed'       => ['all', 'active', 'completed',  'canceled'],
        'subscriptions'  => ['all', 'active', 'paused', 'expired', 'completed', 'error'],
        'refill'         => ['all', 'pending', 'awaiting', 'inprogress', 'rejected', 'completed'],
    ],

    'search' => [
        'default'         => ['all', 'name'],
        'category'        => ['name'],
        'transactions'    => ['transaction_id', 'email', 'note'],
        'payments'        => ['name'],
        'faqs'            => ['question', 'answer'],
        'news'            => ['description'],
        'subscribers'     => ['email', 'ip', 'country'],
        'users'           => ['email', 'first_name', 'last_name', 'history_ip'],
        'users_activity'  => ['email', 'first_name', 'last_name', 'ip'],
        'users_banned_ip' => ['ip', 'description'],
        'tickets'         => ['id', 'email', 'subject'],
        'services'        => [ 'all', 'id', 'name', 'api_service_id'],
        'provider'        => [ 'name'],
        'order'           => [ 'id', 'api_order_id', 'link', 'email', 'service_id'],
        'dripfeed'        => [ 'id', 'api_order_id', 'link', 'email'],
        'subscriptions'   => [ 'id', 'api_order_id', 'username', 'email'],
        'refill'          => [ 'id', 'order_id', 'link', 'email'],
        'affiliates'      => [ 'email'],
    ],
    'bulk_action' => [
        'default'          => ['active', 'deactive', 'delete'],
        'services'         => ['active', 'deactive', 'delete_custom_rates', 'delete'],
        'tickets'          => ['pending', 'answered', 'unread', 'closed', 'delete'],
        'category'         => ['active', 'deactive', 'delete'],
        'payments'         => ['active', 'deactive'],
        'payments_bonuses' => ['active', 'deactive'],
        'users'            => ['active', 'deactive', 'csv', 'excel', 'delete'],
        'users_activity'   => ['delete', 'empty'],
        'users_banned_ip'  => ['delete', 'empty'],
        'subscribers'      => ['csv', 'excel', 'delete'],
        'transactions'     => [],
        'order'            => ['pending', 'inprogress', 'completed', 'resend', 'cancel', 'copy_id', 'copy_api_order_id'],
        'dripfeed'         => ['completed', 'cancel'],
        'refill'           => ['completed', 'rejected', 'copy_order_id', 'copy_api_order_id', 'copy_api_refill_id'],
        'subscriptions'    => ['active', 'completed', 'paused', 'cancel'],
    ],
];