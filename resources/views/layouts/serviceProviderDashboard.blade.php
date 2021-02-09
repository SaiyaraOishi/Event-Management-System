<html>
<body>


    <table id="datatable" class="table table-dark table-striped">
        <thead>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Service Provider Name</th>
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
                <td scope="row">{{$order['service_provider_name']}}</td>
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
