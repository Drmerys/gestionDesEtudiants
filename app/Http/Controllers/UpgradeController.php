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

        return view('upgrade.upgrade', [
            'title' => $title,
            'upgrades' => $getUpgrades
        ] );
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
          return view('upgrade.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//          $matter =  Upgrade::create([
//              'matter' => 'Observer', 'upgrade' => 15 ,'date' => now(), 'average' => 15
//          ]);
//
//        $matter->save();
        return redirect('upgrade')->with('success', 'Etudiant ajouté avec succès');
    }

    public function deleteUpgrade()
    {

    }

    public function updateUpgrade()
    {

    }
}
