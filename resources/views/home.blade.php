@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">HealthCrew</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   EXPLORE
                   <h5 id="cat">Categories</5>
                    <div class="img">
                        <div>
                            <a href="{{ url('doc1') }}">
                                <img src="images/doc.jpg">
                                <h4>Doctor Consult</h4>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="images/lab.jpeg">
                                <h4>Lab Test</h4>
                            </a>
                        </div>
                       <!-- <div>
                            <a href="#">
                                <img src="images/well.png">
                                <h4>Wellness</h4>
                            </a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
