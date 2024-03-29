<?php

return array(
    'attributes'=>array(
        'class'=>'well',
    ),
    'elements'=>array(
        'short_text'=>array(
            'type'=>'textarea',
            'attributes'=>array(
                'class'=>'span8',
                'rows'=>5,
            ),
        ),
        'text'=>array(
            'type'=>\Siix::module('base')->textEditor,
            'hint'=>'Клавиша <strong>Enter</strong> создает новый абзац.<br />Чтобы просто перейти на новую строку, используйте сочетание клавиш <strong>Shift+Enter</strong>.',
            'htmlOptions'=>array(
                'style'=>'width: 100%; height: 350px;',
            ),
        ),
        'page'=>array(
            'type'=>'form',
            'elements'=>array(
                'title'=>array(
                    'type'=>'text',
                    'maxlength'=>255,
                    'attributes'=>array(
                        'class'=>'span6',
                    ),
                ),
                'publish'=>array(
                    'type'=>'checkbox',
                ),
                'publish_time'=>array(
                    'type'=>'\sii\web\widgets\timepicker\TimePicker',
                    'options'=>array(
                        'dateFormat'=>'yy-mm-dd',
                        'showAnim'=>'slideDown',
                    ),
                    'htmlOptions'=>array(
                        'class'=>'span2',
                    ),
                ),
                'seo'=>array(
                    'type'=>'form',
                    'visible'=>user()->checkAccess('seo'),
                    'skipEmpty'=>true,
                    'elements'=>array(
                        'title'=>array(
                            'type'=>'text',
                            'maxlength'=>255,
                            'attributes'=>array(
                                'class'=>'span6',
                            ),
                        ),
                        'description'=>array(
                            'type'=>'text',
                            'attributes'=>array(
                                'class'=>'span6',
                            ),
                        ),
                        'keywords'=>array(
                            'type'=>'text',
                            'hint'=>'Теги страницы через запятую.',
                            'attributes'=>array(
                                'class'=>'span6',
                            ),
                        ),
                        'header'=>array(
                            'type'=>'text',
                            'maxlength'=>255,
                            'attributes'=>array(
                                'class'=>'span6',
                            ),
                        ),
                    ),
                ),
                'url'=>array(
                    'type'=>'form',
                    'skipEmpty'=>true,
                    'elements'=>array(
                        'slug'=>array(
                            'type'=>'text',
                            'maxlength'=>100,
                            'attributes'=>array(
                                'class'=>'span6',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'buttons'=>array(
        'save'=>array(
            'type'=>'submit',
            'label'=>'Сохранить',
            'attributes'=>array(
                'class'=>'btn btn-large',
            ),
        ),
    ),
);