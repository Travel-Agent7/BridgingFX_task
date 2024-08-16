@extends('layouts.adminmain')

@section('content')
    <h1 class="mb-4">Contact Form Submissions</h1>


    <div class="card shadow mb-4">
        <div class="card-header">
            <h5 class="card-title text-dark">Submissions</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-borderless display">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Submissions as $submission)
                            <tr>
                                <td>{{ $submission->name }}</td>
                                <td>{{ $submission->email }}</td>
                                <td>{{ $submission->subject }}</td>
                                <td>{{ $submission->message }}</td>
                                {{-- <td>
                                    <div class="message-container" {{ $submission->message }}>
                                        {{ Str::limit($submission->message, 50) }}
                                    </div>
                                </td> --}}
                                <td>
                                    <a href="{{ route('admin.show', $submission->id) }}" class="btn btn-info btn-sm">
                                        View Details
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
