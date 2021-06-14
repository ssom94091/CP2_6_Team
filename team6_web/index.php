<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CP2 Project_6team</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/"
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
            <a class="nav-link" href="Match-prediction.php">
                <i class="fas fa-assistive-listening-systems"></i>
            <span>Match-prediction</span></a>
             </li>
             
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="stats.php">
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
                        <h1 class="h3 mb-0 text-gray-800">Main</h1>
                        
                    </div>

                            <!-- Color System -->
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            프로젝트 요약
                                            <div class="text-white-50 small">랜덤포레스팅 기법을 이용한 승부예측 프로그램</div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            2021년 KBO 데이터   
                                            <div class="text-white-50 small">기준일 2021_5_13일</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <!-- Illustrations -->
                        
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">종합설계프로젝트2 - 6팀</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                     <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 45rem;"
                                              src="img/main.jpg" alt="...">
                                  </div>
                                    <p>  KBO 데이터를 이용한 머신 러닝 승률 예측 시스템 개발
                                        <br>

                                    </p>
                                    <a target="_blank" rel="nofollow" href="https://scienceon.kisti.re.kr/srch/selectPORSrchArticle.do?cn=NPAP12684249&dbt=NPAP">관련 논문 &rarr;</a>
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 45rem;" src="img/thesis1.jpg" alt="...">
                             </div>
                            
                        </div>
                                </div>
                            
                                <div class="col-lg-6 mb-4">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">2021년 KBO리그 현재 순위</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                             
                                          </div>
                                      
        
                                     </div>
                                    <div class="tbl_box">
                                        <table border=1 cellspacing="0" cellpadding="0" >
                                            <caption>팀별순위 테이블</caption>
                                            <thead>
                                            <tr>
                                                <th>
                                                    <div class="rank">
                                                        <strong><span class="blind">순위</span></strong>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="team">
                                                        <strong><span class="blind">팀</span></strong>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="gcnt_s">
                                                        <a href="javascript:sortByColumn('regularTeamRecordList','gameCount');">
                                                            <strong id="regularTeamRecordList_gameCount"><span class="blind">경기수</span></strong>
                                                        </a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="wpnt">
                                                        <a href="javascript:sortByColumn('regularTeamRecordList','won');">
                                                            <!-- [D]정렬기능 on,off시 sort클래스 추가, 선택된 카테고리 활성화 강조 테두리는 table종료 태그 밑에 추가하였음. -->
                                                            <strong id="regularTeamRecordList_won"><span class="blind">승</span></strong>
                                                        </a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="lpnt">
                                                        <a href="javascript:sortByColumn('regularTeamRecordList','lost');">
                                                            <strong id="regularTeamRecordList_lost"><span class="blind">패</span></strong>
                                                        </a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="dpnt">
                                                        <a href="javascript:sortByColumn('regularTeamRecordList','drawn');">
                                                            <strong id="regularTeamRecordList_drawn"><span class="blind">무</span></strong>
                                                        </a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="wnrt">
                                                        <a href="javascript:sortByColumn('regularTeamRecordList','wra');">
                                                            <strong class="sort"><span id="regularTeamRecordList_wra" class="blind">승률</span></strong>
                                                        </a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="wlpnt">
                                                        <a href="javascript:sortByColumn('regularTeamRecordList','winDiff');">
                                                            <strong><span id="regularTeamRecordList_winDiff" class="blind">게임차</span></strong>
                                                        </a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="streak">
                                                        <a href="javascript:sortByColumn('regularTeamRecordList','streak');">
                                                            <strong><span id="regularTeamRecordList_streak" class="blind">연속</span></strong>
                                                        </a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="onbase">
                                                        <a href="javascript:sortByColumn('regularTeamRecordList','bra')">
                                                            <strong><span id="regularTeamRecordList_bra" class="blind">출루율</span></strong>
                                                        </a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="slugging">
                                                        <a href="javascript:sortByColumn('regularTeamRecordList','lra')">
                                                            <strong><span id="regularTeamRecordList_lra" class="blind">장타율</span></strong>
                                                        </a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="lately">
                                                        <a href="javascript:sortByColumn('regularTeamRecordList','recentResult')">
                                                            <strong><span id="regularTeamRecordList_recentResult" class="blind">최근 10경기</span></strong>
                                                        </a>
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody id="regularTeamRecordList_table">
                                            
                                                <tr>
                                                    <th><strong>1</strong></th>
                                                    <td class="tm">
                                                        <div>
                                                            
                                                                
                                                                
                                                                    <img src="img/SAMSUNG.jpg" width="25" height="25" alt="구단로고" onerror="javaScript:noTeamEmblemImg(this, 'team', 'SS');">
                                                                
                                                            
                                                            <span id="team_SS">삼성</span>
                                                        </div>
                                                    </td>
                                                    <td><span>33</span></td>
                                                    <td><span>20</span></td>
                                                    <td><span>13</span></td>
                                                    <td><span>0</span></td>
                                                    <td><strong>0.606</strong></td>
                                                    <td><span>0.0</span></td>
                                                    <td><span>1승</span></td>
                                                    <td><span>0.356</span></td>
                                                    <td><span>0.423</span></td>
                                                    <td><span>7승-3패-0무</span></td>
                                                </tr>
                                            
                                                <tr>
                                                    <th><strong>2</strong></th>
                                                    <td class="tm">
                                                        <div>
                                                            
                                                                
                                                                
                                                                    <img src="img/SK.jpg" width="25" height="25" alt="구단로고" onerror="javaScript:noTeamEmblemImg(this, 'team', 'SK');">
                                                                
                                                            
                                                            <span id="team_SK">SSG</span>
                                                        </div>
                                                    </td>
                                                    <td><span>32</span></td>
                                                    <td><span>18</span></td>
                                                    <td><span>14</span></td>
                                                    <td><span>0</span></td>
                                                    <td><strong>0.563</strong></td>
                                                    <td><span>1.5</span></td>
                                                    <td><span>4승</span></td>
                                                    <td><span>0.340</span></td>
                                                    <td><span>0.403</span></td>
                                                    <td><span>6승-4패-0무</span></td>
                                                </tr>
                                            
                                                <tr>
                                                    <th><strong>3</strong></th>
                                                    <td class="tm">
                                                        <div>
                                                            
                                                                
                                                                
                                                                    <img src="img/NC.jpg" width="25" height="25" alt="구단로고" onerror="javaScript:noTeamEmblemImg(this, 'team', 'NC');">
                                                                
                                                            
                                                            <span id="team_NC">NC</span>
                                                        </div>
                                                    </td>
                                                    <td><span>32</span></td>
                                                    <td><span>17</span></td>
                                                    <td><span>15</span></td>
                                                    <td><span>0</span></td>
                                                    <td><strong>0.531</strong></td>
                                                    <td><span>2.5</span></td>
                                                    <td><span>2승</span></td>
                                                    <td><span>0.368</span></td>
                                                    <td><span>0.466</span></td>
                                                    <td><span>6승-4패-0무</span></td>
                                                </tr>
                                            
                                                <tr>
                                                    <th><strong>3</strong></th>
                                                    <td class="tm">
                                                        <div>
                                                            
                                                                
                                                                
                                                                    <img src="img/DOOSAN.jpg" width="25" height="25" alt="구단로고" onerror="javaScript:noTeamEmblemImg(this, 'team', 'OB');">
                                                                
                                                            
                                                            <span id="team_OB">두산</span>
                                                        </div>
                                                    </td>
                                                    <td><span>32</span></td>
                                                    <td><span>17</span></td>
                                                    <td><span>15</span></td>
                                                    <td><span>0</span></td>
                                                    <td><strong>0.531</strong></td>
                                                    <td><span>2.5</span></td>
                                                    <td><span>1패</span></td>
                                                    <td><span>0.371</span></td>
                                                    <td><span>0.401</span></td>
                                                    <td><span>6승-4패-0무</span></td>
                                                </tr>
                                            
                                                <tr>
                                                    <th><strong>3</strong></th>
                                                    <td class="tm">
                                                        <div>
                                                            
                                                                
                                                                
                                                                    <img src="https://dthumb-phinf.pstatic.net/?src=https://sports-phinf.pstatic.net/team/kbo/default/KT.png&type=f25_25&refresh=1" width="25" height="25" alt="구단로고" onerror="javaScript:noTeamEmblemImg(this, 'team', 'KT');">
                                                                
                                                            
                                                            <span id="team_KT">KT</span>
                                                        </div>
                                                    </td>
                                                    <td><span>32</span></td>
                                                    <td><span>17</span></td>
                                                    <td><span>15</span></td>
                                                    <td><span>0</span></td>
                                                    <td><strong>0.531</strong></td>
                                                    <td><span>2.5</span></td>
                                                    <td><span>1패</span></td>
                                                    <td><span>0.389</span></td>
                                                    <td><span>0.417</span></td>
                                                    <td><span>5승-5패-0무</span></td>
                                                </tr>
                                            
                                                <tr>
                                                    <th><strong>3</strong></th>
                                                    <td class="tm">
                                                        <div>
                                                            
                                                                
                                                                
                                                                    <img src="https://dthumb-phinf.pstatic.net/?src=https://sports-phinf.pstatic.net/team/kbo/default/LG.png&type=f25_25&refresh=1" width="25" height="25" alt="구단로고" onerror="javaScript:noTeamEmblemImg(this, 'team', 'LG');">
                                                                
                                                            
                                                            <span id="team_LG">LG</span>
                                                        </div>
                                                    </td>
                                                    <td><span>32</span></td>
                                                    <td><span>17</span></td>
                                                    <td><span>15</span></td>
                                                    <td><span>0</span></td>
                                                    <td><strong>0.531</strong></td>
                                                    <td><span>2.5</span></td>
                                                    <td><span>3패</span></td>
                                                    <td><span>0.347</span></td>
                                                    <td><span>0.378</span></td>
                                                    <td><span>4승-6패-0무</span></td>
                                                </tr>
                                            
                                                <tr>
                                                    <th><strong>7</strong></th>
                                                    <td class="tm">
                                                        <div>
                                                            
                                                                
                                                                
                                                                    <img src="https://dthumb-phinf.pstatic.net/?src=https://sports-phinf.pstatic.net/team/kbo/default/HT.png&type=f25_25&refresh=1" width="25" height="25" alt="구단로고" onerror="javaScript:noTeamEmblemImg(this, 'team', 'HT');">
                                                                
                                                            
                                                            <span id="team_HT">KIA</span>
                                                        </div>
                                                    </td>
                                                    <td><span>32</span></td>
                                                    <td><span>15</span></td>
                                                    <td><span>17</span></td>
                                                    <td><span>0</span></td>
                                                    <td><strong>0.469</strong></td>
                                                    <td><span>4.5</span></td>
                                                    <td><span>2승</span></td>
                                                    <td><span>0.345</span></td>
                                                    <td><span>0.332</span></td>
                                                    <td><span>3승-7패-0무</span></td>
                                                </tr>
                                            
                                                <tr>
                                                    <th><strong>8</strong></th>
                                                    <td class="tm">
                                                        <div>
                                                            
                                                                
                                                                
                                                                    <img src="https://dthumb-phinf.pstatic.net/?src=https://sports-phinf.pstatic.net/team/kbo/default/WO.png&type=f25_25&refresh=1" width="25" height="25" alt="구단로고" onerror="javaScript:noTeamEmblemImg(this, 'team', 'WO');">
                                                                
                                                            
                                                            <span id="team_WO">키움</span>
                                                        </div>
                                                    </td>
                                                    <td><span>33</span></td>
                                                    <td><span>15</span></td>
                                                    <td><span>18</span></td>
                                                    <td><span>0</span></td>
                                                    <td><strong>0.455</strong></td>
                                                    <td><span>5.0</span></td>
                                                    <td><span>1승</span></td>
                                                    <td><span>0.344</span></td>
                                                    <td><span>0.362</span></td>
                                                    <td><span>6승-4패-0무</span></td>
                                                </tr>
                                            
                                                <tr>
                                                    <th><strong>9</strong></th>
                                                    <td class="tm">
                                                        <div>
                                                            
                                                                
                                                                
                                                                    <img src="https://dthumb-phinf.pstatic.net/?src=https://sports-phinf.pstatic.net/team/kbo/default/HH.png&type=f25_25&refresh=1" width="25" height="25" alt="구단로고" onerror="javaScript:noTeamEmblemImg(this, 'team', 'HH');">
                                                                
                                                            
                                                            <span id="team_HH">한화</span>
                                                        </div>
                                                    </td>
                                                    <td><span>32</span></td>
                                                    <td><span>13</span></td>
                                                    <td><span>19</span></td>
                                                    <td><span>0</span></td>
                                                    <td><strong>0.406</strong></td>
                                                    <td><span>6.5</span></td>
                                                    <td><span>2패</span></td>
                                                    <td><span>0.331</span></td>
                                                    <td><span>0.331</span></td>
                                                    <td><span>5승-5패-0무</span></td>
                                                </tr>
                                            
                                                <tr>
                                                    <th><strong>10</strong></th>
                                                    <td class="tm">
                                                        <div>
                                                            
                                                                
                                                                
                                                                    <img src="https://dthumb-phinf.pstatic.net/?src=https://sports-phinf.pstatic.net/team/kbo/default/LT.png&type=f25_25&refresh=1" width="25" height="25" alt="구단로고" onerror="javaScript:noTeamEmblemImg(this, 'team', 'LT');">
                                                                
                                                            
                                                            <span id="team_LT">롯데</span>
                                                        </div>
                                                    </td>
                                                    <td><span>32</span></td>
                                                    <td><span>12</span></td>
                                                    <td><span>20</span></td>
                                                    <td><span>0</span></td>
                                                    <td><strong>0.375</strong></td>
                                                    <td><span>7.5</span></td>
                                                    <td><span>3패</span></td>
                                                    <td><span>0.368</span></td>
                                                    <td><span>0.405</span></td>
                                                    <td><span>2승-8패-0무</span></td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                      <h6 class="m-0 font-weight-bold text-primary">논문 준비</h6>
                               </div>
                               <div class="card-body">
                                   <p> 한국디지털콘텐츠학회 하계종합학술대회 및 대학생논문경진대회</p>
                                   <p><a target="_blank" rel="nofollow" href="http://www.dcs.or.kr/modules/bbs/index.php?code=notice&mode=view&id=239&___M_ID=47">한국디지털콘텐츠학회 사이트</a><br></p>
                                    <p>논문 제출기간 : 2021년 4월 19일(월) ~ 5월 30(일)<br>논문발표일 : 7월9일(금) 오전/오후 (발표시간은 추후 공지 예정)</p>
                                    <img class="img-profile rounded-circle"
                                    src="img/thesis2.jpg">
                                </div>
                              </div>
                            </div>

                        <div class="col-lg-6 mb-4">
                            
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">6팀 GitHub link</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <p><a target="_blank" rel="nofollow" href="https://github.com/ssom94091/CP2_6_Team">GitHub</a><br>https://github.com/ssom94091/CP2_6_Team</p>
                                     
                                  </div>
                           

                        </div>
                        
                    </div>
                <!-- Approach -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                 </div>
                 <div class="card-body">
                     <p>*KBO리그 공식 사이트에서 데이터를 크롤링하여 데이터를 정제.</p>
                     <p class="mb-0">*랜덤포레스팅 기법을 이용하여 결정트리 생성</p>
                  </div>
                </div>
                </div>

                

                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>