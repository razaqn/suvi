<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:1,0');
    }

    public function index()
    {
        $mentor = Mentor::orderBy('id',)->get();
        return view('backend.mentor.index', compact('mentor'));
    }

    public function create()
    {
        return view('backend.mentor.create');
    }

    public function c_process(Request $request)
    {
        request()->validate([
            'image'     => 'required|max:2048|mimes:jpg,jpeg,png',
            'name'      => 'required',
            'desc'      => 'required',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:8',
        ]);

        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/mentor'), $image);
        
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'role_id'   => 2,
            'password'  => Hash::make($request->password),
        ]);

        Mentor::create([
            'user_id'   => $user->id,
            'image'     => $image,
            'name'      => $request->name,
            'desc'      => $request->desc,
        ]);

        return redirect()->route('mentor-index')->with('success', 'Item Created Successfully');
    }

    public function show($id)
    {
        if ($id == null) {
            return redirect()->route('backend.manage.mentor')->with('error', 'The ID is empty!');
        } else {
            $item = Mentor::find($id);

            if ($item) {
                return view('backend.mentor.show', compact('item'));
            } else {
                return redirect()->route('backend.manage.mentor')->with('error', "The #ID {$id} not found in Database!");
            }
        }
    }

    public function edit($id = null){
        if ($id == null){
            return redirect()->route('backend.manage.mentor')->with('error', "the ID is empty");
        } else{
            $item = Mentor::find($id);

            if ($item) {
                return view('backend.mentor.edit', compact('item'));
            } else {
                return redirect()->route('backend.manage.mentor')->with('error', "The #ID {$id} not found in Database!");
            }

        }
    }

    public function edit_process(Request $request)
    {
        request()->validate([
            'image'     => 'required|max:2048|mimes:jpg,jpeg,png',
            'name'      => 'required',
            'slug'      => 'required',
            'email'     => 'required',
            'about'     => 'required',
        ]);

        $teacher = Mentor::find($request->id);

        if (public_path('image/mentor/'. $teacher->image))
            unlink(public_path('image/mentor/'.$teacher->image));

        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('image/mentor'), $image);

        Mentor::where('id', $request->id)->update(([
            'image'     => $image,
            'name'      => $request->name,
            'slug'      => $request->slug,
            'email'     => $request->email,
            'about'     => $request->about,
        ]));

        return redirect()->route('backend.manage.mentor')->with('success', 'Item Edited Successfully');
    }

    public function destroy(Request $id){
        $item = Mentor::find($id);

        if(public_path('images/mentor/', $item->image))
        unlink(public_path('images/mentor/'.$item->image));

        $item->delete();

        return redirect()->route('mentor-index')->with('success', 'Item deleted successfully');
    }
}
