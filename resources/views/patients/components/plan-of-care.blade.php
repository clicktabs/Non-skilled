<div class="">
    <div class="row mb-4">
        <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
            <div class="dk mt-4">
                <div class="lf w-auto">
                    <table class="ux ou" id="orderTable">
                        <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                            <tr>
                                <th></th>
                                <th class="dx">
                                    <div>Patient</div>
                                </th>
                                <th class="dx">
                                    <div>Physician</div>
                                </th>
                                <th class="dx">
                                    <div>Order Date</div>
                                </th>
                                <th class="dx">
                                    <div>Receive Date</div>
                                </th>
                                <th class="dx">
                                    <div>Action</div>
                                </th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody class="text-sm gp le ln">
                            @forelse ($data as $key => $item)
                                @if ($item['type'] == 'CMS')
                                    <tr class="active cursor-pointer ">
                                        <td></td>
                                        <td class=""><div>{{ $item['patient_fname'] }} {{ $item['patient_lname'] }}</div></td>
                                        <td class=""><div>{{ $item['physician_name'] }}</div></td>
                                        <td class=""><div>{{ $item['created_at'] }}</div></td>
                                        <td class=""><div>{{ !empty($item['receive_date']) ? $item['receive_date'] : '' }}</div></td>
                                        <td class="">
                                            <div>
                                                @if(!empty($item['pdf_path']))
                                                    <a href="{{ asset('pdfs/'.$item['pdf_path']) }}" class="btn btn-primary" target="_blank"> Print </a>
                                                @else
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="7">No data available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


