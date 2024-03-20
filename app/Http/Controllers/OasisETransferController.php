<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EtransferStoreRequest;
use App\Models\Etransfer;
use App\Models\QaList;
use App\Models\Schedule;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;


class OasisETransferController extends Controller
{
    public function index()
    {
        return view('home-healthcare.oasis-e-transfer');
    }

    // public function store(EtransferStoreRequest $request)
    // {
    //     $etransfer = Etransfer::create($request->validated());
    //     return redirect()->back()->with('success', 'OASIS E Transfer saved successfully.');
    // }

    public function store(Request $request)
{
    try {

        $etransfer = Etransfer::create([
            'schedule_id' => $request->schedule_id,
            'dopca' => $request->dopca,
            'assessment_month' => $request->assessment_month,
            'assessment_day' => $request->assessment_day,
            'assessment_year' => $request->assessment_year,
            'startOfCare' => $request->startOfCare,
            'resumption_of_care' => $request->resumption_of_care,
            'recertification' => $request->recertification,
            'otherFollowUp' => $request->otherFollowUp,
            'transferredNotDischarged' => $request->transferredNotDischarged,
            'transferredDischarged' => $request->transferredDischarged,
            'deathAtHome' => $request->deathAtHome,
            'dischargeFromAgency' => $request->dischargeFromAgency,
            'assessment_month2' => $request->assessment_month2,
            'assessment_day2' => $request->assessment_day2,
            'assessment_year2' => $request->assessment_year2,
            'EmergentCare' => $request->EmergentCare,
            'reason_for_emergent_care' => $request->reason_for_emergent_care,
            'wifpa' => $request->wifpa,
            'pcrmltsp' => $request->pcrmltsp,
            'route_of_transmission' => $request->route_of_transmission,
            'pfsrwmr' => $request->pfsrwmr,
            'boxA' => $request->boxA,
            'boxB' => $request->boxB,
            'boxC' => $request->boxC,
            'MedicationIntervention' => $request->MedicationIntervention,
            'fpi' => $request->fpi,
            'dimrtmp' => $request->dimrtmp,
            'itmamp' => $request->itmamp,
            'itppu' => $request->itppu,
            'putpmwh' => $request->putpmwh,
        ]);
        $qaList = QaList::updateOrInsert(
            ['schedule_id' => $request->schedule_id],
            ['status' => 0]
        );

        $schedule = Schedule::where('id', $request->schedule_id)->first();
        $schedule->scheduling_status = 'pending';
        $schedule->save();

        return redirect()->route('patients.qa')->with('success', 'OASIS E Transfer saved successfully.');
    } catch (\Exception $e) {
        // Log the exception or handle it as needed
        return $e;
        return redirect()->back()->with('error', 'Error saving OASIS E Transfer. Please try again.');
    }
}

}
