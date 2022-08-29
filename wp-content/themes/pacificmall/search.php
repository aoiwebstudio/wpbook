<?php get_header(); ?>
<div class="page-inner">
  <div class="page-main" id="pg-search">
    <form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url()); ?>">
      <div class="search-box">
        <input type="text" name="" class="search-input" placeholder="キーワードを入力してください" value="<?php the_search_query(); ?>" />
        <button type="submit" class="button button-submit">検索</button>
      </div>
    </form>
    <div class="searchResult-wrapper">
      <?php if (get_search_query()) : ?>
        <div class="searchResult-head">
          <h3 class="title">「<?php the_search_query(); ?>」の検索結果</h3>
          <div class="total">全<?php echo $wp_query->found_posts; ?>件</div>
        </div>
      <?php endif; ?>
      <ul class="searchResultLlist">
        <?php 
        if(have_posts() && get_search_query()):
          while(have_posts()): the_post();
        ?>
        <li class="searchResultLlist-item">
          <a href="<?php the_permalink(); ?>">
            <div class="item-wrapper">
              <div class="image">
                <?php 
                $image = get_the_post_thumbnail($post->ID, 'search');
                if($image):
                  echo $image;
                else:
                  echo '<img src="'. get_template_directory_uri(). '/assets/images/imag-noImage.png" />';
                endif;
                ?>
                <img src="./assets/images/img-noImage.png" alt="" />
              </div>
              <dl>
                <dt><?php the_title(); ?></dt>
                <dd class="description"><?php echo get_the_excerpt(); ?></dd>
              </dl>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php 
      <div class="pager">
        <ul class="pagerList">
        if(function_exists('page_navi')):
          page_navi();
        endif;
        ?>  
        </ul>
      </div>
      <?php elseif(! get_search_query()): ?>
        <p>検索ワードが入力されていません</p>
        <?php else: ?>
          <p>該当する記事は見つかりませんでした。</p>
          <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
</div> <!-- #page-container -->
</div><!-- #page-contents -->
</main>
</div><!-- #primary -->
</div><!-- .wrap -->
<footer class="footer" id="footer">
  <div class="footerContents">
    <div class="footerContents-contact">
      <div class="enterprise-logo">
        <img src="./assets/images/svg/logo-footer.svg" alt="PACIFIC MALL DEVELOPMENT" />
      </div>
      <div class="enterprise-detail">
        <p class="name">パシフィックモール開発株式会社</p>
        <p class="address">
          東京都千代田区大手町0-1-2<br />
          パシフィックモールビルディング18F
        </p>
      </div>
    </div>
    <div class="footerContents-sitemap">
      <nav class="footer-nav">
        <ul class="menu">
          <li class="menu-item">
            <a class="nav-link" href="#">企業情報</a>
          </li>
          <li class="menu-item">
            <a class="nav-link" href="#">会社概要</a>
          </li>
          <li class="menu-item">
            <a class="nav-link" href="#">事業紹介</a>
          </li>
          <li class="menu-item">
            <a class="nav-link" href="#">沿革</a>
          </li>
          <li class="menu-item">
            <a class="nav-link" href="#">店舗情報</a>
          </li>
          <li class="menu-item">
            <a class="nav-link" href="#">地域貢献活動</a>
          </li>
          <li class="menu-item">
            <a class="nav-link" href="#">ニュースリリース</a>
          </li>
          <li class="menu-item">
            <a class="nav-link" href="#">お問い合わせ</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <p class="copyright">
    <small class="copyright-text">&#169; 2019 PACIFIC MALL DEVELOPMENT CO.,LTD.</small>
  </p>
</footer>
</div><!-- /.container -->
</body>

</html>