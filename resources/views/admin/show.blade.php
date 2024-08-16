@extends('layouts.adminmain')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Submission Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <h6 class="card-subtitle mb-2 text-muted">Name</h6>
                            <p class="card-text">{{ $submission->name }}</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="card-subtitle mb-2 text-muted">Email</h6>
                            <p class="card-text">{{ $submission->email }}</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="card-subtitle mb-2 text-muted">Subject</h6>
                            <p class="card-text">{{ $submission->subject }}</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="card-subtitle mb-2 text-muted">Message</h6>
                            <p class="card-text">{{ $submission->message }}</p>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
