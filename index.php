<!DOCTYPE HTML>
<html lang="ja-jp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mallo</title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php wp_head () ; ?>
</head>

<body>
<div id="wrapped">
<header>
<h1>縦書きのHTMLを検証する</h1>
</header>
<main>

<?php if ( have_posts () ): ?>
<?php /* The loop */ ?>
<?php while ( have_posts () ) : the_post (); ?>
<section>
<h2><?php the_title () ; ?><h2>
<?php the_content () ; ?>
</section>

<?php endwhile; ?>

<?php else : ?>

<section>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
</section>

<?php endif; ?>

</main>
<!-- / #wrapped --></div>

</body>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/taketori/taketori.js" charset="UTF-8"></script>
<script type="text/javascript">
//<![CDATA[
(new Taketori()).set({fontFamily:'serif',togglable:true,multiColumnEnabled:false}).element('wrapped').toVertical();
//]]>
</script>
<?php wp_footer () ; ?>
</html>
