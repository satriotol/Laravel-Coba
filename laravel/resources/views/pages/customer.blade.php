@extends('layouts.default-sidebar')
@section('content')
<style>
    h1 {
        color: #5f6468;
    }

    .panel {
        margin-bottom: 10px;
    }

    @media (max-width: 767.98px) {
        .panel {
            margin-bottom: 40px;
        }
    }

    /* customer */
    .master-form {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
    }

    .form-group label {
        font-weight: bold;
    }

</style>
<div class="col-sm-9 col-lg-10">
    <div class="container">
        <h1>Customer</h1>
        <form action="" class="mt-5 master-form">
            <div class="d-flex">
                <div class="mr-auto bd-highlight">
                    <input class="btn btn-primary" type="button" value="Add Customer">
                </div>
                <div class="ml-auto bd-highlight">
                    <input class="btn btn-success" type="button" value="Export">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">Mobile</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="">&nbsp</label><br>
                        <button class="btn btn-primary" style="width: 100%;">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</section>
@stop
