@extends('layouts.auth')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success">
                        <h3 class="card-title text-white">Dashboard</h3>
                    </div>

                    <div class="card-body font-weight-bold">
                         Hi there, regular user {{ Auth::user()->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection