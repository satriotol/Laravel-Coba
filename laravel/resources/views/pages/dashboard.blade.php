@extends('layouts.default-sidebar')
@section('content')
<style>
    .panel {
        margin-bottom: 10px;
    }

    @media (max-width: 767.98px) {
        .panel {
            margin-bottom: 40px;
        }
    }

    /* main */
    .panel-body.easypiechart-panel {
        background-color: white;
        color: #005b8a;
        border: 1px solid;
        border-radius: 10px;
        padding-top: 20px;
        padding-bottom: 30px;
        transition: 0.3s;
    }

    .panel-body.easypiechart-panel:hover {
        background-color: #005b8a;
        color: white;
    }

</style>
<div class="col-sm-9 col-lg-10">
    <div class="container">
        <h1>Dashboard</h1>
        <div class="row text-center">
            <div class="col-6 col-md-2">
                <div class="panel panel-default">
                    <a href="#">
                        <div class="panel-body easypiechart-panel">
                            <p>Point of Sales</p>
                            <i class="icono-tiles"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-2">
                <div class="panel panel-default">
                    <a href="#">
                        <div class="panel-body easypiechart-panel">
                            <p>Sales</p>
                            <i class="icono-cart"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-2">
                <div class="panel panel-default">
                    <a href="#">
                        <div class="panel-body easypiechart-panel">
                            <p>Reports</p>
                            <i class="icono-barChart"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-2">
                <div class="panel panel-default">
                    <a href="#">
                        <div class="panel-body easypiechart-panel">
                            <p>Outlets</p>
                            <i class="icono-market"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-2">
                <div class="panel panel-default">
                    <a href="#">
                        <div class=" panel-body easypiechart-panel">
                            <p>Users</p>
                            <i class="icono-user"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-2">
                <div class="panel panel-default">
                    <a href="#">
                        <div class=" panel-body easypiechart-panel">
                            <p>System Setting</p>
                            <i class="icono-gear"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@stop
