<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
    'debug' => true,
    'pedroborges.meta-tags.default' => function ($page, $site) {
        return [
            'title' => empty($page->headline()) 
                       ? $page->title() : $page->headline(),
            'meta' => [
                'description' => empty($page->description()) 
                                 ? $site->description() : $page->description(),
                'robot' => $page->IsIndex()
                                  ? 'noindex,nofollow' : 'index,follow'

            ],
            'og' => [
                'title' => $page->isHomePage()
                    ? $site->title()
                    : $page->title(),
                'type' => 'website',
                'url' => $page->url(),
                'description' => empty($page->description()) 
                                 ? $site->description() : $page->description(),
                'image' => $site->url() . '/assets/logo.png'
            ],
           'twitter' => [
                'card' => 'summary',
                'site' => '@' . $site->url(),
                'description' => empty($page->description()) 
                                 ? $site->description() : $page->description(),
                'image' => $site->url() . '/assets/logo.png',
                'creator' => '@bemoacademicsconsulting'
           ]
        ];
    }
];
