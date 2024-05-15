<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet" />
        <title>Not Found</title>
    </head>
    <body>
        <div class="content-wrapper pt-5">
            <section class="content">
                <div class="error-page">
                    <h2 class="headline text-warning">404</h2>
                    <div class="error-content">
                        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
                        <p>
                            We could not find the page you were looking for.
                            Meanwhile, you may <a href="{{ route('dashboard') }}">return to index</a>.
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <script type="text/javascript" src="{{ asset('js/adminlte.js') }}" />
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" />
    </body>
</html>
