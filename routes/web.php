<?php
use Illuminate\Auth\Middleware\Authenticate;
use App\Models\Employee; 
use App\Models\EmploymentStatus; 
use App\ViewProfile;
use App\Models\Follow;
use App\Models\PostArticle;  

Route::get('/', ['as'=>'landing' ,'uses'=>'AllController@landing']);
Route::get('dashboard', ['as'=>'dashboard' ,'uses'=>'DashboardController@dashboard'])->middleware('auth'); 
Route::get('following', ['as'=>'following' ,'uses'=>'DashboardController@following']);

Route::get('group/list', ['as'=>'group_list' ,'uses'=>'FrontGroupsController@list']);
Route::get('group/list_join/{refnumber}', ['as'=>'list_join' ,'uses'=>'FrontGroupsController@list_join']);
Route::get('group/joined', ['as'=>'group_joined' ,'uses'=>'FrontGroupsController@joined']);
Route::get('group/create', ['as'=>'group_create' ,'uses'=>'FrontGroupsController@create']);

Route::get('group/request', ['as'=>'join_request' ,'uses'=>'FrontGroupsController@home']);
Route::get('group/{refnumber}', ['as'=>'group' ,'uses'=>'FrontGroupsController@home']);
Route::get('group/{refnumber}/member', ['as'=>'group_member' ,'uses'=>'FrontGroupsController@member']);

Route::group(['middleware' => ['auth']], function() {
    // your routes 
});
Route::get('post/{detail}/detail', ['as'=>'post_detail' ,'uses'=>'PostController@detail']);

Route::get('job', ['as'=>'job_list' ,'uses'=>'FrontJobsController@all']);
Route::get('job/{company}/others', ['as'=>'job_others' ,'uses'=>'FrontJobsController@job_others']);
Route::get('job/home', ['as'=>'job_home' ,'uses'=>'FrontJobsController@home']);
Route::get('job/profile/{id}/{slug}', ['as'=>'job_profile' ,'uses'=>'FrontJobsController@profile']);
Route::get('job/setting', ['as'=>'job_setting' ,'uses'=>'FrontJobsController@setting']);
Route::get('job/view/{detail}', ['as'=>'job_detail' ,'uses'=>'FrontJobsController@detail']);
Route::get('job/applied', ['as'=>'job_applied' ,'uses'=>'FrontJobsController@applied']);
Route::get('job/send_aplication/{detail}', ['as'=>'job_send_aplication' ,'uses'=>'FrontJobsController@send_aplication']); 

//company
Route::get('company/review/{comany}', ['as'=>'company_review' ,'uses'=>'AllController@review']);
Route::get('company/result', ['as'=>'company_result' ,'uses'=>'AllController@result']);
 
////network
Route::get('network', ['as'=>'network' ,'uses'=>'NetworkFrontController@home'])->middleware('auth'); 
Route::get('network/post/{profile}', ['as'=>'networkprofile' ,'uses'=>'NetworkFrontController@post'])->middleware('auth');
Route::get('network/about/{about}', ['as'=>'network_about' ,'uses'=>'NetworkFrontController@about'])->middleware('auth');

Route::get('mynetwork', ['as'=>'mynetwork' ,'uses'=>'NetworkFrontController@mynetwork'])->middleware('auth'); 
Route::get('visitedmy', ['as'=>'visitedmy' ,'uses'=>'NetworkFrontController@visitedmy'])->middleware('auth'); 

Route::get('network/add/{username}', ['as'=>'networkprofileadd' ,'uses'=>'NetworkFrontController@profileadd'])->middleware('auth'); 
Route::get('network/process/{username}', ['as'=>'procesedadd' ,'uses'=>'NetworkFrontController@procesedadd'])->middleware('auth');

Route::get('pending', ['as'=>'pending' ,'uses'=>'NetworkFrontController@pending'])->middleware('auth'); 
Route::get('confirm/{confirm}', ['as'=>'confirm' ,'uses'=>'NetworkFrontController@confirm'])->middleware('auth'); 


////network
Route::get('notification', ['as'=>'notification' ,'uses'=>'NotificationFrontController@notification'])->middleware('auth'); 
Route::get('notification/setting', ['as'=>'notification_setting' ,'uses'=>'NotificationFrontController@setting'])->middleware('auth'); 

Route::get('message', ['as'=>'message' ,'uses'=>'NetworkFrontController@home'])->middleware('auth'); 
///profile
Route::get('profile/about', ['as'=>'profile_about' ,'uses'=>'ProfileController@about'])->middleware('auth');
Route::get('profile/post', ['as'=>'profile_post' ,'uses'=>'ProfileController@post'])->middleware('auth');
Route::get('profile/edit', ['as'=>'profile_edit' ,'uses'=>'ProfileController@edit'])->middleware('auth');
Route::get('profile/experience', ['as'=>'profile_experience' ,'uses'=>'ProfileController@experience'])->middleware('auth');
Route::get('profile/editexperience', ['as'=>'profile_editexperience' ,'uses'=>'ProfileController@editexperience'])->middleware('auth');
Route::get('profile/skill', ['as'=>'profile_skill' ,'uses'=>'ProfileController@skill'])->middleware('auth');
Route::get('profile/editskill', ['as'=>'profile_editskill' ,'uses'=>'ProfileController@editskill'])->middleware('auth');
Route::get('profile/endorsement', ['as'=>'profile_endorsement' ,'uses'=>'ProfileController@endorsement'])->middleware('auth');
Route::get('profile/certification', ['as'=>'profile_certification' ,'uses'=>'ProfileController@certification'])->middleware('auth');
Route::get('profile/edit/certification', ['as'=>'editcertification' ,'uses'=>'ProfileController@editcertification'])->middleware('auth');
Route::get('profile/education', ['as'=>'profile_education' ,'uses'=>'ProfileController@education'])->middleware('auth');
Route::get('profile/editeducation', ['as'=>'edit_education' ,'uses'=>'ProfileController@editeducation'])->middleware('auth');
Route::get('profile/timeline', ['as'=>'profile_timeline' ,'uses'=>'ProfileController@timeline'])->middleware('auth');
Route::get('profile/edittimeline', ['as'=>'profile_edittimeline' ,'uses'=>'ProfileController@edittimeline'])->middleware('auth');
Route::get('profile/ticket', ['as'=>'profile_ticket' ,'uses'=>'ProfileController@ticket'])->middleware('auth');
Route::get('profile/edit/ticket', ['as'=>'profile_editticket' ,'uses'=>'ProfileController@editticket'])->middleware('auth');

Route::get('profile/edit/additional', ['as'=>'profile_additional' ,'uses'=>'ProfileController@additional'])->middleware('auth');
Route::get('profile/edit/editadditional', ['as'=>'profile_editadditional' ,'uses'=>'ProfileController@editadditional'])->middleware('auth');


Route::get('message/home', ['as'=>'message_home' ,'uses'=>'FrontMessageController@home'])->middleware('auth');
Route::get('message/active', ['as'=>'message_active' ,'uses'=>'FrontMessageController@active'])->middleware('auth');
Route::get('message/group', ['as'=>'message_group' ,'uses'=>'FrontMessageController@group'])->middleware('auth');
Route::get('message/interview', ['as'=>'message_interview' ,'uses'=>'FrontMessageController@interview'])->middleware('auth');
Route::get('message/personal_chat/{username}', ['as'=>'message_personal_chat' ,'uses'=>'FrontMessageController@personal_chat'])->middleware('auth');
Route::get('message/group/{username}', ['as'=>'message_personal_group' ,'uses'=>'FrontMessageController@personal_group'])->middleware('auth')->middleware('auth'); ;
Route::get('message/online', ['as'=>'message_online' ,'uses'=>'FrontMessageController@online'])->middleware('auth');
Route::get('message/list_online', ['as'=>'list_online' ,'uses'=>'FrontMessageController@list_online'])->middleware('auth');
Route::get('message/list_message', ['as'=>'list_messages' ,'uses'=>'FrontMessageController@list_message'])->middleware('auth');
Route::get('message/getmessage/{username}', ['as'=>'getmessage' ,'uses'=>'FrontMessageController@messages'])->middleware('auth');
Route::get('message/getmessagegroup/{username}', ['as'=>'getmessagegroup' ,'uses'=>'FrontMessageController@messagegroup'])->middleware('auth');
Route::get('message/getmessagerecruit/{username}', ['as'=>'getmessagerecruit' ,'uses'=>'FrontMessageController@getmessagerecruit'])->middleware('auth'); 

 
Route::get('opening', ['as'=>'opening' ,'uses'=>'RegistrationController@opening']);
Route::get('getstarted',['as'=>'getstarted','uses'=>'RegistrationController@getstarted']);
Route::get('welcome',['as'=>'welcome','uses'=>'EmployeeController@welcome']);
Route::get('register',['as'=>'register','uses'=>'RegistrationController@register_sk']);

Route::get('about-ys',['as'=>'about-ys','uses'=>'AuthEmployee\RegisterController@about_ys']);
Route::get('certification-sk',['as'=>'certification','uses'=>'AuthEmployee\RegisterController@certification']); 
Route::get('add-photo',['as'=>'add_photo','uses'=>'AuthEmployee\RegisterController@add_photo']);
Route::get('access_contact',['as'=>'access_contact','uses'=>'AuthEmployee\RegisterController@access_contact']);
Route::get('connect_other',['as'=>'connect_other','uses'=>'AuthEmployee\RegisterController@connect_other']);
Route::get('how_do_you',['as'=>'how_do_you','uses'=>'AuthEmployee\RegisterController@how_do_you']); 
Route::get('contact/import/google', ['as'=>'google.import', 'uses'=>'AuthEmployee\RegisterController@importGoogleContact']);
Route::get('contact/import/twitter',['as'=>'twitter.import','uses'=>'AuthEmployee\RegisterController@importTwiitterContact']); 
Route::get('contact/import/facebook',['as'=>'facebook.import','uses'=>'AuthEmployee\RegisterController@importFacebookContact']); 

Route::get('sign-in',['as'=>'signin','uses'=>'AuthEmployee\LoginController@showLoginForm']);
Route::get('logout',['as'=>'logout','uses'=>'AuthEmployee\LoginController@logoutWeb']);  
Route::get('sms_verify',['as'=>'sms_verify','uses'=>'RegistrationController@sms_verify']);
 
Route::get('password/reset',['as'=>'reset','uses'=>'AuthEmployee\ForgotPasswordController@showLinkRequestForm']); 
Route::get('password/reset/{token}',['as'=>'reset_token','uses'=>'AuthEmployee\ResetPasswordController@showResetForm']); 
Route::get('password/done',['as'=>'reset_password','uses'=>'AuthEmployee\RegisterController@reset_done']); 
Route::get('password/view',['as'=>'reset_view','uses'=>'AuthEmployee\ResetPasswordController@reset_view']); 
 
Route::get('register/verify/{token}',['as'=>'verify','uses'=>'RegistrationController@verify']);
Route::get('getcountry',['as'=>'getcountry','uses'=>'AuthEmployee\RegisterController@getcountry']);


Route::get('search/province',['as'=>'province','uses'=>'AllController@provinces']);
Route::get('search/chtrades',['as'=>'chtrades','uses'=>'AllController@chtrades']);
// Route::get('tes/open', function () {
//     $og= OpenGraph::title('test');
// });
Route::get('tes/open',['as'=>'open','uses'=>'OpenGraphScraper@OpenGraphcs']);
 Route::get('/notifications', 'AllController@notifications');
  
/////// route post  
Route::post('loginpost',['as'=>'employee_login','uses'=>'AuthEmployee\LoginController@login']);  
Route::post('register/post/',['as'=>'register_post','uses'=>'RegistrationController@register_post']);
Route::post('register/about',['as'=>'register_about','uses'=>'AuthEmployee\RegisterController@register_about']);
Route::post('register/certification',['as'=>'register_certification','uses'=>'AuthEmployee\RegisterController@register_certification']);
Route::post('register/photo',['as'=>'register_photo','uses'=>'AuthEmployee\RegisterController@register_photo']);
Route::post('register/smsverfytoken',['as'=>'smsverfytoken','uses'=>'RegistrationController@smsverfytoken']);

Route::post('create/group',['as'=>'create_group','uses'=>'FrontGroupsController@group_createpost']);

Route::post('post_article',['as'=>'post_article','uses'=>'PostController@post_article']);
Route::post('post_article_group',['as'=>'post_article_group','uses'=>'PostController@post_article_group']);
Route::post('posts/comment',['as'=>'comment','uses'=>'PostController@comment']);
Route::post('posts/likestatus', array('as' => 'likestatus', 'uses' => 'DashboardController@likestatus'));
Route::post('posts/unlikestatus', array('as' => 'unlikestatus', 'uses' => 'DashboardController@unlikestatus'));
Route::post('posts/hide_post', array('as' => 'hide_post', 'uses' => 'AllController@hide_post'));
Route::post('posts/report', array('as' 	=> 'report_post', 'uses' => 'PostController@report_post'));
Route::post('posts/delete', array('as' => 'delete_post', 'uses' => 'AllController@delete_post'));

Route::post('create/post',['as'=>'group_createpost','uses'=>'PostController@group_createpost']);
Route::post('post/group',['as'=>'group_post','uses'=>'FrontGroupsController@group_post']);
Route::post('group/join', ['as'=>'join_group' ,'uses'=>'FrontGroupsController@requesttojoin']); 
Route::post('group/accept', ['as'=>'acept_join' ,'uses'=>'FrontGroupsController@acceptjoin']); 
Route::post('group/decline', ['as'=>'decline_join' ,'uses'=>'FrontGroupsController@declinejoin']); 
Route::post('follow',['as'=>'follow','uses'=>'AllController@follow']);
Route::post('unfollow',['as'=>'unfollow','uses'=>'AllController@unfollow']);
Route::post('notificationdelete',['as'=>'notifdelete','uses'=>'AllController@notifdelete']);
Route::post('subscribe',['as'=>'subscribe','uses'=>'AllController@subscribe']);
Route::post('subscribe_survey',['as'=>'subscribe_survey','uses'=>'AllController@subscribe_survey']);
  
Route::post('password/email',['as'=>'reset_post','uses'=>'AuthEmployee\ForgotPasswordController@sendResetLinkEmail']);
Route::post('password/reset', 'AuthEmployee\ResetPasswordController@reset'); 
//admin
Route::post('password/password_reset',['as'=>'password_reset','uses'=>'AuthEmployee\ResetPasswordController@password_reset']);

Route::post('job/apply', ['as'=>'job_apply' ,'uses'=>'FrontJobsController@apply']);
Route::post('job/setting/save', ['as'=>'jobsetting_save' ,'uses'=>'FrontJobsController@settingsave']);


////
Route::post('confirm_post/network', ['as'=>'confirm_post' ,'uses'=>'NetworkFrontController@confirmpost']);
Route::post('pending/sort', ['as'=>'pending_sort' ,'uses'=>'NetworkFrontController@sort']);

///profie
Route::post('profile/save/edit', ['as'=>'profile_post_edit' ,'uses'=>'ProfileController@profile_post_edit']);
Route::post('profile/save/addexperience', ['as'=>'profile_post_addexperience' ,'uses'=>'ProfileController@addexperience']);
Route::post('profile/save/editexperience', ['as'=>'profile_post_editexperience' ,'uses'=>'ProfileController@editexperiencesave']);
Route::post('profile/delete/experience', ['as'=>'delete_experience' ,'uses'=>'ProfileController@experiencedelete']);
Route::post('profile/delete/certification', ['as'=>'delete_certification' ,'uses'=>'ProfileController@deletecertification']);

Route::post('profile/save/editeducation', ['as'=>'profile_post_editeducation' ,'uses'=>'ProfileController@editeducationsave']);
Route::post('profile/delete/education', ['as'=>'delete_education' ,'uses'=>'ProfileController@deleteducation']);
Route::post('profile/delete/timeline', ['as'=>'delete_timeline' ,'uses'=>'ProfileController@deleteducation']);
Route::post('profile/delete/ticket', ['as'=>'delete_ticket' ,'uses'=>'ProfileController@deletticket']);


Route::post('profile/save/certification', ['as'=>'save_certification' ,'uses'=>'ProfileController@savecertification']);
Route::post('profile/save/edit/certification', ['as'=>'save_edit_certification' ,'uses'=>'ProfileController@saveeditcertification']);

Route::post('profile/save/addeducation', ['as'=>'profile_post_addeducation' ,'uses'=>'ProfileController@addeducation']);
Route::post('profile/save/addtimeline', ['as'=>'profile_post_addtimeline' ,'uses'=>'ProfileController@addtimeline']);
Route::post('profile/save/edittimeline', ['as'=>'profile_post_edittimeline' ,'uses'=>'ProfileController@edittimelinesave']);
Route::post('profile/save/addticket', ['as'=>'profile_post_addticket' ,'uses'=>'ProfileController@addticketsave']);
Route::post('profile/save/editticket', ['as'=>'profile_post_editticket' ,'uses'=>'ProfileController@editticketsave']);

Route::post('profile/save/addskill', ['as'=>'profile_post_addskill' ,'uses'=>'ProfileController@addskillsave']);
Route::post('profile/save/editskill', ['as'=>'profile_post_editskill' ,'uses'=>'ProfileController@editskillsave']);

Route::post('profile/save/addmedical', ['as'=>'profile_post_addmedical' ,'uses'=>'ProfileController@addmedicalsave']);
Route::post('profile/save/editmedical', ['as'=>'profile_post_editmedical' ,'uses'=>'ProfileController@editmedicalsave']);

Route::post('profile/save/addinterests', ['as'=>'profile_post_addinterests' ,'uses'=>'ProfileController@addinterestssave']);
Route::post('profile/save/editinterests', ['as'=>'profile_post_editinterests' ,'uses'=>'ProfileController@editinterestssave']);

Route::post('profile/save/addfitduties', ['as'=>'profile_post_addfitduties' ,'uses'=>'ProfileController@addfitdutiessave']);
Route::post('profile/save/editfitduties', ['as'=>'profile_post_editfitduties' ,'uses'=>'ProfileController@editfitdutiessave']);

Route::post('profile/save/editendorsement', ['as'=>'profile_editendorsement' ,'uses'=>'ProfileController@updateendorsement']);

Route::post('profile/save/photocover', ['as'=>'profie_cover' ,'uses'=>'ProfileController@photocover']);
Route::post('profile/save/photoavatar', ['as'=>'profie_avatar' ,'uses'=>'ProfileController@photoavatar']);

//messages
Route::post('message/save', ['as'=>'message_save' ,'uses'=>'FrontMessageController@messagesave']);
Route::post('message/save/photo', ['as'=>'message_save_photo' ,'uses'=>'FrontMessageController@messagesavephoto']);
Route::post('message/delete', ['as'=>'message_delete' ,'uses'=>'FrontMessageController@message_delete']);

Route::post('message/group/save', ['as'=>'message_group_save' ,'uses'=>'FrontMessageController@messagegroupsave']); 
Route::post('message/group/save/photo', ['as'=>'message_group_save_photo' ,'uses'=>'FrontMessageController@messagegroupphoto']);


Route::post('message/recruit/save', ['as'=>'message_recruit_save' ,'uses'=>'FrontMessageController@messagerecruitsave']); 
Route::post('message/recruit/save/photo', ['as'=>'messagerecruit_save_photo' ,'uses'=>'FrontMessageController@messagerecruitphoto']);

Route::post('profile/status_share', ['as'=>'status_share' ,'uses'=>'AllController@status_share']);
Route::post('profile/statuses', ['as'=>'statuses' ,'uses'=>'AllController@statuses']);


////serach
Route::get('advance/search', ['as'=>'search' ,'uses'=>'AllController@search']);
Route::get('advance/setting/search', ['as'=>'search_setting' ,'uses'=>'AllController@searchsetting']);
Route::post('advance/search/profile/interests', ['as'=>'interests_search_save' ,'uses'=>'AllController@interests']);

Route::post('advance/search/jobs/titlessave', ['as'=>'titlessearch_save' ,'uses'=>'AllController@titlessave']);
Route::post('advance/search/jobs/locationsave', ['as'=>'locationsearch_save' ,'uses'=>'AllController@locationsave']);
Route::post('advance/search/jobs/companysave', ['as'=>'companysearch_save' ,'uses'=>'AllController@companysave']);
Route::post('advance/search/jobs/datepostedsave', ['as'=>'datepostedsearch_save' ,'uses'=>'AllController@datepostedsave']);
Route::post('advance/search/jobs/typejobsave', ['as'=>'typesearch_save' ,'uses'=>'AllController@typejobsave']);

Route::group(['prefix'=>'admin', 'guard' => 'admin'],function(){
	Route::get('/login',['as'=>'admin_login','uses'=>'Auth\LoginController@showLoginForm']);    
	Route::post('/login',['as'=>'admin_login_post','uses'=>'Auth\LoginController@login']);  
	Route::get('/logout',['as'=>'admin_logout','uses'=>'Auth\LoginController@logout']);  

	Route::get('/home', ['as'=>'home' ,'uses'=>'HomeController@index']);   

	Route::resource('trades', 'TradeController');  

	Route::resource('childTrades', 'ChildTradeController');

	Route::resource('levels', 'LevelController');

	Route::resource('genders', 'GenderController');

	Route::resource('martials', 'MartialController');

	Route::resource('provinces', 'ProvinceController');

	Route::resource('employees', 'EmployeeController');

	Route::resource('postArticles', 'PostArticleController');

	Route::resource('imageArticles', 'ImageArticleController');

	Route::resource('commentArticles', 'CommentArticleController');

	Route::resource('likeArticles', 'LikeArticleController');

	Route::resource('hideArticles', 'HideArticleController');

	Route::resource('follows', 'FollowController');

	Route::resource('groupLevels', 'GroupLevelsController'); 

	Route::resource('groupTypes', 'GroupTypeController');

	Route::resource('groups', 'GroupsController');

	Route::resource('groupMembers', 'GroupMemberController');

	Route::resource('reportArticles', 'ReportArticleController');

	Route::resource('postVideos', 'PostVideoController');
 
	Route::resource('subcribes', 'SubcribeController'); 
	Route::resource('specialities', 'SpecialityController');

	Route::resource('industries', 'IndustryController');

	Route::resource('typeCompanies', 'TypeCompanyController');

	Route::resource('companies', 'CompanyController');

	Route::resource('companySpecialities', 'CompanySpecialityController');

	Route::resource('companyIndustries', 'CompanyIndustryController');

	Route::resource('skillNeeds', 'SkillNeedController');

	Route::resource('typeJobs', 'TypeJobController');

	Route::resource('employmentStatuses', 'EmploymentStatusController');
	 

	Route::resource('jobs', 'JobController');

	Route::resource('jobTypes', 'JobTypeController');

	Route::resource('jobPositions', 'JobPositionController');
	 

	Route::resource('jobApplyUsers', 'JobApplyUserController');

	Route::resource('jobSettingUsers', 'JobSettingUserController');

	Route::resource('jobSettingUsers', 'JobSettingUserController');

	Route::resource('jobSettingPositions', 'JobSettingPositionController');

	Route::resource('jobSettingTypes', 'JobSettingTypeController');

	Route::resource('jobSettingLocations', 'JobSettingLocationController');

	Route::resource('jobSkills', 'JobSkillController'); 

	Route::resource('subcribes', 'SubcribeController');

	Route::resource('surveys', 'SurveyController');

	Route::resource('questions', 'QuestionController');

	Route::resource('essaySurveys', 'EssaySurveyController');

	Route::resource('mcSurveys', 'McSurveyController');

	Route::resource('essayAnswers', 'EssayAnswerController');

	Route::resource('mcAnswers', 'McAnswerController');

	Route::resource('packageAnswers', 'PackageAnswerController');

	Route::resource('userSurveys', 'UserSurveyController');

	Route::resource('essayQuestions', 'EssayQuestionController');

	Route::resource('imageSurveys', 'ImageSurveyController');

	Route::get('pushNotif', ['as'=>'pushNotif' ,'uses'=>'PushNotifController@home']);

	Route::get('sendEmail', ['as'=>'sendEmail' ,'uses'=>'PushNotifController@sendEmail']); 

	Route::get('category_large', ['as'=>'category_large' ,'uses'=>'UserSurveyController@category_large']);

	Route::get('category_medium', ['as'=>'category_medium' ,'uses'=>'UserSurveyController@category_medium']);

	Route::get('category_small', ['as'=>'category_small' ,'uses'=>'UserSurveyController@category_small']);

	Route::get('mc_category_large', ['as'=>'mc_category_large' ,'uses'=>'McAnswerController@category_large']);

	Route::get('mc_category_medium', ['as'=>'mc_category_medium' ,'uses'=>'McAnswerController@category_medium']);

	Route::get('mc_category_small', ['as'=>'mc_category_small' ,'uses'=>'McAnswerController@category_small']);

	Route::get('package_category_large', ['as'=>'package_category_large' ,'uses'=>'PackageAnswerController@category_large']);

	Route::get('package_category_medium', ['as'=>'package_category_medium' ,'uses'=>'PackageAnswerController@category_medium']);

	Route::get('package_category_small', ['as'=>'package_category_small' ,'uses'=>'PackageAnswerController@category_small']);

	Route::get('survey_subscription', ['as'=>'survey_subscription' ,'uses'=>'SurveyController@survey_subscription']);
});


////requiter aid

Route::get('recruitment/dashboard',['as'=>'r_dashboard','uses'=>'RecruitmentController@dashboad']);
Route::get('recruitment/profile',['as'=>'r_profile','uses'=>'RecruitmentController@profile']);
Route::get('recruitment/candidates',['as'=>'r_candidates','uses'=>'RecruitmentController@candidates']);
Route::get('recruitment/campaigns',['as'=>'r_campaigns','uses'=>'RecruitmentController@campaigns']);
Route::get('recruitment/inbox',['as'=>'r_inbox','uses'=>'RecruitmentController@inbox']);
Route::get('recruitment/notification',['as'=>'r_notification','uses'=>'RecruitmentController@notification']);
Route::get('recruitment/interview',['as'=>'r_interview','uses'=>'RecruitmentController@interview']);
Route::get('recruitment/saved',['as'=>'r_saved','uses'=>'RecruitmentController@saved']);
Route::get('recruitment/employegrader',['as'=>'r_employegrader','uses'=>'RecruitmentController@employegrader']);
Route::get('recruitment/user',['as'=>'r_user','uses'=>'RecruitmentController@user']);
Route::get('recruitment/setting',['as'=>'r_setting','uses'=>'RecruitmentController@setting']);
Route::get('recruitment/setting/edit',['as'=>'r_settingedit','uses'=>'RecruitmentController@settingedit']);
Route::get('recruitment/help',['as'=>'r_help','uses'=>'RecruitmentController@help']);


// MAILCHIMP_API_KEY=f4313fdd5e96b75d39c748b9f0ee7c19-us16 
// admin
// Auth::routes();/


Route::get('user/api',[
	'as' => 'user.api',
	'uses' => 'AuthEmployee\RegisterController@tespage'
]); 

 View::composer(['dashboard_layouts.header','dashboard_layouts.menu','dashboard_layouts.app_create','all_include.searchheader'], function($view){
 	$employee = Employee::with('status')->find(Auth::user()->id);  
 	// dd($employee);
    $view_profile  =  ViewProfile::where('visitid',Auth::user()->id)->count(); 
    $statuses  =  EmploymentStatus::all(); 
	
	
    $view->with('useremploye',$employee);
    $view->with('view_profile',$view_profile);
    $view->with('statuses',$statuses);
  
});  

View::composer(['dashboard_layouts.midcontent','all_include.searchheader'], function($view){

	  $network = Follow::where('userid',Auth::user()->id)->count(); 

 	$follow = Follow::where('userid',Auth::user()->id)->get(); 

    $userid = [];
    foreach ($follow as $key => $fol) {
        $userid[] = $fol->followid;
    } 
    $following = Employee::with('follower')->whereNotIn('id',[Auth::user()->id])->whereNotIn('id',$userid)->paginate(4);   
    $view->with('follow',$following);
    $view->with('network',$network);

});

View::composer('dashboard_layouts.right', function($view){ 
	$route = Route::currentRouteName();
	$trending = PostArticle::with('images_post')->withCount('comments','likes')->orderBy('comments_count', 'desc')->orderBy('likes_count', 'desc')->orderBy('view','desc')->limit(4)->get(); 
    $view->with('trending',$trending)
    	->with('route',$route); 
});  


Route::resource('experiences', 'ExperienceController');

Route::resource('employeskills', 'EmployeskillController');

Route::resource('endorsments', 'EndorsmentController');

Route::resource('employeendorsments', 'EmployeendorsmentController');

Route::resource('certificates', 'CertificateController');

Route::resource('education', 'EducationController');

Route::resource('timelines', 'TimelineController');

Route::resource('tickets', 'TicketController');

Route::resource('medicals', 'MedicalController');

Route::resource('interests', 'InterestController');

Route::resource('duties', 'DutyController');

Route::resource('fitDuties', 'FitDutyController');

Route::resource('employeDuties', 'EmployeDutyController');

Route::resource('addtionals', 'AddtionalController');

Route::resource('conversations', 'ConversationController');

Route::resource('messages', 'MessageController'); 
 
Route::resource('userSurveys', 'UserSurveyController'); 
 
Route::resource('mcAnswers', 'McAnswerController');   

Route::get('survey/{email}', ['as'=>'survey' ,'uses'=>'SurveyController@home']);

Route::get('answer', ['as'=>'answer' ,'uses'=>'AnswerController@add']);

Route::get('test2', ['as'=>'test' ,'uses'=>'AllController@test2']); 

Route::resource('messageGroups', 'MessageGroupController');

Route::resource('packages', 'PackageController');

Route::resource('packageDetails', 'PackageDetailController');

Route::resource('packagePrices', 'PackagePriceController');

Route::resource('packagePrices', 'PackagePriceController');

Route::resource('packagePrices', 'PackagePriceController');


Route::resource('jobDurations', 'JobDurationController');

Route::resource('jobDurations', 'JobDurationController');

Route::resource('jobRotations', 'JobRotationController');

Route::resource('durationJobs', 'DurationJobController');

Route::resource('rotationJobs', 'RotationJobController');

Route::resource('conversationRecruits', 'ConversationRecruitController');

Route::resource('messageRecruits', 'MessageRecruitController');

Route::resource('conversationAdmins', 'ConversationAdminController');

Route::resource('messageAdmins', 'MessageAdminController');

Route::resource('graders', 'GraderController');

Route::resource('typeGraders', 'TypeGraderController');

Route::resource('hires', 'HireController');

Route::resource('postedTimes', 'PostedTimeController');

Route::resource('profileSearchSettings', 'ProfileSearchSettingController');

Route::resource('jobSearchSettings', 'JobSearchSettingController');

Route::resource('jobSearchSettingTitles', 'JobSearchSettingTitleController');

Route::resource('jobSearchSettingLocations', 'JobSearchSettingLocationController');

Route::resource('jobSearchSettingCompanies', 'JobSearchSettingCompanyController');

Route::resource('jobSearchSettingTypes', 'JobSearchSettingTypeController');

