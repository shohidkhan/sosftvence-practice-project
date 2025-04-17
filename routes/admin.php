    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Web\Backend\Admin\DashboardController;


    Route::get("/dashboard",[DashboardController::class,'index'])->name('dashboard');