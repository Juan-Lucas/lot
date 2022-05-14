<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Formation;

class ShowFormationController extends Controller
{

    public function __invoke(int $formation_id)
    {
        $formation = Formation::find($formation_id);

        return view('pages.admin.pages.show-formation', compact('formation'));
    }
}
