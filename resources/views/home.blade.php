<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')

  <title>{{env('APP_NAME')}}</title>
</head>

<body>
  <header class="mb-3
  ">
    @include('partials.navbar')
  </header>
  <main>
    <div class="container">

      @forelse ($trains as $train)
        ciao
      @empty
        nessun treno trovato
      @endforelse
    </div>
  </main>
</body>
</html>