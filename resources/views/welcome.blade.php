@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('text.welcome') }}</div>

                <div class="panel-body">
                    {{ trans('text.landing_page') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
