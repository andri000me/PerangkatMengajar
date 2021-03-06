<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-PBM</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script src="angular.js"></script>
    <script src="appformbacaan.js"></script>
    <link rel="shortcut icon" href="../assets/angular/img/favicon.png">
    <link rel="stylesheet" href="../assets/angular/bootstrap/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="../assets/angular/css/style.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/angular/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../assets/angular/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../assets/pure/css/Layout.css">
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="index.html" class="navbar-brand"><img src="../assets/pure/image/LogoEpbm.png" alt="" width="80%"></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.html"><h5>Home </h5></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h5>PBM <span class="caret"></span></h5></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="pbm1.php">Semester 1</a></li>
                    <li><a href="pbm1.php">Semester 2</a></li>
                    <li><a href="pbm1.php">Semester 3</a></li>
                    <li><a href="pbm1.php">Semester 4</a></li>
                    <li><a href="pbm1.php">Semester 5</a></li>
                    <li><a href="pbm1.php">Semester 6</a></li>
                    <li><a href="pbm1.php">Semester 7</a></li>
                    <li><a href="pbm1.php">Semester 8</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h5>Form <span class="caret"></span></h5></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mata Ajar Baru</a></li>
                    <li><a href="vformbacaan.php">Bacaan Baru</a></li>
                  </ul>
                </li>
                <li><a href="about.html"><h5>About </h5></a></li>
              </ul>
              <!--<form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
              </form>-->
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- User Account Menu -->
                  <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="logout.php" id="logout" class="dropdown-toggle"><h5>Logout <b id="welcome">(<?php echo $login_session; ?>)</b></h5></a>
                    <!-- <b id="logout"><a href="logout.php" class="btn btn-default btn-flat">Sign out</a></b> -->
                    <!-- <ul class="dropdown-menu">
                      <li class="user-header">
                        <img src="../assets/angular/dist/img/Photo Nov 01, 6 56 17 PM.jpg" class="img-circle" alt="User Image">
                        <p>
                          Fran Bow - Web Developer
                          <small></small>
                        </p>
                      </li>
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                          <a href="#" class="btn btn-default btn-flat">Sign out</a>
                          <b id="logout"><a href="logout.php" class="btn btn-default btn-flat">Sign out</a></b>
                        </div>
                      </li>
                      <form class="form-signin user-footer">
                        <label for="inputNip">NIP :</label>
                        <input type="NIP" id="inputNIP" class="form-control" placeholder="NIP" required autofocus>
                        <label for="inputPassword" style="padding-top: 5px;">Password :</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <div class="checkbox"></div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                      </form>
                    </ul> -->
                  </li>
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <!-- <h1>
              <center>
                <img src="../assets/angular/img/logo-unair.png" alt="" height="15%" width="15%">
              <center><br>
              <font color="white"><h2>Sistem Informasi Proses Belajar Mengajar</h2></font>
              <small></small>
            </h1> --><br>

            <fieldset>
              <div class="container" id="startchange">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                <p>Identitas MA</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                <p>GBPP</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                <p>Kontrak Perkuliahan</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                <p>SAP</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                <p>Email Templates</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                                <p>Preview & Submit</p>
                            </div>
                    </div>
                </div>
                  
                  <!-- Rahman -->
                  <form role="form">
                      <div class="row setup-content" id="step-1">
                          <div class="col-xs-12">
                              <div class="col-md-12">
                                  <h3> Service Details</h3>
                                  <div class="form-group">
                                      <label class="col-md-4 control-label" for="stack_id">Select Stack</label>
                                      <div class="col-md-5">
                                          <select id="stack_id" name="stack_id" class="form-control">
                                            <option value="1">Open Source</option>
                                            <option value="2">IBM</option>
                                            <option value="3">Microsoft</option>
                                            <option value="4">Other Services</option>
                                          </select>
                                      </div>
                                  </div>
                                  <br>
                                  <br>
                                  <div class="form-group">
                                      <label class="col-md-4 control-label" for="service_name">Service Name</label>  
                                      <div class="col-md-5">
                                          <input id="service_name" name="service_name" type="text" placeholder="" class="form-control input-md">
                                      </div>
                                  </div>
                                  <br>
                                  <br>
                                  <div class="form-group">
                                      <label class="col-md-4 control-label" for="service_architecture">Service Architecture</label>  
                                      <div class="col-md-5">
                                          <input id="service_architecture" name="service_architecture" type="text" placeholder="" class="form-control input-md">
                                      </div>
                                  </div>
                                  <br>
                                  <br>
                                  <!-- Text input-->
                                  <div class="form-group">
                                    <label class="col-md-4 control-label" for="service_version">Service Version</label>  
                                    <div class="col-md-5">
                                      <input id="service_version" name="service_version" type="text" placeholder="" class="form-control input-md">
                                    </div>
                                  </div>
                                  <br>
                                  <br>
                                  <!-- Textarea -->
                                  <div class="form-group">
                                    <label class="col-md-4 control-label" for="service_description">Service Description</label>
                                    <div class="col-md-4">                     
                                      <textarea class="form-control" id="service_description" name="service_description"></textarea>
                                    </div>
                                  </div>
                                  <br>
                                  <br>
                                  <!-- Select Basic -->
                                  <div class="form-group">
                                    <label class="col-md-4 control-label" for="os_id">Operating System</label>
                                    <div class="col-md-5">
                                      <select id="os_id" name="os_id" class="form-control">
                                        <option value="1">Ubuntu</option>
                                        <option value="2">RHEL</option>
                                        <option value="3">Windows</option>
                                      </select>
                                    </div>
                                  </div>
                                  <br>
                                  <br>
                                  <!-- Select Basic -->
                                  <div class="form-group">
                                    <label class="col-md-4 control-label" for="sl_id">Software License</label>
                                    <div class="col-md-5">
                                      <select id="sl_id" name="sl_id" class="form-control">
                                        <option value="1">Licence 1</option>
                                        <option value="2">Licence 2</option>
                                        <option value="3">Licence 3</option>
                                      </select>
                                    </div>
                                  </div>
                                  <br>
                                  <br>
                                  <!-- Select Basic -->
                                  <div class="form-group">
                                    <label class="col-md-4 control-label" for="sc_id">Service Category</label>
                                    <div class="col-md-5">
                                      <select id="sc_id" name="sc_id" class="form-control">
                                        <option value="1">Category 1</option>
                                        <option value="2">Category 2</option>
                                        <option value="3">Category 3</option>
                                      </select>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                              </div>
                          </div>
                      </div>

                      <!--Lyli & Kinan -->
                      <div class="row setup-content" id="step-2">
                        <div class="col-xs-12">
                           <div class="col-md-12">
                              <h3>Kompetensi</h3>
                              <div class="form-group">
                                <table width="598" border="0">
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td> 
                                  </tr>
                                  <tr>
                                    <td><strong>Mata ajar </strong></td>
                                    <td>:</td>
                                    <td><input name="mataajar" type="text" placeholder="Mata Ajar" oninvalid="this.setCustomValidity('Mata ajar harus diisi')" oninput="setCustomValidity('')" required/></td>
                                  </tr>
                                  <tr>
                                    <td><strong>Kompetensi</strong></td>
                                    <td>:</td>
                                    <td><textarea name="kompetensi" cols="50" placeholder="Kompetensi" oninvalid="this.setCustomValidity('kompetensi harus diisi')" oninput="setCustomValidity('')" required="required"></textarea></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  
                                    <td><strong>Kompetensi Khusus </strong></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><p>
                                      <input type="text" name="subkomp" id="subkomp" />
                                      <input type="submit" name="plus_subkomp" id="plus_subkomp" value="+" />
                                    </p>        </td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><textarea name="list_subkomp" id="list_subkomp" style="width: 250px; height: 75px; border: 0; padding-left: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 18px;background-color: rgba(255, 255, 255, 0.5); resize:none;" readonly></textarea></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><strong>Pokok Bahasan </strong></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><input type="text" name="pokokbahasan" />
                                      <input type="submit" name="plus_pokokbahasan" id="plus_pokokbahasan" value="+"  />
                                      <div class="form-group">
                                          <label class="col-md-4 control-label" for="sep_json"> Upload Materi</label>
                                          <input type="file" id="upload_materi" name="upload_materi" class="input-file" accept=".txt,.docx,.pdf" placeholder="Upload Materi">
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><textarea name="list_pokokbahasan" readonly="readonly" id="list_subkomp" style="width: 250px; height: 75px; border: 0; padding-left: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 18px;background-color: rgba(255, 255, 255, 0.5); resize:none;"></textarea></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><strong>Sub Pokok Bahasan </strong></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><input type="text" name="subpokok" id="subpokok"/>
                                    <input type="submit" name="plus_subpokok" value="+" /></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><textarea name="list_subpokok" readonly="readonly" id="list_subpokok" style="width: 250px; height: 75px; border: 0; padding-left: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 18px;background-color: rgba(255, 255, 255, 0.5); resize:none;"></textarea>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>

                                  <form id="form8" name="form8" method="post" action="">
                                    <table width="347" height="280" border="0">
                                      <tbody>
                                        <tr>
                                          <td width="113">Pokok Bahasan</td>
                                          <td width="5">:</td>
                                          <td width="215">
                                            <label for="textfield"></label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Pokok Bahasan" size="30" oninvalid="this.setCustomValidity('Pokok Bahasan Harus di isi')" oninput="setCustomValidity('')" required/>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>Metode</td>
                                          <td>:</td>
                                          <td><label>
                                            <select name="select4">
                                              <option value="---------">---------</option>
                                              <option value="Ceramah">Ceramah</option>
                                              <option value="Presentasi">Presentasi</option>
                                              <option value="Tanya Jawab">Tanya Jawab</option>
                                            </select>
                                          </label></td>
                                        </tr>
                                        <tr>
                                          <td>Media</td>
                                          <td>:</td>
                                          <td><label>
                                            <select name="select5">
                                              <option value="---------">---------</option>
                                              <option value="Proyektor">Proyektor</option>
                                              <option value="White Board">White Board</option>
                                              <option value="Hand out">Hand out</option>
                                            </select>
                                          </label></td>
                                        </tr>
                                        <tr>
                                          <td>Waktu</td>
                                          <td>:</td>
                                          <td><label>
                                            <select name="select6">
                                            <option value="---------">---------</option>
                                            <option value="50 menit">50 menit</option>
                                            <option value="100 menit">100 menit</option>
                                            <option value="150 menit">150 menit</option>
                                            <option value="200 menit">200 menit</option>
                                            <option value="250 menit">250 menit</option>
                                            </select>
                                          </label></td>
                                        </tr>
                                        <tr>
                                          <td height="94" valign="top">Bacaan</td>
                                          <td>:</td>
                                          <td>
                                          <label>
                                            <input type="checkbox" name="checkbox4" value="checkbox" />bacaan 1</label><br />
                                          <label>
                                            <input type="checkbox" name="checkbox5" value="checkbox" />bacaan 2</label><br />
                                          <label>
                                            <input type="checkbox" name="checkbox6" value="checkbox" />bacaan 3</label></td>
                                        </tr>
                                      </tbody>
                                    </table>
                
                                  <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >BACK</button> </table>
                                  <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >NEXT</button>
                                </table>
                              </div>
                              <p></p>
                           </div>
                        </div>
                      </div>
                      
                      <!-- Rizal -->            
                      <div class="row setup-content" id="step-3">
                          <div class="col-xs-12">
                              <div class="col-md-12">
                                  <h3> Kontrak Perkuliahan</h3>
                                  <div class="form-group">
                                    <label class="col-md-4 control-label" for="strategi">Strategi Perkuliahan</label>  
                                      <div class="col-md-5">
                                          <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                                      </div>
                                  </div>
                                  <br>
                                  <br>
                                  
                                  <h4>Komponen Dan Metode Penilaian</h4>
                                  <br>
                                  <div class="row">
                                      <div class="col-xs-6">
                                          <div class="form-group">
                                            <label class="col-xs-3 control-label" for="strategi">Kuis</label>  
                                              <div class="col-xs-3">
                                                  <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xs-6">
                                          <div class="form-group">
                                            <label class="col-xs-3 control-label" for="strategi">Tugas</label>  
                                              <div class="col-xs-3">
                                                  <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xs-6">
                                          <div class="form-group">
                                            <label class="col-xs-3 control-label" for="strategi">UAS</label>  
                                              <div class="col-xs-3">
                                                  <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xs-6">
                                          <div class="form-group">
                                            <label class="col-xs-3 control-label" for="strategi">Tutor</label>  
                                              <div class="col-xs-3">
                                                  <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xs-6">
                                          <div class="form-group">
                                            <label class="col-xs-3 control-label" for="strategi">Soft Skill</label>  
                                              <div class="col-xs-3">
                                                  <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xs-6">
                                          <div class="form-group">
                                            <label class="col-xs-3 control-label" for="strategi">UTS</label>  
                                              <div class="col-xs-3">
                                                  <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                              </div>
                          </div>
                      </div>
                  
                      <!-- Ana Yushinta -->    
                      <div class="row setup-content" id="step-4">
                            <div class="col-xs-12">
                                <div class="col-md-12" >
                                    <h3> SAP</h3>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="pertemuan_ke">Pertemuan ke: </label>
                                                <div class="col-md-3">
                                                    <select id="pertemuan_ke" name="pertemuan_ke" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="tahap_pembelajaran">Tahap Pembelajaran: </label>
                                                <div class="col-md-4">
                                                    <select id="tahap_pembelajaran" name="tahap_pembelajaran" class="form-control">
                                                        <option>Pendahuluan</option>
                                                        <option>Bab 1</option>
                                                        <option>Bab 2</option>
                                                        <option>Bab 3</option>
                                                        <option>Penutupan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Kegiatan_Pengajar">Kegiatan Pengajar: </label>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="">
                                                        <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button">+</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Kegiatan_Mahasiswa">Kegiatan Mahasiswa: </label>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="">
                                                        <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button">+</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>Media dan alat pengajaran:</h4>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" aria-label="...">
                                                </span>
                                                <h5>Papan Tulis</h5>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" aria-label="...">
                                                </span>
                                                <h5>Bahan Ajar</h5>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" aria-label="...">
                                                </span>
                                                <h5>LCD</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>Evaluasi</h4>
                                            <input id="subject" name="subject" type="text" placeholder="" class="form-control input-md">
                                        </div>
                                    </div>
                                            
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                </div>
                            </div>
                      </div>

                      
                      <!-- selesainya ana yushi -->
                      <div class="row setup-content" id="step-5">
                          <div class="col-xs-12">
                              <div class="col-md-12">
                                  <h3> Email Templates</h3>
                                  
                                  <!-- Text input-->
                                  <div class="form-group">
                                    <label class="col-md-4 control-label" for="emailType">Email Type</label>  
                                    <div class="col-md-5">
                                      <input id="emailType" name="emailType" type="text" placeholder="" class="form-control input-md">
                                      
                                    </div>
                                  </div>
                                  <br>
                                  <br>
                                  <!-- Text input-->
                                  <div class="form-group">
                                    <label class="col-md-4 control-label" for="description">Description</label>  
                                    <div class="col-md-5">
                                      <input id="description" name="description" type="text" placeholder="" class="form-control input-md">
                                      
                                    </div>
                                  </div>
                                  <br>
                                  <br>
                                  <!-- Text input-->
                                  <div class="form-group">
                                    <label class="col-md-4 control-label" for="subject">Subject</label>  
                                    <div class="col-md-5">
                                      <input id="subject" name="subject" type="text" placeholder="" class="form-control input-md">
                                      
                                    </div>
                                  </div>
                                  <br>
                                  <br>
                                  <!-- Textarea -->
                                  <div class="form-group">
                                    <label class="col-md-4 control-label" for="body">Body</label>
                                    <div class="col-md-4">                     
                                      <textarea class="form-control" id="body" name="body"></textarea>
                                    </div>
                                  </div>
                  
                                   <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                              </div>
                          </div>
                      </div>
                      <div class="row setup-content" id="step-6">
                          <div class="col-xs-12">
                              <div class="col-md-12">
                                  <h3> Preview & Submit</h3>
                                  <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div><br>
            </fieldset>
          </section>
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>MZRP.105</b>
          </div>
          <strong>Copyright &copy; 2016.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <script src="../assets/angular/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="../assets/angular/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/angular/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/angular/plugins/fastclick/fastclick.min.js"></script>
    <script src="../assets/angular/dist/js/app.min.js"></script>
    <script src="../assets/angular/dist/js/demo.js"></script>

    <script src="../assets/pure/js/PBMDosen.js"></script>
    <script src="../assets/pure/js/Navbar.js"></script>
  </body>
</html>
