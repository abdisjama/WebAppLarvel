<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="fonts/AbrahamLincoln.tff">
        
        <!-- Custom styles -->
        <link href="css/style.css" rel="stylesheet">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <link href="datepicker/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
        <script src="datepicker/dist/js/datepicker.min.js"></script>

        <!-- Include English language -->
        <script src="datepicker/dist/js/i18n/datepicker.en.js"></script>
        
        
        
    </head>
    
    <body>

        
        
        <!-- Side navigation -->

        @include('admin.adminnav')
        
        
        <!-- Dashbord Content -->
        <div>
            <div id="admin-topnav">
                <a class="close close-button" href="barbers"  aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
                <h1 class="admin-title" id="edit-title" style="text-transform: uppercase">EDIT HOURS: {{ $fname }} {{$lname}} </h1>
            </div>
        </div>
        <div id="main-content">

            <div id="edit-form-div">
                <form action="/update_time" method="post">
                    {{ csrf_field() }}
                  <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="edit-start">Start Time</label>
                            <input type="text" name="start_time" id="edit-start" class="form-control edit-form" placeholder="{{\Carbon\Carbon::parse($start)->format('g:ia')}}">
                        </div>
                    </div>
                    <div class="col">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                        <div class="form-group">
                            
                            <label for="barber-select-edit">End Time</label>
                            <input type="text" name="end_time" id="edit-end" class="form-control edit-form" placeholder="{{\Carbon\Carbon::parse($end)->format('g:ia')}}">
                            <input id="prodId" name="barber_id" type="hidden" value="{{ $id }}">
                            <input id="prodId" name="db_start" type="hidden" value="{{ \Carbon\Carbon::parse($db_start)->format('Y-m-d') }}">
                            <input id="prodId" name="time_id" type="hidden" value="{{ $time_id }}">
                        </div>
                    </div>
                    <div class="col">
                    </div>
                  </div>
                  
                  
                  <button type="submit" class="btn btn-dark">Save Changes</button>

                  
                  
                  
                </form>
                <form action="delete_time" method='post'>
                    {{ csrf_field() }}
                  <input id="prodId" name="time_id" type="hidden" value="{{ $time_id }}">
                  
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </body>
</html>

