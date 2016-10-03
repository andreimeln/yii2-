<?php

$this->title = "Анекдоты";

?>
      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="row">
            <div class="col-sm-6">
	      <?php
	      foreach ($twits as $a)
	      {
	      ?>
              <section class="blog-post">
                <div class="panel panel-default">
                  <img src="img/technology/unsplash-2.jpg" class="img-responsive" />
                  <div class="panel-body">
                    <div class="blog-post-meta">
                      <span class="label label-light label-primary">News</span>
                      <p class="blog-post-date pull-right">February 16, 2016</p>
                    </div>
                    <div class="blog-post-content">
                      <a href="post-image.html">
                        <h2 class="blog-post-title">Like a little drop of ink</h2>
                      </a>
                      <p><?= $a->text ?></p>
                      <a class="btn btn-info" href="post-image.html">Read more</a>
                      <a class="blog-post-share pull-right" href="#"
                        <i class="material-icons">&#xE80D;</i>
                      </a>
                    </div>
                  </div>
                </div>
              </section><!-- /.blog-post -->
	      <?php
	      }
	      ?>
            </div>
         </div>
       </div>
     </div>

