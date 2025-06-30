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

$string['dbtypeunsupported'] = 'Le type de base de données « {$a->dbtype} » n\'est pas pris en charge';
$string['errormaxconcurrentsessions'] = 'Limite de sessions simultanées atteinte. Vous ne pouvez pas créer une nouvelle session pour le moment. Veuillez réessayer plus tard. Le nombre maximal de sessions simultanées est de {$a->maxconcurrentsessions} et le nombre actuel de sessions actives est de {$a->totalconcurrentsessions}';
$string['errormaxstoragecreateuserfailed'] = 'La création de l\'utilisateur a échoué car la limite maximale d\'utilisateurs a été atteinte. Le nombre maximal d\'utilisateurs enregistrés est {$a->maxregisteredusers} alors que le total actuel est de {$a->totalregisteredusers}';
$string['errormaxstorageuploadfailed'] = 'Le téléversement du fichier a échoué car la limite de stockage maximale a été atteinte. Le stockage maximal est de {$a->maxstoragebytes} octets alors que le fichier {$a->filename} fait {$a->filesize} octets et le stockage total actuel est de {$a->totalstoragebytes} octets (base de données incluse)';
$string['maxconcurrentsessions'] = 'Nombre maximal de sessions simultanées';
$string['maxconcurrentsessionsdesc'] = 'Nombre maximal de sessions simultanées autorisées sur cette instance. Il s\'agit du nombre maximum de sessions actives pouvant être créées en même temps pour tous les utilisateurs. Si cette limite est atteinte, aucune nouvelle session ne peut être créée tant que certaines sessions existantes n\'ont pas expiré (voir "sessiontimeout"), ne sont pas fermées ou que la limite n\'est pas augmentée. L\'utilisateur administrateur principal n\'est pas compté dans cette limite.';
$string['maxregisteredusers'] = 'Nombre maximal d\'utilisateurs enregistrés';
$string['maxregisteredusersdesc'] = 'Nombre maximal d\'utilisateurs enregistrés autorisés sur cette instance. L\'utilisateur administrateur principal n\'est pas compté dans cette limite.';
$string['maxstoragebytes'] = 'Stockage maximal en octets';
$string['maxstoragebytesdesc'] = 'Stockage maximal autorisé sur cette instance en octets. Cela inclut tous les fichiers téléchargés par les utilisateurs ainsi que la taille de la base de données. Si cette limite est atteinte, aucun nouveau fichier ne peut être téléchargé tant que certains fichiers existants n\'ont pas été complètement supprimés (vidés de la corbeille, voir "filescleanupperiod") ou que la limite n\'est pas augmentée.';
$string['pluginname'] = 'Niveau d\'instance';
$string['privacy:metadata'] = 'Le niveau d\'instance ne stocke aucune donnée personnelle';
$string['restrictedadminpage'] = 'Cette page des paramètres d\'administration est actuellement restreinte pour tous les utilisateurs par mesure de précaution afin d\'éviter une mauvaise configuration des paramètres de performance et d\'optimisation';
$string['restrictedadminpages'] = 'Pages d\'administration restreintes';
$string['restrictedadminpagesdesc'] = 'Liste séparée par des virgules des pages d\'administration actuellement restreintes pour tout utilisateur. Ex. : "/cache/testperformance.php,/cache/admin.php"';
$string['restrictedadminsettingscategories'] = 'Catégories de paramètres d\'administration restreintes';
$string['restrictedadminsettingscategoriesdesc'] = 'Liste séparée par des virgules des catégories de paramètres d\'administration actuellement restreintes pour tout utilisateur. Ex. : "cachestores"';
$string['restrictedadminsettingscategory'] = 'Cette catégorie des paramètres d\'administration est actuellement restreinte pour tous les utilisateurs par mesure de précaution afin d\'éviter une mauvaise configuration des paramètres de performance et d\'optimisation';
$string['restrictedadminsettingssection'] = 'Cette section des paramètres d\'administration est actuellement restreinte pour tous les utilisateurs par mesure de précaution afin d\'éviter une mauvaise configuration des paramètres de performance et d\'optimisation';
$string['restrictedadminsettingssections'] = 'Sections de paramètres d\'administration restreintes';
$string['restrictedadminsettingssectionsdesc'] = 'Liste séparée par des virgules des sections de paramètres d\'administration actuellement restreintes pour tout utilisateur. Ex. : "cachestore_apcu_settings,cachestore_memcached_settings"';
$string['settingsheading'] = 'Paramètres du niveau d\'instance';
$string['settingsheadinginfo'] = 'Les paramètres suivants contrôlent les limites de cette instance.';
$string['settingspage'] = 'Paramètres du niveau d\'instance';
$string['statusheading'] = 'Statut du niveau d\'instance';
$string['statusheadinginfo'] = '
| Métrique                                | Valeur                          |
| --------------------------------------- | ------------------------------- |
| Total de sessions concurrentes&nbsp;&nbsp; | **{$a->totalconcurrentsessions}** |
| Total d\'utilisateurs enregistrés&nbsp;&nbsp; | **{$a->totalregisteredusers}**    |
| Stockage total utilisé (octets)&nbsp;&nbsp; | **{$a->totalstoragebytes}**      |
';
$string['statuspage'] = 'Statut du niveau d\'instance';
$string['totalregistereduserstaskname'] = 'Tâche du nombre total d\'utilisateurs enregistrés';
$string['totalsessionstaskname'] = 'Tâche du nombre total de sessions';
$string['totalstoragetaskname'] = 'Tâche du stockage total';
