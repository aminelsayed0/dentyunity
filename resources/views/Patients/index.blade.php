@extends('layouts.app')
@section('title', 'patients')
@section('content')
    <div class="rounded bg-white p-3 m-3">
        <h1 class="text-center">patients</h1>
        <div class="d-flex justify-content-end mb-3">
            <div><a name="" id="" class="btn btn-primary" target="_blank" href="{{ route('patients.create') }}"
                    role="button">Add New patient</a></div>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">address</th>
                        <th scope="col">phone</th>
                        <th scope="col">doctor_id</th>
                        <th scope="col">created at</th>
                        <th scope="col">updated at</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($patients as $key =>$patient)
                        <tr class="">
                            <td scope="row">{{ $key + $patients->firstItem() }}</td>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->address }}</td>
                            <td>{{ $patient->phone }}</td>
                            <td>{{ $patient->doctor_id }}</td>
                            <td>{{ $patient->created_at->diffForHumans() }}</td>
                            <td>{{ $patient->updated_at->diffForHumans() }}</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    <form action='{{ route('patients.destroy', $patient->id) }}' method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-user-xmark"></i>
                                        </button>
                                    </form>
                                    <a name="" id="" class="btn btn-primary"
                                        href="{{ route('patients.edit', $patient->id) }}" role="button">
                                        <i class="fa-solid fa-user-pen"></i>
                                    </a>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="">
                            <td colspan="6">No Data Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{$patients->links('vendor.pagination.simple-bootstrap-5') }}
            {{-- {{ $patients->links() }} --}}
        </div>

    </div>
@endsection
