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

$string['pluginname'] = '实例层级';
$string['statuspage'] = '实例层级状态';
$string['settingspage'] = '实例层级设置';
$string['privacy:metadata'] = '实例层级不会存储任何个人数据';
$string['totalregistereduserstaskname'] = '注册用户总数任务';
$string['totalstoragetaskname'] = '存储总量任务';
$string['totalsessionstaskname'] = '会话总数任务';
$string['errormaxstorageuploadfailed'] = '文件上传失败，已达到最大存储限制。最大存储为 {$a->maxstoragebytes} 字节，而文件 {$a->filename} 大小为 {$a->filesize} 字节，当前总存储为 {$a->totalstoragebytes} 字节（包括数据库）';
$string['errormaxstoragecreateuserfailed'] = '用户创建失败，已达到最大用户数限制。最大注册用户数为 {$a->maxregisteredusers}，当前注册用户总数为 {$a->totalregisteredusers}';
$string['restrictedadminsettingssection'] = '此管理设置部分目前对所有用户受限，作为防止错误配置性能和优化相关设置的预防措施';
$string['restrictedadminsettingscategory'] = '此管理设置类别目前对所有用户受限，作为防止错误配置性能和优化相关设置的预防措施';
$string['restrictedadminpage'] = '此管理页面目前对所有用户受限，作为防止错误配置性能和优化相关设置的预防措施';
$string['statusheading'] = '实例层级状态';
$string['statusheadinginfo'] = '
| 指标                                  | 值                             |
| ------------------------------------- | ------------------------------ |
| 同时会话总数&nbsp;&nbsp;               | **{$a->totalconcurrentsessions}** |
| 注册用户总数&nbsp;&nbsp;               | **{$a->totalregisteredusers}**    |
| 总存储使用量（字节）&nbsp;&nbsp;        | **{$a->totalstoragebytes}**      |
';
$string['settingsheading'] = '实例层级设置';
$string['settingsheadinginfo'] = '以下设置控制此实例的限制。';
$string['maxregisteredusers'] = '最大注册用户数';
$string['maxregisteredusersdesc'] = '允许在此实例中注册的最大用户数。主管理员用户不计入此限制。';
$string['maxstoragebytes'] = '最大存储（字节）';
$string['maxstoragebytesdesc'] = '允许在此实例中使用的最大存储量（字节）。包括用户上传的所有文件以及数据库大小。如果达到此限制，则无法上传新文件，直到部分现有文件完全删除（从回收站清空，参见 `filescleanupperiod`），或增加此限制。';
$string['maxconcurrentsessions'] = '最大同时会话数';
$string['maxconcurrentsessionsdesc'] = '允许在此实例中同时存在的全局会话数上限。这是所有用户同时创建的最大活动会话数。如果达到此限制，则无法创建新会话，直到现有会话过期（参见 `sessiontimeout`）、关闭或增加此限制。主管理员用户不计入此限制。';
$string['errormaxconcurrentsessions'] = '已达到最大同时会话数限制。此时无法创建新会话。请稍后再试。最大同时会话数为 {$a->maxconcurrentsessions}，当前活跃会话总数为 {$a->totalconcurrentsessions}。';
$string['dbtypeunsupported'] = '不支持的数据库类型 "{$a->dbtype}"';
$string['restrictedadminsettingscategories'] = '受限的管理设置类别';
$string['restrictedadminsettingscategoriesdesc'] = '以逗号分隔的当前对任何用户受限的管理设置类别列表。例如：`cachestores`';
$string['restrictedadminsettingssections'] = '受限的管理设置部分';
$string['restrictedadminsettingssectionsdesc'] = '以逗号分隔的当前对任何用户受限的管理设置部分列表。例如：`cachestore_apcu_settings,cachestore_memcached_settings`';
$string['restrictedadminpages'] = '受限的管理页面';
$string['restrictedadminpagesdesc'] = '以逗号分隔的当前对任何用户受限的管理页面列表。例如：`/cache/testperformance.php,/cache/admin.php`';
