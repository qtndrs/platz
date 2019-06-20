<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('profile.show');
    }
    public function update_avatar(Request $request){

            $request->validate([
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $user = Auth::user();

            $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

            $request->avatar->storeAs('avatar',$avatarName);

            $user->avatar = $avatarName;
            $user->save();

            return back()->with('success','You have successfully upload image.');

        }

}
