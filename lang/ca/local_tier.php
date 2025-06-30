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
 * @copyright   2025 Krestomatio <info@krestomatio.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['dbtypeunsupported'] = 'El tipus de base de dades "{$a->dbtype}" no està suportat';
$string['errormaxconcurrentsessions'] = 'S\'ha assolit el límit de sessions concurrents. No podeu crear una nova sessió en aquest moment. Torneu-ho a provar més tard. El límit és de {$a->maxconcurrentsessions} sessions i l\'actual total de sessions actives és {$a->totalconcurrentsessions}';
$string['errormaxstoragecreateuserfailed'] = 'La creació d\'usuari ha fallat perquè s\'ha assolit el límit màxim d\'usuaris registrats. El màxim és {$a->maxregisteredusers} usuaris, mentre que l\'actual total d\'usuaris registrats és {$a->totalregisteredusers} usuaris';
$string['errormaxstorageuploadfailed'] = 'La càrrega del fitxer ha fallat perquè s\'ha assolit el límit màxim d\'emmagatzematge. L\'emmagatzematge màxim és de {$a->maxstoragebytes} bytes mentre que el fitxer {$a->filename} té {$a->filesize} bytes i l\'emmagatzematge total actual és de {$a->totalstoragebytes} bytes (incloent la base de dades)';
$string['maxconcurrentsessions'] = 'Nombre màxim de sessions concurrents';
$string['maxconcurrentsessionsdesc'] = 'Nombre màxim de sessions globals concurrents permeses a la instància. Aquest és el nombre màxim de sessions actives que es poden crear al mateix temps per a tots els usuaris. Si s\'assoleix aquest límit, no es podran crear noves sessions fins que algunes sessions existents expirin (vegeu `sessiontimeout`), es tanquin o s\'augmenti el límit. L\'usuari administrador principal no es compta en aquest límit.';
$string['maxregisteredusers'] = 'Nombre màxim d\'usuaris registrats';
$string['maxregisteredusersdesc'] = 'Nombre màxim d\'usuaris registrats permesos a la instància. L\'usuari administrador principal no es compta en aquest límit.';
$string['maxstoragebytes'] = 'Emmagatzematge màxim en bytes';
$string['maxstoragebytesdesc'] = 'Emmagatzematge màxim permès a la instància, en bytes. Inclou tots els fitxers pujats pels usuaris i la mida de la base de dades. Si s\'assoleix aquest límit, no es podran pujar fitxers nous fins que s\'eliminin completament alguns fitxers existents (buidats de la paperera, vegeu `filescleanupperiod`) o fins que s\'augmenti el límit.';
$string['pluginname'] = 'Nivell d\'instància';
$string['privacy:metadata'] = 'El nivell d\'instància no emmagatzema cap dada personal';
$string['restrictedadminpage'] = 'Aquesta pàgina de la configuració d\'administració està restrigida per a tots els usuaris com a mesura preventiva per evitar configuracions incorrectes relacionades amb el rendiment i l\'optimització';
$string['restrictedadminpages'] = 'Pàgines d\'administració restringides';
$string['restrictedadminpagesdesc'] = 'Llista separada per comes de pàgines d\'administració que estan restringides per a qualsevol usuari. Ex.: `/cache/testperformance.php,/cache/admin.php`';
$string['restrictedadminsettingscategories'] = 'Categories de configuració d\'administrador restringides';
$string['restrictedadminsettingscategoriesdesc'] = 'Llista separada per comes de categories de configuració d\'administrador que estan restringides per a qualsevol usuari. Ex.: `cachestores`';
$string['restrictedadminsettingscategory'] = 'Aquesta categoria de la configuració d\'administració està restrigida per a tots els usuaris com a mesura preventiva per evitar configuracions incorrectes relacionades amb el rendiment i l\'optimització';
$string['restrictedadminsettingssection'] = 'Aquesta secció de la configuració d\'administració està restricida per a tots els usuaris com a mesura preventiva per evitar configuracions incorrectes relacionades amb el rendiment i l\'optimització';
$string['restrictedadminsettingssections'] = 'Seccions de configuració d\'administrador restringides';
$string['restrictedadminsettingssectionsdesc'] = 'Llista separada per comes de seccions de configuració d\'administrador que estan restringides per a qualsevol usuari. Ex.: `cachestore_apcu_settings,cachestore_memcached_settings`';
$string['settingsheading'] = 'Configuració del nivell d\'instància';
$string['settingsheadinginfo'] = 'Les següents opcions controlen els límits d\'aquesta instància.';
$string['settingspage'] = 'Configuració del nivell d\'instància';
$string['statusheading'] = 'Estat del nivell d\'instància';
$string['statusheadinginfo'] = '
| Mètrica                               | Valor                          |
| ------------------------------------- | ------------------------------ |
| Sessions concurrents totals&nbsp;&nbsp; | **{$a->totalconcurrentsessions}** |
| Usuaris registrats totals&nbsp;&nbsp;  | **{$a->totalregisteredusers}** |
| Emmagatzematge total usat (bytes)&nbsp;&nbsp; | **{$a->totalstoragebytes}**    |
';
$string['statuspage'] = 'Estat del nivell d\'instància';
$string['totalregistereduserstaskname'] = 'Tasca de total d\'usuaris registrats';
$string['totalsessionstaskname'] = 'Tasca de total de sessions';
$string['totalstoragetaskname'] = 'Tasca de total d\'emmagatzematge';
