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
                <a class="close close-button" href="dashboard"  aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
                <h1 class="admin-title" id="edit-title">EDIT BOOKING</h1>
            </div>
        </div>
        <div id="main-content">
            <div id="customer-info">
                <img id="profile-picture" src="../img/avatar.svg" alt="profile picture" height="30" width="30">
                <h4 id="edit-heading">Curtis Adams</h4>
                <br>
                <p class="customer-info">curtisadams28@gmail.com</p>
                <p class="customer-info">07 649 5411</p>
                <div id="booking-totals">
                    <div id="total-bookings">
                        <p class="edit-number">1</p>
                        <p class="customer-info">Total Bookings</p>
                    </div>
                    <div id="total-sales">
                        <p class="edit-number">$0</p>
                        <p class="customer-info">Total Sales</p>
                    </div>
                </div>
                <div id="past-app">
                    <h4 id="past-appointments">Past Appointments</h4>
                </div>
                <div id="appointments">
                    <div id="app1">
                        <div id="app-date">
                            <p id="app-day">30</p>
                            <p id="app-month">Aug</p>
                            <p id="app-time">11:00pm</p>
                        </div>
                        <div id=cut-details>
                            <p id="cut-type">Zero Fade</p>
                            <p id="cut-barber">Cut by Blaine</p>
                        </div>
                        <p id="app-price">$20</p>
                    </div>
                    

                    
                </div>
                <div id="edit-buttons">
                    <a class="btn btn-dark edit-button" id="edit-close" href="dashboard" role="button">Close</a>
                    <a class="btn btn-dark edit-button" href="dashboard" role="button">Save Changes</a>
                </div>
            </div>
            <div id="edit-form-div">
                <form>
                  <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="edit-start">Start Time</label>
                            <input type="text" id="edit-start" class="form-control edit-form" placeholder="8:00am">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="barber-select-edit">Service</label>
                            <select id="barber-select-edit" >
                               <option value="Zero Fade ($20)">Zero Fade ($20)</option>
                               <option value="Line Up and Taper ($25)">Line Up and Taper ($25)</option>
                               <option value="Beard Trim ($15)">Beard Trim ($15)</option>
                               <option value="Buzzcut and Sides ($25)">Buzzcut and Sides ($25)</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="barber-select-edit">End Time</label>
                            <input type="text" id="edit-end" class="form-control edit-form" placeholder="8:00am">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="barber-select-edit">Barber</label>
                            <select id="barber-select-edit">
                                  <option value="Blaine">Blaine</option>
                                  <option value="Steve">Steve</option>
                                  <option value="Bob">Bob</option>
                                  <option value="John">John</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-danger">Delete Booking</button>
                </form>
            </div>
        </div>
    </body>
</html>