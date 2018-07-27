<?php
$lang['abouttxt']='關於';
$lang['accessdenied']='存取被拒絕，請檢查您的權限。';
$lang['action_activated']='模組  %s 已經啟動.';
$lang['action_installed']='模組  %s 已經安裝後的訊息: %s';
$lang['action_upgraded']='模組  %s　已經升級';
$lang['admindescription']='從遠端伺服器檢索和安裝模組的工具。';
$lang['advancedsearch_help']='搜索使用+或 - 來從包括或排除指定的文字，精確的短語用引號括起來。 例如:  +red -apple +"some text"';
$lang['all_modules_up_to_date']='模組庫中沒有較新的可用模組';
$lang['available_updates']='模組可以升級，在模組升級之前，請閱讀Forge所發佈的升級注意事項，更重要的是務必要將您的網站先備份。';
$lang['availablemodules']='從目前儲存庫可用模組的當前狀態';
$lang['availmodules']='可用的模組';
$lang['back_to_module_manager']='« 回到模組管理';
$lang['cantdownload']='無法下載';
$lang['depend_activate']='模組  %s 將會啟動.';
$lang['depend_install']='模組  %s (版本%s) 將安裝.';
$lang['depend_upgrade']='模組 %s 將更新至版本 %s.';
$lang['dependstxt']='相依性';
$lang['download']='下載並安裝';
$lang['error']='錯誤!';
$lang['error_downloadxml']='下載此 XML檔案: %s　時出現問題';
$lang['error_internal']='內部錯誤......請向系統管理員報告';
$lang['error_minimumrepository']='版本庫中的版本不相容此模組管理器';
$lang['error_module_object']='錯誤: 不能得到的模組執行個體 %s ';
$lang['error_moduleinstallfailed']='模組安裝失敗';
$lang['error_nofilename']='沒有提供檔案名稱參數';
$lang['error_nofilesize']='沒有提供的檔案大小參數';
$lang['error_nomatchingmodules']='錯誤: 模組庫中不能找到任何匹配的模組';
$lang['error_nomodules']='錯誤: 無法檢索安裝的模組列表';
$lang['error_norepositoryurl']='模組庫的網址尚未指定';
$lang['error_permissions']='<strong><em>警告:</em></strong> Insufficient directory permissions to install modules.  You may also be experiencing problems with PHP Safe mode.  Please ensure that safe mode is disabled, and that file system permissions are sufficient.';
$lang['error_request_problem']='與模組伺服器進行通信時出現問題';
$lang['error_search']='搜尋錯誤';
$lang['error_searchterm']='請指定有效的搜尋';
$lang['error_upgrade']='升級模組 %s 失敗!';
$lang['friendlyname']='模組管理';
$lang['help']='<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using REST, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the \'Modify Modules\' permission, and you will also need the complete, and full URL to a \'Module Repository\' installation.  You can specify this url in the \'Extensions\' --> \'Module Manager\' --> \'Preferences\' page.</p><br/>
<p>You can find the interface for this module under the \'Extensions\' menu.  When you select this module, the \'Module Repository\' installation will automatically be queried for a list of it\'s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright © 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['helptxt']='求助';
$lang['incompatible']='不相容';
$lang['info_disable_caching']='<strong>沒有意見</strong>.  出於性能原因，模組管理器會快取從遠端伺服器檢索到的信息（依預設為一小時）';
$lang['info_latestdepends']='當安裝與模組有相依情況時，此選項將確保，會安裝此模組相依的最新版本';
$lang['install']='安裝';
$lang['install_submit']='安裝';
$lang['install_with_deps']='評估所有的相依性關係，並安裝';
$lang['installed']='模組安裝版本 %s。';
$lang['instcount']='目前安裝的模組';
$lang['latestdepends']='始終安裝最新的模組';
$lang['mod_name_ver']='%s 版本 %s';
$lang['moddescription']='模組存儲庫的客戶端，此模組允許預覽、不需要FTP傳送或解壓縮檔案的遠端安裝。使用一個REST API，下載XML檔案，可以完整驗證模組，然後自動擴展。';
$lang['msg_nodependencies']='這個檔案沒有列出任何相依性';
$lang['nametext']='模組名稱';
$lang['newerversion']='較新的版本已安裝';
$lang['newversions']='可用升級';
$lang['notice']='注意';
$lang['notice_depends']='%s 有未解決的相似依。為了安裝此模組，以下動作會發生';
$lang['onlynewesttext']='只有顯示最新版本';
$lang['operation_results']='操作結果';
$lang['postinstall']='模組管理已經成功安裝';
$lang['postuninstall']='模組管理器已經解除安裝。用戶將不再有能力從遠程資源庫安裝模組。然而，本地安裝仍然是可能的。';
$lang['preferences']='偏好設定';
$lang['preferencessaved']='偏好設定已經儲存';
$lang['prompt_advancedsearch']='進階搜尋';
$lang['prompt_disable_caching']='停用從伺服器要求快取的請求';
$lang['prompt_dl_chunksize']='下載塊(Chunk)大小 (Kb)';
$lang['prompt_otheroptions']='其它選項';
$lang['prompt_repository_url']='模組儲存庫網址';
$lang['prompt_resetcache']='重置存儲庫數據的本地快取';
$lang['prompt_reseturl']='預設的默認重置網址';
$lang['prompt_settings']='設定';
$lang['really_uninstall']='您確定要解除安裝嗎？您可能會錯過很多不錯的功能。';
$lang['repositorycount']='在儲存庫中發現的模組';
$lang['reset']='重置';
$lang['search']='搜尋';
$lang['search_input']='搜尋輸入';
$lang['search_noresults']='搜索完成，但沒有匹配的結果';
$lang['search_results']='搜尋結果';
$lang['searchterm']='搜尋字詞';
$lang['sizetext']='大小 (Kilobytes)';
$lang['statustext']='狀態/動作';
$lang['submit']='提交';
$lang['time_warning']='兩個或兩個以上動作需要被執行。提醒您，安裝可能需要幾分鐘，請耐心等待！';
$lang['title_installation']='安裝';
$lang['title_installation_complete']='安裝程序完成！';
$lang['uninstalled']='模組已經解除安裝。';
$lang['unknown']='未知';
$lang['upgrade']='升級';
$lang['upgrade_available']='有較新的版本 (%s),　您使用版本 (%s)';
$lang['upgraded']='模組升級至版本%s.';
$lang['uptodate']='已安裝';
$lang['use_at_your_own_risk']='使用在你自己的風險';
$lang['versionsformodule']='模組的可用版本 %s';
$lang['vertext']='版本';
$lang['xmltext']='XML檔案';
$lang['yourversion']='您的版本';
?>