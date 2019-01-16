<?php

	session_start();
	
	// var_dump($_POST);
	// var_dump($_SESSION);
	// session_destroy();
	
	if (isset($_POST['imie']))
	{

		$imie = $_POST['imie'];
		$nazwisko = $_POST['nazwisko'];
		$email = $_POST['email'];
		$nick = $_POST['nick'];
		$telefon = $_POST['telefon'];
		$nazwa = $_POST['nazwa'];
		
		
		$imie1 = $_POST['imie1'];
		$nazwisko1 = $_POST['nazwisko1'];
		$nick1 = $_POST['nick1'];
		
		$imie2 = $_POST['imie2'];
		$nazwisko2 = $_POST['nazwisko2'];
		$nick2 = $_POST['nick2'];
		
		$imie3 = $_POST['imie3'];
		$nazwisko3 = $_POST['nazwisko3'];
		$nick3 = $_POST['nick3'];
		
		$imie4 = $_POST['imie4'];
		$nazwisko4 = $_POST['nazwisko4'];
		$nick4 = $_POST['nick4'];
		
		$imie5 = $_POST['imie5'];
		$nazwisko5 = $_POST['nazwisko5'];
		$nick5 = $_POST['nick5'];
		
		
		
		$_SESSION['fr_imie'] = $imie;
		$_SESSION['fr_nazwisko'] = $nazwisko;
		$_SESSION['fr_email'] = $email;
		$_SESSION['fr_nick'] = $nick;
		$_SESSION['fr_telefon'] = $telefon;
		$_SESSION['fr_nazwa'] = $nazwa;
		
		
		$_SESSION['fr_imie1'] = $imie1;
		$_SESSION['fr_nazwisko1'] = $nazwisko1;
		$_SESSION['fr_nick1'] = $nick1;
		
		$_SESSION['fr_imie2'] = $imie2;
		$_SESSION['fr_nazwisko2'] = $nazwisko2;
		$_SESSION['fr_nick2'] = $nick2;
		
		$_SESSION['fr_imie3'] = $imie3;
		$_SESSION['fr_nazwisko3'] = $nazwisko3;
		$_SESSION['fr_nick3'] = $nick3;
		
		$_SESSION['fr_imie4'] = $imie4;
		$_SESSION['fr_nazwisko4'] = $nazwisko4;
		$_SESSION['fr_nick4'] = $nick4;
		
		$_SESSION['fr_imie5'] = $imie5;
		$_SESSION['fr_nazwisko5'] = $nazwisko5;
		$_SESSION['fr_nick5'] = $nick5;
		

		
		
		
		$wszystko_OK=true;

		
									// LIDER
									
		if(!preg_match('/^[a-zążśźęćńółA-ZĄŻŚŹĘĆŃÓŁ]{3,20}$/D', $_POST['imie']))
		{
			$wszystko_OK=false;
			$_SESSION['e_imie']="Imię nie może zawierać znaków specjalnych w tym spacji!";
			
		}
		if(!preg_match('/^[a-zążśźęćńółA-ZĄŻŚŹĘĆŃÓŁ]{3,20}$/D', $_POST['nazwisko']))
		{
			$wszystko_OK=false;
			$_SESSION['e_nazwisko']="Nazwisko nie może zawierać znaków specjalnych w tym spacji!";
				
		}
		
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		if(!preg_match('/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzªµºÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿĄąĆćĘęıŁłŃńŒœŚśŠšŸŹźŻżŽžƒˆˇˉμﬁﬂ ]{3,100}$/D', $_POST['nick']))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Podałeś niedozwolone znaki specjalne.";
			
		}
		if(!preg_match('/^[0-9]{9}$/D', $_POST['telefon']))
		{
			$wszystko_OK=false;
			$_SESSION['e_telefon']="Podałeś zły numer telefonu.";
			
		}
		if(!preg_match('/^[a-zA-Z0-9 ]{3,40}$/D', $_POST['nazwa']))
		{
			$wszystko_OK=false;
			$_SESSION['e_nazwa']="Nazwa drużyny nie może zawierać znaków specjalnych oraz polskich znaków.";
			
		}
		
		
		
									
									//GRACZ 1

		
		if(!preg_match('/^[a-zążśźęćńółA-ZĄŻŚŹĘĆŃÓŁ]{3,20}$/D', $_POST['imie1']))
		{
			$wszystko_OK=false;
			$_SESSION['e_imie1']="Imię nie może zawierać znaków specjalnych w tym spacji!";
			
		}
		if(!preg_match('/^[a-zążśźęćńółA-ZĄŻŚŹĘĆŃÓŁ]{3,20}$/D', $_POST['nazwisko1']))
		{
			$wszystko_OK=false;
			$_SESSION['e_nazwisko1']="Nazwisko nie może zawierać znaków specjalnych w tym spacji!";
				
		}
		if(!preg_match('/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzªµºÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿĄąĆćĘęıŁłŃńŒœŚśŠšŸŹźŻżŽžƒˆˇˉμﬁﬂ ]{3,20}$/D', $_POST['nick1']))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick1']="Nick nie może zawierac znaków specjalnych!";
			
		}
		
									//GRACZ 2

		
		if(!preg_match('/^[a-zążśźęćńółA-ZĄŻŚŹĘĆŃÓŁ]{3,20}$/D', $_POST['imie2']))
		{
			$wszystko_OK=false;
			$_SESSION['e_imie2']="Imię nie może zawierać znaków specjalnych w tym spacji!";
			
		}
		if(!preg_match('/^[a-zążśźęćńółA-ZĄŻŚŹĘĆŃÓŁ]{3,20}$/D', $_POST['nazwisko2']))
		{
			$wszystko_OK=false;
			$_SESSION['e_nazwisko2']="Nazwisko nie może zawierać znaków specjalnych w tym spacji!";
				
		}
		if(!preg_match('/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzªµºÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿĄąĆćĘęıŁłŃńŒœŚśŠšŸŹźŻżŽžƒˆˇˉμﬁﬂ ]{3,20}$/D', $_POST['nick2']))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick2']="Podałeś niedozwolone znaki specjalne.";
			
		}
		
									//GRACZ 3

		
		if(!preg_match('/^[a-zążśźęćńółA-ZĄŻŚŹĘĆŃÓŁ]{3,20}$/D', $_POST['imie3']))
		{
			$wszystko_OK=false;
			$_SESSION['e_imie3']="Imię nie może zawierać znaków specjalnych w tym spacji!";
			
		}
		if(!preg_match('/^[a-zążśźęćńółA-ZĄŻŚŹĘĆŃÓŁ]{3,20}$/D', $_POST['nazwisko3']))
		{
			$wszystko_OK=false;
			$_SESSION['e_nazwisko3']="Nie masz tak na nazwisko!";
				
		}
		if(!preg_match('/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzªµºÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿĄąĆćĘęıŁłŃńŒœŚśŠšŸŹźŻżŽžƒˆˇˉμﬁﬂ ]{3,20}$/D', $_POST['nick3']))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick3']="Podałeś niedozwolone znaki specjalne.";
			
		}
									//GRACZ 4

		
		if(!preg_match('/^[a-zążśźęćńółA-ZĄŻŚŹĘĆŃÓŁ]{3,20}$/D', $_POST['imie4']))
		{
			$wszystko_OK=false;
			$_SESSION['e_imie4']="Imię nie może zawierać znaków specjalnych w tym spacji!";
			
		}
		if(!preg_match('/^[a-zążśźęćńółA-ZĄŻŚŹĘĆŃÓŁ]{3,20}$/D', $_POST['nazwisko4']))
		{
			$wszystko_OK=false;
			$_SESSION['e_nazwisko4']="Nazwisko nie może zawierać znaków specjalnych w tym spacji!";
				
		}
		if(!preg_match('/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzªµºÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿĄąĆćĘęıŁłŃńŒœŚśŠšŸŹźŻżŽžƒˆˇˉμﬁﬂ ]{3,20}$/D', $_POST['nick4']))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick4']="Podałeś niedozwolone znaki specjalne.";
			
		}
		
									//GRACZ 5

		if(!$imie5 == NULL)
		{
			if(!preg_match('/^[a-zążśźęćńółA-ZĄŻŚŹĘĆŃÓŁ]{3,20}$/D', $_POST['imie5']))
			{
				$wszystko_OK=false;
				$_SESSION['e_imie5']="Imię nie może zawierać znaków specjalnych w tym spacji!";
			
			}
			if(!preg_match('/^[a-zążśźęćńółA-ZĄŻŚŹĘĆŃÓŁ]{3,20}$/D', $_POST['nazwisko5']))
			{
				$wszystko_OK=false;
				$_SESSION['e_nazwisko5']="Nazwisko nie może zawierać znaków specjalnych w tym spacji!";
				
			}
			if(!preg_match('/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzªµºÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿĄąĆćĘęıŁłŃńŒœŚśŠšŸŹźŻżŽžƒˆˇˉμﬁﬂ ]{3,20}$/D', $_POST['nick5']))
			{
				$wszystko_OK=false;
				$_SESSION['e_nick5']="Podałeś niedozwolone znaki specjalne.";
			
			}
		}
		
		
		if (!isset($_POST['human']))
		{
			$wszystko_OK=false;
			$_SESSION['e_human']="Jestes robotem ?!?";
		}
                if (!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['e_regulamin']="Potwierdź akceptację regulaminu!";
		}
		
		
		$sekret = "6Lfn1XcUAAAAALwxXCj-69dCgilhJM17wnCBnOO_";
		
		$sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);
		
		$odpowiedz = json_decode($sprawdz);
		
		if ($odpowiedz->success==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_bot']="Potwierdź, że nie jesteś botem!";
		}
		
		
		
		
		
		
		
		
		
		
		if (isset($_POST['human'])) $_SESSION['fr_human'] = true;
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                        
                        mysqli_set_charset($polaczenie,"utf8");
                        
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy już istnieje?
				$rezultat = $polaczenie->query("SELECT id FROM lol WHERE Druzyna='$nazwa'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_nazwa = $rezultat->num_rows;
				if($ile_nazwa>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_nazwa']="Istnieje już taka drużyna!";
				}		
				
				$rezultat = $polaczenie->query("SELECT id FROM liderzylol WHERE Nr='$telefon'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_nazwa = $rezultat->num_rows;
				if($ile_nazwa>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_telefon']="twój numer telefonu juz był podany przy innej rejestracji!";
				}
								
				if ($wszystko_OK==true)
				{
					//Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
					
					if ($polaczenie->query("INSERT INTO lol VALUES (NULL, '$imie', '$nick', '$nazwisko', '$nazwa', NULL), (NULL, '$imie1', '$nick1', '$nazwisko1', '$nazwa', NULL), (NULL, '$imie2', '$nick2', '$nazwisko2', '$nazwa', NULL), (NULL, '$imie3', '$nick3', '$nazwisko3', '$nazwa', NULL), (NULL, '$imie4', '$nick4', '$nazwisko4', '$nazwa', NULL)"))
					{
						if ($polaczenie->query("INSERT INTO liderzylol VALUES (NULL, '$imie', '$nick', '$nazwisko', '$nazwa', '$telefon', '$email')"))
						{
							if(!$imie5 == NULL)
							{
								if ($polaczenie->query("INSERT INTO lol VALUES (NULL, '$imie5', '$nick5', '$nazwisko5', '$nazwa', NULL)"))
								{
									$_SESSION['udanarejestracja']=true;
									header('Location: witamy.php');
								}
								else
								{
									throw new Exception($polaczenie->error);
								}
							}
							else
							{
								$_SESSION['udanarejestracja']=true;
								header('Location: witamy.php');
							}
						}
						else
						{
							throw new Exception($polaczenie->error);
						}
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
		
		}	
		
	}
	
	
?>	

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<title>Liga E-Sport ZSE</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/aos.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/lol.css"/>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body class="body">

<div id="fadeblack"></div>

<div class="container">
	<div class="content">
		
		<div id="button">
			<a href="index.html"><button class="button" style="vertical-align:middle"><span>Powrót </span></button></a>
		</div>
		
		<div class="upside">
			<h1 class="title-1">Liga E-Sport ZSE</h1><br>
			<h2 class="subtitle-2">Rejestracja drużyny</h2>
			<h3 class="text white">League of Legends</h3>
			
		</div>
										<!-- LIDER -->
		
		<form method="post">
			<div class="lider">
				<div class="formtitle">
					<p class="title">Lider</p>
					<p class="text">* - pola obowiązkowe</p>
				</div>
			
				<div class="">
					<input type="text" name="imie" id="imie" value="<?php
					if (isset($_SESSION['fr_imie'])){echo $_SESSION['fr_imie'];
					unset($_SESSION['fr_imie']);
				}
				?>" placeholder="Imię*" />
				</div>
				<?php
					if (isset($_SESSION['e_imie']))
					{
						echo '<div class="error">'.$_SESSION['e_imie'].'</div>';
						unset($_SESSION['e_imie']);
					}
				?>
				<div class="">
					<input type="text" name="nazwisko" id="nazwisko" value="<?php
					if (isset($_SESSION['fr_nazwisko'])){echo $_SESSION['fr_nazwisko'];
					unset($_SESSION['fr_nazwisko']);
				}
				?>" placeholder="Nazwisko*" />
				</div>
				<?php
					if (isset($_SESSION['e_nazwisko']))
					{
						echo '<div class="error">'.$_SESSION['e_nazwisko'].'</div>';
						unset($_SESSION['e_nazwisko']);
					}
				?>
				<div class="">
					<input type="text" name="email" id="email" value="<?php
					if (isset($_SESSION['fr_email'])){echo $_SESSION['fr_email'];
					unset($_SESSION['fr_email']);
				}
				?>" placeholder="Email*" />
				</div>
				<?php
					if (isset($_SESSION['e_email']))
					{
						echo '<div class="error">'.$_SESSION['e_email'].'</div>';
						unset($_SESSION['e_email']);
					}
				?>
				<div class="">
					<input type="text" name="nick" id="nick" value="<?php
					if (isset($_SESSION['fr_nick'])){echo $_SESSION['fr_nick'];
					unset($_SESSION['fr_nick']);
				}
				?>" placeholder="Nick*" />
				</div>
				<?php
					if (isset($_SESSION['e_nick']))
					{
						echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
						unset($_SESSION['e_nick']);
					}
				?>
				<div class="">
					<input type="text" name="telefon" id="telefon" value="<?php
					if (isset($_SESSION['fr_telefon'])){echo $_SESSION['fr_telefon'];
					unset($_SESSION['fr_telefon']);
				}
				?>" placeholder="Telefon*" />
				</div>
				<?php
					if (isset($_SESSION['e_telefon']))
					{
						echo '<div class="error">'.$_SESSION['e_telefon'].'</div>';
						unset($_SESSION['e_telefon']);
					}
				?>
				
				<div class="">
					<input type="text" name="nazwa" id="nazwa" value="<?php
					if (isset($_SESSION['fr_nazwa'])){echo $_SESSION['fr_nazwa'];
					unset($_SESSION['fr_nazwa']);
				}
				?>" placeholder="Nazwa Drużyny*" />
				</div>
				<?php
					if (isset($_SESSION['e_nazwa']))
					{
						echo '<div class="error">'.$_SESSION['e_nazwa'].'</div>';
						unset($_SESSION['e_nazwa']);
					}
				?>
  </div>

		
										<!-- GRACZ 1 -->
		
			<div class="player">
				<div class="formtitle">
					<p class="title">Gracz 1</p>
					<p class="text">* - pola obowiązkowe</p>
				</div>
				
				<div class="">
					<input type="text" name="imie1" id="imie1" value="<?php
					if (isset($_SESSION['fr_imie1'])){echo $_SESSION['fr_imie1'];
					unset($_SESSION['fr_imie1']);
				}
				?>" placeholder="Imię*" />
				</div>
				<?php
					if (isset($_SESSION['e_imie1']))
					{
						echo '<div class="error">'.$_SESSION['e_imie1'].'</div>';
						unset($_SESSION['e_imie1']);
					}
				?>
				<div class="">
					<input type="text" name="nazwisko1" id="nazwisko1" value="<?php
					if (isset($_SESSION['fr_nazwisko1'])){echo $_SESSION['fr_nazwisko1'];
					unset($_SESSION['fr_nazwisko1']);
				}
				?>" placeholder="Nazwisko*" />
				</div>
				<?php
					if (isset($_SESSION['e_nazwisko1']))
					{
						echo '<div class="error">'.$_SESSION['e_nazwisko1'].'</div>';
						unset($_SESSION['e_nazwisko1']);
					}
				?>
				<div class="">
					<input type="text" name="nick1" id="nick1" value="<?php
					if (isset($_SESSION['fr_nick1'])){echo $_SESSION['fr_nick1'];
					unset($_SESSION['fr_nick1']);
				}
				?>" placeholder="Nick*" />
				</div>
				<?php
					if (isset($_SESSION['e_nick1']))
					{
						echo '<div class="error">'.$_SESSION['e_nick1'].'</div>';
						unset($_SESSION['e_nick1']);
					}
				?>
			</div>
			

										<!-- GRACZ 2 -->
		
			<div class="player">
				<div class="formtitle">
					<p class="title">Gracz 2</p>
					<p class="text">* - pola obowiązkowe</p>
				</div>
				
				<div class="">
					<input type="text" name="imie2" id="imie2" value="<?php
					if (isset($_SESSION['fr_imie2'])){echo $_SESSION['fr_imie2'];
					unset($_SESSION['fr_imie2']);
				}
				?>" placeholder="Imię*" />
				</div>
				<?php
					if (isset($_SESSION['e_imie2']))
					{
						echo '<div class="error">'.$_SESSION['e_imie2'].'</div>';
						unset($_SESSION['e_imie2']);
					}
				?>
				<div class="">
					<input type="text" name="nazwisko2" id="nazwisko2" value="<?php
					if (isset($_SESSION['fr_nazwisko2'])){echo $_SESSION['fr_nazwisko2'];
					unset($_SESSION['fr_nazwisko2']);
				}
				?>" placeholder="Nazwisko*" />
				</div>
				<?php
					if (isset($_SESSION['e_nazwisko2']))
					{
						echo '<div class="error">'.$_SESSION['e_nazwisko2'].'</div>';
						unset($_SESSION['e_nazwisko2']);
					}
				?>
				<div class="">
					<input type="text" name="nick2" id="nick2" value="<?php
					if (isset($_SESSION['fr_nick2'])){echo $_SESSION['fr_nick2'];
					unset($_SESSION['fr_nick2']);
				}
				?>" placeholder="Nick*" />
				</div>
				<?php
					if (isset($_SESSION['e_nick2']))
					{
						echo '<div class="error">'.$_SESSION['e_nick2'].'</div>';
						unset($_SESSION['e_nick2']);
					}
				?>
			</div>


										<!-- GRACZ 3 -->
		
			<div class="player">
				<div class="formtitle">
					<p class="title">Gracz 3</p>
					<p class="text">* - pola obowiązkowe</p>
				</div>
				
				<div class="">
					<input type="text" name="imie3" id="imie3" value="<?php
					if (isset($_SESSION['fr_imie3'])){echo $_SESSION['fr_imie3'];
					unset($_SESSION['fr_imie3']);
				}
				?>" placeholder="Imię*" />
				</div>
				<?php
					if (isset($_SESSION['e_imie3']))
					{
						echo '<div class="error">'.$_SESSION['e_imie3'].'</div>';
						unset($_SESSION['e_imie3']);
					}
				?>
				<div class="">
					<input type="text" name="nazwisko3" id="nazwisko3" value="<?php
					if (isset($_SESSION['fr_nazwisko3'])){echo $_SESSION['fr_nazwisko3'];
					unset($_SESSION['fr_nazwisko3']);
				}
				?>" placeholder="Nazwisko*" />
				</div>
				<?php
					if (isset($_SESSION['e_nazwisko3']))
					{
						echo '<div class="error">'.$_SESSION['e_nazwisko3'].'</div>';
						unset($_SESSION['e_nazwisko3']);
					}
				?>
				<div class="">
					<input type="text" name="nick3" id="nick3" value="<?php
					if (isset($_SESSION['fr_nick3'])){echo $_SESSION['fr_nick3'];
					unset($_SESSION['fr_nick3']);
				}
				?>" placeholder="Nick*" />
				</div>
				<?php
					if (isset($_SESSION['e_nick3']))
					{
						echo '<div class="error">'.$_SESSION['e_nick3'].'</div>';
						unset($_SESSION['e_nick3']);
					}
				?>
			</div>

										<!-- GRACZ 4 -->
		
			<div class="player">
				<div class="formtitle">
					<p class="title">Gracz 4</p>
					<p class="text">* - pola obowiązkowe</p>
				</div>
				
				<div class="">
					<input type="text" name="imie4" id="imie4" value="<?php
					if (isset($_SESSION['fr_imie4'])){echo $_SESSION['fr_imie4'];
					unset($_SESSION['fr_imie4']);
				}
				?>" placeholder="Imię*" />
				</div>
				<?php
					if (isset($_SESSION['e_imie4']))
					{
						echo '<div class="error">'.$_SESSION['e_imie4'].'</div>';
						unset($_SESSION['e_imie4']);
					}
				?>
				<div class="">
					<input type="text" name="nazwisko4" id="nazwisko4" value="<?php
					if (isset($_SESSION['fr_nazwisko4'])){echo $_SESSION['fr_nazwisko4'];
					unset($_SESSION['fr_nazwisko4']);
				}
				?>" placeholder="Nazwisko*" />
				</div>
				<?php
					if (isset($_SESSION['e_nazwisko4']))
					{
						echo '<div class="error">'.$_SESSION['e_nazwisko4'].'</div>';
						unset($_SESSION['e_nazwisko4']);
					}
				?>
				<div class="">
					<input type="text" name="nick4" id="nick4" value="<?php
					if (isset($_SESSION['fr_nick4'])){echo $_SESSION['fr_nick4'];
					unset($_SESSION['fr_nick4']);
				}
				?>" placeholder="Nick*" />
				</div>
				<?php
					if (isset($_SESSION['e_nick4']))
					{
						echo '<div class="error">'.$_SESSION['e_nick4'].'</div>';
						unset($_SESSION['e_nick4']);
					}
				?>
			</div>

										<!-- STAND IN -->
		
			<div class="player">
				<div class="formtitle">
					<p class="title">Stand IN</p>
					<p class="text">nieobowiązkowy</p>
				</div>
				
				<div class="">
					<input type="text" name="imie5" id="imie5" value="<?php
					if (isset($_SESSION['fr_imie5'])){echo $_SESSION['fr_imie5'];
					unset($_SESSION['fr_imie5']);
				}
				?>" placeholder="Imię*" />
				</div>
				<?php
					if (isset($_SESSION['e_imie5']))
					{
						echo '<div class="error">'.$_SESSION['e_imie5'].'</div>';
						unset($_SESSION['e_imie5']);
					}
				?>
				<div class="">
					<input type="text" name="nazwisko5" id="nazwisko5" value="<?php
					if (isset($_SESSION['fr_nazwisko5'])){echo $_SESSION['fr_nazwisko5'];
					unset($_SESSION['fr_nazwisko5']);
				}
				?>" placeholder="Nazwisko*" />
				</div>
				<?php
					if (isset($_SESSION['e_nazwisko5']))
					{
						echo '<div class="error">'.$_SESSION['e_nazwisko5'].'</div>';
						unset($_SESSION['e_nazwisko5']);
					}
				?>
				<div class="">
					<input type="text" name="nick5" id="nick5" value="<?php
					if (isset($_SESSION['fr_nick5'])){echo $_SESSION['fr_nick5'];
					unset($_SESSION['fr_nick5']);
				}
				?>" placeholder="Nick*" />
				</div>
				<?php
					if (isset($_SESSION['e_nick5']))
					{
						echo '<div class="error">'.$_SESSION['e_nick5'].'</div>';
						unset($_SESSION['e_nick5']);
					}
				?>
			</div>
                                                                                
    <div class="player">
        <div class="info">
            <p class="text white">W przypadku <u>niedodania STAND IN'a podczas rejestracji,</u> nie ma możliwości dodania go w późniejszym terminie. Jeśli któryś z zawodników nie będzie w stanie zagrać w meczu, to możliwe są 2 wyjścia: <br>- WALKOWER <br>- granie w 4 osoby.</p>                     
        <div id="rodo">        
            <a href="regulamin.pdf">Regulamin</a>
                <span>|</span>
            <a href="rodo.pdf">Polityka bezpieczeństwa</a>
        </div>
        <div style="clear: both;"></div>
        </div>
    </div>                                                                         
				
<div style="clear: both;"></div>	
		
    <div class="checkbox">
	<input type="checkbox" id="human" name="human" <?php
            if (isset($_SESSION['fr_human']))
            {
		echo "checked";
		unset($_SESSION['fr_human']);
            }
	?>/>

        <label for="human">Nie jestem robotem</label><br>
		<?php
			if (isset($_SESSION['e_human']))
			{
				echo '<div class="error">'.$_SESSION['e_human'].'</div>';
				unset($_SESSION['e_human']);
			}
		?>
                                      
            <input type="checkbox" id="regulamin" name="regulamin" <?php
		if (isset($_SESSION['fr_regulamin']))
		{
                    echo "checked";
			unset($_SESSION['fr_regulamin']);
		}
            ?>/>
                       
            
         <label for="regulamin">Akceptuję regulamin</label><br>
		<?php
                    if (isset($_SESSION['e_regulamin']))
			{
			echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
			unset($_SESSION['e_regulamin']);
			}
		?>
		
		<div class="g-recaptcha" data-sitekey="6Lfn1XcUAAAAAL-a8KMV6_MmAF4o8UdK8bIfBCjM"></div>
		
		<?php
			if (isset($_SESSION['e_bot']))
			{
				echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
				unset($_SESSION['e_bot']);
			}
		?>
		
			<input type="submit" value="Wyślij" />
                        <input type="reset" value="Reset" />
    </div>                                                                        
</form>
</div>
    
<div style="clear: both;"></div>

</div>
		
<!-- SKRYPTY -->

	<script src="assets/js/jquery.min.js"></script> 
	<script src="assets/js/fadeblack.js"></script>
</body>
</html>