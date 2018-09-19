<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    
</head>
<body>
    @include('commons.navbar')
    
    @yield('cover')

    <!-- wrapper -->
        <div id="wrapper" class="clearfix">
            <!-- ここからメイン -->
            <div id="main">
                <section id="point">
                    
                    <section class="clearfix">
                        @yield('content')
                    </section>
                </section>
            </div>
            <!-- ここまでメイン -->
            <!-- ここからサイド -->
            <aside id="sidebar">
                <section id="side_banner">
                    <h2>お知らせ</h2>
                    <ul>
                        <li>
                            <p>節電ウイークです</p>
                            <p>節電ウイークです</p>
                            <p>節電ウイークです</p>
                            <p>節電ウイークです</p>
                            <p>節電ウイークです</p>
                        </li>
                    </ul>
                </section>
                <section id="side_banner">
                    <h2>お知らせ</h2>
                    <ul>
                        <li>
                            <p>節電ウイークです</p>
                            <p>節電ウイークです</p>
                            <p>節電ウイークです</p>
                            <p>節電ウイークです</p>
                            <p>節電ウイークです</p>
                        </li>
                    </ul>
                </section>
            </aside>
            <!-- ここまでサイド -->
        </div>
        <!-- wrapper end -->
        <!-- ここからフッター -->
        <footer>
            @include('commons.footer')
        </footer>
        <!-- ここまでフッター -->
</body>
</html>
