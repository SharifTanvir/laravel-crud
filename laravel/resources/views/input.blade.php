<html>
<head>
    <title>BiTechX Test</title>
    <link rel="shortcut icon" type="image/png" href="https://bitechx.com/images/favicon/bitechx.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Data Table CSS & JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.foundation.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.foundation.min.js"></script>

</head>
<body>
<div class="container">
    <h1 class="text-center">BiTechX Test</h1>
    <form class="mx-auto pt-5" style="max-width:700px;" action="{{route('pageuser-store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <label>Upload file</label>
            <input type="file" class="form-control-file" name="file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table table-striped table-bordered mx-auto pt-5" style="width:100%;max-width:700px;">
        <thead>
        <tr>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tbody>
        @foreach($pageusers as $pu)
        <tr>
            <td>{{$pu->email}}</td>
            <td><a href="{{route('pageuser-edit',['id'=>$pu->id])}}" class="btn btn-primary">Edit</a></td>
            <td><a href="{{route('pageuser-destroy',['id'=>$pu->id])}}"  class="btn btn-danger">Delete</a></td>

        </tr>
         @endforeach
        </tbody>
        </thead>
    </table>
</div>
</body>
</html>
