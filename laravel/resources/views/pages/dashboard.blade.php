@extends('layouts.default')
@section('content')
<style>
    body{
        background-color: #f0f0f0;
    }
    a {
        text-decoration: none;
        color: #005b8a;
    }
    li a:hover {
        text-decoration: none;
        color: white;
        background-color: #005b8a;
    }
    .bg-sidebar{
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

</style>
<section>
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
            <h1>Dashboard</h1>
            <div class="row main-">
                <div class="col-sm-2">
                    <p>Point Of Sales</p>
                </div>
                <div class="col-sm-2">
                    <p>Sales</p>
                </div>
                <div class="col-sm-2">
                    <p>Reports</p>
                </div>
                <div class="col-sm-2">
                    <p>Outlets</p>
                </div>
                <div class="col-sm-2">
                    <p>Users</p>
                </div>
                <div class="col-sm-2">
                    <p>System Setting</p>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
