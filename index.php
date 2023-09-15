<?php get_header(); ?>



<main>
    <div class="main" id="main">


      <section class="container">
        <article>
          <ul>


            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            

            <li class="latest_articles_box">
              <div class="link_area"><a href="<?php the_permalink(); ?>"></a></div>
              <ul>

                <li>
              <div class="latest_articles_l">
              <p class="category"><a href="<?php the_permalink(); ?>"><?php the_category(); ?></a></p>
              <img src="assets/img/top/demo.jpg" alt="幻想ラボ" width="100%">
            </div>
          </li>

          <li>
              <div class="latest_articles_r">
                <p class="date"><?php the_field("music_artist"); ?></p>
                <h3 class="title"> <?php the_field("music_title"); ?><</h3>
                <dl class="tag">

                  <?php if(has_tag()): ?>
                  <?php the_tags( '<dl><dd>', '</dd><dd>', '</dd></dl>'); ?>
                  <?php endif; ?>
                </dl>
              </div>
           </li>

            </ul>
            </li>



            <?php endwhile; ?>
            <?php endif; ?>


            <li>
              <p class="category"><a href="https://www.google.com/?hl=ja">カテゴリ名</a></p>
              <div class="article_box"> <img src="assets/img/top/demo.jpg" alt="幻想ラボ" width="100%">
                <p class="date">2023.07.06</p>
                <h3 class="title"><a href="https://fantasy-lab.jp/">タイトルが入ります。タイトルが入ります。</a></h3>
                <dl class="tag">
                  <dd><a href="https://www.youtube.com/">タグ名</a></dd>
                  <dd><a href="https://www.youtube.com/">タグ名</a></dd>
                  <dd><a href="https://www.youtube.com/">タグ名</a></dd>
                </dl>
              </div>
            </li>





          </ul>
        </article>
      </section>
    </div>



    <section class="tag_area">
      <p class="midashi_01"><span>約束のキーワード</span></p>
      <ul id="tag_box" class="tag">
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
        <li><a href="https://www.youtube.com/">タグ名</a></li>
      </ul>
    </section>

  </main>






<?php get_footer(); ?>  
  
