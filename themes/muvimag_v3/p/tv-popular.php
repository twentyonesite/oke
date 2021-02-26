<?php
/**
 * The template for displaying page Most Popular TV Series
 *
 * @author www.ocimscripts.com
 * @subpackage TMDB TWO 1.0
 *
 */
$hack_title = 'Most Popular TV Series';
$hack_description = 'Browse Most Popular TV Shows on '.site_path();
get_header(); ?>
<div id="main">
<div class="container">
<div class="row">
<section class="col-md-8">
	<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
		<li class="home" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<span itemprop="name">
				<a itemprop="item" href="/">
					<span class="icon-home"></span>
				</a>
			</span>
		</li>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<span itemprop="name">
				<a itemprop="item" href="/tv/">Tv Shows</a>
			</span>
		</li>
		<li class="active">Popular</li>
	</ol>
	<header class="page-header">
		<h1 class="page-title">Popular TV Shows</h1>
	</header>
	<div class="col-container clearfix">
	<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_popular_',$page, 'getPopularTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
		<article id="post-1418" class="post col-md-3 col-sm-3 col-xs-6 col-box">
			<div class="poster-container">
				<div class="img-container">
					<img class="ease" src="<?php echo $row['poster_path'];?>" alt="<?php echo $row['title'];?>">
					</div>
					<span class="img-cover"></span>
				</div>
				<div class="detail-container ease">
					<span class="star">
						<span class="glyphicon glyphicon-star"></span>
						<span class="rate"><?php echo $row['vote_average'];?></span>
					</span>
					<header class="entry-header">
						<h2 class="entry-title text-center">
							<a href="<?php echo seo_tv($row['id'],$row['title']);?>"><?php echo $row['title'];?></a>
						</h2>
					</header>
					<div class="play-btn">
						<a href="<?php echo seo_tv($row['id'],$row['title']);?>">
							<span class="play-btn-border ease">
								<i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
			</article>
			<?php 
                }
        endif; 
        ?>
			
				</div>
				<footer class="page-footer">
					<ul class="pagination pagination-sm">
						<?php
                if ($Movies['total_results'][0] > 19) :
                        require_once( DOCUMENT_ROOT. '/app/class/CSSPagination.class.php');

                        if ($Movies['total_results'][0] > 1000) :
                                $totalResults = 1000;
                        else:
                                $totalResults = $Movies['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = "/?do=tv-popular";
                        $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                        $pagination->setPage($_GET[page]); // dont change it
                       echo $pagination->showPage();
                endif;
                ?>
					</ul>
				</footer>
			</section>
			<div class="col-md-4">
				<aside id="widget-popular" class="widget">
					<h3 class="widget-title">
						<span>Airing Series</span>
					</h3>
					<div class="widget-content">
					<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_airing_',$page, 'getAiringTodayTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 5) as $row ) {
                ?>
						<a class="nodecor media side-list" href="<?php echo seo_tv($row['id'],$row['title']);?>">
							<div class="media-left">
								<img src="<?php echo $row['poster_path'];?>" width="45" height="68" alt="<?php echo $row['title'];?>" />
							</div>
							<div class="media-body">
								<h4 class="media-heading"><?php echo $row['title'];?> 
									<span class="text-color"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></span>
								</h4>
								<div class="rate" data-toggle="tooltip" data-placement="right" title="<?php echo $row['vote_average'];?> of 10 stars">
									<div class="movie-list-metadata"><div class="star"><i class="glyphicon glyphicon-star"></i> <?php echo $row['vote_average'];?></div></div>
									<div class="glyphicon glyphicon-heart"><?php echo $row['vote_count'];?> Likes</div>
								</div>
							</div>
						</a>
						<?php 
                }
        endif; 
        ?>
					</div>
				</aside>
				<aside id="widget-comingsoon" class="widget">
					<h3 class="widget-title">
						<span>On The Air Series</span>
					</h3>
					<div class="widget-content">
					<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_ontheair_',$page, 'getOnTheAirTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 5) as $row ) {
                ?>
						<a class="nodecor media side-list" href="<?php echo seo_tv($row['id'],$row['title']);?>">
							<div class="media-left">
								<img src="<?php echo $row['poster_path'];?>" width="45" height="68" alt="<?php echo $row['title'];?>" />
							</div>
							<div class="media-body">
								<h4 class="media-heading"><?php echo $row['title'];?> 
									<span class="text-color"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></span>
								</h4>
								<div class="rate" data-toggle="tooltip" data-placement="right" title="<?php echo $row['vote_average'];?> of 10 stars">
									<div class="movie-list-metadata"><div class="star"><i class="glyphicon glyphicon-star"></i> <?php echo $row['vote_average'];?></div></div>
									<div class="glyphicon glyphicon-heart"><?php echo $row['vote_count'];?> Likes</div>
								</div>
							</div>
						</a>
						<?php 
                }
        endif; 
        ?>
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>