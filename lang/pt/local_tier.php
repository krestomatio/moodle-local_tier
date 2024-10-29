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
$string['privacy:metadata'] = 'O plugin Tier não armazena nenhum dado pessoal';
$string['totaluserstaskname'] = 'Tarefa de Usuários Totais';
$string['totalstoragetaskname'] = 'Tarefa de Armazenamento Total';
$string['errormaxstorageuploadfailed'] = 'Falha no upload do arquivo devido ao limite máximo de armazenamento atingido. O armazenamento máximo é de {$a->maxstoragebytes} bytes, enquanto o arquivo {$a->filename} tem {$a->filesize} bytes e o armazenamento total atual é de {$a->totalstoragebytes} bytes (incluindo o banco de dados)';
$string['errormaxstoragecreateuserfailed'] = 'Falha na criação do usuário devido ao limite máximo de usuários atingido. O número máximo de usuários registrados é de {$a->maxregisteredusers}, enquanto o número total de usuários registrados atual é de {$a->totalregisteredusers}';
$string['restrictedadminsettingssection'] = 'Esta seção de configurações de administrador está atualmente restrita para todos os usuários como medida de precaução para evitar configurações incorretas relacionadas a ajustes de desempenho e otimização';
$string['restrictedadminsettingscategory'] = 'Esta categoria de configurações de administrador está atualmente restrita para todos os usuários como medida de precaução para evitar configurações incorretas relacionadas a ajustes de desempenho e otimização';
$string['restrictedadminpage'] = 'Esta página de configurações de administrador está atualmente restrita para todos os usuários como medida de precaução para evitar configurações incorretas relacionadas a ajustes de desempenho e otimização';
