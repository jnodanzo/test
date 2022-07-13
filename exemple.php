<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>TEST en PHP</title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        </head>
        <body>
            <!-- <header> 
                <nav>
                    <ul>
                        <li id="logo">bienvenue<a href="#">Manga</a></li>
                        <li><a href="#langue">Langue</a></li>
                        <li><a href="#reserver">Reserver</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div id="imagePrincipale">
                    <h1>Clo Tetoo</h1>
                    <div id="premierTrait"></div>
                    <h2>Chambres</h2>
                </div>
                <section>
                    <div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi ab praesentium placeat possimus recusandae! Inventore omnis rem adipisci voluptates earum esse maiores quidem vel temporibus deserunt aperiam natus, architecto laudantium.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, earum molestiae quod repellat eos saepe laudantium nulla explicabo unde ab quaerat, numquam laboriosam odio amet consequatur. Odit vero, illo iure, unde perspiciatis laboriosam suscipit repellat hic reprehenderit asperiores debitis sint.</p>
                    </div>
                    <div id="prestations">
                        <div class="imagesPrestations">
                            <h3>Nous trouver</h3>
                            <a href="#"><img src="images/yugioh.jpg" alt="carte"></a>
                        </div>
                        <div class="imagesPrestations">
                            <h3>Nous trouver</h3>
                            <a href="#"><img src="images/kuroko.jpg" alt="carte"></a>
                        </div>
                        <div class="imagesPrestations">
                            <h3>Nous trouver</h3>
                            <a href="#"><img src="images/boruto.jpg" alt="carte"></a>
                        </div>
                    </div> 
                </section> 
            </header>
            <footer>
                <h2>Contactez-nous</h2>
                <form >
                    <input placeholder="Nom">
                    <input placeholder="Email">
                    <textarea placeholder="Votre message ici svp..."></textarea>
                    <button>Envoyer</button>
                </form>
                <div id="deuxiemeTrait"></div>
                <div id="copyrightEtIcions">
                    <div id="copyright">
                        <span>© fromScratch(); 2022</span>
                    </div>
                    <div id="icons">
                        <a href="http://www.twitter.fr"><i class="fa fa-twitter"></i></a>
                        <a href="http://www.facebook.fr"><i class="fa fa-facebook"></i></a>
                        <a href="http://www.instagram.fr"><i class="fa fa-instagram"></i></a>
                    </div>

                </div>
            
            </footer> -->
            <form method = "POST" action = "target.php">   
        <p>
        
            <input type = "text" name = "prenom" id= "prenom">
            <label for="prenom">Entrez votre prenom</label>
        </p>
        <p>
        
            <input type = "submit" value = "ENVOYEZ">

        </p>
        </form>
  
                <?php
                // $departement = "var";
                // $chiffre = 83;

                // echo "Le $departement est un departement d'Abidjan <br/>";
                // echo 'Le ' .$departement. ' est un departement Abidjan <br/>';
                // echo $chiffre;
                //$heure_arrivee = true;
                //echo "entrez votre heure d'arrivée svp ?";
                //scanf ($heure_arrivee);
                // if ($heure_arrivee < 8){
                //     echo "vous êtes a l'heure";
                // }
                // else if ($heure_arrivee > 8){;
                //     echo "vous êtes en retard";
                // }
                // else {
                //     echo "bravo";
                //}

                // switch($heure_arrivee){
                //     case 0:
                //         echo "bienvenue";
                //         break;
                //     case 8:
                //         echo "il ne vous reste plus le temps";
                //         break;
                //     case 12:
                //             echo "entrez";
                //             break; 
                //     case 20:
                //         echo "ils ont deja commnencé";
                //         break;
                //     default:
                //         echo "dommage";
                //}
                /* if (! $heure_arrivee == false){
                     echo "vous etes le bon arrivé";
                 }
                 else {
                    echo "vous voulez voir qui ?";
                 }*/
            // $x=1;
            // while($x<=5){
            //     echo "ceci est le nombre " .$x. "<br/>";
            //     $x++;
            // do{
            //     echo "ceci est le second nombre " .$x. "<br/>";
            //     //$x++;
            // }
            // while($x>=10);
            // }

            // for($x=1;$x=20;$x++);{
            //     echo "voici le nouveau nombre" .$x. "<br/>";
            // }
       // $membres = array(
             /*   
               'noms'=>'danzo',
                'ages' => 12,
           
                'nom'=>'Ahmed',
                'age' => 10,
             
            );*/
        //     array('danzo',32, 'danzo@gmail.com'),
        //     array('jerome',45, 'jerome@gmail.com'),
        //     array('amoa',25, 'amoa@gmail.com')
        // );
        // echo $membres[0][0]. ' a ' .$membres[0][1]. ' ans. Son email est le suivant : '.$membres[0][2]. '<br/>';
        // echo $membres[1][0]. ' a ' .$membres[1][1]. ' ans. Son email est le suivant : '.$membres[1][2]. '<br/>';
        // echo $membres[2][0]. ' a ' .$membres[2][1]. ' ans. Son email est le suivant : '.$membres[2][2]. '<br/>';

        /*foreach ($membres as $clef => $membre){
            echo $clef.' '.$membre. '<br/>';
        };*/
        
        // for ($ligne = 0; $ligne <3 ; $ligne++){
        //     $membre_no = $ligne+1; 
        //     echo '<br/>';
        //     echo 'membre numero ' .$membre_no. '<br/>';
        //     echo "<ul>";
        //     for ($col=0; $col <3 ; $col++){
        //         echo "<li>" .$membres[$ligne][$col]. '<br/>';
        //         echo "</li>";
        //     }
        //     echo "</ul>";
        // }
        // foreach ($membres as $contenu) {
        //         echo" valeur : $value";
          //  }
       /*echo '<pre>';
            print_r($membres);
        echo '</pre>';*/

        // function Bonjour(){
        //     return "Bonjour a tous";
        //     echo "Bonjour";
        // }
        // $poir = Bonjour();

        // function NomAge($prenom,$age){
        // echo $prenom. ' a ' .$age. ' ans';
       
        // }
        // $agee = NomAge('danzo 😎',32);
        // echo '</br>';
        // echo strlen("danzo"). '</br>';
        // echo strlen("😎"). '</br>';
        
        // echo str_word_count("danzo"). '</br>';

        // echo str_repeat("danzo ",3). '</br>';
        /*$voitures = array(
            "citroen" => "DS3",
            "renault" => "Clio",
            "peugeot" => "306",
            "peugeot2" => 306
        );
        $comparons = array (
            ""
        )
        echo "<marquee>";

        print_r ($voitures);
        echo "</br>";
        print_r (array_keys($voitures));
        echo "</br>";
        echo "<pre>";
        print_r(array_values($voitures));
        echo "</pre>";
        echo "</marquee>";
        echo count($voitures);
        print_r(array_diff_assoc($voitures));*/

        //echo date("d:m:s") ;
        //verification d'une date valide 
        /*$date = checkdate(11,32,2000);
        if ($date) {
            echo "la date est valide ! <br/>";
        }	
        else{
            echo "la date n'est pas valide <br/>";
        }*/
       // echo "</pre>";
        //print_r(getdate());
        //echo "</pre>";
        
         ?>
     </body>
 </html>

  