<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')

  <title>{{env('APP_NAME')}} - Treni odierni </title>
</head>

<body>
  <header class="mb-3
  ">
    @include('partials.navbar')
  </header>
  <main>
    <div class="container">
      <h1>Treni in partenza oggi</h1>
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">azienda</th>
            <th scope="col">stazione_partenza</th>
            <th scope="col">stazione_arrivo</th>
            <th scope="col">data_partenza</th>
            <th scope="col">orario_arrivo</th>
            <th scope="col">orario_partenza</th>
            <th scope="col">codice_treno</th>
            <th scope="col">n_carrozze</th>
            <th scope="col">in_orario</th>
            <th scope="col">cancellato</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($trains as $train)
            <tr>
              <th scope="row">{{ $train->id }}</th>
              <td>{{ $train->azienda }}</td>
              <td>{{ $train->stazione_partenza }}</td>
              <td>{{ $train->stazione_arrivo }}</td>
              <td>{{ $train->data_partenza }}</td>
              <td>{{ $train->orario_partenza }}</td>
              <td>{{ $train->orario_arrivo }}</td>
              <td>{{ $train->codice_treno }}</td>
              <td>{{ $train->n_carrozze }}</td>
              <td>{{ $train->in_orario }}</td>
              <td>{{ $train->cancellato }}</td>
            </tr>
          @empty
        </tbody>
        </table>
        nessun treno trovato
      @endforelse
    </div>
  </main>
</body>
</html>