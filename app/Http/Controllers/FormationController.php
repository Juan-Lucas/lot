<?php

namespace App\Http\Controllers;

use App\Models\CategoryFormation;
use App\Models\Formation;

class FormationController extends Controller
{

    public $categories = [];

    public $formations = [];

    /**
     * @param array $categories
     */
    public function __construct()
    {
        $this->categories = CategoryFormation::with('formations')->get();
        $this->formations = Formation::with('category_formation')->simplePaginate(3);
    }


    public function index()
    {

        return view('pages.formations.formations');
    }

    public function show(int $formation_id)
    {
        $categories = $this->categories;

        $formations = $this->formations;

        $formation = Formation::find($formation_id);

        return view('pages.formations.formation', compact('formation','categories','formations'));
    }
}
