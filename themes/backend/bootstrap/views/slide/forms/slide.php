<?php

return array(
    'attributes'=>array(
        'class'=>'well',
        'enctype'=>'multipart/form-data',
    ),
    'elements'=>array(
        'title'=>array(
            'type'=>'text',
            'maxlength'=>100,
            'attributes'=>array(
                'class'=>'span6',
            ),
        ),
        'description'=>array(
            'type'=>'textarea',
            'attributes'=>array(
                'class'=>'span8',
                'rows'=>5,
            ),
        ),
        'file'=>array(
            'type'=>'file',
            'visible'=>true,
        ),
        'orderPosition'=>array(
            'type'=>'\sii\web\widgets\PositionSelector',
            'titleField'=>'title',
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