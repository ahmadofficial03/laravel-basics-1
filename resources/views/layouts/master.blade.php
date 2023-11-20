<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('styles')
</head>

<!-- Add this before the closing </body> tag -->

<body>
    <!-- NAVBAR -->
    <nav class="mx-2 my-2 bg-secondary p-2">
        <h3 class="text-white">Header</h3>
    </nav>


    <div class="d-flex">
        <!-- ASIDE -->
        <aside class="d-inline-block bg-primary text-white mx-2" style="height: 400px; width: 120px; ">
            <h3>Sidebar</h3>
        </aside>
        <article class="bg-info w-100 mx-2 text-white d-flex justify-content-center align-items-center">
            <!-- MAIN CONTENT -->
            <h4>@yield('content')</h4>
        </article>
    </div>


    <!-- FOOTER -->
    <footer class="mx-2 my-2 bg-danger p-2">
        <h3 class="text-white">Footer</h3>
    </footer>



    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')

</body>

</html>