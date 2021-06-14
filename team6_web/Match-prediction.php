<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>CP2 Project_6team</title>
        <style>
            </style>
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    </head>
    
    <body id="page-top">
    
        <!-- Page Wrapper -->
        <div id="wrapper">
    
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-baseball-ball"></i> 
                    </div>
                    <div class="sidebar-brand-text mx-3">Baseball Match prediction <sup>2</sup></div>
                </a>
    
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
    
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>CP2_6Team</span></a>
                </li>
    
                <!-- Divider -->
                <hr class="sidebar-divider">
    
                <!-- Heading -->
                <div class="sidebar-heading">
                    Interface
                </div>
                 <!-- Nav Item - Match-prediction Menu -->
                 <li class="nav-item">
                <a class="nav-link" href="match-prediction.php">
                    <i class="fas fa-assistive-listening-systems"></i>
                <span>Match-prediction</span></a>
                 </li>
                 
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="stats.php" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Stats</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">기록실:</h6>
                            <a class="collapse-item" href="defender.php">Defender</a>
                            <a class="collapse-item" href="hitter.php">Hitter</a>
                            <a class="collapse-item" href="pitcher.php">Pitcher</a>
                            <a class="collapse-item" href="team.php">Team</a>
                        </div>
                    </div>
                </li>
    
            
    
                <!-- Divider -->
                <hr class="sidebar-divider">
    
                <!-- Heading -->
                <div class="sidebar-heading">
                    Addons
                </div>
    
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="charts.php">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Charts</span></a>
                </li>
    
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="add-player.php">
                        <i class="far fa-id-badge"></i>
                        <span>add-player</span></a>
                </li>
    
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
    
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
    
                <!-- Sidebar Message -->
                <div class="sidebar-card d-none d-lg-flex">
                    <img class="sidebar-card-illustration mb-2" src="img/statatiz.png" alt="...">
                    <p class="text-center mb-2"><strong>CP2_6Team</strong></p>
                    <p class="text-center mb-2">승부예측 프로그램</p>
                    <a class="btn btn-success btn-sm" href="http://www.statiz.co.kr/main.php">기록참고사이트</a>
                </div>
    
            </ul>
            <!-- End of Sidebar -->
    
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
    
                <!-- Main Content -->
                <div id="content">
    
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
    
                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="선수명을 입력해주세요."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
    
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
    
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
    
                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 12, 2019</div>
                                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 7, 2019</div>
                                            $290.29 has been deposited into your account!
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 2, 2019</div>
                                            Spending Alert: We've noticed unusually high spending for your account.
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </li>
    
                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Message Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                                alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                                problem I've been having.</div>
                                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                                alt="...">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">I have the photos that you ordered last month, how
                                                would you like them sent to you?</div>
                                            <div class="small text-gray-500">Jae Chun · 1d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                                alt="...">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                                the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                                told me that people say this to all dogs, even if they aren't good...</div>
                                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                </div>
                            </li>
    
                            <div class="topbar-divider d-none d-sm-block"></div>
    
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">cp2_6team</span>
                                    <img class="img-profile rounded-circle"
                                        src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
    
                        </ul>
    
                    </nav>
                    <!-- End of Topbar -->
    
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
    
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Team</h1>
                            
                        </div>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">승부예측 프로그램</h1>
    <p class="mb-4">KBO리그 데이터 기반</p>

</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">라인업</h6>
     </div>


 <form name="info" action="prediction.php" method="GET">
   <div class="card-body">
    
       <p>Home</p>
             <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                <input style="border-width: 2px" type="text" list="teams" placeholder="Home 팀명" name="Home_teamname"
                 width="100">
                 <datalist id="teams">
                    <option value="삼성">
                    <option value="두산">
                    <option value="LG">
                    <option value="키움">
                    <option value="KT">
                    <option value="롯데">
                    <option value="KIA">
                    <option value="SK">
                    <option value="한화">
                    <option value="NC">
                </datalist>
            <thead>
                <tr>
                    <th>순</th>
                   <th>포지션</th>
                   <th>성명</th>
                   <th>등No.</th>
                 </tr>
                 </thead>
                 <tbody>
                     <tr>
                     <td>1</td>
                     <td><input type="text" list="po"  placeholder="선택" list="position" name="team1_po1">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                     <td><input type="text" name="team1_name1"></td>
                     <td><input type="text" name="team1_no1"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="text" list="po"  placeholder="선택" list="position" name="team1_po2">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                        <td><input type="text"name="team1_name2"></td>
                        <td><input type="text"name="team1_no2"></td>
                       </tr>
                       <tr>
                        <td>3</td>
                          <td><input type="text" list="po"  placeholder="선택" list="position" name="team1_po3">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                            </td>
                        <td><input type="text" name="team1_name3"></td>
                        <td><input type="text"name="team1_no3"></td>
                       </tr>
                       <tr>
                        <td>4</td>
                        <td><input type="text" list="po"  placeholder="선택" list="position" name="team1_po4">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                        <td><input type="text" name="team1_name4"></td>
                        <td><input type="text"name="team1_no4"></td>
                       </tr>
                       <tr>
                        <td>5</td>
                        <td><input type="text" list="po"  placeholder="선택" list="position" name="team1_po5">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                        <td><input type="text" name="team1_name5"></td>
                        <td><input type="text"name="team1_no5"></td>
                       </tr>
                       <tr>
                        <td>6</td>
                        <td><input type="text" list="po"  placeholder="선택" list="position" name="team1_po6">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                        <td><input type="text" name="team1_name6"></td>
                        <td><input type="text"name="team1_no6"></td>
                       </tr>
                       <tr>
                        <td>7</td>
                  
                        <td><input type="text" list="po"  placeholder="선택" list="position" name="team1_po7">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                        <td><input type="text" name="team1_name7"></td>
                        <td><input type="text"name="team1_no7"></td>
                       </tr>
                       <tr>
                        <td>8</td>
                       
                        <td><input type="text" list="po"  placeholder="선택" list="position" name="team1_po8">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                        <td><input type="text" name="team1_name8"></td>
                        <td><input type="text"name="team1_no8"></td>
                       </tr>
                       <tr>
                        <td>9</td>
                        
                        <td><input type="text" list="po"  placeholder="선택" list="position" name="team1_po9">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                        <td><input type="text" name="team1_name9"></td>
                        <td><input type="text"name="team1_no9"></td>
                       </tr>
                 </tbody>
                 <br><hr>
                
                 </table>
                 <td>선발투수 : </td>
                        <td><input type="text" name="team1_nameP" placeholder="성명"></td>
                        <td><input type="text"name="team1_noP" placeholder="등번호"></td>
                       </tr>
                 <p><hr><br>Away</p>
                  <input style="border-width: 2px" type="text" list="teams" placeholder="Home 팀명" name="Away_teamname"
                 width="100">
                 <datalist id="teams">
                    <option value="삼성">
                    <option value="두산">
                    <option value="LG">
                    <option value="키움">
                    <option value="KT">
                    <option value="롯데">
                    <option value="KIA">
                    <option value="SK">
                    <option value="한화">
                    <option value="NC">
                </datalist>
                
                 <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <tr>
                        <th>순</th>
                       <th>포지션</th>
                       <th>성명</th>
                       <th>등No.</th>
                     </tr>
                     </thead>
                     <tbody>
                         <tr>
                         <td>1</td>
                         <td><input type="text" list="po"  placeholder="선택" list="position" name="team2_po1">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                         <td><input type="text" name="team2_name1"></td>
                         <td><input type="text" name="team2_no1"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><input type="text" list="po"  placeholder="선택" list="position" name="team2_po2">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                            <td><input type="text" name="team2_name2"></td>
                            <td><input type="text" name="team2_no2"></td>
                           </tr>
                           <tr>
                            <td>3</td>
                           <td><input type="text" list="po"  placeholder="선택" list="position" name="team2_po3">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                            <td><input type="text" name="team2_name3"></td>
                            <td><input type="text"  name="team2_no3"></td>
                           </tr>
                           <tr>
                            <td>4</td>
                            <td><input type="text" list="po"  placeholder="선택" list="position" name="team2_po4">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                            <td><input type="text" name="team2_name4"></td>
                            <td><input type="text"  name="team2_no4"></td>
                           </tr>
                           <tr>
                            <td>5</td>
                            <td><input type="text" list="po"  placeholder="선택" list="position" name="team2_po5">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                            <td><input type="text" name="team2_name5"></td>
                            <td><input type="text"  name="team2_no5"></td>
                           </tr>
                           <tr>
                            <td>6</td>
                          <td><input type="text" list="po"  placeholder="선택" list="position" name="team2_po6">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                            <td><input type="text"name="team2_name6"></td>
                            <td><input type="text"  name="team2_no6"></td>
                           </tr>
                           <tr>
                            <td>7</td>
                            <td><input type="text" list="po"  placeholder="선택" list="position" name="team2_po7">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                            <td><input type="text" name="team2_name7"></td>
                            <td><input type="text"  name="team2_no7"></td>
                           </tr>
                           <tr>
                            <td>8</td>
                            <td><input type="text" list="po"  placeholder="선택" list="position" name="team2_po8">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                            <td><input type="text" name="team2_name8"></td>
                            <td><input type="text"  name="team2_no8"></td>
                           </tr>
                           <tr>
                            <td>9</td>
                            <td><input type="text" list="po"  placeholder="선택" list="position" name="team2_po9">
                                <datalist id="po">
                                    <option value="P">
                                    <option value="C">
                                    <option value="1B">
                                    <option value="2B">
                                    <option value="SS">
                                    <option value="3B">
                                    <option value="LF">
                                    <option value="CF">
                                    <option value="RF">
                                    <option value="DF">
                              </datalist>
                     </td>
                            <td><input type="text" name="team2_name9"></td>
                            <td><input type="text "  name="team2_no9"></td>
                           </tr>
                     </tbody>
                     </table>
                       <td>선발투수 : </td>
                        <td><input type="text" name="team2_nameP" placeholder="성명"></td>
                        <td><input type="text"name="team2_noP" placeholder="등번호"></td>
                       </tr>
                            <button class="searchButton"  type="submit" value="제출">제출</button>
            </form>
    </div>
      
       </div>

    </div>
  </div>
</div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; knu team6 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>