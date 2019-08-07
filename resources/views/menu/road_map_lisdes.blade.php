@extends('template.admin')
@section('title', 'Road Map Lisdes')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Striped Table</h4>
            <p class="card-description">
                Add class
                <code>.table-striped</code>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>First name</th>
                            <th>Progress</th>
                            <th>Amount</th>
                            <th>Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Herman Beck</td>
                            <td>content</td>
                            <td>$ 77.99</td>
                            <td>May 15, 2015</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection