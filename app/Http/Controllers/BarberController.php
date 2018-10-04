<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barber;

class BarberController extends Controller
{
    public function create(Request $request) {
        $barber = new Barber();
        $barber->f_name = $request->f_name;
        $barber->l_name = $request->l_name;
        $barber->save();
        return redirect('barbers');
    }
}
