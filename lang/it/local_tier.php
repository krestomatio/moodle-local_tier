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

$string['pluginname'] = 'Plugin Tier';
$string['privacy:metadata'] = 'Il plugin Tier non memorizza dati personali';
$string['totaluserstaskname'] = 'Attività Utenti Totali';
$string['totalstoragetaskname'] = 'Attività Spazio di Archiviazione Totale';
$string['errormaxstorageuploadfailed'] = 'Caricamento del file non riuscito a causa del raggiungimento del limite massimo di archiviazione. Lo spazio di archiviazione massimo è di {$a->maxstoragebytes} byte, mentre il file {$a->filename} è di {$a->filesize} byte e lo spazio di archiviazione totale attuale è di {$a->totalstoragebytes} byte (compresa la base di dati)';
$string['errormaxstoragecreateuserfailed'] = 'Creazione dell\'utente non riuscita a causa del raggiungimento del limite massimo di utenti. Il numero massimo di utenti registrati è di {$a->maxregisteredusers}, mentre il numero totale attuale di utenti registrati è di {$a->totalregisteredusers} utenti';
$string['restrictedadminsettingssection'] = 'Questa sezione delle impostazioni di amministrazione è attualmente restritta per tutti gli utenti come misura precauzionale per evitare configurazioni errate relative alle impostazioni di prestazioni e ottimizzazione';
$string['restrictedadminsettingscategory'] = 'Questa categoria delle impostazioni di amministrazione è attualmente restritta per tutti gli utenti come misura precauzionale per evitare configurazioni errate relative alle impostazioni di prestazioni e ottimizzazione';
$string['restrictedadminpage'] = 'Questa pagina delle impostazioni di amministrazione è attualmente restritta per tutti gli utenti come misura precauzionale per evitare configurazioni errate relative alle impostazioni di prestazioni e ottimizzazione';
