@extends('admin.layout.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="title">Addmission Request</span>
                </div>
                <div class="card-body table-responsive">
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Father Name</th>
                                <th>Mother Name</th>
                                <th>Gender</th>
                                <th>Date of Birth</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Fatder Name</td>
                                <td>Mother Name</td>
                                <td>Gender</td>
                                <td>Date of Birth</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    $('#table').DataTable();
</script>
@endsection