@extends('statamic::layout')

@section('content')
    <h1 class="mt-1 mb-2 flex items-center">
        <div>{{ __('statamic-locale-suggester-cp::cp.dashboard.title') }}</div>
    </h1>

    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-3 py-4 sm:p-4">
            {!! __('statamic-locale-suggester-cp::cp.dashboard.introduction') !!}
        </div>
    </div>

    @include('statamic-locale-suggester::cp.partials.code', ['title' =>  __('statamic-locale-suggester-cp::cp.body'), 'code' => '@{{ locale-suggester:alert }}'])
    @include('statamic-locale-suggester::cp.partials.code', ['title' =>  __('statamic-locale-suggester-cp::cp.script'), 'code' => '@{{ locale-suggester:script }}'])

    @include('statamic-locale-suggester::cp.partials.footer')

@stop
