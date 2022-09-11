<footer>
        <div class="row">
            <div class="col-lg-6 ">
                <div class="row">
                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-menu">
                            <div class="title">دسترسی سریع</div>
                            <?php
                                wp_nav_menu(array(
                                    "theme_location"=>"Footer_Menu1",
                                    "depth" => "1"
                                )); 
                            ?>
                        </div>
                    </div>
                    <div class=" col-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-menu">
                            <div class="title">دسته بندی موضوعی</div>
                            <?php 
                                wp_nav_menu(array(
                                    "theme_location"=>"Footer_Menu2",
                                    "depth"=>"1"
                                ));
                            ?>
                            <!-- <ul>
                                <li><a href="">وردپرس</a></li>
                                <li><a href="">اندروید</a></li>
                                <li><a href="">دسکتاپ</a></li>
                                <li><a href="">متفرقه</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div><br>
                
            </div>
            <div class="col-lg-6 text-center">
                <?php 
                    if(is_active_sidebar("social_media")){
                        dynamic_sidebar("social_media");
                    }
                ?>
                    <!-- <a href="" class="instagram"><em class="fa-brands fa-instagram"></em></a>
                    <a href="" class="telegram"><em class="fa-brands fa-telegram"></em></a>
                    <a href="" class="whatsapp"><em class="fa-brands fa-whatsapp"></em></a>
                    <a href="" class="youtube"><em class="fa-brands fa-youtube"></em></a>
                    <a href="" class="linkedin"><em class="fa-brands fa-linkedin"></em></a>
                    <a href="" class="twitter"><em class="fa-brands fa-twitter"></em></a> -->
                
                <br>
                <span class="copyright">&copy; تمامی حقوق این وبسایت برای      محمدرضااکبری محفوظ است. </span>
                <br>
                <span class="made-by">Made with <em class="fa-solid fa-heart"></em> By Mohammadreza Akbari</span>
            </div>
        </div>
    </footer>
</body>
<?php wp_footer(); ?>
</html>