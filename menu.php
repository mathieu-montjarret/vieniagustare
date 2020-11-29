<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Vieni a gustare">
    <meta name="description" content="Restaurant Italien situé à 20 minutes de Paris">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <title>Vieni a gustare</title>
</head>

<body>
    <header class="container-fluid">

        <?php include('include/nav.inc.php') ?>

    </header>
    <ul class="nav nav-carte justify-content-center reveal-1">
        <li class="nav-item smooth"><a class="nav-link text-success" href="#entrees">Nos entrées</a></li>
        <li class="nav-item smooth"><a class="nav-link text-success" href="#pizzas">Nos pizzas</a></li>
        <li class="nav-item smooth"><a class="nav-link text-success" href="#pates">Nos pâtes</a></li>
        <li class="nav-item smooth"><a class="nav-link text-success" href="#desserts">Nos desserts</a></li>
    </ul>


    <main class="container">
        <section id="entrees" class="food-section reveal-1">
            <h2 class="row titre-carte justify-content-center">Nos entrées</h2>
            <div class="row border-bottom carte justify-content-between align-items-center reveal-2">
                <p class="nourriture col-8">Salade de roquette et parmesan</p>
                <p class="tarif col-4 text-right">9,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Tomates mozzarella di Buffala, du basilic frais, de l’huile d’olive et quelques câpres</p>
                <p class="tarif col-4 text-right">18,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Focaccia et charcuteries fines Italiennes, légumes grillés</p>
                <p class="tarif col-4 text-right">18,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Aubergine et burrata en millefeuille, pesto de roquette</p>
                <p class="tarif col-4 text-right">18,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Bruschetta, tomate et chèvre, pesto à la Génovèse</p>
                <p class="tarif col-4 text-right">17,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Cassolette de palourdes, ail et persil</p>
                <p class="tarif col-4 text-right">18,00€</p>
            </div>
        </section>

        <section id="pizzas" class="food-section reveal-1">
            <h2 class="row titre-carte justify-content-center reveal-2">Nos pizzas</h2>
            <div class="row carte  justify-content-around reveal-2">
                <p class="nom-pizza nourriture col-8">Margherita</p>
                <p class="tarif col-4 text-right">16,00€</p>
            </div>
            <div class="row border-bottom ingredients justify-content-around reveal-2">
                <div class="composition col-11 text-muted">Sauce tomate, basilic, mozzarella di buffala, olives et huile d’olive</div>
            </div>
            <div class="row carte justify-content-around reveal-2">
                <p class="nom-pizza nourriture col-8">Napolitaine</p>
                <p class="tarif col-4 text-right">16,00€</p>
            </div>
            <div class="row border-bottom ingredients justify-content-around reveal-2">
                <div class="composition col-11 text-muted">Sauce tomate, mozzarella, basilic, filets d’anchois, olives, câpres</div>
            </div>
            <div class="row carte justify-content-around reveal-2">
                <p class="nom-pizza nourriture col-8">Demi-pizza margherita ou napolitaine avec salade</p>
                <p class="tarif col-4 text-right">15,00€</p>
            </div>
            <div class="row border-bottom ingredients justify-content-around reveal-2">
                <div class="composition col-11 text-muted">Accompagnée de légumes croquants du marché et de salade de roquette</div>
            </div>
            <div class="row carte justify-content-around reveal-2">
                <p class="nom-pizza nourriture col-8">Regina</p>
                <p class="tarif col-4 text-right">16,00€</p>
            </div>
            <div class="row border-bottom ingredients justify-content-around reveal-2">
                <div class="composition col-11 text-muted">Sauce tomate, mozzarella, jambon cuit, champignons, olives</div>
            </div>
            <div class="row carte justify-content-around reveal-2">
                <p class="nom-pizza nourriture col-8">Hannibal Lecter</p>
                <p class="tarif col-4 text-right">17,00€</p>
            </div>
            <div class="row border-bottom ingredients justify-content-around reveal-2">
                <div class="composition col-11 text-muted">Crème de pesto, burrata, tomates fraîches, olives et vieux balsamico</div>
            </div>
            <div class="row carte justify-content-around reveal-2">
                <p class="nom-pizza nourriture col-8">Hannibal Lecter</p>
                <p class="tarif col-4 text-right">17,00€</p>
            </div>
            <div class="row border-bottom ingredients justify-content-around reveal-2">
                <div class="composition col-11 text-muted">Crème de pesto, burrata, tomates fraîches, olives et vieux balsamico</div>
            </div>
            <div class="row carte justify-content-around reveal-2">
                <p class="nom-pizza nourriture col-8">Crema di curry</p>
                <p class="tarif col-4 text-right">16,00€</p>
            </div>
            <div class="row border-bottom ingredients justify-content-around reveal-2">
                <div class="composition col-11 text-muted">Crème de curry, mozzarella, filets de poulet marinés, oignons confits, tomates cerise confites, roquette</div>
            </div>
            <div class="row carte justify-content-around reveal-2">
                <p class="nom-pizza nourriture col-8">Calzone</p>
                <p class="tarif col-4 text-right">17,00€</p>
            </div>
            <div class="row border-bottom ingredients justify-content-around reveal-2">
                <div class="composition col-11 text-muted">Sauce tomate, mozzarella, champignons, jambon cuit, œuf, crème</div>
            </div>
            <div class="row carte justify-content-around reveal-2">
                <p class="nom-pizza nourriture col-8">Végétarienne</p>
                <p class="tarif col-4 text-right">17,00€</p>
            </div>
            <div class="row border-bottom ingredients justify-content-around reveal-2">
                <div class="composition col-11 text-muted">Sauce tomate, champignons, légumes du marché confits, tomates cerise confites, roquette</div>
            </div>
            <div class="row carte justify-content-around reveal-2">
                <p class="nom-pizza nourriture col-8">Chèvre Miel</p>
                <p class="tarif col-4 text-right">17,00€</p>
            </div>
            <div class="row border-bottom ingredients justify-content-around reveal-2">
                <div class="composition col-11 text-muted">Crème, chèvre, roquette, miel, tomates cerise confites, noix</div>
            </div>
            <div class="row carte justify-content-around reveal-2">
                <p class="nom-pizza nourriture col-8">Prosciutto</p>
                <p class="tarif col-4 text-right">19,00€</p>
            </div>
            <div class="row border-bottom ingredients justify-content-around reveal-2">
                <div class="composition col-11 text-muted">Sauce tomate, mozzarella, basilic, tomates cerise confites, jambon de parme, copeaux de parmesan, roquette</div>
            </div>
        </section>

        <section id="pates" class="food-section reveal-1">
            <h2 class="row titre-carte justify-content-center reveal-2">Nos pâtes</h2>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Penne all’Arrabiata</p>
                <p class="tarif col-4 text-right">15,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Conchiglie à la crème de saumon</p>
                <p class="tarif col-4 text-right">18,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Penne à la Sicilienne</p>
                <p class="tarif col-4 text-right">18,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Linguines sautées aux artichauts, purée de tomate séchée</p>
                <p class="tarif col-4 text-right">18,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Lasagne à la bolognaise gratinée, mesclun gourmand</p>
                <p class="tarif col-4 text-right">19,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Pappardelles et « champignons du moment », crème de truffe noire</p>
                <p class="tarif col-4 text-right">24,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Gnocchi à la crème de pesto, copeaux de parmesan</p>
                <p class="tarif col-4 text-right">17,00€</p>
            </div>
        </section>

        <section id="desserts" class="food-section reveal-1">
            <h2 class="row titre-carte justify-content-center">Nos desserts</h2>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Café ou thé gourmand</p>
                <p class="tarif col-4 text-right">9,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Tiramisu</p>
                <p class="tarif col-4 text-right">9,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Coupe Tutti Frutti</p>
                <p class="tarif col-4 text-right">9,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Pizza au Nutella</p>
                <p class="tarif col-4 text-right">9,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Mille-feuille aux framboises, coulis de fruits rouges</p>
                <p class="tarif col-4 text-right">9,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Tiramisu crémeux aux noisettes</p>
                <p class="tarif col-4 text-right">9,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Panna cotta aux fruits rouges, coulis</p>
                <p class="tarif col-4 text-right">9,00€</p>
            </div>
            <div class="row border-bottom carte justify-content-around align-items-center reveal-2">
                <p class="nourriture col-8">Crème brulée à la cassonade</p>
                <p class="tarif col-4 text-right">9,00€</p>
            </div>
        </section>
    </main>


    <?php require_once('include/footer.inc.php'); ?>