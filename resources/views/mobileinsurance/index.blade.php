<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css"  />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/43c81dd888.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js" integrity="sha512-zP5W8791v1A6FToy+viyoyUUyjCzx+4K8XZCKzW28AnCoepPNIXecxh9mvGuy3Rt78OzEsU+VCvcObwAMvBAww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

    <title>SIDE NAVIGATION PAGE</title>

    @livewireStyles
</head>

<body>
    <input type="checkbox" name="" id="check">
    <input type="checkbox" name="" id="leftnav">

    <!--Header Section Start-->
    <header>
        <div class="sidenav">
            <label for="check">
                  <i id="checklebel" class='bx bxs-chevrons-left'></i>
            </label>
        </div>

        <div class="right">
            <p>Company<span>Logo</span></p>
        </div>

        <div class="left">

            <i class='bx bx-search-alt'></i>
            <i class='bx bx-message-detail'></i>
            <i class='bx bxs-notification'><span><i class="fas fa-bell notify"></i></span>
            </i>
            <i class='bx bxs-dashboard'></i>
            <div class="profile">
                <label for="leftnav"><img id="leftimage" src="image/warrior.jpg" alt=""></label>
            </div>
            <button class="logoutbtn">Logout</button>
        </div>

    </header>
    <!--Header Section End-->

    <!--Nav Section Start-->
    <nav>

        <div class="profile"><img src="image/warrior.jpg" alt=""><span>Gautam Kumar</span></div>
        <ul class="main-menu">
            <li class="sub-menu">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                    <i class='bx bxs-chevrons-right dropTrigger'></i>
                </a>
            </li>
            <li class="sub-menu">
                <a href="/index/dashboard">
                    <i class='bx bxs-user-detail'></i>
                    <span>Users</span>
                    <i class='bx bxs-chevrons-right '></i>
                </a>
               <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-file-alt"></i>
                        <span>View</span>
                    </a>
                </li>

               </ul>
            </li>

            <li class="sub-menu">
                <a href="#">
                    <i class='bx bxs-shopping-bags '></i>
                    <span>Mobile</span>
                    <i class='bx bxs-chevrons-right '></i>
                </a>
                <ul>
                    <li>
                        <a href="/mobile">
                            <i class="fas fa-file-alt"></i>
                            <span>View</span>
                        </a>
                    </li>

                   </ul>

            </li>
            <li class="sub-menu">
                <a href="#">
                    <i class='bx bxs-shopping-bags '></i>
                    <span>Varient</span>
                    <i class='bx bxs-chevrons-right '></i>
                </a>
                <ul>
                    <li>
                        <a href="/mobile">
                            <i class="fas fa-file-alt"></i>
                            <span>View</span>
                        </a>
                    </li>

                   </ul>

            </li>
            <li class="sub-menu">
                <a href="#">
                    <i class='bx bxs-credit-card-alt'></i>
                    <span>Insurance</span>
                    <i class='bx bxs-chevrons-right '></i>
                </a>
                <ul>
                    <li>
                        <a href="/insurance">
                            <i class="fas fa-file-alt"></i>
                            <span>View</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-log-out-circle'></i>
                    <span>Logout</span>
                    <i class='bx bxs-chevrons-right '></i>
                </a>
            </li>
        </ul>
    </nav>
    <!--Nav Section End-->
    <!--Profile Block Start-->
    <div class="profilenav">
        <div class="details">
            <img src="image/warrior.jpg" alt="">
            <div>
                <h3>Gautam Kumar</h3>
                <p>maile@gmail.com</p>
            </div>

        </div>
        <div class="stats">
            <a href="#"><i class="fas fa-user-tie"></i><span>My Profile</span></a>
            <a href="#"><i class="fas fa-inbox"></i><span>Inbox</span> </a>
            <a href="#"><i class="far fa-credit-card"></i><span>Balance</span></a>
        </div>
        <div class="account">
            <a href="#"><i class="fas fa-users-cog"></i><span>Account Setting</span></a>
        </div>
        <div class="logout">
            <a href="#"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
        </div>
        <div class="viewprofile">
            <button>View Profile</button>
        </div>
    </div>
    <!--Profile Block end-->

    <!--Content Section Start-->
    <div class="content">

        @yield('content')
@livewireScripts
<script src="{{ asset('js/app.js') }}"></script>
    </div>
    <!--Content Section End-->
    <script>
        $(function() {
            $('.sub-menu ul').hide();
            $(".sub-menu a").click(function() {
                if ($(this).parent(".sub-menu").children("ul").is(":visible")) {
                    $(this).parent(".sub-menu").children("ul").hide();
                } else {
                    $(this).parent(".sub-menu").children("ul").show();
                }
            });
        });
    </script>

    <!--   <script>
                       $(function(){
                             $('.rotateicon').click(function(){
                                   alert("clicked");
                                  $(this).toggleClass("rotate");
                             })
                       })
                 </script> -->

    <!--   <script>
                       $(function()
                       {
                             $('#check').click(function()
                             {
                                  // alert('checked');
                                   if($('input[type="checkbox"').prop('checked'))
                                   {

                                          $('#checklebel').attr('class','bx bxs-chevrons-right');
                                   }
                                   else{
                                    $('#checklebel').attr('class','bx bxs-chevrons-left');
                                   }
                             })
                       })
                 </script>   -->
</body>

</html>
