<?php
/*
Title: Thông tin sản phẩm
Post Type: sanpham
*/
/**
 * Tạo box nhập giá sản phẩm
 * https://piklist.com/learn/doc/text/
 */
piklist('field', array(
    'type' => 'text',
    'field' => 'sanpham_price',
    'label' => 'Giá sản phẩm',
    'description' => 'Nhập giá của sản phẩm này',
    'help' => 'Nhập chữ hoặc số và giá trị này sẽ hiển thị ra bên ngoài website',
    'attributes' => array(
        'class' => 'sanpham_price text'
    )
));
/**
 * Tạo field nhập thuộc tính sản phẩm
 * đây là field kiểu `group`
 * /wp-content/plugins/piklist/add-ons/piklist-demos/parts/meta-boxes/field-add-more-single-level.php
 */
piklist('field', array(
        'type' => 'group',
        'label' => 'Thuộc tính sản phẩm',
        'add_more' => true,
        'field' => 'sanpham_attributes',
        'fields' => array(
            array(
                'type' => 'text',
                'field' => 'sanpham_att_name',
                'label' => 'Thuộc tính',
                'help' => 'Tên thuộc tính sản phẩm là một đoạn chữ miêu tả một thuộc tính đặc biệt của sản phẩm. Ví dụ: Hệ điều hành, Đời máy,...',
                'columns' => 6
            ),
            array(
                'type' => 'text',
                'field' => 'sanpham_att_value',
                'label' => 'Giá trị thuộc tính',
                'help' => 'Hãy nhập giá trị thuộc tính tương ứng với tên thuộc tính tương ứng.',
                'columns' => 6
            )
        )
    )
);
?>