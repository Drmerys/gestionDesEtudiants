<?php

namespace App\Http\Controllers;

use App\Models\Upgrade;

class UpgradeController extends Controller
{
    public function showUpgrade()
    {
        $title = "Les notes ";
        $getUpgrades = Upgrade::all();
        //$this->addUpgrade();

        return view('student.upgrade', [
            'title' => $title,
            'upgrades' => $getUpgrades
        ] );
    }

    public function addUpgrade()
    {
          $matter =  Upgrade::create([
              'matter' => 'Observer', 'upgrade' => 15 ,'date' => now(), 'average' => 15
          ]);

        $matter->save();
    }

    public function deleteUpgrade()
    {

    }

    public function updateUpgrade()
    {

    }
}
