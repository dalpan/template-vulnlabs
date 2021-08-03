<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
   <meta name="description" content="HyperSec, Prove it to the world by solving all of these Challeng that you are not just internet fleas that are just silent in the computer">
   <meta name="keywords" content="Hacking labs, xsintelligence, xaisyndicatelab">
   <meta name="author" content="xaisyndicatelab">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcute icon" href="log0.png">
<title>Home | HyperSec</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/bootstrap4-neon-glow.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/particles.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>

  </head>
  <body>

  <div id="particles-js"></div>
    <div class="navbar-dark text-white">
      <div class="container">
        <nav class="navbar px-0 navbar-expand-lg navbar-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a href="index.php" class="pl-md-0 p-3 text-light">Home</a>
              <a href="about.php" class="p-3 text-decoration-none text-light">About</a>
              <a href="docs.php" class="p-3 text-decoration-none text-light">Docs</a>
              <a href="download.php" class="p-3 text-decoration-none text-light active">Download</a>

              </div>
            </div>
              
              <style media="screen">
              #button {
                background-color: Transparent;
                background-repeat:no-repeat;
                border: none;
                cursor:pointer;
                overflow: hidden;
              }
              </style>

          </div>
        </nav>

      </div>
    </div>
    <h1 class="display-3" style="text-align: center"><b>Alert !<span class="vim-caret">͏͏&nbsp;</span></b></h1>
    <div class="lead mb-3 text-mono text-success"style="text-align: center">
        Please read carefully before using this HyperSec !
    </div>
    <div class="jumbotron bg-transparent mb-0 radius-0">
      <div class="container">
        
          <div class="row">
            <div class="col-xl-12">
                <div class="panel-group" id="accordion" is-disabled="true">
                  <div class="panel panel-default">
                    <div class="container">
                      <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                          <div class="panel-title">
                            <h4>
                            Installation
                            </h4>
                          </div>
                        </a>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                          


                    <h4 class="mb-3" style="margin-top: 10px;">Summary : Install Apache Web Server, MySQL Server, PHP and Configure HyperSec</h4>
                        
                    <h4>Windows :</h4>
                    <p>The easiest way to install HyperSec is to download and install XAMPP if you do not already have a web server setup.
<br>
XAMPP is a very easy to install Apache Distribution for Linux, Solaris, Windows and Mac OS X. The package includes the Apache web server, MySQL, PHP, Perl, a FTP server and phpMyAdmin.
<br>
XAMPP can be downloaded from: https://www.apachefriends.org/en/xampp.html
<br>
Simply unzip hypersec.zip, place the unzipped files in your public html folder, then point your browser to: http://127.0.0.1/hypersec/</p>
                    <h4>Linux Packages :</h4>
                    <p>If you are using a Debian based Linux distribution, you will need to install the following packages (or their equivalent):
<br>
<pre class="text-white">$ apt-get -y install apache2 mariadb-server php php-mysqli php-gd libapache2-mod-php</pre>

The site will work with MySQL instead of MariaDB but we strongly recommend MariaDB as it works out of the box whereas you have to make changes to get MySQL to work correctly.</p>
               <br>
               <h4>Database Setup :</h4>
               <p>To set up the database, simply click on the Setup DVWA button in the main menu, then click on the Create / Reset Database button. This will create / reset the database for you with some data in.

If you receive an error while trying to create your database, make sure your database credentials are correct within ./config/config.inc.php. This differs from config.inc.php.dist, which is an example file.

The variables are set to the following by default:
<pre class="text-white">
$_DVWA[ 'db_user' ] = 'hypersec';
$_DVWA[ 'db_password' ] = 'T3gal1337';
$_DVWA[ 'db_database' ] = 'hypersec_labs';
</pre>
Note, if you are using MariaDB rather than MySQL (MariaDB is default in Kali), then you can't use the database root user, you must create a new database user. To do this, connect to the database as the root user then use the following commands:
  <br><br>
<pre class="text-white bg-transparent">
mysql> create database hypersec_labs;
Query OK, 1 row affected (0.00 sec)

mysql> create user hypersec@localhost identified by 'T3gal1337';
Query OK, 0 rows affected (0.01 sec)

mysql> grant all on dvwa.* to hypersec@localhost;
Query OK, 0 rows affected (0.01 sec)

mysql> flush privileges;
Query OK, 0 rows affected (0.00 sec)
</pre>
</p>         
                        
                    <p>It uses utility classes for typography and spacing to space content out within the larger
                      container.</p>
                    <p class="lead">
                      <a class="btn btn-sm btn-primary" href="#!" role="button">Learn more</a>
                    </p>
                  </div>

                          <br>
                          <br>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="container">
                      <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                          <div class="panel-title">
                            <h4>
                              Other Configuration
                            </h4>
                          </div>
                        </a>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse in">
                        <div class="panel-body">
                          
                        Depending on your Operating System, as well as version of PHP, you may wish to alter the default configuration. The location of the files will be different on a per-machine basis.<br>
                        <h5>PHP Configurations :</h5>
                        <ul>
                           
    <li>allow_url_include = on - Allows for Remote File Inclusions (RFI)</li>
    <li>allow_url_fopen = on - Allows for Remote File Inclusions (RFI)</li>
    <li>safe_mode = off - (If PHP <= v5.4) Allows for SQL Injection (SQLi)</li>
    <li>magic_quotes_gpc = off - (If PHP <= v5.4) Allows for SQL Injection (SQLi)</li>
    <li?>display_errors = off - (Optional) Hides PHP warning messages to make it less verbose</li>

                        </ul>
                          <br>
                          <br>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div> <!--Penutup Accordion-->
                
                
            
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Warning !!</h4>
                    HyperSec is damn vulnerable! Do not upload it to your hosting provider's public html folder or any Internet facing servers, as they will be compromised. It is recommended using a virtual machine (such as <b>VirtualBox</b >or <b>VMware</b>), which is set to NAT networking mode. Inside a guest machine, you can download and install XAMPP for the web server and database.
                  </div>


                  
          </div> <!-- Penutup row-->

          
      </div><!--Penutup Container-->
    
    </div><!--Penutup jumbotron-->
    <div class="footer">
         
        <div style="text-align: center">
            Made With Love By <br>
            &copy; xaisyndicatelab ♡ <?php echo date("Y") ?> ♡
          </div>
      
  </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="assets/js/particles.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>
