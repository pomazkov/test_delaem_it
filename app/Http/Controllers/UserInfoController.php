<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\UserInfoResource;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{

    public function index()
    {
        $usersInfo = UserInfo::all();
        return view('welcome', ['usersInfo' => $usersInfo]);

    }


    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $usersInfo = UserInfo::create($data);

        return UserInfoResource::make($usersInfo);

    }

    public function show(UserInfo $userInfo)
    {
        return UserInfoResource::make($userInfo);

    }


    public function update(UpdateRequest $request, UserInfo $userInfo)
    {
        $data = $request->validated();
        $userInfo->update($data);
        return UserInfoResource::make($userInfo);
    }


    public function destroy(UserInfo $userInfo)
    {
        $userInfo->delete();
        return "Мы удалили пост номер " . $userInfo['id'];
    }
}
