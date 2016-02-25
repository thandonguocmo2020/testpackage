<?php

namespace Hoang\Hiep;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function testPackage(){
        
//        echo "Hello World 2";
        // sau đấu 2 chấm là gọi đến file trong thư mục con của views
        return view("hoang.hiep.testview");
    }
}
