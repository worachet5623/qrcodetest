<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qr code test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>


    <div class="container-fluid">
        {{--     <form action="test" method="post">
        @csrf
        <input type="text" name="number" id=""> <br>
        <input type="text" name="price" id=""> <br>
        <button type="submit">OK</button> <br>
    </form> --}}
        <section class="d-flex justify-content-center">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>Qr test</h2>
                </div>
                <div class="card-body">
                    <form action="test" method="post" autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">เบอร์โทร</label>
                            <input class="form-control" type="text" name="number" minlength="10" maxlength="10" id="exampleInputEmail1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">จำนวนเงิน</label>
                            <input class="form-control" type="text" name="price" id="exampleInputPassword1" required>
                        </div>
                        <button type="submit" class="btn btn-primary">ตกลง</button>
                    </form>
                </div>
            </div>
            
        </section>


    </div>
</body>

</html>