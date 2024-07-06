<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Helpers\SiteHelper;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvController extends Controller
{
    public function downloadCsv(Request $request)
    {
        $role = session()->get('role');
        $userIds = Chat::with('second_user')
            ->where('first_user_id', SiteHelper::getLoginUserId())
            ->where('status', 'requested')
            ->get()
            ->pluck('second_user.id')->toArray();

        $export = new UsersExport($userIds);

        return Excel::download($export, 'invited-influencers.xlsx');
    }

    public function downloadCsvFavouriteInfluencer(Request $request)
    {
        $influencers = User::with(['city', 'country', 'state', 'role', 'user_professional_detail'])->has('favourites')->whereHas('role', function ($Role) {
            $Role->where('code', 'influencer');
        })->whereHas('favourites', function ($favourite) use ($request) {
            $favourite->where('user_id', SiteHelper::getLoginUserId());
        })->get()->pluck('id')->toArray();

        $export = new UsersExport($influencers);

        return Excel::download($export, 'favourite-influencers.xlsx');
    }
}
