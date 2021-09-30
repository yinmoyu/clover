<?php

/**
 * 关于
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<?php $this->need('components/header.php'); ?>

<style>
.linklist {
    /* justify-content: center; */
}

.linkcard {
    position: relative;
    margin-bottom: .75rem;
    display: inline-block;
    overflow: hidden;
    border-radius: .25rem;
    padding-left: 1rem;
    padding-right: 1rem;
    padding-top: .5rem;
    padding-bottom: .5rem;
    --tw-space-x-reverse: 0;
    margin-right: calc(.75rem * var(--tw-space-x-reverse));
    margin-left: calc(.75rem * calc(1 - var(--tw-space-x-reverse)));
    border-width: 1px;
    border-style: solid;
    /* width: 20vh; */
}
.linkcard:hover {
    background-color: #7e8a8b;
    color: #FFF !important;
}
.linkimg {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    height: 3rem;
    width: 3rem;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    --tw-rotate: 12deg;
    border-radius: .75rem;
}

.linktitle {
    margin-left: 3rem;
}
</style>

<div class="container col-10 col-lg-9" id="main" role="main">
    <div class="row">
        <div class="col-12 col-lg-8">
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                <section>
                    <div class="row">
                        <div class="col">
                            <h1 class="page-title" itemprop="name headline">
                                <a itemprop="url" class="text-body" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                            </h1>
                            <?php if ($this->authorId == $this->user->uid) : ?>
                                <a class="edit-link" href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid; ?>" target="_blank"><?php _e("编辑") ?></a>
                            <?php endif; ?>
                        </div>

                        <div class="col float-right">
                            <?php if ($this->options->siteUrl == "https://idealclover.top/") : ?>
                                <div class="dropdown float-right">
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        切换语言
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item disabled" href="<?php $this->permalink(); ?>">中文</a>
                                        <a class="dropdown-item" href="<?php echo str_replace($this->options->siteUrl, "https://en.idealclover.top/", $this->permalink); ?>">English</a>
                                    </div>
                                </div>
                            <?php elseif ($this->options->siteUrl == "https://en.idealclover.top/") : ?>
                                <div class="dropdown float-right">
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Language
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item disabled" href="<?php $this->permalink(); ?>">English</a>
                                        <a class="dropdown-item" href="<?php echo str_replace($this->options->siteUrl, "https://idealclover.top/", $this->permalink); ?>">简体中文</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
                <hr />
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
            </article>
            <?php AnotherLike_Plugin::theLike($this->cid); ?>
            <?php $this->need('components/comments.php'); ?>
        </div>
        <?php $this->need('components/sidebar.php'); ?>
    </div>
</div><!-- end #main-->
<?php $this->need('components/footer.php'); ?>