
<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';


         /*   $host = 'mahamadoutraore54863.ipagemysql.com';
            $dbname = 'dbaic';
            $username = 'dbaic';
            $password = 'Aic@2023';

*/

            
            //On essaie de se connecter
            try{
                $pdo = new PDO("mysql:host=$servername;dbname=domaine", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               echo 'Connexion réussie';
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
             echo "Erreur : " . $e->getMessage();
            }


		/*	try {
				// se connecter à mysql
				$pdo = new PDO("mysql:host=mahamadoutraore54863.ipagemysql.com;dbname=mtit01", $username, $password);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $exc) {
				echo $exc->getMessage();
				exit();
			}
			
*/

        ?>
  