<?php

namespace App\Http\Controllers;

use App\Models\ApplicationSetting;
use Illuminate\Http\Request;
use App\Models\User;

class OnlineStatusController extends Controller
{
    public function settingView()
    {
        $data = [
            'status_online' => ApplicationSetting::where('slug', 'service-status')->first(),
        ];
        return view('page.statusOnline', $data);
    }

    /**
     * Set status layanan online.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function setOnlineStatus(Request $request)
    {
        ApplicationSetting::where('slug', 'service-status')->update([
            'value' => $request->input('status')
        ]);
        return redirect()->back();
    }
}
