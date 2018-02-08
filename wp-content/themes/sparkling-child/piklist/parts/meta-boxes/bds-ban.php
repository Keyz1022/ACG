<?php
/*
Title: Thông tin Bất động sản
Single post
*/
piklist('field', array(
        'type' => 'group',
        'label' => 'Thông tin bất động sản',
        'add_more' => true,
        'field' => 'bds_ban_info',
        'fields' => array(
            array(
                'type' => 'text',
                'field' => 'name',
                'label' => 'Thông tin',
                'help' => 'Tên thông tin bất động sản là một đoạn chữ miêu tả một thông tin đặc biệt của bất động sản. Ví dụ: Địa chỉ, Khu vực, Diện tích,...',
                'columns' => 6
            ),
            array(
                'type' => 'text',
                'field' => 'value',
                'label' => 'Chi tiết thông tin',
                'help' => 'Hãy nhập thông tin chi tiết tương ứng với tên thông tin tương ứng.',
                'columns' => 6
            )
        )
    )
);