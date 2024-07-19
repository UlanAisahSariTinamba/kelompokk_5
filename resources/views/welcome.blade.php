<!DOCTYPE html>
<html >
    <head>

        <title>Walcome Page</title>
       
    </head>
    <body>
        <h1>Selamat datang, {{ $nama }}</h1>
        <p>Email: {{ $email }} </p>

        <h2>Daftar Teman: </h2>
        <ul>
            @foreach ($teman as $t)
                <li>{{ $t }}</li>
            @endforeach
        </ul>
       
        @if ($isAdmin)
            <p>Anda adalah seorang admin.</p>
        @else
            <p>Anda bukan seorang admin.</p>
        @endif
    </body>
</html>

