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

$string['dbtypeunsupported'] = 'Datenbanktyp "{$a->dbtype}" wird nicht unterstützt';
$string['errormaxconcurrentsessions'] = 'Limit für gleichzeitige Sitzungen erreicht. Sie können derzeit keine neue Sitzung erstellen. Bitte versuchen Sie es später erneut. Max. gleichzeitige Sitzungen: {$a->maxconcurrentsessions}, aktuell aktive Sitzungen: {$a->totalconcurrentsessions}';
$string['errormaxstoragecreateuserfailed'] = 'Benutzererstellung fehlgeschlagen, da das maximale Benutzerlimit erreicht wurde. Maximal registrierte Benutzer sind {$a->maxregisteredusers}, während die aktuell registrierten Benutzer {$a->totalregisteredusers} Benutzer sind';
$string['errormaxstorageuploadfailed'] = 'Datei-Upload fehlgeschlagen, da das maximale Speicherlimit erreicht wurde. Maximaler Speicher ist {$a->maxstoragebytes} Bytes, während Datei {$a->filename} {$a->filesize} Bytes groß ist und der aktuell verwendete Gesamtspeicher {$a->totalstoragebytes} Bytes beträgt (einschließlich Datenbank)';
$string['maxconcurrentsessions'] = 'Maximale gleichzeitige Sitzungen';
$string['maxconcurrentsessionsdesc'] = 'Maximale Anzahl gleichzeitiger Sitzungen, die in dieser Instanz erlaubt sind. Dies ist die Höchstzahl an aktiven Sitzungen, die gleichzeitig für alle Benutzer erstellt werden können. Wird dieses Limit erreicht, können keine neuen Sitzungen erstellt werden, bis einige vorhandene Sitzungen abgelaufen sind (siehe "sessiontimeout"), geschlossen oder das Limit erhöht wird. Der Hauptadministrator wird nicht in dieses Limit eingerechnet.';
$string['maxregisteredusers'] = 'Maximale registrierte Benutzer';
$string['maxregisteredusersdesc'] = 'Maximale Anzahl registrierter Benutzer, die in dieser Instanz erlaubt sind. Der Hauptadministrator wird nicht in dieses Limit eingerechnet.';
$string['maxstoragebytes'] = 'Maximaler Speicher in Bytes';
$string['maxstoragebytesdesc'] = 'Maximal zulässiger Speicher in dieser Instanz in Bytes. Dies umfasst alle von Benutzern hochgeladenen Dateien sowie die Datenbankgröße. Wird dieses Limit erreicht, können keine neuen Dateien hochgeladen werden, bis einige vorhandene Dateien vollständig gelöscht wurden (Papierkorb entleeren, siehe "filescleanupperiod") oder das Limit erhöht wird.';
$string['pluginname'] = 'Instanz-Ebene';
$string['privacy:metadata'] = 'Die Instanz-Ebene speichert keine persönlichen Daten';
$string['restrictedadminpage'] = 'Diese Administrationsseite ist derzeit für alle Benutzer gesperrt, um Fehlkonfigurationen von Leistungs- und Optimierungseinstellungen vorzubeugen';
$string['restrictedadminpages'] = 'Eingeschränkte Administrationsseiten';
$string['restrictedadminpagesdesc'] = 'Kommagetrennte Liste von Administrationsseiten, die derzeit für alle Benutzer eingeschränkt sind. Z. B. "/cache/testperformance.php,/cache/admin.php"';
$string['restrictedadminsettingscategories'] = 'Eingeschränkte Administrator-Einstellungs-Kategorien';
$string['restrictedadminsettingscategoriesdesc'] = 'Kommagetrennte Liste von Administrator-Einstellungs-Kategorien, die derzeit für alle Benutzer eingeschränkt sind. Z. B. "cachestores"';
$string['restrictedadminsettingscategory'] = 'Diese Kategorie der Administrator-Einstellungen ist derzeit für alle Benutzer gesperrt, um Fehlkonfigurationen von Leistungs- und Optimierungseinstellungen vorzubeugen';
$string['restrictedadminsettingssection'] = 'Dieser Abschnitt der Administrator-Einstellungen ist derzeit für alle Benutzer gesperrt, um Fehlkonfigurationen von Leistungs- und Optimierungseinstellungen vorzubeugen';
$string['restrictedadminsettingssections'] = 'Eingeschränkte Administrator-Einstellungs-Abschnitte';
$string['restrictedadminsettingssectionsdesc'] = 'Kommagetrennte Liste von Administrator-Einstellungs-Abschnitten, die derzeit für alle Benutzer eingeschränkt sind. Z. B. "cachestore_apcu_settings,cachestore_memcached_settings"';
$string['settingsheading'] = 'Einstellungen der Instanz-Ebene';
$string['settingsheadinginfo'] = 'Die folgenden Einstellungen steuern die Grenzwerte für diese Instanz.';
$string['settingspage'] = 'Einstellungen der Instanz-Ebene';
$string['statusheading'] = 'Status der Instanz-Ebene';
$string['statusheadinginfo'] = '
| Metrik                                  | Wert                            |
| --------------------------------------- | ------------------------------- |
| Gesamte gleichzeitige Sitzungen&nbsp;&nbsp; | **{$a->totalconcurrentsessions}** |
| Gesamtregistrierte Benutzer&nbsp;&nbsp;  | **{$a->totalregisteredusers}**    |
| Gesamtspeicher verwendet (Bytes)&nbsp;&nbsp; | **{$a->totalstoragebytes}**      |
';
$string['statuspage'] = 'Status der Instanz-Ebene';
$string['totalregistereduserstaskname'] = 'Aufgabe Gesamtzahl registrierter Benutzer';
$string['totalsessionstaskname'] = 'Aufgabe Gesamtanzahl Sitzungen';
$string['totalstoragetaskname'] = 'Aufgabe Gesamtspeicher';
