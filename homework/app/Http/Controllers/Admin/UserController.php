<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utilities\Common;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $search = $request->search ?? '';
        $users = User::where('name','like','%' . $search . '%');
        $users = $users->paginate(5);

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->get('password') != $request->get('password_confirmation')) {
            return back()
                ->with('notification', 'ERROR: Confirm password does not match');
        }

        $data = $request->all();
//        $data = request()->except(['_token', '_method', 'password_confirmation', 'image_old', 'image']);
        $data['password'] = bcrypt($request->get('password'));

        // xử lí file
        if ($request->hasFile('image')) {
            $data['avatar'] = \App\Utilities\Common::uploadFile($request->file('image'), './front/img/user');
        }

//        $user = $this->userService->create($data);
        $user = User::create($data);


        return redirect('admin/user/' . $user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
//        $data = $request->all();
        $data = request()->except(['_token', '_method', 'password_confirmation', 'image_old', 'image']);

        // xử lí mật khẩu
        if ($request->get('password') != null) {
            if($request->get('password') != $request->get('password_confirmation')) {
                return back()->with('notification', 'ERROR: Confirm password does not match');
            }

            $data['password'] = bcrypt($request->get('password'));
        } else {
            unset($data['password']);
        }

        // xử lí file ảnh
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
//        $this->update($data, $user->id);

        User::where('id', $user->id)->update($data, $user->id);

        return redirect('admin/user/' . $user->id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        // xóa file
        $file_name = $user->avatar;
        if ($file_name != '') {
            unlink('front/img/user/' . $file_name);
        }

        return redirect('admin/user');
    }
}
