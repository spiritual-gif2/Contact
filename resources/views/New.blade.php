@extends('layouts.layout')

@section('content')

@section('title', $viewData['title'])
@section('numContact', $viewData['contacts']->count())
@section('numTrash', $viewData['trashed']->count())
@section('numFavorite', $viewData['favorite']->count())

<div class="container-fluid">
    <div class="row align-self-center offset-md-3 col-md-6">
    @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
    </div>
    <div class="d-flex justify-content-center">
        <div class="card col-md-6">
            <div class="card-header h2">New Contact</div>
            <div class="card-body pt-4">
                <form class="form fs-4" action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="form-group input-group mb-3">
                        <label class="input-group-text fs-4 col-3 ps-4" for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    </div>
                    <div class="form-group input-group mb-3">
                        <label class="input-group-text fs-4 col-3 ps-4" for="num">Number</label>
                        <input type="text" name="num" id="num" class="form-control" value="{{ old('num') }}" required>
                    </div>
                    <div class="form-group input-group mb-4">
                        <label class="input-group-text fs-4 col-3 ps-4" for="mail">mail</label>
                        <input type="text" name="mail" id="mail" class="form-control" value="{{ old('mail') }}">
                    </div>
                    <div class="form-group input-group mb-4 d-flex">
                        <div class="input-group-text">
                            <input type="checkbox" name="favorite" id="favorite" class="col"
                                value="{{ old('favorite') }}">
                        </div>
                        <label class="input-group-text fs-4 ps-4 flex-fill justify-content-center" for="favorite">Check
                            as favorite </label>
                    </div>
                    <div class="d-flex form-group input-group mt-4">
                        <input type="reset" class="flex-fill fs-5 btn btn-danger" value="Clear">
                        <button type="submit" class="flex-fill fs-5 btn btn-success">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

@endsection