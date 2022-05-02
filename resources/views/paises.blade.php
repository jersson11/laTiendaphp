<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
  <h1> Paises de la region </h1>  
  <table class="table table-striped">
      <thead>
          <tr>
              <th>
                  pais
              </th>
              <th>
                  capital
              </th>
              <th>
                  moneda
              </th>
              <th>
                  poblacion
              </th>
          </tr>
      </thead>


      <tbody>
          @foreach($paises as $pais => $infopais)
          <tr>
              <td rowspan="{{  count($infopais['ciudades'])  }}">
                  {{ $pais }}
              </td>
              <td rowspan="{{  count($infopais['ciudades'])  }}">
                  {{$infopais ["capital"]}}
              </td>
              <td rowspan="{{  count($infopais['ciudades'])  }}" >
                  {{$infopais ["moneda"]}}
              </td >
              <td rowspan="{{  count($infopais['ciudades'])  }}" >
>
                  {{$infopais ["poblacion"]}}
              </td>
              @foreach ($infopais["ciudades"] as $ciudad)
              <td>
                  {{$ciudad}}
              </td>
                 </tr>
             @endforeach
          @endforeach   
      </tbody>
      <tfoot></tfoot>

  </table>
</body>
</html>