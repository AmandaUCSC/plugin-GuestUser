<?php
require_once(HELPERS);
define('GUEST_USER_PLUGIN_DIR', PLUGIN_DIR . '/GuestUser');
require_once(GUEST_USER_PLUGIN_DIR . '/GuestUserPlugin.php');
require_once(GUEST_USER_PLUGIN_DIR . '/helpers/functions.php');
include(FORM_DIR . '/User.php');
require_once(GUEST_USER_PLUGIN_DIR . '/libraries/GuestUserForm.php');
$gu = new GuestUser();
$gu->setUp();
?>