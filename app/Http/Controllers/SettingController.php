<?php

namespace App\Http\Controllers;

use App\Periode;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $periode = Periode::first();

        return view('pages.settings.index')->with([
            "periode" => $periode
        ]);
    }

    public function updatePeriode(Request $request, $id)
    {
        $this->validate($request, [
            "periode" => "required|min:9|max:9"
        ]);

        $periode = Periode::findOrFail($id);

        $data = $request->all();

        $periode->update($data);

        return redirect()
            ->route('pengaturan.index');
    }
}
