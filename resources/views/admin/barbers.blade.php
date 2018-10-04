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
        

        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <link href="datepicker/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
        <script src="datepicker/dist/js/datepicker.min.js"></script>

        <!-- Include English language -->
        <script src="datepicker/dist/js/i18n/datepicker.en.js"></script>
        
        <!-- Custom styles -->
        <link href="css/style.css" rel="stylesheet">
        
    </head>
    
    <body>
      
         @include('admin.adminnav')
        <div class="booking-main">
        
        <a href="../index" class="admin-links">Logout</a>
        <a href="../index" class="admin-links">Home</a>
        
        <h1 class="admin-title" id="dashbord-title">BARBERS</h1>
        
        <hr id="admin-topbar">
        <form action="/datesubmit" method="post">
          <input name='datequery' type='text' value="yyyy-mm-dd" id="barber-datepicker" class='datepicker-here date-picker' alt="dd-mm-yyyy" style="width: 250px;" data-language='en' />
          {{ csrf_field() }}
          <button type="submit" class="admin-button">Search</button>
        </form>
        <button class="admin-button" id="new-barber" data-toggle="modal" data-target="#new-barber-modal">New Barber</button>
        
        <table class="table table-sm table-bordered barbers-table">
          <thead class="thead-dark">
            <tr class="top-row">
              <th class="top-col align-middle text-center" scope="col">Staff</th>
              <th scope="col" class="align-middle text-center">Work Hours</th>
            </tr>
        </thead>
        <tbody>
          @if($available_times===NULL)
            <p>no results</p>
          @else
            @foreach ($available_times as $available_time)
              <tr>
                <th scope="row" class="tablerow align-middle">{{ $available_time->f_name }} {{ $available_time->l_name }}</th>
                  <form action="/edit_times" method="post">
                    {{ csrf_field() }}
                  {!! Form::hidden('barber_id', $available_time->barber_id); !!}
                  {!! Form::hidden('a_start_time', $available_time->a_start_time); !!}
                  {!! Form::hidden('a_end_time', $available_time->a_end_time); !!}
                  {!! Form::hidden('f_name', $available_time->f_name); !!}
                  {!! Form::hidden('l_name', $available_time->l_name); !!}
                  {!! Form::hidden('time_id', $available_time->time_id); !!}
                  <td><button class="time-button" type="submit">
                    {{\Carbon\Carbon::parse($available_time->a_start_time)->format('g:ia')}} - {{\Carbon\Carbon::parse($available_time->a_end_time)->format('g:ia')}}
                    <input id="time_idd" name="db_start" type="hidden" value="{{ $available_time->a_start_time }}">
                    </button></td>
                  </form>

                  
              </tr>

            @endforeach
          @endif
        
        </table>

        
        <!-- Create New Barber Modal -->
        <div class="modal fade" id="new-barber-modal" tabindex="-1" role="dialog" aria-labelledby="barber-label" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="barber-label">New Barber</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form action="/createbarber" method="post">
                  <div class="modal-body">
                    <div class="form-row">
                      <div class="col">
                        <label for="barber-first">First Name:</label>
                        <input type="text" name="f_name" id="barber-first" class="form-control">
                      </div>
                      <div class="col">
                        <label for="barber-last">Last Name:</label>
                        <input type="text" name="l_name" id="barber-last" class="form-control">
                        {{ csrf_field() }}
                      </div>
                    </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-dark">Create</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </body>
  </html>