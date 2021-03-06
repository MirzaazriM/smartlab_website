<!-- Extend main layout -->
@extends('layouts.app')

@section('css')
<link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
@endsection
@section('content')

@include('parts.break_space')

<div class="listTable">

    <!-- Heading -->
    <h1>Admin list</h1>

    <!-- Include error/success messages to be listed if anything goes wrong -->
    @include('parts.error_success')

    <!-- Include modal and set fneccessary data -->
    @include('parts.modal', [
    'title' => 'Delete admin',
    'message' => 'Are you sure?',
    'action' => 'deleteAction()'
    ])

    <!-- List of admins -->
    <table class="table table-striped table-light">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>

            <!-- Loop through admins data and create new rows -->
            @foreach($admins as $key => $admin)

            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$admin->name}}</td>
                <td>{{$admin->lastname}}</td>
                <td>{{$admin->email}}</td>
                <td>@if($admin->roles_id == 1) Superadmin @else Admin @endif</td>
                <td><a href="admins/{{$admin->id}}/edit" class="btn btn-primary btn-sm">Edit</a></td>
                <td>
                    @if($admin->roles_id !== 1)
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" onclick="updateId({{$admin->id}})">Delete</button>
                    @endif
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

</div>

<!-- Buton for redirecting to create admin page -->
<div id="paperFab" onclick="redirectTocreatePage()">
    <span>+</span>
</div>


<script>
    /* THIS SCRIPT COULD CAUSE PROBLEMS IF IT IS IN app.js FILE */

    // track id of selected admin
    var id = 0;

    function updateId(idNum) {
        id = idNum;
    }

    // after ajax returns success redirect to admins list page
    function redirectTocreatePage() {
        var url = "/admins/create";
        location.href = url;
    }

    // send ajax request for deleting admin
    function deleteAction() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'DELETE',
            url: '/admins/' + id,
            success: function(data) {
                // reload page to  show updated list of admins
                location.reload();
            }
        });
    }
</script>

@endsection
@section('js')
<script src="{{ asset('/js/app.js') }}"></script>
@endsection