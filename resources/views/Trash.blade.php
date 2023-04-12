@extends('layouts.layout')

@section('content')

@section('numContact', $viewData['contacts']->count())
@section('numTrash', $viewData['trashed']->count())
<div class="container-fluid">
    <div class="d-flex flex-column no-wrap">
        @foreach($viewData['trashed'] as $contact)
        <!-- The Modal -->
        <div class="modal modal-sheet bg-body-secondary p-4 mt-5 py-md-5 fade" id="myModal{{ $contact->getId() }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content rounded-4 shadow">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-borderless fs-3">
                            <tr>
                                <td>Name: </td>
                                <td>{{ $contact->getName() }}</td>
                            </tr>
                            <tr>
                                <td>Number: </td>
                                <td>{{ $contact->getNum() }}</td>
                            </tr>
                            <tr>
                                <td>Mail: </td>
                                <td>{{ $contact->getMail() }}</td>
                            </tr>
                        </table>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Contacts list -->
        <div class="card col-10 col-md-9 mb-3">
            <div class="d-flex flex-row align-item-center justify-content-between card-body fs-3">
                <span class="col-8">{{ $contact->getName() }}</span>
                <div>
                    <div class="d-flex  align-item-center">
                        <button type="button" class="text-decoration-none btn btn-success view"
                            data-bs-toggle="modal" data-bs-target="#myModal{{ $contact->getId() }}">view</button>

                    </div>

                </div>
            </div>
        </div>

        @endforeach
    </div>

    @endsection
</div>