<?php

/**
 * Lastlogin settings form
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly iionly@gmx.de
 * @copyright iionly 2012
 *
 */

$plugin = elgg_get_plugin_from_id('lastlogin');

echo elgg_autop(elgg_echo('lastlogin:settings:lastlogin_info'));

echo elgg_view_field([
	'#type' => 'select',
	'#label' => elgg_echo('lastlogin:settings:lastlogin_time'),
	'name' => 'params[lastlogin_visibility]',
	'options_values' => [
		'no' => elgg_echo('lastlogin:settings:no'),
		'admin' => elgg_echo('lastlogin:settings:admin'),
		'all' => elgg_echo('lastlogin:settings:all'),
	],
	'value' => $plugin->lastlogin_visibility,
]);

echo elgg_view_field([
	'#type' => 'select',
	'#label' => elgg_echo('lastlogin:settings:registered_time'),
	'name' => 'params[registered_visibility]',
	'options_values' => [
		'no' => elgg_echo('lastlogin:settings:no'),
		'admin' => elgg_echo('lastlogin:settings:admin'),
		'all' => elgg_echo('lastlogin:settings:all'),
	],
	'value' => $plugin->registered_visibility,
]);

echo elgg_view_field([
	'#type' => 'select',
	'#label' => elgg_echo('lastlogin:settings:guid'),
	'name' => 'params[guid_visibility]',
	'options_values' => [
		'no' => elgg_echo('lastlogin:settings:no'),
		'yes' => elgg_echo('lastlogin:settings:yes'),
	],
	'value' => $plugin->guid_visibility,
]);
