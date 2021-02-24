<?php
namespace App\Observers;

use App\Notifications\NewHome;
use App\Home;
use App\User;

class HomeObserver
{
    public function created(Home $home)
    {
        $author = $home->user;
        $users = User::all();
        foreach ($users as $user) {
            $user->notify(new NewItem($home,$author));
        }
    }
}