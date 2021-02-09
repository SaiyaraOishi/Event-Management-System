<html>
<body>

{{--<div id="container">--}}
{{--    <h3><font color="white">Total Orders Table</font></h3>--}}
{{--    @if(count($errors)>0)--}}

{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <li>{{$error}}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    @if(\Session::has('success'))--}}
{{--        <div class="alert alert-success">--}}
{{--            <p>{{ \Session::get('success') }}</p>--}}
{{--        </div>--}}
{{--@endif--}}

{{--<!-- Button trigger modal -->--}}
{{--    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">--}}
{{--        Add data with modal--}}
{{--    </button>--}}
{{--    <h2><font color="#d3d3d3"> Welcome {{$idSectionCourseTeacher}}</font></h2>--}}

{{--    <br><br>--}}
{{--    <nav class="navbar navbar-dark bg-dark">--}}
{{--        <div class="container-fluid">--}}
{{--            <a class="navbar-brand">Data Table</a>--}}
{{--            <form action="" method="POST" class="d-flex">--}}
{{--                @csrf--}}
{{--                <input class="form-control me-2" type="search" name="search_data" placeholder="Search"--}}
{{--                       aria-label="Search">--}}
{{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </nav>--}}
    <table id="datatable" class="table table-dark table-striped">
        <thead>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Service Type</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
        <th scope="col">Action</th>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>

                <td scope="row">{{$order['id']}}</td>
                <td scope="row">{{$order['name']}}</td>
                <td scope="row">{{$order['email']}}</td>
                <td scope="row">{{$order['phone']}}</td>
                <td scope="row">{{$order['date']}}</td>
                <td scope="row">{{$order['time']}}</td>
                <td scope="row">{{$order['service_type']}}</td>
                <td scope="row">{{$order['created_at']}}</td>
                <td scope="row">{{$order['updated_at']}}</td>
                <td scope="row">
                    <a href="{{ route('approve.order',  $order['id']) }}" class="btn btn-primary">APPROVE</a>
                    <a href="{{ route('reject.order',  $order['id']) }}" class="btn btn-danger">REJECT</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>
