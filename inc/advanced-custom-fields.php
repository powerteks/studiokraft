<?php
if ( function_exists( 'acf_add_local_field_group' ) ):

    acf_add_local_field_group( array(
        'key'                   => 'group_5e78f53e9dd6d',
        'title'                 => 'Контакты',
        'fields'                => array(
            array(
                'key'               => 'field_5e78f5b5140b5',
                'label'             => 'Социальная группа 1',
                'name'              => 'social-1',
                'type'              => 'text',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => 'WhatsApp: +7 (123) 456-78-90',
                'placeholder'       => '',
                'prepend'           => '',
                'append'            => '',
                'maxlength'         => '',
            ),
            array(
                'key'               => 'field_5e78f688140b6',
                'label'             => 'Социальная группа 2',
                'name'              => 'social-2',
                'type'              => 'text',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => 'Telegram: @studioKraft',
                'placeholder'       => '',
                'prepend'           => '',
                'append'            => '',
                'maxlength'         => '',
            ),
            array(
                'key'               => 'field_5e78f753140b7',
                'label'             => 'Социальная группа 3',
                'name'              => 'social-3',
                'type'              => 'text',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => 'Instagram: #studiokraft',
                'placeholder'       => '',
                'prepend'           => '',
                'append'            => '',
                'maxlength'         => '',
            ),
            array(
                'key'               => 'field_5e78f79a140b8',
                'label'             => 'Дополнительно',
                'name'              => 'additionally',
                'type'              => 'textarea',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => 'Мы будем очень благодарны, если вы будете подписывать и отмечать нас в своих съемках и соцсетях.
@studiokraft.ru
#studiokraft
#студиякрафт
#фотостудиякрафт',
                'placeholder'       => '',
                'maxlength'         => '',
                'rows'              => '',
                'new_lines'         => 'br',
            ),
            array(
                'key'               => 'field_5e79020390640',
                'label'             => 'Карта Яндекс',
                'name'              => 'map_yandex',
                'type'              => 'text',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => '',
                'placeholder'       => '',
                'prepend'           => '',
                'append'            => '',
                'maxlength'         => '',
            ),
            array(
                'key'               => 'field_5e790438adffc',
                'label'             => 'Как пройти?',
                'name'              => 'navigation',
                'type'              => 'textarea',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => '',
                'placeholder'       => '',
                'maxlength'         => '',
                'rows'              => '',
                'new_lines'         => 'br',
            ),
            array(
                'key'               => 'field_5e79048eadffd',
                'label'             => 'Видео',
                'name'              => 'video',
                'type'              => 'oembed',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'width'             => '',
                'height'            => '',
            ),
            array(
                'key'               => 'field_5e7904cbadffe',
                'label'             => 'Внимание',
                'name'              => 'attention',
                'type'              => 'textarea',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => '',
                'placeholder'       => '',
                'maxlength'         => '',
                'rows'              => '',
                'new_lines'         => '',
            ),
        ),
        'location'              => array(
            array(
                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => '18',
                ),
            ),
        ),
        'menu_order'            => 1,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => array(
            0 => 'the_content',
        ),
        'active'                => TRUE,
        'description'           => '',
    ) );

endif;