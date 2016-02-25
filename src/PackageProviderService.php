<?php

namespace Hoang\Hiep;

use Illuminate\Support\ServiceProvider;

class PackageProviderService extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        //function nạp routes - view - controller trong dịch vụ
        include_once __DIR__ . '/routes.php';
        // đoạn này là tạo không gian tên để gọi đến view
        // views_package đại diện thư mục views trong package
        $this->loadViewsFrom(__DIR__ . "/views", "views_package");
        // chia sẻ thư mục này với thư mục khác bằng 2 tham số
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/hoang/hiep/'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        // function viết các clas phụ thuộc trong dich vụ vào container thùng chứa dịch vụ
    }

}
