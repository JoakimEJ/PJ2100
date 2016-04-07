<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="hexStyle.css"> 
    

  <title>Tittel</title>
    <style>
        
        
        *{
            margin: 0px;
            padding: 0px;
        }
        
        @font-face{
            font-family: 'font';
            src: url(Hovedside_Kode/fonter/newrepublic/SF%20New%20Republic.ttf);
        }
        
        html, body, #wrapper {
            height: 100%;
            width: 100%;
            background-image: url(Hovedside_Kode/Design/BGs/Elegant_Background-2.jpg);
            background-size: 100% 100%;
            font-family: 'font', sans-serif;
            text-transform: uppercase;
            position: relative;
        }
        
        #headerContainer{
            height: 70px;
            position: relative;
            min-width: 50%;
            max-width: 100%;
            z-index: 1;
            white-space: nowrap;
            
        }
        
        #navMenuTop{
            width: 100%;
            height: 100%;
            text-align: center;
            background-color: rgb(245,245,245);
            opacity: 0.8;
             white-space: nowrap;
        }
        
        #fjerdingen{
            position: relative;
            top: 15px;
             white-space: nowrap;
        }
        
        /*--Navigation--*/
        a{
            text-decoration: none;
            color: rgb(50,50,50)
        }
        
        #login{
            right: 50px;
            position: absolute;
            top: 5px;
             white-space: nowrap;
        }

        #menu{
            border-width:1px 0;
            list-style:none;
            margin:0;
            padding:0;
            text-align:center;
            font-size: 0;
            background-color: rgb(245,245,245);
            opacity: 0.8;
            height: 40px;
            box-shadow: 2px 4px 10px -2px #888888;
        }
       
        #menu li {
            text-align: center; 
            display: inline-block;
            padding-bottom: 3px;    
            text-align: center;
            margin: 0 1.5em;
            font-size: 20px;
            
        }
        
        #menu a{
            border-bottom: 3px solid transparent;
            -webkit-transition: border 0.2s ease-in-out;
            -moz-transition: border 0.2s ease-in-out;
            -o-transition: border 0.2s ease-in-out;
            transition: border 0.2s ease-in-out;
            padding-bottom: 5px;
        }
        
        
        #menu a:hover{
            border-bottom: 3px solid rgb(100,100,100);
        }
        
        /*--!Navigation--*/
        
        /*-Footer-*/
        
        #footerContainer{
            min-width: 100%;
            position: absolute;
            height: 52px;
            bottom: 0;
            background-color: rgb(245,245,245);
            opacity: 0.7;
            box-sizing: border-box;
            padding: 10px 20px;
            list-style: none;   
            float: left;
            white-space: nowrap;
            overflow: hidden;
        }
        
        #logo{
            top: 5px;
            left: 25px;
            position: absolute;
            
        }
        /*-!Footer-*/   
        
        /*--SubpageIcon--*/
        #subIcon {
            top: 15%;
            left: 5%;
            position: absolute;
        }

        #workshop {
            position: absolute;
            top: 20%;
            left: 100px;
        }
        /*--!End SubpageIcon--*/

        /*--FORM WRAP--*/

        #Form_Wrap {
			background-image: url(Hovedside_Kode/Design/BGs/Blured/Blurred4.jpg);
            top: 30%;
            margin-left: 33%;
			margin-right: 33%;
			height: 50%;
            width: 30%;
            position: absolute;
            opacity: 0.5;
            color: black;
            padding: 14px 25px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.4);
		}
			
		/*--!END FORM WRAP--*/
			
			
		/* 
		** START ALL CSS RELATED TO DB_FORM
		*/
		
		#form {
			margin-left: 20px;
			margin-top: 50px;
		}
		
		#form_table, th, td {
			border: 1px solid black !important;
			padding: 8px;
		}
		
		#form_table {
			background-image: url(../form_bg.png);
			background-size: cover;
		}
		/*  END ALL CSS RELATED TO DB_FORM  */
		
		
    </style>  

</head>

<body>
   <?php require 'Handle_WSform.php'; ?>
    <div id="wrapper">
        <header>
        <div id="headerContainer">
            <div id="navMenuTop">
               <h1><a id="fjerdingen" href="../Hovedside_Kode/index.html">CAMPUS FJERDINGEN</a></h1>
                <p id="login">Logg inn</p>
            </div>
                <div id="navMenuBottom">
                    <nav>
                        <ul id="menu">    
                            <li><a href="Hovedside_Kode/index.html">Hjem</a></li>
                            <li><a href="Undersider_Kode/subpage_workshop.html">Workshop</a></li>
                            <li><a href="Undersider_Kode/subpage_kurs.html">Kurs</a></li>
                            <li><a href="Undersider_Kode/subpage_sosialt.html">Sosialt</a></li>
                        </ul>
                    </nav>
                </div>
             </div>
        </header>
        <footer>
            <div id="footerContainer">
                    <img id="logo" src="Hovedside_Kode/images/logo.png" width="50px" height="50px">
            </div>
        
        </footer>
        
        <div id="Form_Wrap">
        	
        	<div id="form">
			<h2>Legg inn workshop til DB</h2>
			<br>
			<form method="post" action="">
				<table id="form_table">
					<tr>
						<td>
							<p>Name: </p>
						</td>
						<td>
							<input type="text" name="name" value="<?php echo $name; ?>">
						</td>
						<td>
							<p><span class="error">* <?php echo $nameErr; ?></span></p>
						</td>
					</tr>
					
					<tr>
						<td>
							<p>Email: </p>
						</td>
						<td>
							<input type="text" name="email" value="<?php echo $email; ?>">
						</td>
						<td>
							<span class="error">* <?php echo $emailErr; ?></span>
						</td>
					</tr>
					<tr>
						<td>
							<p>Team: </p>
						</td>
						<td>
							<input type="text" name="team" value="<?php echo $team;?>">
						</td>
						<td>
							<span class="error">* <?php echo $teamErr; ?></span>
						</td>
					</tr>
					<tr>
						<td>
							<p>Title: </p>
						</td>
						<td>
							<textarea name="title" rows="5" cols="40"><?php echo $title;?></textarea>
						</td>
						<td>
							<span class="error">* <?php echo $titleErr; ?></span>
						</td>
					</tr>
					<tr>
						<td>
							<p>Description: </p>
						</td>
						<td>
							<textarea name="desc" rows="5" cols="40"><?php echo $desc; ?></textarea>
						</td>
						<td>
							<span class="error">* <?php echo $descErr; ?></span>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" value="Submit">
						</td>
					</tr>
				</table>
			</form>
			
			<?php
			if(isset($_POST['submit'])) {

				ini_set('display_errors', 1);
				error_reporting(~0);
				require 'connection.php';

				if ($nameCond && $mailCond && $teamCond && $titleCond && $descCond) {
					$insertCondition = true;
				} else {$insertCondition = false;}


				if($insertCondition) {
					$query = "INSERT INTO workshops_events (Ansvarlig, Epost, Medvirkende,
						Overskrift, Beskrivelse)
						VALUES ('$name', '$email', '$team', '$title', '$desc')";

					if (mysqli_query($conn, $query)) {
						echo "New record created successfully!";
					} else {
						echo "Error: " . "<br>" . mysqli_connect_error();
					}

				} else {
					echo "Error: could not insert into database. Follow instructions on form";

					return;
				}

				mysqli_close($conn);
			}
		
	?>
			
		</div>
        	
        </div>
        <div id=subIcon>
            <img src="Undersider_Kode/images/Hexa_6.png" width="85px" height="100px">
            <h2><a href="#" id="workshop">Add Workshop</a></h2>
        </div>
    </div>  
</body>

</html>