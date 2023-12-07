			
			<div class="tablet-desktop">
         <h4 align="center">Clases grupales de acondicionamiento físico!!! </h4>
        <table align="center" cellspacing="10" cellpadding="10" border="3" bgcolor="#dddddd" > <!-- Start Table -->
        <strong align="center"><caption id="salida">Horario de clases grupales de gimnasia</caption></strong>
            <tr  align="center"><!-- Row 1 -->
            <th>Clase</th>
                <th>Días</th>
                <th>Tiempos</th>
                <th>Instructor</th>
                <th>Habitación</th>
            </tr>
            <tr><!-- Fila 2 -->
                <td>Cardio</td>
                <td>lunes, miércoles, viernes</td>
                <td>6:00 am, 6:00 pm</td>
                <td>Schultz</td>
                <td>B</td>
            </tr>
            <tr><!-- Fila 3 -->
                <td>Campamento de entrenamiento</td>
                <td>martes, jueves</td>
                <td>5:00 a. m., 5:00 p. m.</td>
                <td>Taylor</td>
                <td>B</td>
            </tr>
            <tr><!-- Fila 4 -->
                <td>Girar</td>
                <td>martes, jueves</td>
                <td>6:00 am, 6:00 pm</td>
                <td>Roberto</td>
                <td>A</td>
            </tr>
            <tr><!-- Fila 5 -->
                <td>Kickboxing</td>
                <td>lunes, miércoles, viernes</td>
                <td>8:00 a. m., 7:15 p. m.</td>
                <td>Lorenzo</td>
                <td>A</td>
            </tr>
            <tr><!-- Fila 6 -->
                <td>Yoga</td>
                <td>martes, jueves</td>
                <td>6:00 am, 6:00 pm</td>
                <td>Schultz</td>
                <td>B</td>
            </tr>
            <tr><!-- Fila 7 -->
                <td>Zumba</td>
                <td>lunes, miércoles, viernes</td>
                <td>7:00 am, 6:00 pm</td>
                <td>Roberto</td>
                <td>A</td>
            </tr>
			<tr><!-- Fila 8 -->
                <td>Gimnasio</td>
                <td>lunes a sabados</td>
                <td>7:00 am, 22:00 pm</td>
                <td>Miguel</td>
                <td>C</td>
            </tr>
        </table> <!-- End Table -->
			
		</div>
		
	
		<style>   
    table{
  width: 80%;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th, td {
  padding: 12px;
}

th{
  text-align: left;
}
#salida {
    color:black;
}




/* Style rule for box sizing applies to all elements */
* {
	box-sizing: border-box;
}

/* Begin Style rules for mobile viewport */

/* Style rule for header */



/* Style rule for hamburger menu */
.mobile-nav a {
	color: #fff;
	font-family: 'Francois One', sans-serif;
	text-align: center;
	font-size: 2em;
	text-decoration: none;
	padding: 3%;
	display: block;
}

.mobile-nav a.menu-icon {
	display: block;
	position: absolute;
	right: 0;
	top: 0;
}

/* Show mobile class, hide tablet-desktop class and menu-links id */
.mobile {
	display: block;
}

.tablet-desktop, #menu-links {
	display: none;
}

/* Style rules for main content */
main {
	background-color: #fff;
	padding: 2%;
	font-size: 1.15em;
	font-family: 'Roboto Slab', serif;
}



.mobile h3 {
	text-shadow: 5px 5px 8px #ccc;
}

article {
	padding: 2%;
}

article h3 {
	text-align: center;
}

article img {
	margin: 0 auto;
}

article ul {
	margin-left: 10%;
}

article:nth-of-type(2) {
	background-color: rgba(204, 204, 204, 0.3);
}







.map {
	border: 2px solid #000;
	width: 95%;
	height: 50%;
}

#form {
	margin-top: 2%;
	background-color: #f2f2f2;
	padding: 2%;
}

#form h2 {
	text-align: center;
}

/* Style rules for form elements */
fieldset, input, select, textarea {
	margin-bottom: 2%;
}




/* Media Query for Tablet Viewport */ 
@media screen and (min-width: 630px), print {
	
/* Tablet Viewport: Show tablet-desktop class,hide mobile class */
.tablet-desktop {
	display: block;
}

.mobile, .mobile-nav {
	display: none;
}



/* Tablet Viewport: Style rules for main content area */
main ul {
	margin: 0 0 4% 10%;
}
	
.grid {
	display: grid;
	grid-template-columns: auto auto auto;
	grid-gap: 20px;
}
	
.pic-text {
	font-size: 1em;
	padding: 10px;
}
	
aside {
	text-align: center;
	font-size: 1.25em;
	font-style: italic;
	font-weight: bold;
	padding: 2%;
	background-color: rgba(204, 204, 204, 0.5);
	box-shadow: 5px 5px 8px #000;
	text-shadow: 5px 5px 5px #b3b3b3;
	border-radius: 0 15px;
}
	
.grid-item4 {
	grid-column: 1 / span 3;
}

#exercises {
	border-top: 1px solid #000;
	border-bottom: 1px solid #000;
	background: linear-gradient(to right, #ccc, #fff);
	background-color: #f2f2f2;
	padding: 1% 2%;
}

#exercises dt {
font-weight: bold;
}

#exercises dd {
	padding: 0.5% 1% 2% 0;
}

.viewex {
	font-weight: bold;
	cursor: pointer;
}

#example {
	display: none;
}

.tel-num {
	font-size: 1.25em;
}

.map {
	width: 600px;
	height: 450px;
}

/*Tablet Viewport: Style Rules for Table */
table {
	border: 1px solid #000;
	border-collapse: collapse;
	margin: 0 auto;
	width: 100%;
}

caption {
	font-size: 1.5em;
	font-weight: bold;
	padding: 1%;
}

th, td {
	border: 1px solid #000;
	padding: 2%;
}

th {
	background-color: #000;
	color: #fff;
	font-size: 1.12em;
}

tr:nth-child(odd) {
	background-color: #ccc;
}

/* Tablet Viewport: Style rule for form element */
form {
	width: 70%;
	margin: 0 auto;
}

/* Tablet Viewport: Animation */
@-webkit-keyframes text-animation {
	0% { font-size: 1em; }
	50% { font-size: 2em; }
	100% { font-size: 1.35em; }
}

@keyframes text-animation {
	0% { font-size: 1em; }
	50% { font-size: 2em; }
	100% { font-size: 1.35em; }
}

figcaption {
	-webkit-animation-name: text-animation;
	animation-name: text-animation;
	-webkit-animation-delay: 3s;
	animation-delay: 3s;
	-webkit-animation-duration: 5s;
	animation-duration: 5s;
}

}
/* Media Query for Desktop Viewport */
@media screen and (min-width: 1015px), print {



	
/* Desktop Viewport: Style Rules for main content */
main {
	clear: left;
}
	
main h1 {
	font-size: 1.8em;
}
	
article h3 {
	font-size: 1.75em;
}
	
	.pic-text {
		font-size: 1.5em;
		padding: 20px;
	}
		
	.frame {
		opacity: 0.9;
	}
		
	.frame:hover {
		opacity: 1;
		box-shadow: 8px 8px 10px #808080;
		transform: translateY(10px);
	}
		
	#weights, #cardio, #training {
		width: 29%;
		float: left;
		margin: 0 2%;
	}
		
	#exercises {
		clear: left;
	}
	
	
	.offer:hover {
		transform: scale(1.25);
		cursor: pointer;
	}
	
	/* Desktop Viewport: Style Rules for form elements */
	form {
		width: auto;
	}
	
	.form-grid {
		display: grid;
		grid-template-columns: auto auto auto;
		grid-gap: 20px;
	}
	
	.btn {
		grid-column: 1 / span 3;
	}
	
	}
	
	/* Media Query for Large Desktop Viewports */
	@media screen and (min-width: 1921px) {
		
		#container {
			width: 1920px; 
			margin: 0 auto;
		}
		
	}
	
	table {
		width: 80%;
	}
	
	
	</style>   	
