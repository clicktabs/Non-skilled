@extends('layouts.app')

@section('content')
<style>
    .vt{
        background-image: linear-gradient(rgb(238, 239, 192), rgb(203, 242, 240));
        border-radius: 4px;
    }
</style>

    <main>
        <div class="vs jj ttm vl ou uf na">
            <div class="row mb-4">
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <div class="dk">
                        @include('patients.components.edit-form')
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
