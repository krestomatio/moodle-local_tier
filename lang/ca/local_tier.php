<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     local_tier
 * @category    string
 * @copyright   2024 Krestomatio <info@krestomatio.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Connector de Tier';
$string['privacy:metadata'] = 'El connector de Tier no emmagatzema cap dada personal';
$string['totaluserstaskname'] = 'Tasca d\'usuaris totals';
$string['totalstoragetaskname'] = 'Tasca de capacitat total';
$string['errormaxstorageuploadfailed'] = 'Error en la càrrega del fitxer a causa d\'haver arribat al límit màxim d\'emmagatzematge. La capacitat màxima d\'emmagatzematge és de {$a->maxstoragebytes} bytes, mentre que el fitxer {$a->filename} té {$a->filesize} bytes i la capacitat d\'emmagatzematge total actual és de {$a->totalstoragebytes} bytes (incloent la base de dades)';
$string['errormaxstoragecreateuserfailed'] = 'Error en la creació de l\'usuari a causa d\'haver arribat al límit màxim d\'usuaris. El nombre màxim d\'usuaris registrats és de {$a->maxregisteredusers}, mentre que el nombre total actual d\'usuaris registrats és de {$a->totalregisteredusers} usuaris';
$string['restrictedadminsettingssection'] = 'Aquesta secció de configuració d\'administració està actualment restringida per a tots els usuaris com a mesura de precaució per evitar configuracions incorrectes de rendiment i optimització';
$string['restrictedadminsettingscategory'] = 'Aquesta categoria de configuració d\'administració està actualment restringida per a tots els usuaris com a mesura de precaució per evitar configuracions incorrectes de rendiment i optimització';
$string['restrictedadminpage'] = 'Aquesta pàgina de configuració d\'administració està actualment restringida per a tots els usuaris com a mesura de precaució per evitar configuracions incorrectes de rendiment i optimització';
