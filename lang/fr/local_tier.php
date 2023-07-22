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

$string['pluginname'] = 'Plugin Tier';
$string['privacy:metadata'] = 'Le plugin Tier ne stocke aucune donnée personnelle';
$string['totaluserstaskname'] = 'Tâche Utilisateurs Totaux';
$string['totalstoragetaskname'] = 'Tâche Stockage Total';
$string['errormaxstorageuploadfailed'] = 'Échec du téléchargement du fichier en raison de l\'atteinte de la limite de stockage maximale. Le stockage maximal est de {$a->maxstoragebytes} octets, tandis que le fichier {$a->filename} est de {$a->filesize} octets et le stockage total actuel est de {$a->totalstoragebytes} octets (y compris la base de données)';
$string['errormaxstoragecreateuserfailed'] = 'Échec de la création de l\'utilisateur en raison de l\'atteinte de la limite maximale d\'utilisateurs. Le nombre maximal d\'utilisateurs enregistrés est de {$a->maxregisteredusers} utilisateurs, tandis que le nombre total d\'utilisateurs enregistrés actuels est de {$a->totalregisteredusers} utilisateurs';
$string['restrictedadminsettingssection'] = 'Cette section des paramètres d\'administration est actuellement restreinte pour tous les utilisateurs par mesure de précaution afin d\'éviter toute mauvaise configuration liée aux paramètres de performance et d\'optimisation';
$string['restrictedadminsettingscategory'] = 'Cette catégorie des paramètres d\'administration est actuellement restreinte pour tous les utilisateurs par mesure de précaution afin d\'éviter toute mauvaise configuration liée aux paramètres de performance et d\'optimisation';
$string['restrictedadminpage'] = 'Cette page des paramètres d\'administration est actuellement restreinte pour tous les utilisateurs par mesure de précaution afin d\'éviter toute mauvaise configuration liée aux paramètres de performance et d\'optimisation';
