<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=PT+Serif:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <title>Admin Login</title>
    <style>
        .card {
            margin: 50px 0;
        }

        .card-header {
            background-color: #EE7674;
        }

        .btn {
            background-color: #EE7674;
            color: white;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4 col-12">
                <div class="card">

                    <h5 class="card-header white-text text-center py-4">
                        <strong>Sign in</strong>
                    </h5>
                    @include('admin.alert')
                    <div class="card-body px-lg-5 pt-0">

                        <form class="text-center" style="color: #757575;" action="{{ url('admin/login') }}"
                            method="POST">

                            @csrf
                            <!-- Email -->
                            <div class="md-form mb-0">
                                <input type="email" id="email" name="email" class="form-control" required>
                                <label for="email" class="">Email</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form mb-0">
                                <input type="password" id="password" name="password" class="form-control" required>
                                <label for="password" class="">Password</label>
                            </div>

                            <button class="btn btn-rounded btn-block my-4 waves-effect z-depth-0 text-white"
                                type="submit">Sign in</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!-- Selectize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
        integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>

    <!-- js -->
</body>

</html>
