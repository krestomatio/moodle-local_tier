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
 * @copyright   2022 Krestomatio <info@krestomatio.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Tier Plugin';
$string['privacy:metadata'] = 'Das Tier Plugin speichert keine persönlichen Daten';
$string['totaluserstaskname'] = 'Aufgabe Gesamtbenutzer';
$string['totalstoragetaskname'] = 'Aufgabe Gesamtspeicher';
$string['errormaxstorageuploadfailed'] = 'Dateiupload ist fehlgeschlagen aufgrund der Erreichung des maximalen Speicherlimits. Der maximale Speicher beträgt {$a->maxstoragebytes} Bytes, während die Datei {$a->filename} {$a->filesize} Bytes groß ist und der aktuelle Gesamtspeicher {$a->totalstoragebytes} Bytes beträgt (einschließlich Datenbank)';
$string['errormaxstoragecreateuserfailed'] = 'Benutzererstellung ist fehlgeschlagen aufgrund der Erreichung des maximalen Benutzerlimits. Die maximale Anzahl registrierter Benutzer beträgt {$a->maxregisteredusers}, während die aktuelle Gesamtanzahl der registrierten Benutzer {$a->totalregisteredusers} beträgt';
$string['restrictedadminsettingssection'] = 'Dieser Abschnitt der Administrator-Einstellungen ist derzeit für alle Benutzer aus Sicherheitsgründen eingeschränkt, um eine fehlerhafte Konfiguration der Leistungs- und Optimierungseinstellungen zu verhindern';
$string['restrictedadminsettingscategory'] = 'Diese Kategorie der Administrator-Einstellungen ist derzeit für alle Benutzer aus Sicherheitsgründen eingeschränkt, um eine fehlerhafte Konfiguration der Leistungs- und Optimierungseinstellungen zu verhindern';
$string['restrictedadminpage'] = 'Diese Administrator-Einstellungsseite ist derzeit für alle Benutzer aus Sicherheitsgründen eingeschränkt, um eine fehlerhafte Konfiguration der Leistungs- und Optimierungseinstellungen zu verhindern';
