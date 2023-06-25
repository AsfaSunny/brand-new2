<?php

use App\Http\Controllers\DemaController;
use App\Http\Controllers\Exam\FirstController;
use App\Http\Controllers\Exam\SecondController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/ch', function () {
//     dd(app());
// });

Route::get('/testone', function () {
    Tester::tester();
});

Route::get('/testtwo', function () {
    Tester::subtract();
});

// Route::get('/country', function () {
//    return view('morning');
// })->middleware('Morning');



// Route::get('/contact', function () {return view('contact');})->name('contact.us');
Route::get('/contact', [FirstController::class, 'index'])->name('contact.us');

Route::post('/contact/store', [FirstController::class, 'store'])->name('contact.store');



Route::get('/logg', function (Request $request) {
    $log_file = file(storage_path() . '/logs/contact.log');

    $collection = [];
    foreach($log_file as $line_num => $line){
        $collection[] = array('line' => $line_num, 'contact' => htmlspecialchars($line));
    }

    dd($collection);
});



Route::get('/server', DemaController::class);


Route::get('/country', [FirstController::class, 'country'])->middleware('Morning');



Route::get('/load/stu', [FirstController::class, 'loader_form'])->name('stu.store');

Route::post('/store/stu', [FirstController::class, 'store'])->name('stu.store');

Route::get('/second', [SecondController::class, 'testTwo']);


Route::get('/test/sess', function(Request $request){
    session(['name' => 'Sunny']);
    $request->session()->put('age', '22');
});


Route::get('/sess/all', function(Request $request){
    return $request->session()->all();

    // $request->session()->flush();
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
