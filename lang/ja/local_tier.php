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

$string['pluginname'] = 'インスタンスタイア';
$string['statuspage'] = 'インスタンスタイアのステータス';
$string['settingspage'] = 'インスタンスタイアの設定';
$string['privacy:metadata'] = 'インスタンスタイアは個人データを保存しません';
$string['totalregistereduserstaskname'] = '総登録ユーザー数タスク';
$string['totalstoragetaskname'] = '総ストレージタスク';
$string['totalsessionstaskname'] = '総セッションタスク';
$string['errormaxstorageuploadfailed'] = '最大ストレージ容量に達したため、ファイルのアップロードに失敗しました。最大ストレージ容量は {$a->maxstoragebytes} バイトですが、ファイル {$a->filename} は {$a->filesize} バイトで、現在の総ストレージ使用量は {$a->totalstoragebytes} バイトです（データベースを含む）';
$string['errormaxstoragecreateuserfailed'] = '最大ユーザー数に達したため、ユーザーの作成に失敗しました。最大登録ユーザー数は {$a->maxregisteredusers} 人ですが、現在の登録ユーザー数は {$a->totalregisteredusers} 人です';
$string['restrictedadminsettingssection'] = 'この管理設定セクションは、パフォーマンスと最適化に関する誤った設定を防ぐための予防策として、現在すべてのユーザーに対して制限されています';
$string['restrictedadminsettingscategory'] = 'この管理設定カテゴリは、パフォーマンスと最適化に関する誤った設定を防ぐための予防策として、現在すべてのユーザーに対して制限されています';
$string['restrictedadminpage'] = 'この管理ページは、パフォーマンスと最適化に関する誤った設定を防ぐための予防策として、現在すべてのユーザーに対して制限されています';
$string['statusheading'] = 'インスタンスタイアのステータス';
$string['statusheadinginfo'] = '
| メトリック                            | 値                             |
| ------------------------------------ | ------------------------------ |
| 同時セッション総数&nbsp;&nbsp;       | **{$a->totalconcurrentsessions}** |
| 総登録ユーザー数&nbsp;&nbsp;         | **{$a->totalregisteredusers}**    |
| 総ストレージ使用量（バイト）&nbsp;&nbsp; | **{$a->totalstoragebytes}**      |
';
$string['settingsheading'] = 'インスタンスタイアの設定';
$string['settingsheadinginfo'] = '以下の設定はこのインスタンスの制限値を制御します。';
$string['maxregisteredusers'] = '最大登録ユーザー数';
$string['maxregisteredusersdesc'] = 'インスタンスで許可される最大登録ユーザー数。この制限にはメイン管理者ユーザーは含まれません。';
$string['maxstoragebytes'] = '最大ストレージ（バイト）';
$string['maxstoragebytesdesc'] = 'インスタンスで許可される最大ストレージ容量（バイト）。これはユーザーがアップロードしたすべてのファイルとデータベースサイズを含みます。この制限に達すると、既存のファイルが完全に削除される（ゴミ箱を空にする、`filescleanupperiod` を参照）か、制限が増加されるまで新しいファイルをアップロードできません。';
$string['maxconcurrentsessions'] = '最大同時セッション数';
$string['maxconcurrentsessionsdesc'] = 'インスタンスで許可されるグローバルな同時アクティブセッションの最大数です。これは、すべてのユーザーで同時に作成できるアクティブセッションの最大数です。この制限に達すると、既存のセッションが期限切れになる（`sessiontimeout` を参照）、閉じられる、または制限が増加されるまで新しいセッションを作成できません。メイン管理者ユーザーはこの制限に含まれません。';
$string['errormaxconcurrentsessions'] = '最大同時セッション数の制限に達しました。現在、新しいセッションを作成できません。後でもう一度お試しください。最大同時セッション数は {$a->maxconcurrentsessions}、現在のアクティブセッション数は {$a->totalconcurrentsessions} です';
$string['dbtypeunsupported'] = 'データベースタイプ "{$a->dbtype}" はサポートされていません';
$string['restrictedadminsettingscategories'] = '制限された管理設定カテゴリ';
$string['restrictedadminsettingscategoriesdesc'] = 'カンマ区切りの、現在すべてのユーザーに対して制限されている管理設定カテゴリのリスト。例: `cachestores`';
$string['restrictedadminsettingssections'] = '制限された管理設定セクション';
$string['restrictedadminsettingssectionsdesc'] = 'カンマ区切りの、現在すべてのユーザーに対して制限されている管理設定セクションのリスト。例: `cachestore_apcu_settings,cachestore_memcached_settings`';
$string['restrictedadminpages'] = '制限された管理ページ';
$string['restrictedadminpagesdesc'] = 'カンマ区切りの、現在すべてのユーザーに対して制限されている管理ページのリスト。例: `/cache/testperformance.php,/cache/admin.php`';
