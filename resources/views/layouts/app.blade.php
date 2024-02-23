<!doctype html>
<html lang="en">

<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')

    <!-- STYLE -->
    @yield('style')

    <!-- SCRIPT -->
    @yield('script-head')

    <title>@yield('title')</title>
</head>

<body>
    @include('components.menu')

    @if ($errs = $errors->all())
        <section class="errors">
            <ul>
                @foreach ($errs as $err)
                    <li class="text-danger">{{ $err }}</li>
                @endforeach
            </ul>
        </section>
    @endif

    @if ($message = session('message'))
        <section>
            <p class="text-success">
                {{ $message }}
            </p>
        </section>
    @endif

    <main>
        @yield('content')
    </main>

    @yield('script-body')
</body>

</html>
