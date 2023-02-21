<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/js/app.js')

</head>

<body>

<h1>Treni</h1>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Azienda</th>
      <th scope="col">Stazione di partenza</th>
      <th scope="col">Stazione di arrivo</th>
      <th scope="col">Orario di partenza</th>
      <th scope="col">Orario di arrivo</th>
      <th scope="col">Codice Treno</th>
      <th scope="col">In orario</th>
      <th scope="col">Cancellato</th>
    </tr>
  </thead>
  <tbody>
  @foreach($trains as $train)
    <tr>
      <th scope="row">{{ $train['id'] }}</th>
      <td>{{ $train['azienda'] }}</td>
      <td>{{ $train['stazione_di_partenza'] }}</td>
      <td>{{ $train['stazione_di_arrivo'] }}</td>
      <td>{{ $train['orario_di_partenza'] }}</td>
      <td>{{ $train['orario_di_arrivo'] }}</td>
      <td>{{ $train['codice_treno'] }}</td>
      <td>{{ $train['in_orario'] }}</td>
      <td>{{ $train['cancellato'] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>

</html>