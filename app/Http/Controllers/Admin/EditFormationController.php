<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryFormation;
use App\Models\Formation;
use Illuminate\Http\Request;

class EditFormationController extends Controller
{

    public function __invoke(int $formation_id)
    {
        $formation = Formation::find($formation_id);

        $categories = CategoryFormation::all();

        return view('pages.admin.pages.edit-formation', compact('formation', 'categories'));
    }
}
