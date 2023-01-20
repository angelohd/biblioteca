<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link href="{{ url('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('dist/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ url('dist/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('dist/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to IN+</h2>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app
                    views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t formlogin" role="form">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Palavra passe" name="senha">
                        </div>
                        <button type="button" class="btn btn-primary block full-width m-b btnlogin">Login</button>
                    </form>
                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                    </p>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
                <small>© 2014-2015</small>
            </div>
        </div>
    </div>
    @include('in.paginas.loading')
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var contlogin = 0;
        $(".btnlogin").click(function() {
            //$("#processando").show()
            var dadosform = $(".formlogin").serializeArray();
            $.ajax({
                url: "{{ route('iniciar_sessao') }}",
                method: 'post',
                data: dadosform,
                success: function(rs) {
                    if (rs == 1) {
                        location.href = "{{ route('biblioteca.dashboard') }}";
                    } else {
                        if (contlogin < 2) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Erro ao iniciar sessção',
                            })
                        } else {
                            console.log("block por 10 minutos")
                        }
                    }
                    contlogin += 1

                }
            });
        })
    </script>

</body>

</html>
