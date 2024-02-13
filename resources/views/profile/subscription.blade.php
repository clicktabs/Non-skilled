<div class="bg-white bd rounded-sm rc" id="tabs-subscription">
    <div class="">
        <div class="row">
            <div class="container p-5">

                <div class="table-responsive2">
                        <div class="col !bg-[#4133BF] p-2">
                            <h2 class="text-center text-white" style="font-weight: bold; font-size:2em;">Home Health Care Subsciption Plan</h2>
                    </div>
                    <table class="table table-bordered table-striped tableDesign">
                        <thead class="thead-dark">
                            <tr>
                                <th class="w-35" >Package Name</th>
                                <th class="w-15">Min Patients</th>
                                <th class="w-15">Max Patients</th>
                                <th class="w-15">Cost</th>
                                <th class="w-20">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscriptionPlans->where('type', 'Home healthcare') as $subscriptionPlan)
                            <tr>
                                <td>{{ $subscriptionPlan->package_name }}</td>
                                <td>{{ $subscriptionPlan->min_patient }}</td>
                                <td>{{ $subscriptionPlan->max_patient }}</td>
                                <td>$ {{ $subscriptionPlan->amount }}</td>
                                <td>
                                    @if (!empty($existingSubscription) && $existingSubscription->subscription_plan_id == $subscriptionPlan->id)
                                        @if ($existingSubscription->status == 'pending')
                                            <button class="btn btn-warning"><span>Pending</span></button>
                                        @elseif($existingSubscription->status == 'active')
                                            <button class="btn btn-success"><span>Activated</span></button>
                                        @else
                                            <button  class="btn btn-danger"><span>Inactivated</span></button>
                                        @endif
                                    @else
                                        <a href="{{ route('subscriptions.process-payment',$subscriptionPlan->id) }}" class="btn ho xi ye">Buy Now</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                {{-- <div class="table-responsive2">
                        <div class="col !bg-[#4133BF]">
                            <h2 class="text-center text-white" style="font-weight: bold; font-size: 2em;">Combo Subscription Plan</h2>
                        </div>
                    <table class="table table-bordered table-striped tableDesign">
                        <thead class="thead-dark">
                            <tr>
                                <th class="w-35">Package Name</th>
                                <th class="w-15">Min Patients</th>
                                <th class="w-15">Max Patients</th>
                                <th class="w-15">Cost</th>
                                <th class="w-20">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscriptionPlans->where('type', 'Combo') as $subscriptionPlan)
                            <tr>
                                <td>{{ $subscriptionPlan->package_name }}</td>
                                <td>{{ $subscriptionPlan->min_patient }}</td>
                                <td>{{ $subscriptionPlan->max_patient }}</td>
                                <td>$ {{ $subscriptionPlan->amount }}</td>
                                <td>
                                    @if (!empty($existingSubscription) && $existingSubscription->subscription_plan_id == $subscriptionPlan->id)
                                        @if ($existingSubscription->status == 'pending')
                                            <button class="btn btn-warning"><span>Pending</span></button>
                                        @elseif($existingSubscription->status == 'active')
                                            <button class="btn btn-success"><span>Activated</span></button>
                                        @else
                                            <button class="btn btn-danger"><span>Inactivated</span></button>
                                        @endif
                                    @else
                                        <a href="{{ route('subscriptions.process-payment',$subscriptionPlan->id) }}" class="btn ho xi ye">Buy Now</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> --}}


            </div>
        </div>
    </div>

</div>
