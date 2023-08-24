<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user create</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

</head>

<body>

    <h2>
        <a href="{{ route('logout') }}" class="btn btn-danger ">Logout</a>
        &nbsp;User's Table
    </h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>Email</th>
                <th>Mo_no</th>
                <th>Gender</th>
                <th>Date_Of_Birth</th>
                <th>Hobby</th>
                <th>City</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mo_no }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->dob }}</td>
                    @if ($user->hobby == '')
                        <td>-</td>
                    @else
                        <td>{{ $user->hobby }}</td>
                    @endif
                    <td>{{ $user->city->name ?? 'None' }}</td>
                    @if ($user->description == '')
                        <td>-</td>
                    @else
                        <td>{{ $user->description }}</td>
                    @endif
                    <td> <img src="{{ asset('uploads/' . $user->image) }}" height="100" width="200"></td>
                    <td>
                        <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="javascript:void(0)" id="delete" data-id="{{ $user->id }}"
                            class="btn btn-danger btn-sm">delete</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"
        integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).on('click', '#delete', function() {
            var id = $(this).data('id');
            var $this = $(this);
            $.ajax({
                type: "GET",
                url: "{{ route('user.delete') }}",
                data: {
                    id: id
                },
                success: function(res) {
                    $this.parents('tr').hide();
                }
            })
        })
    </script>
</body>

</html>
