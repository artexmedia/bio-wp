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
 * @package artexmedia
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="products container">
			<h1>Продукція «Біоенергополіс»</h1>
			<div class="row">
			<div class="products-item col-lg-4">
			<a class="products-image" href="#" target="_blank">
				<img
				class="products-thumb"
				src="./img/01-pellets.jpg"
				alt="Пелети для опалення"
				/>
			</a>
			<h3><a href="#">Пелети для опалення</a></h3>
			<ul>
				<li>
				Деревні екологічні пелети, виготовлені з чистої соснової опилки
				або з соснової стружки після сушки, для опалення.
				</li>
				<li>Високий рiвень ККД 90-95%. Дуже економічні.</li>
			</ul>
			<div class="products-contacts">
				<div class="products-contacts-feedback">
				<a href="#">Замовити</a>
				</div>
				<div class="products-contacts-call">
				<a href="#"><i class="fas fa-phone-alt"></i></a>
				</div>
			</div>
			</div>
			<div class="products-item col-lg-4">
			<a class="products-image" href="#" target="_blank">
				<img
				class="products-thumb"
				src="./img/02-triska.jpg"
				alt="Тріска для опалення"
				/>
			</a>
			<h3><a href="#">Тріска для опалення</a></h3>
			<ul>
				<li>
				Деревна екологічна трiска, виготовлена із соснових дров і обрізків
				від деревообробки, для опалення.
				</li>
				<li>Високий рiвень ККД 90-95%. Дуже економічні.</li>
			</ul>
			<div class="products-contacts">
				<div class="products-contacts-feedback">
				<a href="#">Замовити</a>
				</div>
				<div class="products-contacts-call">
				<a href="#"><i class="fas fa-phone-alt"></i></a>
				</div>
			</div>
			</div>
			<div class="products-item col-lg-4">
			<a class="products-image" href="#" target="_blank">
				<img
				class="products-thumb"
				src="./img/03-pilomaterialy.jpg"
				alt="Пиломатеріали"
				/>
			</a>
			<h3><a href="#">Пиломатеріали</a></h3>
			<ul>
				<li>
				Деревна екологічна трiска, виготовлена із соснових дров і обрізків
				від деревообробки, для опалення.
				</li>
				<li>Високий рiвень ККД 90-95%. Дуже економічні.</li>
			</ul>
			<div class="products-contacts">
				<div class="products-contacts-feedback">
				<a href="#">Замовити</a>
				</div>
				<div class="products-contacts-call">
				<a href="#"><i class="fas fa-phone-alt"></i></a>
				</div>
			</div>
			</div>
			</div>
		</section>
		<section class="benefits">
			<h2>Чому краще купляти эко-паливо у Бiоєнергополіс?</h2>
			<div class="benefits-item">
				<object type="image/svg+xml" data="./img/01-benefits.svg">
					<img src="./img/01-benefits.svg" alt="Виробник" />
				</object>
			<p>
				Компанія Біоєнергополіс є виробником. Тобто працюємо на власній
				сировині з повним циклом контролю за якістю по ДСТУ 3243-88.
			</p>
			</div>
			<div class="benefits-item">
				<object type="image/svg+xml" data="./img/02-benefits.svg">
					<img src="./img/02-benefits.svg" alt="Низька зольність пелет" />
				</object>
			<p>
				Низька зольність пелет. Всього - 0,27%. Маємо відповідні сертифікати
				якості, які підтверджують технічні характеристики пелет та тріски.
			</p>
			</div>
			<div class="benefits-item">
				<object type="image/svg+xml" data="./img/03-benefits.svg">
					<img src="./img/03-benefits.svg" alt="Індивідуальні ціни на оптові поставки" />
				</object>
			<p>
				Індивідуальні ціни на оптові поставки. Доставка в будь-яку точку
				України. Є можливість самовивозу з нашого складу в
				<a herf="#">Київській області, м. Славутич, вул. Центральна, 7А</a>
			</p>
			</div>
		</section>
		
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
