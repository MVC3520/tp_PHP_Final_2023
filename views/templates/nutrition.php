<div class="tablet-desktop">
<div class="grid">
		
        <article>
            <h3>Comida para el pensamiento</h3>
            <img src="views/static/img/food-thought.jpg" alt="food for thought image" class="round">
            <p>La buena nutrición es un estilo de vida, no una dieta. Comienza con una nueva forma de pensar sobre la comida. Piense en su cuerpo como un vehículo que utiliza los alimentos como combustible. Llene su tanque con el tipo correcto de combustible.</p>
            <p>No abordes tu plan de nutrición como un plan de dieta, sino como un cambio de estilo de vida. Si haces un cambio permanente, verás grandes resultados. La clave del éxito es un enfoque diario en su objetivo.</p>
            <p>Divida sus comidas y controle sus calorías. Hay muchas aplicaciones móviles gratuitas disponibles para ayudar a realizar un seguimiento de su nivel de actividad y calorías.</p>
            <p>Controle los impulsos impulsivos de comprar comida chatarra y, en su lugar, permítase una comida "trampa" a la semana.</p></article>
        
        <article>
            <h3>Qué comer</h3>
            <img src="views/static/img/fresh-food.jpg" alt="fresh vegetables, fruit, eggs, and nuts" class="round">
            <p>Utilice lo siguiente como guía:</p>
            <ul>
                <li>Proteínas, como huevos, pollo y carne roja magra</li>
                <li>Verduras, pero evita el maíz y los guisantes</li>
                <li>Fruta</li>
                <li>Grasa, como aceite de oliva, nueces y semillas</li>
                </ul>
            <p>Limita el consumo de pan, pasta, patatas blancas y alimentos procesados. Estos alimentos son ricos en carbohidratos.</p>
            <p>Cuando compre comestibles, compre en los pasillos exteriores y compre productos orgánicos cuando sea posible. Abastecerse de verduras frescas, harina de almendras y semillas de lino.</p>
            <p>Consulte nuestra Comida de la semana para obtener nuevas ideas de comidas.</p>
        </article>
        
        <article>
        <h3>Comida de la semana</h3>
            <img src="views/static/img/food-chicken.jpg" alt="pollo asado con hierbas" class="round">
            <h4>Pollo Asado a las Hierbas</h4>
            <h4>Ingredientes:</h4>
            <ul>
                <li>pechuga de pollo deshuesada y sin piel (de preferencia orgánico)</li>
                <li>1 cucharadita de hierbas provenzales</li>
                <li>1 cucharadita de jugo de limón</li>
                <li>1 cucharadita de aceite de oliva</li>
                <li>1 cucharadita de sal marina</li>
                <li>&frac14; cucharadita de pimienta</li>
            </ul>
            <h4>Instrucciones:</h4>
            <p>Combine todos los ingredientes en una bolsa de plástico y deje marinar durante al menos una hora. Precalentar el horno a 350 grados. Hornee el pollo durante 30-35 minutos o hasta que los jugos salgan claros. Ase a temperatura alta durante dos minutos o hasta que se dore. Sirva con una ensalada fresca.</p>
        </article>
        
        <aside class="tablet-desktop grid-item4">
        <p>¿Sabías que el estadounidense promedio consume 3 libras de azúcar cada semana?</p>
            <p>¿Sabías que los aguacates son una buena fuente de vitamina B?</p>
            <p>¿Sabías que el adulto activo promedio debe consumir unas 20000 calorías al día?</p>
        </aside>

        </div>
        <style>   
    table{
  width: 100%;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
}

th{
  text-align: left;
}
#salida {
    color:black;
}








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
/*div {
	background-color: #fff;
	padding: 2%;
	font-size: 1.15em;
	font-family: 'Roboto Slab', serif;
}*/



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
	font-size: 1.15em;
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



	

	
 h1 {
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
	

	
}

table {
	width: 80%;
}


</style>   