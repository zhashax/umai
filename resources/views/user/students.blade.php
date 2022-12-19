@extends('layouts.app')

@section('content')
@yield('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ученики</div>

                
                </div>
                
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        
                            
                            <div class="d-flex py-2 border-bottom">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudent" href="{{ route('user.widgets.add_student') }}">
                                    Добавить ученика
                               </button>
                            </div>
                            <div class="d-flex pt-2">
                                <div class="wrapper">
                                    <small class="text-muted">Mar 14, 2019</small>
                                    <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                                </div>
                                <small class="text-muted ml-auto">Edit event</small>
                            </div>
                            <a class="d-block mt-5" href="#">Show all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection