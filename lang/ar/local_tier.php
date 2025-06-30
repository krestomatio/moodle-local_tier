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

$string['dbtypeunsupported'] = 'نوع قاعدة البيانات "{$a->dbtype}" غير مدعوم';
$string['errormaxconcurrentsessions'] = 'تم الوصول إلى حد الجلسات المتزامنة الأقصى. لا يمكنك إنشاء جلسة جديدة في هذا الوقت. الرجاء المحاولة لاحقًا. الحد الأقصى للجلسات المتزامنة هو {$a->maxconcurrentsessions} وإجمالي الجلسات النشطة الحالية هو {$a->totalconcurrentsessions}';
$string['errormaxstoragecreateuserfailed'] = 'فشل إنشاء المستخدم بسبب تجاوز حد عدد المستخدمين الأقصى. الحد الأقصى للمستخدمين المسجلين هو {$a->maxregisteredusers} بينما إجمالي المستخدمين المسجلين الحالي هو {$a->totalregisteredusers} مستخدمًا';
$string['errormaxstorageuploadfailed'] = 'فشل رفع الملف بسبب تجاوز حد التخزين الأقصى. الحد الأقصى للتخزين هو {$a->maxstoragebytes} بايت بينما حجم الملف {$a->filename} هو {$a->filesize} بايت وإجمالي التخزين الحالي هو {$a->totalstoragebytes} بايت (بما في ذلك قاعدة البيانات)';
$string['maxconcurrentsessions'] = 'الحد الأقصى للجلسات المتزامنة';
$string['maxconcurrentsessionsdesc'] = 'الحد الأقصى لعدد الجلسات النشطة المتزامنة المسموح بها في هذا المثيل. هذا هو أقصى عدد للجلسات النشطة التي يمكن إنشاؤها عبر جميع المستخدمين في نفس الوقت. إذا تم الوصول إلى هذا الحد، لا يمكن إنشاء جلسات جديدة حتى تنتهي صلاحية بعض الجلسات الحالية (انظر "sessiontimeout") أو يتم إغلاقها أو زيادة الحد. لا يتم احتساب المسؤول الرئيسي ضمن هذا الحد.';
$string['maxregisteredusers'] = 'الحد الأقصى للمستخدمين المسجلين';
$string['maxregisteredusersdesc'] = 'الحد الأقصى لعدد المستخدمين المسجلين المسموح به في هذا المثيل. لا يتم احتساب المسؤول الرئيسي ضمن هذا الحد.';
$string['maxstoragebytes'] = 'الحد الأقصى للتخزين بالبايت';
$string['maxstoragebytesdesc'] = 'الحد الأقصى للتخزين المسموح به في هذا المثيل بالبايت. يشمل هذا جميع الملفات التي يرفعها المستخدمون، بالإضافة إلى حجم قاعدة البيانات. إذا تم الوصول إلى هذا الحد، لا يمكن رفع ملفات جديدة حتى يتم حذف بعض الملفات الموجودة نهائيًا (إفراغها من سلة المهملات، انظر "filescleanupperiod") أو زيادة الحد.';
$string['pluginname'] = 'طبقة المثال';
$string['privacy:metadata'] = 'طبقة المثال لا تخزن أي بيانات شخصية';
$string['restrictedadminpage'] = 'هذه الصفحة من إعدادات الإدارة مقيدة حاليًا لجميع المستخدمين كإجراء وقائي لمنع تكوين الإعدادات المتعلقة بالأداء والتحسين بشكل غير صحيح';
$string['restrictedadminpages'] = 'صفحات الإدارة المقيدة';
$string['restrictedadminpagesdesc'] = 'قائمة مفصولة بفواصل لصفحات الإدارة المقيدة حاليًا لأي مستخدم. على سبيل المثال: "/cache/testperformance.php,/cache/admin.php"';
$string['restrictedadminsettingscategories'] = 'فئات إعدادات الإدارة المقيدة';
$string['restrictedadminsettingscategoriesdesc'] = 'قائمة مفصولة بفواصل لفئات إعدادات الإدارة المقيدة حاليًا لأي مستخدم. على سبيل المثال: "cachestores"';
$string['restrictedadminsettingscategory'] = 'هذه الفئة من إعدادات الإدارة مقيدة حاليًا لجميع المستخدمين كإجراء وقائي لمنع تكوين الإعدادات المتعلقة بالأداء والتحسين بشكل غير صحيح';
$string['restrictedadminsettingssection'] = 'هذا القسم من إعدادات الإدارة مقيد حاليًا لجميع المستخدمين كإجراء وقائي لمنع تكوين الإعدادات المتعلقة بالأداء والتحسين بشكل غير صحيح';
$string['restrictedadminsettingssections'] = 'أقسام إعدادات الإدارة المقيدة';
$string['restrictedadminsettingssectionsdesc'] = 'قائمة مفصولة بفواصل لأقسام إعدادات الإدارة المقيدة حاليًا لأي مستخدم. على سبيل المثال: "cachestore_apcu_settings,cachestore_memcached_settings"';
$string['settingsheading'] = 'إعدادات طبقة المثال';
$string['settingsheadinginfo'] = 'الإعدادات التالية تتحكم بالحدود لهذا المثيل.';
$string['settingspage'] = 'إعدادات طبقة المثال';
$string['statusheading'] = 'حالة طبقة المثال';
$string['statusheadinginfo'] = '
| المعيار                                 | القيمة                          |
| -------------------------------------- | ------------------------------ |
| إجمالي الجلسات المتزامنة&nbsp;&nbsp;  | **{$a->totalconcurrentsessions}** |
| إجمالي المستخدمين المسجلين&nbsp;&nbsp; | **{$a->totalregisteredusers}** |
| إجمالي التخزين المستخدم (بايت)&nbsp;&nbsp; | **{$a->totalstoragebytes}**    |
';
$string['statuspage'] = 'حالة طبقة المثال';
$string['totalregistereduserstaskname'] = 'مهمة إجمالي المستخدمين المسجلين';
$string['totalsessionstaskname'] = 'مهمة إجمالي الجلسات';
$string['totalstoragetaskname'] = 'مهمة إجمالي التخزين';
