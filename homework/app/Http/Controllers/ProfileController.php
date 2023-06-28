<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Utilities\Common;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function index() {
        if (Auth::check()) {
            $user = Auth::user();
            return view('front.profile.profile',compact('user'));
        }
        return view('front.profile.profile');
    }

    function showEdit() {
        if (Auth::check()) {
            $user = Auth::user();
            return view('front.profile.profile-edit',compact('user'));
        }
        return view('front.profile.profile-edit');
    }

    public function update(Request $request)
    {
        if (Auth::check()) {

        $data = request()->except(['_token', '_method', 'image_old', 'image']);

//             xử lí file ảnh
        if ($request->hasFile('image')) {
            //thêm file mới:
            $data['avatar'] = Common::uploadFile($request->file('image'), './front/img/user/');

            //xóa file có:
            $file_name_old = $request->get('image_old');
            if ($file_name_old != '') {
                unlink('front/img/user/' . $file_name_old);
            }
        }

            // cập nhập dữ liệu
             User::where('id', Auth::id())->update($data);

            return redirect('./profile');
        }
    }
}
