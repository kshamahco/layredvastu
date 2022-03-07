<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $this->element('common-part'); ?>
  <link rel="stylesheet" href="<?= SITE_PATH ?>css/blog.css">
  <title><?= $pages[0]['blog_seo_title']; ?></title>
  <meta name="description" content="<?= $pages[0]['blog_seo_description']; ?>" />
  <link rel="canonical" href="<?= SITE_PATH ?>">
</head>

<body>
  <?php echo $this->element('header'); ?>
  <main>
    <section class="blog_bnr">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-4 text-center">
            <h4>Latest News</h4>
          </div>
        </div>
      </div>

    </section>

    <section class="blog_main">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-8">            
            <? foreach ($blog as $singleblog) { ?>
              <div class="blist">
                <figure>
                  <img src="<?= SITE_PATH . 'img/listingimage/'.$singleblog['listing_image'] ?>" class="h-100 w-100" alt="<?= $singleblog['name']; ?>">
                </figure>
                <div class="blist__right">
                  <h2><?= $singleblog['name']; ?></h2>
                  <p><?= $singleblog['postcontent'].'...'; ?></p>
                  <aside>
                    <figure>
                      <a href="<?= SITE_PATH . 'blog/'.$singleblog['url'] ?>" class="stretched-link" target="_blank">
                        <img src="<?= SITE_PATH . 'img/blogs/blogger_profile.jpg' ?>" alt="Layered Vastu Author" class="rounded-circle" width="45">
                        <span>Seema Bhattia</span>
                      </a>
                    </figure>
                    <button class="btn btn-sm btn-warning">View more</button>
                  </aside>
                </div>
              </div>
            <? } ?>
            
            
            <? /*<nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>*/ ?>
          </div>

          <div class="col-lg-4">
            <aside class="sidebar box sticky-top">
              <h5>Recent post:</h5>
              <? foreach ($blog as $singleblog) { ?>
                <article class="post">
                  <div class="post__date"><strong><?= date('d', strtotime($singleblog['created'])); ?></strong> <?= date('M', strtotime($singleblog['created'])); ?> <span class="year"><?= date('Y', strtotime($singleblog['created'])); ?></span> </div>
                  <h4><a href="<?= SITE_PATH . 'blog/'.$singleblog['url'] ?>" class="stretched-link"><?= $singleblog['name']; ?></a></h4>
                </article>
              <? } ?>
            </aside>
          </div>

        </div>

      </div>
    </section>
  </main>
  <?php echo $this->element('footer'); ?>
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</body>

</html>