@extends('layouts.main-layout')

@section('title')
    Admin | Owners
@endsection

@section('content')
    <table id="table" class="table stripes primary-header">
        <thead>
            <tr>
                <th>demo</th>
                <th>house</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>House</td>
            </tr>
            <tr>
                <td>1</td>
                <td>House</td>
            </tr>
        </tbody>
    </table>
@endsection

@section('inner-scripts')
    <script type="module">
        $('#table').DataTable();
    </script>
@endsection
