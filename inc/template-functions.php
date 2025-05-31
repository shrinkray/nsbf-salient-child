<?php
/**
 * Template functions for NSBF theme
 *
 * @package NSBF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Custom template part loader with fallback support
 *
 * @param string $template_path Path to the template part
 * @param string $fallback_path Path to the fallback template
 * @param array  $args          Additional arguments to pass to the template
 */
function nsbf_get_template_part( $template_path, $fallback_path = '', $args = array() ) {
    // Set up any variables we want to have available in the template
    if ( is_array( $args ) ) {
        extract( $args );
    }

    // Try WordPress template part first
    if ( locate_template( $template_path . '.php' ) ) {
        get_template_part( $template_path );
        return;
    }

    // Fallback to direct include if specified
    if ( ! empty( $fallback_path ) && file_exists( get_template_directory() . '/' . $fallback_path ) ) {
        require_once get_template_directory() . '/' . $fallback_path;
        return;
    }

    // Log error if no template found
    if ( WP_DEBUG ) {
        error_log( sprintf( 'Template not found: %s (Fallback: %s)', $template_path, $fallback_path ) );
    }
}

/**
 * Check if a template part exists
 *
 * @param string $template_path Path to the template part
 * @return boolean
 */
function nsbf_template_part_exists( $template_path ) {
    return (bool) locate_template( $template_path . '.php' );
}

/**
 * Get template part with state-specific variation
 *
 * @param string $template_path Base template path
 * @param string $state         State-specific variation
 * @param string $fallback_path Fallback template path
 */
function nsbf_get_state_template_part( $template_path, $state = '', $fallback_path = '' ) {
    // Try state-specific variation first
    if ( ! empty( $state ) ) {
        $state_template = $template_path . '-' . $state;
        if ( nsbf_template_part_exists( $state_template ) ) {
            get_template_part( $state_template );
            return;
        }
    }

    // Fall back to base template
    nsbf_get_template_part( $template_path, $fallback_path );
} 