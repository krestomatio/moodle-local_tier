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

$string['dbtypeunsupported'] = 'Tipo de base de datos "{$a->dbtype}" no es compatible';
$string['errormaxconcurrentsessions'] = 'Se alcanzó el límite de sesiones concurrentes. No puede crear una nueva sesión en este momento. Por favor, inténtelo de nuevo más tarde. El límite es de {$a->maxconcurrentsessions} sesiones y el total actual de sesiones activas es de {$a->totalconcurrentsessions}';
$string['errormaxstoragecreateuserfailed'] = 'La creación de usuario falló porque se alcanzó el límite máximo de usuarios. El máximo de usuarios registrados es de {$a->maxregisteredusers} usuarios mientras que el total actual de usuarios registrados es de {$a->totalregisteredusers} usuarios';
$string['errormaxstorageuploadfailed'] = 'La carga del archivo falló porque se alcanzó el límite máximo de almacenamiento. El almacenamiento máximo es de {$a->maxstoragebytes} bytes mientras que el archivo {$a->filename} tiene {$a->filesize} bytes y el almacenamiento total actual es de {$a->totalstoragebytes} bytes (incluida la base de datos)';
$string['maxconcurrentsessions'] = 'Número máximo de sesiones concurrentes';
$string['maxconcurrentsessionsdesc'] = 'Número máximo de sesiones concurrentes permitidas en la instancia. Este es el número máximo de sesiones activas que se pueden crear simultáneamente para todos los usuarios. Si se alcanza este límite, no se pueden crear nuevas sesiones hasta que algunas sesiones existentes expiren (vea `sessiontimeout`), se cierren o se aumente el límite. El usuario administrador principal no se cuenta dentro de este límite.';
$string['maxregisteredusers'] = 'Número máximo de usuarios registrados';
$string['maxregisteredusersdesc'] = 'Número máximo de usuarios registrados permitido en la instancia. El usuario administrador principal no se cuenta dentro de este límite.';
$string['maxstoragebytes'] = 'Almacenamiento máximo en bytes';
$string['maxstoragebytesdesc'] = 'Almacenamiento máximo permitido en la instancia en bytes. Esto incluye todos los archivos subidos por los usuarios, así como el tamaño de la base de datos. Si se alcanza este límite, no se pueden subir archivos nuevos hasta que se eliminen completamente algunos archivos existentes (vacíe la papelera, consulte `filescleanupperiod`) o se aumente el límite.';
$string['pluginname'] = 'Nivel de instancia';
$string['privacy:metadata'] = 'El nivel de instancia no almacena ningún dato personal';
$string['restrictedadminpage'] = 'Esta página de configuración de administración está restringida actualmente para todos los usuarios como medida de precaución para evitar configuraciones incorrectas relacionadas con el rendimiento y la optimización';
$string['restrictedadminpages'] = 'Páginas de administración restringidas';
$string['restrictedadminpagesdesc'] = 'Lista separada por comas de páginas de administración que están actualmente restringidas para cualquier usuario. Ej.: `/cache/testperformance.php,/cache/admin.php`';
$string['restrictedadminsettingscategories'] = 'Categorías de configuración de administración restringidas';
$string['restrictedadminsettingscategoriesdesc'] = 'Lista separada por comas de categorías de configuración de administración que están actualmente restringidas para cualquier usuario. Ej.: `cachestores`';
$string['restrictedadminsettingscategory'] = 'Esta categoría de configuración de administración está restringida actualmente para todos los usuarios como medida de precaución para evitar configuraciones incorrectas relacionadas con el rendimiento y la optimización';
$string['restrictedadminsettingssection'] = 'Esta sección de configuración de administración está restringida actualmente para todos los usuarios como medida de precaución para evitar configuraciones incorrectas relacionadas con el rendimiento y la optimización';
$string['restrictedadminsettingssections'] = 'Secciones de configuración de administración restringidas';
$string['restrictedadminsettingssectionsdesc'] = 'Lista separada por comas de secciones de configuración de administración que están actualmente restringidas para cualquier usuario. Ej.: `cachestore_apcu_settings,cachestore_memcached_settings`';
$string['settingsheading'] = 'Configuración del nivel de instancia';
$string['settingsheadinginfo'] = 'Las siguientes configuraciones controlan los límites para esta instancia.';
$string['settingspage'] = 'Configuración del nivel de instancia';
$string['statusheading'] = 'Estado del nivel de instancia';
$string['statusheadinginfo'] = '
| Métrica                                | Valor                          |
| -------------------------------------- | ------------------------------ |
| Total de sesiones concurrentes&nbsp;&nbsp; | **{$a->totalconcurrentsessions}** |
| Total de usuarios registrados&nbsp;&nbsp; | **{$a->totalregisteredusers}**    |
| Total de almacenamiento usado (bytes)&nbsp;&nbsp; | **{$a->totalstoragebytes}**      |
';
$string['statuspage'] = 'Estado del nivel de instancia';
$string['totalregistereduserstaskname'] = 'Tarea de total de usuarios registrados';
$string['totalsessionstaskname'] = 'Tarea de total de sesiones';
$string['totalstoragetaskname'] = 'Tarea de total de almacenamiento';
