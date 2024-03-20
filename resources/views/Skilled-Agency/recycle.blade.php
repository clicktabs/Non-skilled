@extends('layouts.app')
@section('extra_css')



@endsection
@section('content')
<main>
    <div class="vs jj ttm vl ou uf na">
        <div class="y pr dw jk rounded-sm la rc !bg-[#4133BF]">
            <div class="g q k ip id pointer-events-none hidden tnh" aria-hidden="true">
                <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                        <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                        <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                            <stop stop-color="#A5B4FC" offset="0%"></stop>
                            <stop stop-color="#818CF8" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                            <stop stop-color="#4338CA" offset="0%"></stop>
                            <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g fill="none" fill-rule="evenodd">
                        <g transform="rotate(64 36.592 105.604)">
                            <mask id="welcome-d" fill="#fff">
                                <use xlink:href="#welcome-a"></use>
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                            <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
                        </g>
                        <g transform="rotate(-51 91.324 -105.372)">
                            <mask id="welcome-f" fill="#fff">
                                <use xlink:href="#welcome-e"></use>
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                            <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path>
                        </g>
                        <g transform="rotate(44 61.546 392.623)">
                            <mask id="welcome-h" fill="#fff">
                                <use xlink:href="#welcome-g"></use>
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                            <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="y">
                <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]">Recycle  <span>(</span> {{$schedule->task}} <span>)</span> </h1>
            </div>
        </div>
        <div class="je jd jc rc">
            <div class="sn am jo az jp ft">
                <a type="button" href="{{ route('dashboard') }}" class="btn ho xi ye">
                    <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                        <path d="M11.77 14.36a.75.75 0 01-.53-.22l-7.5-7.5a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L5.81 8l6.5 6.5a.75.75 0 01-.53 1.28z"></path>
                    </svg>
                    <span class="hidden trm nq">Back</span>
                </a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                <div class="dk">
                    <!-- Table -->
                    <div class="lf">
                        <table class="ux ou display nowrap" style="width:100%">
                            <!-- Table header -->
                            <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                                <th>#</th>
                                <th>Date</th>
                                <th>Action</th>
                            </thead>
                            <tbody class="text-sm gp le ln">
                                @foreach ($forms as $form)
                                    <tr class="active cursor-pointer ">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $form->created_at->format('d M, Y') }}: {{ $form->created_at->format('h:i A') }}</td>
                                        <td><a href="{{ route('skilled-agency.task-form', ['data' => $form->schedule_id]) }}" class="btn btn-primary">Open</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('extra_js')

@endsection
