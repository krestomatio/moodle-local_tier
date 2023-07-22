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

$string['pluginname'] = 'Tier 插件';
$string['privacy:metadata'] = 'Tier 插件不会存储任何个人数据';
$string['totaluserstaskname'] = '总用户任务';
$string['totalstoragetaskname'] = '总存储任务';
$string['errormaxstorageuploadfailed'] = '文件上传失败，达到最大存储限制。最大存储为{$a->maxstoragebytes}字节，而文件{$a->filename}为{$a->filesize}字节，当前总存储为{$a->totalstoragebytes}字节（包括数据库）';
$string['errormaxstoragecreateuserfailed'] = '由于达到最大用户限制，用户创建失败。最大注册用户数为{$a->maxregisteredusers}用户，当前总注册用户数为{$a->totalregisteredusers}用户';
$string['restrictedadminsettingssection'] = '当前管理员设置部分已对所有用户进行限制，以防止错误配置性能和优化相关设置';
$string['restrictedadminsettingscategory'] = '当前管理员设置类别已对所有用户进行限制，以防止错误配置性能和优化相关设置';
$string['restrictedadminpage'] = '当前管理员设置页面已对所有用户进行限制，以防止错误配置性能和优化相关设置';
