<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtransferStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'dopca' => 'nullable|integer',
            'assessment_month' => 'nullable|string|max:255',
            'assessment_day' => 'nullable|string|max:255',
            'assessment_year' => 'nullable|string|max:255',
            'startOfCare' => 'nullable|string',
            'resumption_of_care.*' => 'string',
            'startOfCare' => 'nullable|string',
            'resumption_of_care' => 'nullable|string',
            'recertification' => 'nullable|string',
            'otherFollowUp' => 'nullable|string',
            'transferredNotDischarged' => 'nullable|string',
            'transferredDischarged' => 'nullable|string',
            'deathAtHome' => 'nullable|string',
            'dischargeFromAgency' => 'nullable|string',
            'assessment_month2' => 'nullable|string|max:255',
            'assessment_day2' => 'nullable|string|max:255',
            'assessment_year2' => 'nullable|string|max:255',
            'EmergentCare' => 'nullable|integer',
            'reason_for_emergent_care.*' => 'string',
            'wifpa' => 'nullable|integer',
            'pcrmltsp' => 'nullable|integer',
            'route_of_transmission.*' => 'string',
            'pfsrwmr' => 'nullable|integer',
            'boxA' => 'nullable',
            'boxB' => 'nullable',
            'boxC' => 'nullable',
            'MedicationIntervention' => 'nullable',
            'fpi' => 'nullable',
            'dimrtmp' => 'nullable',
            'itmamp' => 'nullable',
            'itppu' => 'nullable',
            'putpmwh' => 'nullable',
        ];
    }
}
