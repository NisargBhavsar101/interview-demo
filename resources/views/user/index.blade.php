<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
        />

        <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
        <!-- https://cdnjs.com/libraries/font-awesome -->
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        />

        <title>User-List</title>
    </head>
    <body>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">first_name</th>
          <th scope="col">last_name</th>
          <th scope="col">email</th>
          <th scope="col">number</th>    

        </tr>
      </thead>
      <tbody>
        <tr>
        @foreach($users as $user)
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->first_name}}</td>
          <td>{{$user->last_name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->mobile_number}}</td>
        </tr>
        @endforeach
        <tr>
      </tbody>
    </table>    
</body>
</html>
