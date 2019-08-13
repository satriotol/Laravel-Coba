@extends('layouts.default')
@section('content')
<style>
    body {
        background-color: #f0f0f0;
    }

    a {
        text-decoration: none;
        color: #005b8a;
        transition: 0.3s;
    }

    a:hover {
        text-decoration: none;
    }

    li a:hover {
        text-decoration: none;
        color: white;
        background-color: #005b8a;
    }

    .menu-sidebar {
        margin-top: 56px;
    }

    .bg-sidebar {
        background-color: white;
    }

    .nav {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .nav>li {
        position: relative;
        display: block;
    }

    .nav>li>a {
        position: relative;
        display: block;
        padding: 10px 15px;
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
<section class="menu-sidebar">
    <div class="row">
        <div class="col-sm-3 col-lg-2 d-none d-md-block sidebar">
            <ul class="nav flex-column bg-sidebar">
                <li>
                    <a href="">Dashboard</a>
                </li>
                <li>
                    <a href="">Customer</a>
                </li>
                <li>
                    <a href="">Gift Card</a>
                </li>
                <li>
                    <a href="">Debit</a>
                </li>
                <li>
                    <a href="">Sales</a>
                </li>
                <li>
                    <a href="">Reports</a>
                </li>
                <li>
                    <a href="">Expenses</a>
                </li>
                <li>
                    <a href="">Profit & Loss</a>
                </li>
                <li>
                    <a href="">POS</a>
                </li>
                <li>
                    <a href="">Return Order</a>
                </li>
                <li>
                    <a href="">Inventory</a>
                </li>
                <li>
                    <a href="">Products</a>
                </li>
                <li>
                    <a href="">Purchase Order</a>
                </li>
                <li>
                    <a href="">Setting</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9 col-lg-10">
            <div class="container">
                <h1>Dashboard</h1>
                <div class="row text-center">
                    <div class="col-xs-6 col-md-2">
                        <div class="panel panel-default">
                            <a href="#">
                                <div class="panel-body easypiechart-panel">
                                    <h5>Point of Sales</h5>
                                    <i class="icono-tiles"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="panel panel-default">
                            <a href="#">
                                <div class="panel-body easypiechart-panel">
                                    <h5>Sales</h5>
                                    <i class="icono-cart"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="panel panel-default">
                            <a href="#">
                                <div class="panel-body easypiechart-panel">
                                    <h5>Reports</h5>
                                    <i class="icono-barChart"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="panel panel-default">
                            <a href="#">
                                <div class="panel-body easypiechart-panel">
                                    <h5>Outlets</h5>
                                    <i class="icono-market"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="panel panel-default">
                            <a href="#"">
                                <div class=" panel-body easypiechart-panel">
                                <h5>Users</h5>
                                <i class="icono-user"></i>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-md-2">
                    <div class="panel panel-default">
                        <a href="#"">
                                <div class=" panel-body easypiechart-panel">
                            <h5>System Setting</h5>
                            <i class="icono-gear"></i>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@stop
