@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card card-default">
                    <div class="card-header">Settings</div>

                    <div class="card-body">
                        <form method="post">
                            {{ @csrf_field() }}

                            @if (session()->has('result'))
                                <div class="form-group row">
                                    <div class="col-lg-8">
                                        <div class="alert alert-success">
                                            <strong>{{ session()->get('message') }}</strong>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group row">
                                <label for="mood" class="col-md-2 col-form-label text-md-center font-weight-bold">Mood:</label>

                                <div class="col-md-6">
                                    <textarea id="mood" class="form-control" name="mood" autofocus>{{ Auth::user()->mood }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <input type="submit" class="form-control" value="Save settings">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
