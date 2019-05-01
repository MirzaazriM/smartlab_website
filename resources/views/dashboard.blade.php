<!-- Extend main layout -->
@extends('layouts.app')

<style>
    #mainDashboardContainer {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    #mainDashboardContainer > a  {
        text-decoration: none;
    }

    #mainDashboardContainer > a > div {
        margin: 10px;
        width: 200px;
        height: 200px;
        box-shadow: 2px 2px 2px rgba(150,150,150, 0.5);
    }

    #mainDashboardContainer > a > div:hover {
        box-shadow: 4px 4px 4px rgba(150,150,150, 0.5), -4px 0 4px rgba(150,150,150, 0.5);
    }
</style>

@section('content')

    <!-- dashboard content -->
    <div class="container">

        <div id="mainDashboardContainer">

            <a href="{{route('admins.index')}}">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Admins</div>
                    <div class="card-body">
                        <h5 class="card-title">Admins Management</h5>
                        <p class="card-text">Create, edit or delete admins.</p>
                    </div>
                </div>
            </a>

            <a href="{{route('blogs.index')}}">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Blogs</div>
                    <div class="card-body">
                        <h5 class="card-title">Blogs Management</h5>
                        <p class="card-text">Create, edit, delete, publish, unpublish blogs.</p>
                    </div>
                </div>
            </a>

            <a href="/subscribers">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Subscribers</div>
                    <div class="card-body">
                        <h5 class="card-title">Subscribers list</h5>
                        <p class="card-text">See list of all newsletter subscribers.</p>
                    </div>
                </div>
            </a>

            <a href="/logs">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Logs</div>
                    <div class="card-body">
                        <h5 class="card-title">System logs</h5>
                        <p class="card-text">Check the error reports from the system.</p>
                    </div>
                </div>
            </a>

            <a href="/assets">
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">Images</div>
                    <div class="card-body">
                        <h5 class="card-title">System images</h5>
                        <p class="card-text">Change images in the system.</p>
                    </div>
                </div>
            </a>

            <a href="/translations">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Translations</div>
                    <div class="card-body">
                        <h5 class="card-title">System translations</h5>
                        <p class="card-text">Edit existing translations of the system.</p>
                    </div>
                </div>
            </a>

        </div>

    </div>

@endsection
