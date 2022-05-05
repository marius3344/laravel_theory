@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

<!-- echo, t.y. atspausdinti {{ kazkoks tekstas, metodas, kintamasis ir t.t}} pvz {{$user->email}}-->

<!-- salygos sakiniai, ciklai ir pan. tradicinis budas <?php //if(a>b){kazkoks kodas} ?> Blade ---> @if (salyga) kodas @endif-->

<!-- @{{tekstas}} - rodo pilnai kaip parasyta-->
