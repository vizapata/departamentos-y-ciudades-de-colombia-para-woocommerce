<?php

/**
 * Colombia places
 *
 * @author   Saul Morales Pacheco <moralespachecopablo@gmail.com>
 * @version  2.0.2
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
global $places;

/*
 * Be careful:
 * This way to identify the states and cities relies on the worpdress plugin
 * https://github.com/vizapata/departamentos-municipios-colombia
 * At this moment there is no additional checks if the plugin is installed or activated
 */ 
$places['CO'] = array();
foreach (dmcol_all_states() as $state) {
    $places['CO'][$state['abbr']] = array();
    foreach ($state['cities'] as $city) {
        array_push($places['CO'][$state['abbr']], $city['name']);
    }
}
