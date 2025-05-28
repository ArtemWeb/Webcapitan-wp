<?php
/**
 * Acf fallback functions, in case if ACF plugin is not installed.
 */

// phpcs:ignoreFile
function get_field_reference( $field_name, $post_id ) { return ''; }
function get_field_objects( $post_id = false, $options = array() ) { return false; }
function get_fields( $post_id = false ) { return false; }
function get_field( $field_key, $post_id = false, $format_value = true )  { return false; }
function get_field_object( $field_key, $post_id = false, $options = array() ) { return false; }
function the_field( $field_name, $post_id = false ) {}
function have_rows( $field_name, $post_id = false ) { return false; }
function the_row() {}
function reset_rows( $hard_reset = false ) {}
function has_sub_field( $field_name, $post_id = false ) { return false; }
function get_sub_field( $field_name ) { return false; }
function the_sub_field( $field_name ) {}
function get_sub_field_object( $child_name ) { return false;}
function acf_get_child_field_from_parent_field( $child_name, $parent ) { return false; }
function register_field_group( $array ) {}
function get_row_layout() { return false; }
function acf_form_head() {}
function acf_form( $options = array() ) {}
function update_field( $field_key, $value, $post_id = false ) { return false; }
function delete_field( $field_name, $post_id ) {}
function create_field( $field ) {}
function reset_the_repeater_field() {}
function the_repeater_field( $field_name, $post_id = false ) { return false; }
function the_flexible_field( $field_name, $post_id = false ) { return false; }
function acf_filter_post_id( $post_id ) { return $post_id; }
