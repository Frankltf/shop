<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
class OrderController extends Controller
{
    //
    public function queue(){
    	dispatch(new SendEmail());
    	echo "end";
    }
}
