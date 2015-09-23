<?php

/**
 * Lastlogin settings form
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly iionly@gmx.de
 * @copyright iionly 2012-2015
 *
 */

$plugin = elgg_get_plugin_from_id('lastlogin');

$form = elgg_echo('lastlogin:settings:lastlogin_info') . "<br><br>";

$form .= "<div class='mbm'><b>" . elgg_echo('lastlogin:settings:lastlogin_time') . "</b>";
$form .= elgg_view('input/select', array(
	'name' => 'params[lastlogin_visibility]',
	'options_values' => array('no' => elgg_echo('lastlogin:settings:no'),
		'admin' => elgg_echo('lastlogin:settings:admin'),
		'all' => elgg_echo('lastlogin:settings:all')
	),
	'value' => $plugin->lastlogin_visibility
)) . "</div>";

$form .= "<div class='mbm'><b>" . elgg_echo('lastlogin:settings:registered_time') . "</b>";
$form .= elgg_view('input/select', array(
	'name' => 'params[registered_visibility]',
	'options_values' => array('no' => elgg_echo('lastlogin:settings:no'),
		'admin' => elgg_echo('lastlogin:settings:admin'),
		'all' => elgg_echo('lastlogin:settings:all')
	),
	'value' => $plugin->registered_visibility
)) . "</div>";

$form .= "<div class='mbm'><b>" . elgg_echo('lastlogin:settings:guid') . "</b>";
$form .= elgg_view('input/select', array(
	'name' => 'params[guid_visibility]',
	'options_values' => array(
		'no' => elgg_echo('lastlogin:settings:no'),
		'yes' => elgg_echo('lastlogin:settings:yes')
	),
	'value' => $plugin->guid_visibility
)) . "</div>";

echo $form;
