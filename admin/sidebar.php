         <!-- Sidebar  -->
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Hoş geldin <?php echo $_SESSION['admin_kadi']?>
                            <br />
                                
                                <small>
                                    <?php   //  $sifre = $_SESSION['admin_sifre'];
                                            //  echo "md5 sifreleme: "?><br>
                                    <?php   //  echo "md5 sifreleme : ".md5($sifre) ;?> </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard "></i>Anasayfa</a>
                    </li>

                    <li>
                        <a  href="ayarlar.php?durum"><i class="fa fa-code "></i>Ayarlar</a>
                    </li>
                    <li>
                        <a  href="menuler.php?durum"><i class="fa fa-edit "></i>Menüler</a>
                    </li>
                    <li>
                        <a  href="slider.php?durum"><i class="fa fa-square-o "></i>Slider</a>
                    </li>
                             
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
