<?php
include 'lang_action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard multilingue</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <!-- dashboard -->
    <div class="container_dashboard">
        <header class="header">
            <div class="container_input">
                <input type="search" name="search" placeholder="<?=__('Rechercher')?>">
                <i class='bx bx-search'></i>
            </div>
            <div class="box_language">
                <a href="dashboard.php?lang=fr">FR</a>
                <a href="dashboard.php?lang=en">EN</a>
                <a href="dashboard.php?lang=it">IT</a>
            </div>
        </header>

        <section class="side_bar">
            <h1>Logo</h1>
            <div class="nav_bar">
                <nav>
                    <ul>
                        <li><i class='bx bxs-dashboard'></i><a href="#"><?=__('Dashboard')?></a></li>
                        <li><i class='bx bxs-calendar'></i><a href="#"><?=__('Calendrier')?></a></li>
                        <li><i class='bx bxs-envelope'></i><a href="#"><?=__('E-mail')?></a></li>
                        <li><i class='bx bxs-book'></i><a href="#"><?=__('Livres')?></a></li>
                        <li><i class='bx bxs-contact'></i><a href="#"><?=__('Contacts')?></a></li>
                        <li><i class='bx bxs-calculator'></i><a href="#"><?=__('Calculatrice')?></a></li>
                        <li><i class='bx bxs-component'></i><a href="#"><?=__('Composants')?></a></li>
                        <li><i class='bx bxs-widget'></i><a href="#"><?=__('Widgets')?></a></li>
                    </ul>
                </nav>
            </div>
        </section>

        <main class="main">
            <div class="container_main">
                <div class="card_one">
                    <span class="number">250<br><?=__('Total Dépenses')?></span>
                    <img src="porfolio.png" alt="expense" width="80" height="80">
                </div>
                <div class="card_two">
                    <span class="number">1250<br><?=__('Total Revenus')?></span>
                    <img src="dollars.png" alt="profit" width="80" height="80">
                </div>
                <div class="card_three">
                    <span class="number">50<br><?=__('Utilisateurs')?></span>
                    <img src="utilisateur.png" alt="user" width="80" height="80">
                </div>

                <div class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quod enim asperiores. Dolores vitae architecto nihil fugit aut corrupti nisi, asperiores sequi officia ipsa vel autem natus, magnam, laborum soluta!
                    Nesciunt possimus beatae alias dicta nulla nam itaque, corrupti illum quaerat eum dolor saepe sapiente, fuga mollitia? Quis harum illum cum provident voluptates enim velit labore! Rem, commodi unde. Ipsam.
                    Placeat illo quia consectetur hic illum labore voluptatem reprehenderit. Quae numquam nam atque ullam qui asperiores distinctio corporis consectetur sequi! Eveniet facere repellendus ut unde? Labore debitis reprehenderit iste nobis.
                    Quos quia harum eligendi sit excepturi necessitatibus illum adipisci nulla iste beatae minus, obcaecati quam dolorum temporibus? Dolor omnis assumenda harum reprehenderit dolores accusantium quam fugit amet corrupti. Harum, distinctio.
                    Dignissimos ea deserunt voluptatem consequuntur eum fugit praesentium hic. Animi saepe quae eveniet distinctio doloremque quasi eaque illo, veritatis itaque perferendis numquam et deserunt cupiditate quaerat nostrum, suscipit ipsum velit.
                    Veritatis delectus quas dolores odit explicabo commodi quos autem voluptatem, molestiae voluptas vero, amet consequatur asperiores eius recusandae aliquid quibusdam quisquam porro quidem cum ducimus laudantium ut! Quaerat, ab explicabo!
                    A tempore aut vero rerum aperiam quod nisi, ab mollitia, quo veritatis, est laudantium eos laboriosam quam autem animi. Eum fugiat nesciunt minus tenetur est libero explicabo repudiandae ut cumque.
                    Sed eos minus fugiat vitae dignissimos, similique quasi dolor voluptatem iusto magnam iure eveniet quos quam nesciunt placeat incidunt possimus earum doloribus rerum ratione alias sit eaque repudiandae eligendi. Magni.
                    Illo animi ab dolorum ratione consequatur quaerat architecto voluptate optio ducimus earum inventore facere fugit saepe quo cumque minima, molestiae aliquam sequi ipsam perspiciatis eum temporibus enim aspernatur. Eveniet, error?
                    Culpa asperiores blanditiis dolorum perferendis a architecto, dignissimos recusandae, nihil accusamus sint ratione doloribus, magnam aut! Minima corporis accusamus esse ducimus sit nemo eaque omnis laudantium. Qui dolores dolorem hic!
                    Placeat illo quia consectetur hic illum labore voluptatem reprehenderit. Quae numquam nam atque ullam qui asperiores distinctio corporis consectetur sequi! Eveniet facere repellendus ut unde? Labore debitis reprehenderit iste nobis.
                    Quos quia harum eligendi sit excepturi necessitatibus illum adipisci nulla iste beatae minus, obcaecati quam dolorum temporibus? 
                </div>
            </div>

        </main>
    </div>
    <!-- dahsboard_end -->

</body>
</html>