Route::name('register')->prefix('register')->group(function () {

Route::get('/', function () {
return view('user.register');
});

Route::post('/', [RegistrationController::class, 'register']);

});
