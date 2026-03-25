use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return "Simple Store is working!";
});

Route::resource('products', ProductController::class);