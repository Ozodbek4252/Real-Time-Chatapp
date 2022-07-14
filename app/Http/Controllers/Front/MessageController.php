<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function conversation($userId)
    {
        $users = User::where('type', '!=', 'admin')->where('id', '!=', auth()->user()->id)->get();
        $friendInfo = User::findOrFail($userId);
        $myInfo = auth()->user();

        $this->data['users'] = $users;
        $this->data['friendInfo'] = $friendInfo;
        $this->data['myInfo'] = $myInfo;

        return view('front.messages.conversation', $this->data);
    }
}
