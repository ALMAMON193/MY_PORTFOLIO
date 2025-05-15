<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use App\Models\PersonalInformation;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    use ResponseTrait;
    public function about(Request $request)
    {
      $data = PersonalInformation::first();
      return $this->sendResponse($data, 'User information about section', 200);

    }
}
