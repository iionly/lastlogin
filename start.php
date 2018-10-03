<?php

/**
 * Lastlogin plugin
 *
 * @package
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Fabrice Collette fabrice.collette@free.fr
 * @copyright Fabrice Collette
 *
 * Elgg 1.8 onwards by iionly
 * iionly@gmx.de
 */

elgg_register_event_handler('init', 'system', 'lastlogin_init');

function lastlogin_init() {
	elgg_extend_view('elgg.css','lastlogin/lastlogin.css');
	elgg_extend_view('icon/user/default', 'lastlogin/profile_extend', 600);
}
