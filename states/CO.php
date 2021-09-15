<?php

/**
 * Colombia states
 *
 * @author   Saul Morales Pacheco <moralespachecopablo@gmail.com>
 * @version  2.0.2
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

/*
 * Be careful:
 * This way to identify the states and cities relies on the worpdress plugin
 * https://github.com/vizapata/departamentos-municipios-colombia
 * At this moment there is no additional checks if the plugin is installed or activated
 */ 
$states['CO'] = array();
foreach (dmcol_all_states() as $state) {
	$states['CO'][$state['abbr']] = $state['name'];
}