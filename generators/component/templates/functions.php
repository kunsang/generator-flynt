<?php

namespace Flynt\Components\<%= nameUpperCamelCase %>;

use Flynt\FieldVariables;
use Flynt\Utils\Options;

add_filter('Flynt/addComponentData?name=<%= nameUpperCamelCase %>', function (array $data): array {
    return $data;
});

function getACFLayout(): array
{
    return [
        'name' => '<%= nameLowerCamelCase %>',
        'label' => __('<%= namePrettySplit %>', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    FieldVariables\getAdminTitle(),
                    FieldVariables\getTheme()
                ],
            ],
        ]
    ];
}

Options::addTranslatable('<%= nameUpperCamelCase %>', [

]);

Options::addGlobal('<%= nameUpperCamelCase %>', [

]);
