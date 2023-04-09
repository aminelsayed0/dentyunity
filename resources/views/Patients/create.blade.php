@extends('layouts.app')
@section('title', 'Add New patient')
@section('content')
    <div class="rounded bg-white p-3 m-3">
        <h1 class="text-center">Add New patient</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" enctype="multipart/form-data" action="{{ route('patients.store') }}">
            @csrf
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            <div class="row border rounded m-2">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                            placeholder="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="age" class="form-label">age</label>
                        <input type="number" class="form-control" name="age" id="age" aria-describedby="helpId"
                            placeholder="age">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phone" class="form-label">phone</label>
                        <input type="tel" class="form-control" name="phone" id="phone" aria-describedby="helpId"
                            placeholder="phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="address" class="form-label">address</label>
                        <input type="text" class="form-control" name="address" id="address" aria-describedby="helpId"
                            placeholder="address">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="diagnosis" class="form-label">diagnosis</label>
                        <input type="text" class="form-control" name="diagnosis" id="diagnosis" aria-describedby="helpId"
                            placeholder="diagnosis">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center mt-4">
                        <div><button type="submit" class="btn btn-lg btn-primary">Save</button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
