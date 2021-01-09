<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepositoryInterface;
use App\Rules\ValidUser;
use Session;

class UserController extends Controller
{
    //
    protected $repo_user;

    public function __construct(UserRepositoryInterface $repo_User)
    {
        $this->repo_user = $repo_User;
    }

    public function index(Request $request)
    {
        return view('sampleValidation');
    }
    public function store(Request $request)
    {
        // dd($request->age);

        $this->validate(
            $request,
            [
                'name'=>'required',
                'age'=>['required', 'integer', new ValidUser($request->age)]
                // 'age'=>['required', 'integer']
            ]
        );

        $this->repo_user->store(
            $request->only($this->repo_user->getModel()->fillable)
        );

        Session::flash('success', 'You successfully added a user');
        return redirect()->back();
    }
}
