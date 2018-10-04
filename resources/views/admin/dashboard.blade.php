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
        <div class="booking-main">
        <a href="../index" class="admin-links">Logout</a>
        <a href="../index" class="admin-links">Home</a>
        <h1 class="admin-title" id="dashbord-title">DASHBOARD</h1>
        <hr id="admin-topbar">
        
        
        <div id="barber-search">
            <select id="barber-select">
                  <option value="Blaine">Blaine</option>
                  <option value="Steve">Steve</option>
                  <option value="Bob">Bob</option>
                  <option value="John">John</option>
            </select>
            
            <input type='text' value="dd/mm/yyyy" id="" class='datepicker-here date-picker' data-language='en' />
            <button class="admin-button">SEARCH</button>
        </div>
    
        
        <table class="table admin-table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Time</th>
              <th scope="col">Service</th>
              <th scope="col">Price</th>
              
            </tr>
          </thead>
          <tbody>
            <tr onclick="window.location='editbooking';">
              <th scope="row">Curtis</th>
              <td>Adams</td>
              <td>10:00am</td>
              <td>Zero Fade</td>
              <td>$20.00</td>
            </tr>
                            <tr>
              <th scope="row">Curtis</th>
              <td>Adams</td>
              <td>10:00am</td>
              <td>Zero Fade</td>
              <td>$20.00</td>
            </tr>
                            <tr>
              <th scope="row">Curtis</th>
              <td>Adams</td>
              <td>10:00am</td>
              <td>Zero Fade</td>
              <td>$20.00</td>
            </tr>
        </<table>
            
            

            
            
          
        </div>
        
        
    </body>
</html>