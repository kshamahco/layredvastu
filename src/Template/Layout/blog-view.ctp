<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $this->element('common-part'); ?>
  <link rel="stylesheet" href="<?= SITE_PATH ?>css/blog.css">
  <title><?= $blog[0]['seo_title']; ?></title>
  <meta name="description" content="<?= $blog[0]['seo_description']; ?>" />
  <link rel="canonical" href="<?= SITE_PATH ?>">
</head>

<body>
  <?php echo $this->element('header'); ?>
  <main>

    <section class="hdline">
      <div class="container-xl">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= SITE_PATH ?>"><i class="fa-solid fa-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="<?= SITE_PATH.'blog' ?>">blog</a></li>
            <? /*<li class="breadcrumb-item active" aria-current="page"><?= $blog[0]['name']; ?></li>*/ ?>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-9">
            <h1><?= $blog[0]['heading_1']; ?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-category">
              <ul>
                <? if($blog[0]['type']){ ?>
                  <li>
                    <h5><span class="badge bg-outline"><?= $blog[0]['type']; ?></span></h5>
                  </li>
                <? } ?>
                <? /*<li><span class="text-muted">12 hours ago</span></li>*/ ?>
              </ul>

            </div>
          </div>
          <div class="col-lg-3 offset-lg-1">
            <div class="exp">
              <div class="exp__icon">
                <img src="<?= SITE_PATH . 'img/blogs/blogger_profile.jpg' ?>" alt="Vastu Author" class="rounded-circle" width="60">
              </div>Author<span>Seema Bhattia</span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section class="pbanner">
      <div class="parallax-bg" style="background-image: url(<?= SITE_PATH . 'img/bannerimage/'.$blog[0]['banner_image'] ?>);" data-swiper-parallax="-23%"></div>
    </section>
    <section class="blog-content">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-content__view">
              <div class="blog-content__view__inner">
                <h2><?= $blog[0]['heading_2']; ?></h2>

                <?= $blog[0]['post']; ?>
                <? /*<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis perspiciatis soluta dolorem, corrupti eius ratione labore placeat corporis maxime rerum totam quia sit, similique aut omnis ab molestias enim. Expedita.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates libero dolores quam quos eos porro repellat cupiditate quod, eius unde laborum dolorem nihil. Dolores qui unde debitis itaque distinctio?
                </p>
                <p class="mb-4"><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corporis distinctio magnam reprehenderit, aperiam veritatis amet assumenda suscipit sunt. Quis ex id alias. Deserunt odit, laudantium corrupti iusto dignissimos eligendi.</strong></p>
                <figure class="mb-4">
                  <img src="<?= SITE_PATH . 'img/blog/blog_image1.jpg' ?>" class="img-fluid">
                </figure>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corporis distinctio necessitatibus corporis distinctio magnam reprehenderit, aperiam veritatis amet assumenda suscipit sunt. Quis ex id alias. Deserunt odit </p>

                <blockquote>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis similique alias voluptatum consequatur nihil cumque nesciunt eaque molestiae deserunt voluptatem, minus commodi eveniet dicta iste doloribus explicabo aliquam quidem!</p>
                </blockquote>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis perspiciatis <strong>soluta dolorem</strong>, corrupti eius ratione labore placeat corporis maxime rerum totam quia sit, similique aut omnis ab molestias enim. Expedita.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates libero dolores quam quos eos porro repellat cupiditate quod, eius unde laborum dolorem nihil. Dolores qui unde debitis itaque distinctio.
                </p>
                <h5>Listing Heading</h5>

                <ul>
                  <li>A eu, ac nunc, volutpat. Augue enim ac justo, at elementum, arcu.</li>
                  <li>At sodales quam felis ullamcorper iaculis tristique. Felis pellentesque sit neque.</li>
                  <li>Porta ipsum quis lacus eu ipsum mattis sit quis.</li>
                  <li>Accumsan arcu neque, nisl, pellentesque fames justo consequat.</li>
                  <li>Diam ac phasellus est, eu urna purus blandit aliquam. Vitae accumsan et pellentesque diam in.</li>
                  <li>Tellus arcu, lectus tincidunt neque nunc. Bibendum lacus, molestie ultrices sed arcu.</li>
                </ul>
                <p class="mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae asperiores dolorem laboriosam quasi distinctio aspernatur provident!.</p>
                <h5 class="mt-2">How to calculate property tax in Delhi</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae asperiores dolorem laboriosam quasi distinctio aspernatur provident! <strong>Distinctio blanditiis sint at molestiae</strong> error labore, officiis, mollitia assumenda, voluptatem rerum quia earum.</p>
                <table class="table table-bordered">
                  <tr>
                    <td><strong>Category</strong></td>
                    <td><strong>House tax</strong></td>
                    <td><strong>Delhi Property tax on commercial property</strong></td>
                  </tr>
                  <tr>
                    <td>A</td>
                    <td>12%</td>
                    <td>20%</td>
                  </tr>
                  <tr>
                    <td>B</td>
                    <td>12%</td>
                    <td>20%</td>
                  </tr>
                  <tr>
                    <td>C</td>
                    <td>11%</td>
                    <td>20%</td>
                  </tr>
                </table>
                <h5></h5>
                <h5 class="mt-4">Conclusion</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, dolor quos. Qui necessitatibus accusantium omnis eligendi numquam repellat quae, saepe totam. Assumenda quos ipsum numquam aut beatae sequi, similique non! amet consectetur adipisicing elit. Aspernatur quas ut repudiandae eos velit. Ipsa, voluptate animi quasi natus error totam nesciunt mollitia optio.</p>*/ ?>



              </div>
            </div>
          </div>
          <? if($staticdata[0]['facebook_url'] || $staticdata[0]['twiter_url'] || $staticdata[0]['insta_url']){ ?>
            <div class="col-lg-3 offset-lg-1">
              <aside class="sidebar sticky-top">
                <h5>Share this post:</h5>
                <ul class="social-media">
                  <? /*<li><a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>*/ ?>
                  <? if($staticdata[0]['facebook_url']){ ?>
                    <li><a href="<?= $staticdata[0]['facebook_url'] ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                  <? } 
                  if($staticdata[0]['twiter_url']){ ?>
                    <li><a href="<?= $staticdata[0]['twiter_url'] ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                  <? }
                  if($staticdata[0]['insta_url']){ ?>
                    <li><a href="<?= $staticdata[0]['insta_url'] ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                  <? } ?>
                </ul>
              </aside>
            </div>
          <? } ?>
        </div>
      </div>

    </section>
  </main>
  <?php echo $this->element('footer'); ?>
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</body>

</html>