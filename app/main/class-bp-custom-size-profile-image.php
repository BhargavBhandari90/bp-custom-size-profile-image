<?php
/**
 * Exit if accessed directly
 *
 * @package Bp_Custom_Size_Profile_Image
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Bp_Custom_Size_Profile_Image' ) ) {

	/**
	 * Class for Ventures methods.
	 *
	 * @package GCA_Core
	 */
	class Bp_Custom_Size_Profile_Image {

		/**
		 * Cunstructor for admin class.
		 */
		public function __construct() {

			add_filter( 'bp_core_pre_avatar_handle_crop', array( $this, 'bpcpis_generate_custom_size_user_image' ) );

		}

		public function bpcpis_generate_custom_size_user_image() {
			echo esc_html__( 'test', 'bp-custom-size-profile-image' );
		}

	}

	new Bp_Custom_Size_Profile_Image();

}
