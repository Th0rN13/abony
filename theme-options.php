<?php 
/* Custom Settings Page Settings Page */
class wph_custom_Settings_Page {
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'wph_create_settings' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_sections' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_fields' ) );
	}
	public function wph_create_settings() {
		$page_title = 'Настройки сайта';
		$menu_title = 'Настройки сайта';
		$capability = 'manage_options';
		$slug = 'wph_custom';
		$callback = array($this, 'wph_settings_content');
		$icon = 'dashicons-admin-settings';
		$position = 2;
		add_menu_page($page_title, $menu_title, $capability, $slug, $callback, $icon, $position);
	}
	public function wph_settings_content() { ?>
		<div class="wrap">
			<h1>Настройки сайта</h1>
			<?php settings_errors(); ?>
			<form method="POST" action="options.php">
				<?php
					settings_fields( 'wph_custom' );
					do_settings_sections( 'wph_custom' );
					submit_button();
				?>
			</form>
		</div> <?php
	}
	public function wph_setup_sections() {
		add_settings_section( 'wph_custom_section', '', array(), 'wph_custom' );
	}
	public function wph_setup_fields() {
		$fields = array(
			array(
				'label' => 'Город 1',
				'id' => 'city1',
				'type' => 'text',
				'section' => 'wph_custom_section',
			),
			array(
				'label' => 'Телефон 1',
				'id' => 'phone1',
				'type' => 'tel',
				'section' => 'wph_custom_section',
			),
			array(
				'label' => 'Город 2',
				'id' => 'city2',
				'type' => 'text',
				'section' => 'wph_custom_section',
			),
			array(
				'label' => 'Телефон 2',
				'id' => 'phone2',
				'type' => 'tel',
				'section' => 'wph_custom_section',
			),
			array(
				'label' => 'Телефон 8-800',
				'id' => 'phone-common',
				'type' => 'tel',
				'section' => 'wph_custom_section',
			),
			array(
				'label' => 'E-mail',
				'id' => 'email',
				'type' => 'email',
				'section' => 'wph_custom_section',
			),
			array(
				'label' => 'Стандартный текст для Выполненных работ',
				'id' => 'std-line',
				'type' => 'text',
				'section' => 'wph_custom_section',
			),
		);
		foreach( $fields as $field ){
			add_settings_field( $field['id'], $field['label'], array( $this, 'wph_field_callback' ), 'wph_custom', $field['section'], $field );
			register_setting( 'wph_custom', $field['id'] );
		}
	}
	public function wph_field_callback( $field ) {
		$value = get_option( $field['id'] );
		switch ( $field['type'] ) {
			default:
				printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />',
					$field['id'],
					$field['type'],
					$field['placeholder'],
					$value
				);
		}
		if( $desc = $field['desc'] ) {
			printf( '<p class="description">%s </p>', $desc );
		}
	}
}
new wph_custom_Settings_Page();
