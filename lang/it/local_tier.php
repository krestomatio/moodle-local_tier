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

$string['dbtypeunsupported'] = 'Tipo di database "{$a->dbtype}" non supportato';
$string['errormaxconcurrentsessions'] = 'Limite di sessioni concorrenti raggiunto. Non puoi creare una nuova sessione in questo momento. Riprova più tardi. Il limite massimo di sessioni concorrenti è {$a->maxconcurrentsessions} e il numero attuale di sessioni attive è {$a->totalconcurrentsessions}';
$string['errormaxstoragecreateuserfailed'] = 'Creazione utente non riuscita perché è stato raggiunto il limite massimo di utenti. Il numero massimo di utenti registrati è {$a->maxregisteredusers} mentre il numero attuale di utenti registrati è {$a->totalregisteredusers}';
$string['errormaxstorageuploadfailed'] = 'Caricamento del file non riuscito perché è stato raggiunto il limite massimo di archiviazione. Lo spazio massimo è di {$a->maxstoragebytes} byte mentre il file {$a->filename} è di {$a->filesize} byte e lo spazio totale utilizzato è di {$a->totalstoragebytes} byte (incluso database)';
$string['maxconcurrentsessions'] = 'Numero massimo di sessioni concorrenti';
$string['maxconcurrentsessionsdesc'] = 'Numero massimo di sessioni globali concorrenti consentite nell\'istanza. Questo è il numero massimo di sessioni attive che possono essere create contemporaneamente per tutti gli utenti. Se questo limite viene raggiunto, non è possibile creare nuove sessioni finché alcune sessioni esistenti non scadono (vedi "sessiontimeout"), non vengono chiuse o finché il limite non viene aumentato. L\'utente amministratore principale non è conteggiato in questo limite.';
$string['maxregisteredusers'] = 'Numero massimo di utenti registrati';
$string['maxregisteredusersdesc'] = 'Numero massimo di utenti registrati consentiti nell\'istanza. L\'utente amministratore principale non è conteggiato in questo limite.';
$string['maxstoragebytes'] = 'Spazio di archiviazione massimo in byte';
$string['maxstoragebytesdesc'] = 'Spazio di archiviazione massimo consentito nell\'istanza in byte. Ciò include tutti i file caricati dagli utenti, nonché la dimensione del database. Se questo limite viene raggiunto, non è possibile caricare nuovi file finché alcuni file esistenti non vengono eliminati completamente (svuotati dal cestino, vedi "filescleanupperiod") o finché il limite non viene aumentato.';
$string['pluginname'] = 'Livello di istanza';
$string['privacy:metadata'] = 'Il livello di istanza non memorizza alcun dato personale';
$string['restrictedadminpage'] = 'Questa pagina delle impostazioni di amministrazione è attualmente limitata per tutti gli utenti come misura precauzionale per evitare una configurazione errata delle impostazioni relative a prestazioni e ottimizzazione';
$string['restrictedadminpages'] = 'Pagine di amministrazione limitate';
$string['restrictedadminpagesdesc'] = 'Elenco separato da virgole delle pagine di amministrazione attualmente limitate per tutti gli utenti. Es.: "/cache/testperformance.php,/cache/admin.php"';
$string['restrictedadminsettingscategories'] = 'Categorie di impostazioni di amministrazione limitate';
$string['restrictedadminsettingscategoriesdesc'] = 'Elenco separato da virgole delle categorie delle impostazioni di amministrazione attualmente limitate per tutti gli utenti. Es.: "cachestores"';
$string['restrictedadminsettingscategory'] = 'Questa categoria delle impostazioni di amministrazione è attualmente limitata per tutti gli utenti come misura precauzionale per evitare una configurazione errata delle impostazioni relative a prestazioni e ottimizzazione';
$string['restrictedadminsettingssection'] = 'Questa sezione delle impostazioni di amministrazione è attualmente limitata per tutti gli utenti come misura precauzionale per evitare una configurazione errata delle impostazioni relative a prestazioni e ottimizzazione';
$string['restrictedadminsettingssections'] = 'Sezioni di impostazioni di amministrazione limitate';
$string['restrictedadminsettingssectionsdesc'] = 'Elenco separato da virgole delle sezioni delle impostazioni di amministrazione attualmente limitate per tutti gli utenti. Es.: "cachestore_apcu_settings,cachestore_memcached_settings"';
$string['settingsheading'] = 'Impostazioni del livello di istanza';
$string['settingsheadinginfo'] = 'Le seguenti impostazioni controllano i limiti per questa istanza.';
$string['settingspage'] = 'Impostazioni del livello di istanza';
$string['statusheading'] = 'Stato del livello di istanza';
$string['statusheadinginfo'] = '
| Metrica                                | Valore                          |
| -------------------------------------- | ------------------------------- |
| Sessioni concorrenti totali&nbsp;&nbsp; | **{$a->totalconcurrentsessions}** |
| Utenti registrati totali&nbsp;&nbsp;   | **{$a->totalregisteredusers}**    |
| Spazio totale utilizzato (byte)&nbsp;&nbsp; | **{$a->totalstoragebytes}**      |
';
$string['statuspage'] = 'Stato del livello di istanza';
$string['totalregistereduserstaskname'] = 'Attività totale utenti registrati';
$string['totalsessionstaskname'] = 'Attività totale sessioni';
$string['totalstoragetaskname'] = 'Attività totale spazio archiviazione';
