<?php if ( ! defined( '__TYPECHO_ROOT_DIR__' ) ) {
	exit;
} ?>
<?php $this->need( 'components/header.php' ); ?>

<div class="container col-10" id="main" role="main">
    <div class="row">
        <div class="col-12 col-lg-8">
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                <section >
                    <h1 class="page-title" itemprop="name headline">
                        <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                    </h1>
                    <?php if($this->authorId == $this->user->uid): ?>
                        <a class="edit-link" href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid;?>" target="_blank">编辑</a>
                    <?php endif; ?>
                </section>
                <hr />
                <div class="post-content" itemprop="articleBody">
					<?php $this->content(); ?>
                </div>
            </article>
			<?php $this->need( 'components/comments.php' ); ?>
        </div>
	    <?php $this->need( 'components/sidebar.php' ); ?>
    </div>
</div><!-- end #main-->
<?php $this->need( 'components/footer.php' ); ?>
