<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ahmed Hassan</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   </head>
   <body>
      <div class="container">
         <br><br>
          @if(Session::has('msg'))
                <?php
                $msg = array();
                $msg = session()->pull('msg');
                echo'
                <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            ' . $msg[1] . '!
                </div>
                ';
                ?>
                @endif
                @if(count($errors) >0)
                
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }} </li>
                        @endforeach
                        <ul>
                        </ul>
                    </div>
                    @endif
         <div class="card">
            <div class="card-header">
               Login 
            </div>
            <div class="card-body">
               <form method="post" action="/login">
                  @csrf
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="inputAddress2">Mobile</label>
                        <input type="number" class="form-control" name="mobile" placeholder="Mobile Number">
                      
                     </div>  
                     <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" name="password">
                       
                     </div>
                  </div>     
                  <button type="submit" class="btn btn-primary">Login</button>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>