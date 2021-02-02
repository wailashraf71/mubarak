@extends('layouts.dashboard')

@section('content')
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <h4 class="header-title col"><i class="fa fa-envelope px-2"></i>Messages</h4>
            </div>
            <div class="datatable-primary"><data-table-component
                    url="{{route('admin.messages.data')}}"
                    v-bind:columns="[
                {
                    label: '#',
                    name: 'id',
                    orderable: true,
                },
                {
                    label: 'Name',
                    name: 'name',
                    orderable: true,
                },
                {
                    label: 'Email',
                    name: 'email',
                },
                {
                    label: 'Subject',
                    name: 'subject',
                },
                {
                    label: 'Message',
                    name: 'message',
                },
            ]">
                </data-table-component>

            </div>

        </div>
    </div>

@endsection
