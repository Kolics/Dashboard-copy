<?php
namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Leaderboard;

class LeaderboardController extends Controller
{
    public function printLeaderboard(string $cluster)
    {
        //table called leaderboards, yes PLURAL
        return Inertia::render('Leaderboard/Leaderboard', [
            'cluster' => $cluster,
            'leaderboard' => Leaderboard::where('cluster', $cluster)->orderByDesc('score')->get(),
        ]);
    }
}

?>