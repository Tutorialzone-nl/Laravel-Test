@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card card-default">
                <div class="card-header">{{ (!is_null(Auth::user())) ? Auth::user()->name : 'Login' }}</div>

                <div class="card-body">
                    @if (!is_null(Auth::user()))

                    @else

                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @lang('langselector.choose-language')
                    <form id="languageSelector" method="post">
                        {{ csrf_field() }}

                        <input type="submit" name="lang" value="en">
                        <input type="submit" name="lang" value="nl">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
