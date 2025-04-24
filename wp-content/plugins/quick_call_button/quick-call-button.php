<?php
/*
Plugin Name: Quick Call Button
Description: Hiển thị nút gọi nhanh qua Messenger hoặc Zalo trên trang web với tùy chọn bật/tắt từng kênh chat.
Version: 1.0
Author: PLinh
*/

if (!defined('ABSPATH')) {
    exit; // Ngăn truy cập trực tiếp
}

// Hàm hiển thị nút gọi nhanh
function qcb_display_call_button() {
    $phone = get_option('qcb_phone', '0359053910'); // Số điện thoại Zalo
    $messenger_link = get_option('qcb_messenger_link', 'https://web.facebook.com/messages/t/130490668411577'); // Liên kết Messenger
    $sale_link = get_option('qcb_sale_link', 'http://localhost/Louisa/index.php/khuyen-mai/?v=5e9c52c6d618'); // Liên kết Sale
    $label = get_option('qcb_label', 'Gọi ngay');   // Nội dung nút
    $bg_color_messenger = '#0084ff'; // Màu nền Messenger
    $bg_color_zalo = '#00a1ff'; // Màu nền Zalo
    $bg_color_sale = 'orange'; // Màu nền Sale
    
    $text_color = get_option('qcb_text_color', '#ffffff'); // Màu chữ
    $show_messenger = get_option('qcb_show_messenger', '1'); // Bật/Tắt Messenger
    $show_zalo = get_option('qcb_show_zalo', '1'); // Bật/Tắt Zalo
    $show_sale = get_option('qcb_show_sale', '1'); // Bật/Tắt Sale

    $html = '<div class="quick-call-button" style="position: fixed; bottom: 20px; right: 20px; display: flex; flex-direction: column; gap: 10px; z-index: 1000;">';

 // Nút Messenger
if ($show_messenger === '1') {
    $html .= '<a href="' . esc_url($messenger_link) . '" class="quick-call-link" style="background-color: ' . esc_attr($bg_color_messenger) . '; color: ' . esc_attr($text_color) . '; padding: 10px 20px; text-decoration: none; border-radius: 100%; font-size: 40px; display: inline-flex; align-items: center; gap: 10px; border: 5px solid transparent; animation: blink 1s infinite;">';
    $html .= '<i class="fab fa-facebook-messenger"></i>'; // Icon Messenger
    $html .= '</a>';
}

// Thêm CSS cho hiệu ứng nhấp nháy
echo '<style>
@keyframes blink {
    0%, 100% {
        border-color: transparent;
    }
    50% {
        border-color: blue; /* Thay đổi màu sắc viền nếu cần */
    }
}
</style>';

    // Nút Zalo
    if ($show_zalo === '1') {
    $html .= '<a href="https://zalo.me/' . esc_attr($phone) . '" class="quick-call-link" style="background-color: ' . esc_attr($bg_color_zalo) . '; color: ' . esc_attr($text_color) . '; padding: 10px 20px; text-decoration: none; border-radius: 100%; font-size: 40px; display: inline-flex; align-items: center; gap: 10px; border: 5px solid transparent; animation: blink 1s infinite;">';
    $html .= '<img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Icon_of_Zalo.svg" alt="Zalo" style="width: 40px; height: 40px;">'; // Biểu tượng Zalo
    $html .= '</a>';
}

// Thêm CSS cho hiệu ứng nhấp nháy
echo '<style>
@keyframes blink {
    0%, 100% {
        border-color: transparent;
    }
    50% {
        border-color: green; /* Thay đổi màu sắc viền phù hợp với Zalo */
    }
}
</style>';

// Nút khuyến mãi
if ($show_sale === '1') {
    $html .= '<a href="http://localhost/Louisa/index.php/khuyen-mai/?v=5e9c52c6d618" class="sale-button" style="background-color: ' . esc_attr($bg_color_sale) . '; color: ' . esc_attr($text_color) . '; padding: 10px 20px; text-decoration: none; border-radius: 60%; font-size: 18px; display: flex; flex-direction: column; align-items: center; position: fixed; top: 50%; left: 20px; transform: translateY(-50%); border: 5px solid transparent; animation: blink 1s infinite;">';
    $html .= '<img src="https://wintelglobal.vn/wp-content/uploads/2023/02/Frame-35.png" alt="" style="width: 120px; height: 100px; animation: move 1s infinite;">'; // Thêm hiệu ứng chuyển động
    $html .= '<span>Khuyến mãi</span>'; // Đặt chữ bên dưới ảnh
    $html .= '</a>';
}

// Thêm CSS cho hiệu ứng nhấp nháy và chuyển động
echo '<style>
@keyframes blink {
    0%, 100% {
        border-color: transparent;
    }
    50% {
        border-color: yellow; /* Thay đổi màu sắc viền nếu cần */
    }
}

@keyframes move {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-5px); /* Di chuyển lên 5px */
    }
    100% {
        transform: translateY(0);
    }
}
</style>';

$html .= '</div>';

echo $html; // Hiển thị nút
}

// Thêm nút gọi vào footer
add_action('wp_footer', 'qcb_display_call_button');

// Đăng ký Font Awesome
add_action('wp_enqueue_scripts', 'qcb_enqueue_font_awesome');
function qcb_enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}

// Thêm menu cài đặt vào WordPress Admin
add_action('admin_menu', 'qcb_add_settings_menu');
function qcb_add_settings_menu() {
    add_menu_page(
        'Quick Call Settings',        // Tiêu đề trang
        'Quick Call',                 // Tên menu
        'manage_options',             // Quyền truy cập
        'quick-call-settings',        // Slug trang
        'qcb_settings_page',          // Hàm hiển thị nội dung
        'dashicons-phone',            // Icon menu
        100                           // Vị trí menu
    );
}

// Hàm hiển thị nội dung trang cài đặt
function qcb_settings_page() {
    ?>
    <div class="wrap">
        <h1>Cài đặt Nút Gọi Nhanh</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('qcb_settings_group');
            do_settings_sections('quick-call-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Đăng ký cài đặt
add_action('admin_init', 'qcb_register_settings');
function qcb_register_settings() {
    register_setting('qcb_settings_group', 'qcb_phone');
    register_setting('qcb_settings_group', 'qcb_label');
    register_setting('qcb_settings_group', 'qcb_bg_color');
    register_setting('qcb_settings_group', 'qcb_text_color');
    register_setting('qcb_settings_group', 'qcb_messenger_link');
    register_setting('qcb_settings_group', 'qcb_sale_link');
    register_setting('qcb_settings_group', 'qcb_show_messenger');
    register_setting('qcb_settings_group', 'qcb_show_zalo');
    register_setting('qcb_settings_group', 'qcb_show_sale');
    

    add_settings_section(
        'qcb_settings_section',
        'Cấu hình Nút Gọi',
        'qcb_settings_section_callback',
        'quick-call-settings'
    );

    add_settings_field(
        'qcb_phone',
        'Số điện thoại Zalo',
        'qcb_phone_callback',
        'quick-call-settings',
        'qcb_settings_section'
    );

    add_settings_field(
        'qcb_label',
        'Nội dung nút',
        'qcb_label_callback',
        'quick-call-settings',
        'qcb_settings_section'
    );

    add_settings_field(
        'qcb_bg_color',
        'Màu nền',
        'qcb_bg_color_callback',
        'quick-call-settings',
        'qcb_settings_section'
    );

    add_settings_field(
        'qcb_text_color',
        'Màu chữ',
        'qcb_text_color_callback',
        'quick-call-settings',
        'qcb_settings_section'
    );

    add_settings_field(
        'qcb_messenger_link',
        'Liên kết Messenger',
        'qcb_messenger_callback',
        'quick-call-settings',
        'qcb_settings_section'
    );

    add_settings_field(
        'qcb_show_messenger',
        'Hiện nút Messenger',
        'qcb_show_messenger_callback',
        'quick-call-settings',
        'qcb_settings_section'
    );

    add_settings_field(
        'qcb_show_zalo',
        'Hiện nút Zalo',
        'qcb_show_zalo_callback',
        'quick-call-settings',
        'qcb_settings_section'
    );

    add_settings_field(
        'qcb_sale_link',
        'Liên kết sale',
        'qcb_sale_link_callback',
        'quick-call-settings',
        'qcb_settings_section'
    );
    
    add_settings_field(
        'qcb_show_sale',
        'Hiện nút Sale',
        'qcb_show_sale_callback',
        'quick-call-settings',
        'qcb_settings_section'
    );
}

// Callback cho phần cài đặt
function qcb_settings_section_callback() {
    echo '<p>Cấu hình các tùy chọn cho nút gọi nhanh.</p>';
}

// Callback cho các trường cài đặt
function qcb_phone_callback() {
    $value = get_option('qcb_phone', '0123456789');
    echo '<input type="text" name="qcb_phone" value="' . esc_attr($value) . '" class="regular-text">';
}

function qcb_label_callback() {
    $value = get_option('qcb_label', 'Gọi ngay');
    echo '<input type="text" name="qcb_label" value="' . esc_attr($value) . '" class="regular-text">';
}

function qcb_bg_color_callback() {
    $value = get_option('qcb_bg_color', '#28a745');
    echo '<input type="color" name="qcb_bg_color" value="' . esc_attr($value) . '">';
}

function qcb_text_color_callback() {
    $value = get_option('qcb_text_color', '#ffffff');
    echo '<input type="color" name="qcb_text_color" value="' . esc_attr($value) . '">';
}

function qcb_messenger_callback() {
    $value = get_option('qcb_messenger_link', 'https://m.me/your_messenger_link');
    echo '<input type="text" name="qcb_messenger_link" value="' . esc_attr($value) . '" class="regular-text">';
}

function qcb_show_messenger_callback() {
    $checked = get_option('qcb_show_messenger', '1') === '1' ? 'checked' : '';
    echo '<input type="checkbox" name="qcb_show_messenger" value="1" ' . $checked . '> Hiện nút Messenger';
}

function qcb_show_zalo_callback() {
    $checked = get_option('qcb_show_zalo', '1') === '1' ? 'checked' : '';
    echo '<input type="checkbox" name="qcb_show_zalo" value="1" ' . $checked . '> Hiện nút Zalo';
}

function qcb_sale_link_callback() {
    $value = get_option('qcb_sale_link', 'http://localhost/Louisa/index.php/khuyen-mai/?v=5e9c52c6d618');
    echo '<input type="text" name="qcb_sale_link" value="' . esc_attr($value) . '" class="regular-text">';
}

function qcb_show_sale_callback() {
    $checked = get_option('qcb_show_sale', '1') === '1' ? 'checked' : '';
    echo '<input type="checkbox" name="qcb_show_sale" value="1" ' . $checked . '> Hiện nút Sale';
}