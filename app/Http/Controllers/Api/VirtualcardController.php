<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Virtualcard;
use Illuminate\Http\Request;

class VirtualcardController extends Controller
{
    private $virtualcard;
    public function __construct(Virtualcard $virtualcard)
    {
        $this->virtualcard = $virtualcard;
    }

    public function index()
    {
        $virtualcards = $this->virtualcard->paginate(1);
        return response()->json($virtualcards);
    }

    public function save(Request $request)
    {
        $data = $request->all();
        $virtualcard = $this->virtualcard->create($data);
        return response()->json($virtualcard);
    }
}
