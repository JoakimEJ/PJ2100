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
            top: 30%;
            margin-left: 33%;
			margin-right: 33%;
			height: 60%;
            width: 50%;
            position: absolute;
            background-color: #dfdfdf;
            opacity: 0.5;
            color: black;
            padding: 14px 25px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.4);
		}
			
		/*--!END FORM WRAP--*/
		
		#db_table {
		border: 2 solid black; 
		background-color: #84ed86; 
		color: #761a9b; 
		margin: 0 auto;
		}
		
    </style>  

</head>

<body>
    <div id="wrapper">
        <header>
        <div id="headerContainer">
            <div id="navMenuTop">
               <h1><a id="fjerdingen" href="index.html">CAMPUS FJERDINGEN</a></h1>
                <p id="login">Logg inn</p>
            </div>
                <div id="navMenuBottom">
                    <nav>
                        <ul id="menu">    
                            <li><a href="#">Test</a></li>
                            <li><a href="#">Fane</a></li>
                            <li><a href="#">Kaffe</a></li>
                            <li><a href="#">Brokkoli</a></li>
                        </ul>
                    </nav>
                </div>
             </div>
        </header>
        <footer>
            <div id="footerContainer">
                    <img id="logo" src="../Undersider_Kode/images/logo.png" width="50px" height="50px">
            </div>
        
        </footer>
        
        <div id="Form_Wrap">
        	
			<?php
				require 'connection.php';

				$query = "SELECT * FROM workshops_events";
				$result = mysqli_query ($conn, $query);
			?>

			<table id="db_table">
				<thead>
					<tr>
					<th>ID</th>
					<th>Ansvarlig</th>
					<th>Epost</th>
					<th>Medvirkende</th>
					<th>Overskrift</th>
					<th>Beskrivelse</th>
					</tr>
				</thead>
			<tbody>
				<?php
					while( $row = mysqli_fetch_array($result) ) {
						echo
						"<tr>
						<td>{$row['ID']}</td>
						<td>{$row['Ansvarlig']}</td>
						<td>{$row['Epost']}</td>
						<td>{$row['Medvirkende']}</td>
						<td>{$row['Overskrift']}</td>
						<td>{$row['Beskrivelse']}</td>
						</tr>\n";
				}

				mysqli_close($conn);
				?>

			</tbody>
			</table>
				<br><br>
				<h2><a href="#">Trykk her for å legge inn flere eventer</a></h2>

		</div>
        	
       
        <div id=subIcon>
            <img src="../Undersider_Kode/images/Hexa_6.png" width="85px" height="100px">
            <h2><a href="#" id="workshop">View Workshops</a></h2>
        </div>
    </div>  
</body>

</html>