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
$string['privacy:metadata'] = 'El plugin Tier no almacena ningún dato personal';
$string['totaluserstaskname'] = 'Tarea de Usuarios Totales';
$string['totalstoragetaskname'] = 'Tarea de Almacenamiento Total';
$string['errormaxstorageuploadfailed'] = 'Error al subir el archivo debido a que se ha alcanzado el límite máximo de almacenamiento. El almacenamiento máximo es de {$a->maxstoragebytes} bytes, mientras que el archivo {$a->filename} es de {$a->filesize} bytes y el almacenamiento total actual es de {$a->totalstoragebytes} bytes (incluida la base de datos)';
$string['errormaxstoragecreateuserfailed'] = 'Error al crear el usuario debido a que se ha alcanzado el límite máximo de usuarios. El número máximo de usuarios registrados es de {$a->maxregisteredusers}, mientras que el número total de usuarios registrados actual es de {$a->totalregisteredusers} usuarios';
$string['restrictedadminsettingssection'] = 'Esta sección de configuración del administrador está actualmente restringida para todos los usuarios como medida de precaución para evitar configuraciones incorrectas relacionadas con el rendimiento y la optimización';
$string['restrictedadminsettingscategory'] = 'Esta categoría de configuración del administrador está actualmente restringida para todos los usuarios como medida de precaución para evitar configuraciones incorrectas relacionadas con el rendimiento y la optimización';
$string['restrictedadminpage'] = 'Esta página de configuración del administrador está actualmente restringida para todos los usuarios como medida de precaución para evitar configuraciones incorrectas relacionadas con el rendimiento y la optimización';
