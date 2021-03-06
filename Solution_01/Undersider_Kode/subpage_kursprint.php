<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    

  <title>Add courses</title>
    <style>
        
        
        *{
            margin: 0px;
            padding: 0px;
        }
        
        @font-face{
            font-family: 'font';
            src: url(../Hovedside_Kode/fonter/newrepublic/SF%20New%20Republic.ttf);
        }
        
        html, body, #wrapper {
            height: 100%;
            width: 100%;
            background-image: url(../Hovedside_Kode/Design/BGs/Elegant_Background-2.jpg);
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
            bottom: auto;
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
            top: 20%;
            left: 1%;
            position: absolute;
        }

        #workshop {
            position: absolute;
            top: 25%;
            left: 100px;
        }
        /*--!End SubpageIcon--*/

        /*--FORM WRAP--*/

        #Form_Wrap {
			background-image: url(../Hovedside_Kode/Design/BGs/Blured/Blurred4.jpg);
            top: 16%;
            margin-left: 20%;
			margin-right: 33%;
			height: 70%;
            width: 62.5%;
            position: absolute;
            color: black;
            padding: 14px 25px;
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.4);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.4);
            overflow: auto;
		}
		
			
		/*--!END FORM WRAP--*/
			
			
		/* 
		** START ALL CSS RELATED TO DB_FORM
		*/
		
		#form {
			margin-left: 140px;
			/*position: relative;*/
			z-index:1;
			
            
		}
		
		th, td {
			padding: 30px;
		}
		#form_table {
			border: 1px solid black !important;
			padding: 30px;
		}
        
        th, td{
        
            padding-top: 20px;
            padding: 14px;
        }
		
		#form_table {
			/*background-image: url(form_bg.png);
			background-size: cover;*/
			
            
		}
        
        .error{
            font-size: 10px;
            margin-right: 1px;
            width: 90%;
            height: 30%;
            
            
        }
		/*  END ALL CSS RELATED TO DB_FORM  */
		
		
    </style>  

</head>

<body>
   <?php require '../Handle_WSform.php'; ?>
    <div id="wrapper">
        <header>
        <div id="headerContainer">
            <div id="navMenuTop">
               <h1><a id="fjerdingen" href="../Hovedside_Kode/index.html">CAMPUS FJERDINGEN</a></h1>
                <p id="login">Login</p>
            </div>
                <div id="navMenuBottom">
                    <nav>
                        <ul id="menu">    
                            <li><a href="../Hovedside_Kode/index.html">Home</a></li>
                            <li><a href="../Undersider_Kode/subpage_workshop.html">Workshops</a></li>
                            <li><a href="subpage_kurs.html">Courses</a></li>
                            <li><a href="subpage_sosialt2.php">Social</a></li>
                        </ul>
                    </nav>
                </div>
             </div>
        </header>
        <footer>
            <div id="footerContainer">
                    <img id="logo" src="../Hovedside_Kode/images/logo.png" style="width:50px; height=50px;" alt="logo">
            </div>
        
        </footer>
        
        <div id=subIcon>
            <img src="images/Hexa_6.png" style="width:85px; height=100px;" alt="icon">
            <h2><a href="#" id="workshop">View Course</a></h2>
        </div> 
   
   
   
        
        <div id="Form_Wrap">
        	
			<?php
				require '../connection.php';

				$query = "SELECT * FROM workshops_events";
				$result = mysqli_query ($conn, $query);
			?>

			<table id="db_table">
				<?php
					while( $row = mysqli_fetch_array($result) ) {
						echo
						"<tr>
							<th>Tittel:</th>
								<td>{$row['Overskrift']}</td>
						</tr>
						<tr>
							<th>Beskrivelse:</th>
								<td>{$row['Beskrivelse']}</td>
						</tr>
						<tr>
							<th>Ansvarlig:</th>
								<td>{$row['Ansvarlig']}</td>
						</tr>
						<tr>
							<th>Kontakt:</th>
								<td>{$row['Epost']}</td>
						</tr>
						<tr>
							<th>Medvirkende:</th>
								<td>{$row['Medvirkende']}</td>
						</tr>
						<tr>
							<th>-------------</th>
								<td></td>
						</tr>";
				}

				mysqli_close($conn);
				?>

			</tbody>
			</table>
				<br><br>

		</div>       	
        	
    </div>  
</body>

</html>