  <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Middleware\CheckUser;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/UploadUser','UploadUserController@index');
Route::post('/UploadUser','UploadUserController@update');

Route::get('/UploadMeasureLog','UploadMeasureLogController@index');
Route::post('/UploadMeasureLog','UploadMeasureLogController@update');

Route::get('/UploadSleepSummary','UploadSleepSummaryController@index');
Route::post('/UploadSleepSummary','UploadSleepSummaryController@update');

Route::get('/GetHeartrate','GetHeartrateController@index');
Route::post('/GetHeartrate','GetHeartrateController@get');

Route::get('/GetDaySteps','GetDayStepsController@index');
Route::post('/GetDaySteps','GetDayStepsController@get');

Route::get('/GetExerciseCalories','GetExerciseCaloriesController@index');
Route::post('/GetExerciseCalories','GetExerciseCaloriesController@get');

Route::get('/GetRestCalories','GetRestCaloriesController@index');
Route::post('/GetRestCalories','GetRestCaloriesController@get');

Route::get('/GetTotalCalories','GetTotalCaloriesController@index');
Route::post('/GetTotalCalories','GetTotalCaloriesController@get');

Route::get('/GetSleepInterval','GetSleepIntervalController@index');
Route::post('/GetSleepInterval','GetSleepIntervalController@get');

Route::get('/GetDeepLightTime','GetDeepLightTimeController@index');
Route::post('/GetDeepLightTime','GetDeepLightTimeController@get');

//Route::get('/UserLogin','UserLoginController@index');
//Route::post('/UserLogin','UserLoginController@verify')->middleware(CheckUser::Class);

