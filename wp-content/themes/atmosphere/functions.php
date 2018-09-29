<?php

function my_more_options()
{
  // Site name option
  add_settings_field('site_name', 'Site name', 'display_site_name', 'general');
  register_setting('general', 'my_site_name');

  // Logo option
  add_settings_field('site_logo', 'Site logo', 'display_site_logo', 'general');
  register_setting('general', 'my_site_logo');

  // mail option
  add_settings_field('site_mail', 'Email', 'display_site_mail', 'general');
  register_setting('general', 'my_site_mail');

  // phone option
  add_settings_field('site_phone', 'Phone', 'display_site_phone', 'general');
  register_setting('general', 'my_site_phone');

  // rules_link option
  add_settings_field('site_rules_link', 'Rules link', 'display_site_rules_link', 'general');
  register_setting('general', 'my_site_rules_link');
}
add_action('admin_init', 'my_more_options');

function display_site_name(){
  echo "<input type='text' class='regular-text' name='my_site_name' value='" . esc_attr(get_option('my_site_name')) . "'>";
}

function display_site_logo(){
  echo "<input type='text' class='regular-text' name='my_site_logo' value='" . esc_attr(get_option('my_site_logo')) . "'>";
}

function display_site_mail(){
  echo "<input type='text' class='regular-text' name='my_site_mail' value='" . esc_attr(get_option('my_site_mail')) . "'>";
}

function display_site_phone(){
  echo "<input type='text' class='regular-text' name='my_site_phone' value='" . esc_attr(get_option('my_site_phone')) . "'>";
}

function display_site_rules_link(){
  echo "<input type='text' class='regular-text' name='my_site_rules_link' value='" . esc_attr(get_option('my_site_rules_link')) . "'>";
}
