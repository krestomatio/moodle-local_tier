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

$string['dbtypeunsupported'] = 'Tipo de banco de dados "{$a->dbtype}" não é suportado';
$string['errormaxconcurrentsessions'] = 'Limite de sessões simultâneas atingido. Você não pode criar uma nova sessão neste momento. Por favor, tente novamente mais tarde. O limite é de {$a->maxconcurrentsessions} sessões e o total atual de sessões ativas é {$a->totalconcurrentsessions}';
$string['errormaxstoragecreateuserfailed'] = 'Falha na criação do usuário por ter sido atingido o limite máximo de usuários. O número máximo de usuários registrados é {$a->maxregisteredusers}, enquanto o total atual de usuários registrados é {$a->totalregisteredusers}';
$string['errormaxstorageuploadfailed'] = 'Falha no envio do arquivo por ter sido atingido o limite máximo de armazenamento. O armazenamento máximo é {$a->maxstoragebytes} bytes, enquanto o arquivo {$a->filename} tem {$a->filesize} bytes e o armazenamento total atual é {$a->totalstoragebytes} bytes (incluindo o banco de dados)';
$string['maxconcurrentsessions'] = 'Sessões simultâneas máximas';
$string['maxconcurrentsessionsdesc'] = 'Número máximo de sessões ativas simultâneas permitidas nesta instância. Esse é o número máximo de sessões que podem ser criadas ao mesmo tempo por todos os usuários. Se esse limite for alcançado, nenhuma nova sessão pode ser criada até que algumas existentes expirem (veja `sessiontimeout`), sejam fechadas ou o limite seja aumentado. O usuário administrador principal não é contabilizado neste limite.';
$string['maxregisteredusers'] = 'Número máximo de usuários registrados';
$string['maxregisteredusersdesc'] = 'Número máximo de usuários registrados permitido nesta instância. O usuário administrador principal não é contabilizado neste limite.';
$string['maxstoragebytes'] = 'Armazenamento máximo em bytes';
$string['maxstoragebytesdesc'] = 'Armazenamento máximo permitido nesta instância em bytes. Inclui todos os arquivos enviados pelos usuários e o tamanho do banco de dados. Se esse limite for alcançado, nenhum novo arquivo poderá ser enviado até que alguns existentes sejam completamente excluídos (esvaziados da lixeira, veja `filescleanupperiod`) ou o limite seja aumentado.';
$string['pluginname'] = 'Nível de instância';
$string['privacy:metadata'] = 'O nível de instância não armazena nenhum dado pessoal';
$string['restrictedadminpage'] = 'Esta página de configurações de administração está restrita para todos os usuários como medida de precaução para evitar configurações incorretas de desempenho e otimização';
$string['restrictedadminpages'] = 'Páginas de administração restritas';
$string['restrictedadminpagesdesc'] = 'Lista separada por vírgulas de páginas de administração atualmente restritas para qualquer usuário. Ex.: `/cache/testperformance.php,/cache/admin.php`';
$string['restrictedadminsettingscategories'] = 'Categorias de configurações de administração restritas';
$string['restrictedadminsettingscategoriesdesc'] = 'Lista separada por vírgulas de categorias de configurações de administração atualmente restritas para qualquer usuário. Ex.: `cachestores`';
$string['restrictedadminsettingscategory'] = 'Esta categoria de configurações de administração está restrita para todos os usuários como medida de precaução para evitar configurações incorretas de desempenho e otimização';
$string['restrictedadminsettingssection'] = 'Esta seção de configurações de administração está restrita para todos os usuários como medida de precaução para evitar configurações incorretas de desempenho e otimização';
$string['restrictedadminsettingssections'] = 'Seções de configurações de administração restritas';
$string['restrictedadminsettingssectionsdesc'] = 'Lista separada por vírgulas de seções de configurações de administração atualmente restritas para qualquer usuário. Ex.: `cachestore_apcu_settings,cachestore_memcached_settings`';
$string['settingsheading'] = 'Configurações do nível de instância';
$string['settingsheadinginfo'] = 'As seguintes configurações controlam os limites para esta instância.';
$string['settingspage'] = 'Configurações do nível de instância';
$string['statusheading'] = 'Status do nível de instância';
$string['statusheadinginfo'] = '
| Métrica                                | Valor                          |
| -------------------------------------- | ------------------------------ |
| Sessões simultâneas totais&nbsp;&nbsp; | **{$a->totalconcurrentsessions}** |
| Usuários registrados totais&nbsp;&nbsp; | **{$a->totalregisteredusers}**    |
| Armazenamento total usado (bytes)&nbsp;&nbsp; | **{$a->totalstoragebytes}**      |
';
$string['statuspage'] = 'Status do nível de instância';
$string['totalregistereduserstaskname'] = 'Tarefa de total de usuários registrados';
$string['totalsessionstaskname'] = 'Tarefa de total de sessões';
$string['totalstoragetaskname'] = 'Tarefa de total de armazenamento';
