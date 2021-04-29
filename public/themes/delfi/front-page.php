<?php get_header(); ?>
<?php
$args = [
    'numberposts' => 1,
    'order' => 'desc',
];

$latestPost = get_posts($args);
?>



<div class="front-img">
    <?php the_post_thumbnail('large'); ?>
</div>

<section class="intro">
    <div class="col-left">
        <h1>Delfyne Förlag</h1>
        <p>På det nystartade Delfyne förlag tror vi på att en gemensam mänsklig erfarenhet visar sig i litteraturen och att den går att finna genom hela historien. Därför har vi valt att inrikta oss på att översätta, kommentera och ge ut en aning udda klassiker från antiken och framåt som visar hur vi alltid har kämpat med samma frågor, skrattat, druckit vin och strävat efter att få vardagen att gå ihop.</p>
    </div>
    <div class="col-right">
        <h2>Legenden</h2>
        <p>Delfyne är namnet på en orm i den grekiska mytologin. Den dödas av guden Apollo vid den antika staden Delfi som fått sitt namn efter monstret. Delfi var berömd för sitt orakel som i extas och med dunkla och tvetydiga ord besvarade människors frågor om framtiden. Staden ansågs av grekerna, förutom en av världens vackraste platser, vara världens navel. Den är hemvist för den berömda maximen: γνῶθι σεαυτόν – ”Känn dig själv!”</p>
    </div>
</section>

<section class="future-publish">
    <hr />
    <h2>Kommande publiceringar</h2>
    <div class="book-container">
        <div class="book-img-container">
            <img src="/uploads/2021/04/unnamed.jpeg" />

        </div>
        <div class="book-text">
            <h3>Priapeia</h3>
            <p>En humoristisk och länge förbisedd antik diktsamling om den välhängde guden Priapus och som med den manliga erektionen i centrum lyfter allt från impotens till rå sexuell aggressivitet.</p>
        </div>
    </div>
    <div class="book-container">
        <div class="book-img-container">
            <img src="/uploads/2021/04/delfyne-omslag-prototyp.png" />
        </div>
        <div class="book-text">
            <h3>Agricola</h3>
            <span>av: Publius Cornelius Tacitus</span>
            <p>I Agricola möter vi den romerska historikern Tacitus svidande kritik av hela den romerska civilisationen och den grymma verkligheten bakom Britanniens erövring. </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
