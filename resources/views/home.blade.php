@extends('layouts.app')

@section('body')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Voters</p>
                                    <h5 class="font-weight-bolder">
                                        0
                                    </h5>
                                    <p class="mb-0">
                                    
                                    </p>
                                    <button class="btn btn-primary" type="submit" action="/vote">Voter</button>

                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>       
    </div>
    
        
        

@endsection
