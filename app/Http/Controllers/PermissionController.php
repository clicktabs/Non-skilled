<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\RaceRequest;
use App\Models\Organization;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $companyId = "";
        // switch(Auth::user()->organization_id) {
        //     case(null):
        //         $companyId = '0';
        //         $organizations = Organization::orderByDesc('created_at')->get();
        //         break;

        //     default:
        //         $companyId = Auth::user()->organization_id;
        //         $organizations = Auth::user()->organization_id;

        // }

        $permissions = Permission::get();
        $heading = 'Permissions List';   
        $roles=[];
        $url="permission.store";     
        return view('permissions.index', compact('permissions', 'roles', 'heading','url'));
       

    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        $heading = 'Permissions List';   
        $roles=[];
        $url="permission.store";     
        return view('permissions.create', compact('permission', 'roles', 'heading','url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RaceRequest $request)
    {
        //
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['company_id'] = $request->organisation_id;
        try{

            Race::create($validated);
            return redirect()->route('races.index')->with('success', 'Success. '. $validated['race_type'] . ' was created successfully. ');

        }catch (\Throwable $th){
            dd($th->getMessage());
            // return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function show(Race $race)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addon_id = decrypt($id);

        $addonRace = Race::where('id', $addon_id)->first();

        return view('addons.races.edit', compact('addonRace', 'id', ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function update(RaceRequest $request)
    {
        $addon_id = decrypt(request('id'));

        try {

            $addonRace = Race::where('id', $addon_id)->first();

            $addonRace->race_type = request('race_type');
            $addonRace->reference_code = request('reference_code');
            $addonRace->save();

            return redirect()->route('races.index');
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function destroy(Race $race)
    {
        //
    }

    public function change_status(Request $req, Race $race)
    {
        $race_id = decrypt($req->race_id);

        $outcome = $race->changeStatus($race_id);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
