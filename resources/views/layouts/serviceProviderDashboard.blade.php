<!DOCTYPE html>
<html lang="en">
<title>Evager</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>

<!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1500px">
    <img class="w3-image" src="../frontend/img/bg-img/lights.jpg" alt="Me" width="1500" height="600">
    <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
        <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">EVAGER</h1>
        <h5 class="w3-hide-large" style="white-space:nowrap">EVAGER</h5>
        <h3 class="w3-hide-medium w3-hide-small">SERVICE PROVIDER DASHBOARD</h3>
        <table id="datatable" class="table table-dark table-striped">

            <table class="table table-dark table-hover">
                <thead>
                <tr style="background-color:#000000">
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Service Provider Name</th>
                    <th scope="col">Details</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($orders as $order)

                    <tr style="background-color:#1e272c">
                        <td scope="row">{{$order['id']}}</td>
                        <td scope="row">{{$order['name']}}</td>
                        <td scope="row">{{$order['email']}}</td>
                        <td scope="row">{{$order['phone']}}</td>
                        <td scope="row">{{$order['date']}}</td>
                        <td scope="row">{{$order['time']}}</td>
                        <td scope="row">{{$order['service_provider_name']}}</td>
                        <td scope="row">{{$order['details']}}</td>
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
    </div>
</header>
</body>
</html>
