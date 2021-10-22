<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="../css/custom.css">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/dcf78cbd5c.js" crossorigin="anonymous"></script>

    <!-- CALENDAR CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/bootstrap/main.min.css">

    <title>SPARTAN GYM</title>
  </head>
  <body>

    <!-- Start Sidebar -->
	<nav class="navbar navbar-expand-md navbar-dark bg-telorasin menu">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="#">
	    <span class="menu-collapsed">ADMIN AREA</span>
	  </a>

	  <div class="d-flex justify-content-center w-100">
	  	<img src="../images/logo-member.png" class="img-fluid">
	  </div>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item dropdown d-sm-block d-md-none">
	        <a class="nav-link" href="#" id="smallerscreenmenu" data-toggle="" aria-haspopup="true" aria-expanded="false">
	          Dashboard
	        </a>
	  
	        <a class="nav-link" href="logout.php" id="smallerscreenmenu" data-toggle="" aria-haspopup="true" aria-expanded="false">
	          Logout
	        </a>
	      </li> 
	    </ul>
	  </div>
	</nav>
	<!-- END SIDEBAR -->

    <div class="row" id="body-row">
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <ul class="list-group">
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>MAIN MENU</small>
                </li>
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-dashboard fa-fw mr-3"></span>
                        <span class="menu-collapsed">Dashboard</span>
                    </div>
                </a>
                
                <a href="logout.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fas fa-sign-out-alt mr-3"></span>
                        <span class="menu-collapsed">Logout</span>
                    </div>
                </a>            
            </ul>
        </div> 
        <!-- End Sidebar -->

        <!-- MAIN -->  
        <div class="col mt-5">
        	<div class="container">
                <!-- START TABLE USER -->
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h1>Tabel Member</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8" id="dashboard">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Fullname</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="bodydata">
                                    
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END TABLE USER -->
            </div>
        </div>   
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin aktifkan Username: <b id="usernamedata">User</b> ini?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <button id="confirm_data" type="button" class="btn btn-primary">Iya</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="../js/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <!-- <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
    -->

    <script>

        function fetchData() {
             $.get( "userdata.php?getdata=fetch", function( data ) {
              const jsonObject = JSON.parse(data)

              let htmldata = [];

              jsonObject.forEach((value)=>{
                const status = value.status === "1" ? "Aktif" : "Tidak Aktif"

                htmldata.push(
                    `<tr>
                        <td>${value.username}</td>
                        <td>${value.fullname}</td>
                        <td>${value.image}</td>
                        <td>${status}</td>
                        <td>
                            <button 
                                type="button" 
                                class="btn btn-sm btn-primary" 
                                data-toggle="modal" 
                                data-target="#exampleModal"
                                data-username="${value.username}"
                                data-user-id="${value.id}"
                            >
                                <i class="fas fa-check">Accept</i>
                            </button>

                            <a href="" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash">&nbsp;Delete</i>
                            </a>
                        </td>
                    </tr>`
                )
              })

              $("#bodydata").html(htmldata)
            });
        }

        $(document).ready(function(){   
            fetchData()

            $('#exampleModal').on('show.bs.modal', function (event) {
              const button = $(event.relatedTarget)
              const username = button.attr("data-username")
              const userId = button.attr('data-user-id')

              $("#confirm_data").attr("user-id",userId)
              $("#exampleModalLabel #usernamedata").html(username)
            })

            $("#confirm_data").on('click',function(data){
                const userId = $(this).attr('user-id')

               $.post( "userdata.php", {"verifyId": userId}, function( value ) {
                const jsonObject = JSON.parse(value)
                if(jsonObject.success === true) {
                    $('#exampleModal').modal('hide')
                    fetchData()
                }
              });
            })
        })
    </script>
  </body>
</html>