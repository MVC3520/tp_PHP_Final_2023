
    <link rel="stylesheet" href="css/mucsclegain.css">


    <section id="intro">
    <h1 style="padding: 10px 50px 10px 30px">Bienvenido a nuestro plan GYM FRRo </h1>

    </section>
    <div class="row">
     <div class="notice-notlogged" style="padding: 10px 50px 10px 30px" >
     Importante: tienes que <a href=<?= "$URL/register"; ?>>registrarte</a> (o
     <a href=<?= "$URL/login"; ?>>identificarte</a> si ya tienes cuenta) para poder guardar o descargar tus entrenamientos.
     </div>
    <div class="col-sm-9 col-md-9" style="padding: 30px 20px 0 30px"  >
    <form name="appbundle_entrenamiento" method="post"  align= "center">
                    
    <div class="form-group hidden-background-input" >
                        <!-- <label class="control-label">Título</label>-->
    <input type="text" id="appbundle_entrenamiento_title" name="appbundle_entrenamiento[title]" required="required" maxlength="70" pattern=".{1,}" placeholder="Título del entrenamiento" class="form-control">
    <span id="counterTitle" class="pull-right small" text-align= "right"> 0/70</span>
                    </div>
                    <div class="form-group hidden-background-input">
                        <!--<label class="control-label">Descripción</label>-->
                        <textarea id="appbundle_entrenamiento_target" name="appbundle_entrenamiento[target]" required="required" maxlength="400" placeholder="Objetivo y observaciones (Obligatorio)" rows="3" class="form-control"></textarea>
                                                <span id="counterTarget" class="pull-right small">0/400</span>
                    </div>
                                                                <div class="row">
                            <div class="form-group  col-sm-3">
                                <label class="control-label">Objetivo</label>
                                <select id="appbundle_entrenamiento_group" name="appbundle_entrenamiento[group]" class="form-control"><option value="1">Entrenamientos de musculación y fuerza</option><option value="2">Entrenamientos para deportes o salud</option><option value="3">Entrenamientos para pérdida de peso</option><option value="6">Entrenamientos para rehabilitación</option><option value="8">Rutinas fitness</option></select>
                                
                            </div>
                            <div class="form-group col-sm-2">
                                <label class="control-label">Sexo</label>
                                <select id="appbundle_entrenamiento_sex" name="appbundle_entrenamiento[sex]" class="form-control"><option value="ambos" selected="selected">Ambos</option><option value="hombre">Hombre</option><option value="mujer">Mujer</option></select>
                                
                            </div>
                            <div class="form-group col-sm-3">
                                <label class="control-label">Nivel</label>
                                <select id="appbundle_entrenamiento_level" name="appbundle_entrenamiento[level]" class="form-control"><option value="avanzado">Avanzado</option><option value="intermedio">Intermedio</option><option value="principiante" selected="selected">Principiante</option></select>
                                
                            </div>
                            <div class="form-group col-sm-2">
                                <label class="control-label">Duración</label>
                                <select id="appbundle_entrenamiento_duration" name="appbundle_entrenamiento[duration]" placeholder="Duración del entrenamiento (opcional)" class="form-control"><option value="" selected="selected">Duración</option><option value="10 min">10 min</option><option value="20 min">20 min</option><option value="30 min">30 min</option><option value="40 min">40 min</option><option value="50 min">50 min</option><option value="1 h">1 hora</option><option value="1 h 10 min">1 h 10 min</option><option value="1 h 20 min">1 h 20 min</option><option value="1 h 30 min">1 h 30 min</option><option value="1 h 40 min">1 h 40 min</option><option value="1 h 50 min">1 h 50 min</option><option value="2 h">2 h</option></select>
                                
                            </div>
                            <div class="form-group col-sm-2">
                                <label class="control-label">Público?</label>
                                <select id="appbundle_entrenamiento_publishable" name="appbundle_entrenamiento[publishable]" class="form-control"><option value="1" selected="selected">Público</option><option value="0">Privado</option></select>
                            </div>
                        </div>
                                        <div class="form-group" style="margin-bottom: 0px">
                        <div class="form-group">
                            <div id="hidden-exercices" style="display: none">
                                <div id="appbundle_entrenamiento_exercises" data-prototype="<div class=&quot;form-group&quot;><label class=&quot;control-label required&quot;>__name__label__</label><div id=&quot;appbundle_entrenamiento_exercises___name__&quot;><input type=&quot;hidden&quot; id=&quot;appbundle_entrenamiento_exercises___name___exerciseId&quot; name=&quot;appbundle_entrenamiento[exercises][__name__][exerciseId]&quot; /><div class=&quot;form-group&quot;><label class=&quot;control-label&quot; for=&quot;appbundle_entrenamiento_exercises___name___sets&quot;>Sets</label><input type=&quot;number&quot; id=&quot;appbundle_entrenamiento_exercises___name___sets&quot; name=&quot;appbundle_entrenamiento[exercises][__name__][sets]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label class=&quot;control-label required&quot; for=&quot;appbundle_entrenamiento_exercises___name___position&quot;>Position</label><input type=&quot;number&quot; id=&quot;appbundle_entrenamiento_exercises___name___position&quot; name=&quot;appbundle_entrenamiento[exercises][__name__][position]&quot; required=&quot;required&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label class=&quot;control-label&quot; for=&quot;appbundle_entrenamiento_exercises___name___duration&quot;>Duration</label><input type=&quot;number&quot; id=&quot;appbundle_entrenamiento_exercises___name___duration&quot; name=&quot;appbundle_entrenamiento[exercises][__name__][duration]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label class=&quot;control-label required&quot; for=&quot;appbundle_entrenamiento_exercises___name___durationType&quot;>Duration type</label><input type=&quot;text&quot; id=&quot;appbundle_entrenamiento_exercises___name___durationType&quot; name=&quot;appbundle_entrenamiento[exercises][__name__][durationType]&quot; required=&quot;required&quot; maxlength=&quot;255&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label class=&quot;control-label&quot; for=&quot;appbundle_entrenamiento_exercises___name___restOrHeight&quot;>Rest or height</label><input type=&quot;number&quot; id=&quot;appbundle_entrenamiento_exercises___name___restOrHeight&quot; name=&quot;appbundle_entrenamiento[exercises][__name__][restOrHeight]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label class=&quot;control-label required&quot; for=&quot;appbundle_entrenamiento_exercises___name___restOrHeightType&quot;>Rest or height type</label><input type=&quot;text&quot; id=&quot;appbundle_entrenamiento_exercises___name___restOrHeightType&quot; name=&quot;appbundle_entrenamiento[exercises][__name__][restOrHeightType]&quot; required=&quot;required&quot; maxlength=&quot;255&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label class=&quot;control-label&quot; for=&quot;appbundle_entrenamiento_exercises___name___rawDescription&quot;>Raw description</label><input type=&quot;text&quot; id=&quot;appbundle_entrenamiento_exercises___name___rawDescription&quot; name=&quot;appbundle_entrenamiento[exercises][__name__][rawDescription]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label class=&quot;control-label&quot; for=&quot;appbundle_entrenamiento_exercises___name___notes&quot;>Notes</label><textarea id=&quot;appbundle_entrenamiento_exercises___name___notes&quot; name=&quot;appbundle_entrenamiento[exercises][__name__][notes]&quot; class=&quot;form-control&quot;></textarea></div></div></div>"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div id="gridEntrenamientoWrapper">
                        <div id="subWrapper" style="position: relative">
                            <div id="page-maker-1" class="pagination-marker " style="display: none; left: 343.75px;">Página 1/1
                            </div>
                            <div id="page-maker-2" class="pagination-marker " style="display: none; left: 343.75px;">Página 2/2
                            </div>
                            <div id="page-maker-3" class="pagination-marker " style="display: none; left: 343.75px;">Página 3/3
                            </div>
                        </div>
                       
                       
                    </div>
                    <br>
        <div class="row">
        <div class="col-sm-9 col-md-8 " style="padding: 10px 50px 50px 80px">
                                <a class="btn btn-success btn-space"  href=<?= "$URL/login"; ?>>Descargar</a>
                                <a class="btn btn-success btn-space"  href=<?= "$URL/login"; ?>>Guardar</a>
          </div>
                    </div>
                   </form>
                </div>

                            

                        

                          
        
            <h1 style="padding: 10px 50px 10px 30px"> plan de entrenamiento</h1>

        <div class="container1" style="padding: 10px 50px 10px 30px">
            <span class="days">Dia 1</span>
            <span class="days">Entrenamiento de pecho</span>
            <div class="item" id="item-1">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/decline-push-ups.jpg"><div class="ex">DECLINE PUSHUPS- 3 x 15</div>
                </div>
            </div>
            <div class="item" id="item-2">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/pushup.jpg"><div class="ex">NORMAL PUSHUPS- 3 x 15</div>
        </div>
        </div>
            <div class="item" id="item-3">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/widepushup.jpg"><div class="ex">WIDE PUSHUPS- 3 x 15</div>
        </div>
        </div>
            <div class="item" id="item-4">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/inclinedpushup.jpg"><div class="ex">INCLINE PUSHUPS- 3 x 15</div>
                </div>
        </div>

        <span class="days">Dia 2</span>
        <span class="days">Entrenamiento de tríceps</span>
        <div class="item" id="item-1">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/tricep1.jpg"><div class="ex">BARBELL TRICEPS EXTENSION–3 x 15</div>
                </div>
            </div>
            <div class="item" id="item-2">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/tricep2.jpg"><div class="ex">ONE HAND TRICEP EXTENSION WITH DUMBELL– 3x 15</div>
                </div>
        </div>
            <div class="item" id="item-3">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/tricep3.jpg"><div class="ex">TRICEPS DIPS– 3 x 15</div>
        </div>
        </div>

        <span class="days">Dia 3</span>
            <span class="days">Entrenamiento de espalda</span>
            <div class="item" id="item-1">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/back1.jpg"><div class="ex">OVERHAND BARBELL- 4 x 12</div>
            </div>
            </div>
            <div class="item" id="item-2">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/back2.png"><div class="ex">UNDERHAND BARBELL- 4 x 12</div>
        </div>
        </div>
            <div class="item" id="item-3">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/back3.jpeg"><div class="ex">ONE HAND DUMBELL- 3 x 15</div>
        </div>
        </div>
            <div class="item" id="item-4">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/back2.png"><div class="ex">WIDE UNDERHAND BARBELL- 3 x 15</div>
                </div>
        </div>
            

        <span class="days">Dia 4</span>
            <span class="days">Entrenamiento de bíceps</span>
            <div class="item" id="item-1">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/bicep1.jpg"><div class="ex">DUMBELL CURLS– 3 x 15</div>
            </div>
            </div>
            <div class="item" id="item-2">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/bicep2.jpg"><div class="ex">PEACHER CURLS– 4 x 12</div>
        </div>
        </div>
            <div class="item" id="item-3">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/bicep3.jpg"><div class="ex">ONE ARM PEACHER CURLS– 3 x 15</div>
                </div>
        </div>
            <div class="item" id="item-4">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/bicep4.jpg"><div class="ex">CONCENTRATION CURLS– 4 x 12</div>
                </div>
        </div>
            <div class="item" id="item-5">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/bicep5.jpg"><div class="ex">BARBELL (wide grip)– 3 x 10</div>
                </div>
        </div>
            <div class="item" id="item-6">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/bicep6.jpg"><div class="ex">BARBELL (close grip)– 3 x 10</div>
                </div>
        </div>

        <span class="days">Dia 5</span>
            <span class="days">Entrenamiento de hombros</span>
            <div class="item" id="item-1">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/shoulder1.jpg"><div class="ex">ARNOLD PRESS- 4 x 15</div>
            </div>
            </div>
            <div class="item" id="item-2">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/shoulder2.jpg"><div class="ex">FRONT RAISES- 4 x 15</div>
        </div>
        </div>
            <div class="item" id="item-3">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/shoulder3.jpg"><div class="ex">BARBELL PRESS- 4 x 10</div>
        </div>
        </div>
            <div class="item" id="item-4">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/shoulder4.jpg"><div class="ex">SIDE RAISES- 4 x 10</div>
        </div>
        </div>

        <span class="days">Dia 6</span>
            <span class="days">Entrenamiento de piernas</span>
            <div class="item" id="item-1">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/legs1.jpg"><div class="ex">SQUATS- 3 x 20</div>
            </div>
            </div>
            <div class="item" id="item-2">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/legs5.jpg"><div class="ex">SUMO SQUATS- 3 x 15</div>
        </div>
        </div>
            <div class="item" id="item-3">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/legs3.jpg"><div class="ex">LEG EXTENSIONS- 3 x 15 </div>
        </div>
        </div>
            <div class="item" id="item-4">
                <div class="ex-img" style="width: 100%; height: 100%;display: flex; flex-direction: row;"><img src="imgs/legs4.jpg"><div class="ex">CALF RAISES- 4 x 12</div>
        </div>
        </div>

        </div>


        
   
        </div>
         
        </div>
           
        </div>
          
           
          
           
       
        </div>
<style>
        .btn-space {
    margin-left: 150px;
}
</style>