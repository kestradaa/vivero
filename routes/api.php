<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('users', function () {
    return datatables(App\User::latest('updated_at')->get())
        ->addColumn('actions', 'users.partials.actions')
        ->rawColumns(['actions'])
        ->toJson();
});

Route::get('roles', function () {
    return datatables(Caffeinated\Shinobi\Models\Role::all())
        ->addColumn('actions', 'roles.partials.actions')
        ->rawColumns(['actions'])
        ->toJson();
});

Route::get('plants', function () {
    return datatables(App\Plant::latest('updated_at')->get())
    ->addColumn('actions', 'plants.partials.actions')
    ->rawColumns(['actions'])
    ->toJson();
});

Route::get('employees', function () {
    return datatables(App\Employee::latest('updated_at')->get())
    ->addColumn('actions', 'employees.partials.actions')
    ->rawColumns(['actions'])
    ->toJson();
});

Route::get('bags', function () {
    return datatables(App\Bag::latest('updated_at')->get())
    ->addColumn('actions', 'bags.partials.actions')
    ->rawColumns(['actions'])
    ->toJson();
});

Route::get('losses', function () {
    return datatables(App\Loss::latest('updated_at')->get())
    ->addColumn('actions', 'losses.partials.actions')
    ->rawColumns(['actions'])
    ->toJson();
});

Route::get('withdrawals', function () {
    return datatables(App\Loss::latest('updated_at')->get())
    ->addColumn('actions', 'withdrawals.partials.actions')
    ->rawColumns(['actions'])
    ->toJson();
});
