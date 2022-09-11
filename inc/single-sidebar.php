<div class="col-12 col-lg-4 col-md-5 col-sm-12">
                    <div class="left-side">
                        <?php
                            if(is_active_sidebar("single_cats")){
                                dynamic_sidebar("single_cats");
                            }
                        ?>
                        <?php
                            if(is_active_sidebar("single_latest_posts")){
                                dynamic_sidebar("single_latest_posts");
                            }
                        ?>
                    </div>
                </div>