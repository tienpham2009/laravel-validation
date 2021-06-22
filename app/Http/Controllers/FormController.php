<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function checkValidation(FormExampleRequest $exampleRequest)
    {
        $success = "Dữ liệu được xác thực thành công";
        return view('welcome', compact('success'));
    }
}
