<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 1.0
 */

  get_header();
?>

        <div class="col-sm-8 blog-main">

          <div class="row">
            <div class="col-sm-6">
              <section class="blog-post">
                <div class="panel panel-default">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/technology/unsplash-2.jpg" class="img-responsive" />
                  <div class="panel-body">
                    <div class="blog-post-meta">
                      <span class="label label-light label-primary">News</span>
                      <p class="blog-post-date pull-right">February 16, 2016</p>
                    </div>
                    <div class="blog-post-content">
                      <a href="post-image.html">
                        <h2 class="blog-post-title">Like a little drop of ink</h2>
                      </a>
                      <p>Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem.</p>
                      <a class="btn btn-info" href="post-image.html">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                        <i class="material-icons">&#xE80D;</i>
                      </a>
                    </div>
                  </div>
                </div>
              </section><!-- /.blog-post -->
              <section class="blog-post">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="blog-post-meta">
                      <span class="label label-light label-warning">Apps</span>
                      <p class="blog-post-date pull-right">February 5, 2016</p>
                    </div>
                    <div class="blog-post-content">
                      <a href="post-image.html">
                        <h2 class="blog-post-title">Cinderella through the room</h2>
                      </a>
                      <p>Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem.</p>
                      <a class="btn btn-info" href="post-image.html">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                        <i class="material-icons">&#xE80D;</i>
                      </a>
                    </div>
                  </div>
                </div>
              </section><!-- /.blog-post -->
              <section class="blog-post">
                <div class="panel panel-default">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/technology/unsplash-3.jpg" class="img-responsive" />
                  <div class="panel-body">
                    <div class="blog-post-meta">
                      <span class="label label-light label-primary">News</span>
                      <p class="blog-post-date pull-right">Januari 9, 2016</p>
                    </div>
                    <div class="blog-post-content">
                      <a href="post-image.html">
                        <h2 class="blog-post-title">I have arms for them</h2>
                      </a>
                      <p>Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem.</p>
                      <a class="btn btn-info" href="post-image.html">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                        <i class="material-icons">&#xE80D;</i>
                      </a>
                    </div>
                  </div>
                </div>
              </section><!-- /.blog-post -->
            </div>
            <div class="col-sm-6">
              <section class="blog-post">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="blog-post-meta">
                      <span class="label label-light label-info">Branding</span>
                      <p class="blog-post-date pull-right">Februari 11, 2016</p>
                    </div>
                    <div class="blog-post-content">
                      <a href="post-image.html">
                        <h2 class="blog-post-title">In a glass of water</h2>
                      </a>
                      <p>Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem.</p>
                      <p>Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra.</p>
                      <a class="btn btn-info" href="post-image.html">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                        <i class="material-icons">&#xE80D;</i>
                      </a>
                    </div>
                  </div>
                </div>
              </section><!-- /.blog-post -->
              <section class="blog-post">
                <div class="panel panel-default">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/technology/unsplash-4.jpg" class="img-responsive" />
                  <div class="panel-body">
                    <div class="blog-post-meta">
                      <span class="label label-light label-primary">News</span>
                      <p class="blog-post-date pull-right">January 24, 2016</p>
                    </div>
                    <div class="blog-post-content">
                      <a href="post-image.html">
                        <h2 class="blog-post-title">I glide and swan</h2>
                      </a>
                      <p>Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem.</p>
                      <a class="btn btn-info" href="post-image.html">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                        <i class="material-icons">&#xE80D;</i>
                      </a>
                    </div>
                  </div>
                </div>
              </section><!-- /.blog-post -->
              <section class="blog-post">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="blog-post-meta">
                      <span class="label label-light label-warning">Apps</span>
                      <p class="blog-post-date pull-right">January 3, 2016</p>
                    </div>
                    <div class="blog-post-content">
                      <a href="post-image.html">
                        <h2 class="blog-post-title">In the universe</h2>
                      </a>
                      <p>Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem.</p>
                      <p>Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra.</p>
                      <a class="btn btn-info" href="post-image.html">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                        <i class="material-icons">&#xE80D;</i>
                      </a>
                    </div>
                  </div>
                </div>
              </section><!-- /.blog-post -->
            </div>
          </div>

          <nav>
            <ul class="pager">
              <li><a class="withripple" href="#">Previous</a></li>
              <li><a class="withripple" href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

          <div class="sidebar-module">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </div><!-- /.sidebar-module -->

          <div class="sidebar-module">
            <div class="panel panel-default">
              <div class="panel-body">
                <h4>About</h4>
                <p>Donec ut libero sed arcu vehicula ultricies a non tortor. <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</em> Aenean ut gravida lorem.</p>
              </div>
            </div>
          </div><!-- /.sidebar-module -->

          <div class="sidebar-module">
            <div class="panel panel-default">
              <div class="panel-body">
                <h4>Categories</h4>
                <ol class="categories list-unstyled">
                  <li>
                    <a class="label label-light label-primary" href="filter-category.html">News</a>
                    <span class="label label-light label-default pull-right">8</span>
                  </li>
                  <li>
                    <a class="label label-light label-warning" href="filter-category.html">Apps</a>
                    <span class="label label-light label-default pull-right">5</span>
                  </li>
                  <li>
                    <a class="label label-light label-info" href="filter-category.html">Branding</a>
                    <span class="label label-light label-default pull-right">9</span>
                  </li>
                </ol>
              </div>
            </div>
          </div><!-- /.sidebar-module -->

          <div class="sidebar-module">
            <div class="panel panel-default">
              <div class="panel-body">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                  <li><a href="filter-date.html">February 2016</a></li>
                  <li><a href="filter-date.html">January 2016</a></li>
                  <li><a href="filter-date.html">December 2015</a></li>
                  <li><a href="filter-date.html">November 2015</a></li>
                  <li><a href="filter-date.html">October 2015</a></li>
                  <li><a href="filter-date.html">September 2015</a></li>
                  <li><a href="filter-date.html">August 2015</a></li>
                  <li><a href="filter-date.html">July 2015</a></li>
                  <li><a href="filter-date.html">June 2015</a></li>
                  <li><a href="filter-date.html">May 2015</a></li>
                  <li><a href="filter-date.html">April 2015</a></li>
                  <li><a href="filter-date.html">March 2015</a></li>
                </ol>
              </div>
            </div>
          </div><!-- /.sidebar-module -->

          <div class="sidebar-module">
            <div class="panel panel-default">
              <div class="panel-body">
                <h4>Newsletter</h4>
                <div class="form-group label-floating">
                  <label class="control-label" for="name">Name</label>
                  <input type="text" id="name" class="form-control input-sm">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="email">E-mail</label>
                  <input type="text" id="email" class="form-control input-sm">
                </div>
                <a href="#" class="btn btn-default btn-raised btn-sm btn-block">Subscribe</a>
              </div>
            </div>
          </div><!-- /.sidebar-module -->

          <div class="sidebar-module">
            <div class="panel panel-default">
              <div class="panel-body">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Google+</a></li>
                  <li><a href="#">Twitter</a></li>
                </ol>
              </div>
            </div>
          </div><!-- /.sidebar-module -->

        </div><!-- /.blog-sidebar -->

<?php

  get_footer();
  
?>
