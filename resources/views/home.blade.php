@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-3">
    <div class="col-md-6">
        <div class="container">
            <div class="row">
                <div class="col">
                    <livewire:test></livewire:test>
                </div>
            </div>
            <div class="row">
                <example-component />
            </div>
        </div>
    </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
