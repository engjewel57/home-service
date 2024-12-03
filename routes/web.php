<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomeComponent;
use App\Livewire\Customer\CustomerDashbboardComponent;
use App\Livewire\Admin\AdminDashboardComponent;
use App\Livewire\Sprovider\SproviderDashboardComponent;
use \App\Livewire\ServiceCategoryComponent;
use App\Livewire\Admin\AminServiceCategoryComponent;
use App\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Livewire\ServicesByCategoryComponent;
use App\Livewire\Admin\AdminServicesComponent;
use App\Livewire\Admin\AdminServicesByCategoryComponent;
use App\Livewire\Admin\AdminAddServiceComponent;
use App\Livewire\ServiceDetailsComponent;
use App\Livewire\Admin\AdminEditServiceComponent;
use App\Http\Controllers\SearchController;
use App\Livewire\ChangeLocationComponent;
use App\Livewire\Sprovider\SproviderProfileComponent;
use App\Livewire\Sprovider\RditSproviderProfileComponent;
use App\Livewire\ContactComponent;
use App\Livewire\Admin\AdminContactComponent;
use App\Livewire\ServicpComponent;
use App\Livewire\AboutUsComponent;
use App\Livewire\Admin\AdminServiceProviderComponent;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',HomeComponent::class)->name('home');
Route::get('/service-category',ServiceCategoryComponent::class)->name('home.service_categories');
Route::get('/{category_slug}/services',ServicesByCategoryComponent::class)->name('home.services_by_category');
Route::get('/service/{service_slug}',ServiceDetailsComponent::class)->name('home.service_details');


Route::get('/autocomplete',[SearchController::class,'autocomplete'])->name('autocomplete');
Route::post('/search',[SearchController::class, 'searchService'])->name('searchService');


Route::get('/change-location',ChangeLocationComponent::class)->name('home.change_location');
Route::get('/contact/dashboard',ContactComponent::class)->name('home.contact');
Route::get('/about/',AboutUsComponent::class)->name('home.about');

Route::get('/servicep',ServicpComponent::class)->name('home.servicep');

//Customer
Route::middleware(['auth:sanctum', 'verified','authcustomer'])->group(function (){
    Route::get('/customer/dashboard',CustomerDashbboardComponent::class)->name('customer.dashboard');
});
//services provider
Route::middleware(['auth:sanctum', 'verified','authsprovider'])->group(function (){
    Route::get('/sprovider/dashboard',SproviderDashboardComponent::class)->name('sprovider.dashboard');
    Route::get('/sprovider/profile',SproviderProfileComponent::class)->name('sprovider.profile');
    Route::get('/sprovider/profile/edit',RditSproviderProfileComponent::class)->name('sprovider.edit_profile');
});

//admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function (){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/service-categories',AminServiceCategoryComponent::class)->name('admin.service_categories');
    Route::get('/admin/service-category/add',AdminAddServiceCategoryComponent::class)->name('admin.add_service_category');
    Route::get('/admin/service-category/edit/{category_id}',AdminEditServiceCategoryComponent::class)->name('admin.edit_service_category');
   Route::get('/admin/all-services',AdminServicesComponent::class)->name('admin.all_services');
   Route::get('/admin/{category_slug}/services',AdminServicesByCategoryComponent::class)->name('admin.services_by_category');
   Route::get('/admin/service/add',AdminAddServiceComponent::class)->name('admin.add_service');
   Route::get('/admin/service/edit{service_slug}',AdminEditServiceComponent::class)->name('admin.edit_service');
   Route::get('/admin/contacts',AdminContactComponent::class)->name('admin.contact');
   Route::get('/admin/service-provider',AdminServiceProviderComponent::class)->name('admin.service_provider');

});


