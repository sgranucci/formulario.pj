<div class="container step3" style="display: none;">
  <h2>Evalue su perfil de inversor</h2>
    <section class="tdi-mod2">
      <img src="https://www.sailinginversiones.com/images/bg1-mod6-home.png" alt="">

      <div class="container">

        {{-- @if($tiene_test or session('estado') == 'editarCotitular' or session('estado') == 'nuevoCotitular')
            <h3>Usted ya ha realizado el test</h3>
            <div style="width:100%;height: 50px;">
              <div onclick="mover(4);" class="continuar btn_ctn">Continuar</div>
              <div onclick="mover(2);" class="continuar">Volver</div>
            </div> --}}

            @if($tiene_test and (session('estado') == 'nuevoTitular' or session('estado') == 'editarTitular'))
                <h6>
                  Usted ya ha realizado el Test. <br>En caso de desear modificarlo, podrá hacerlo una vez que tenga su cuenta Comitente activa
                </h6>
                <div style="width:100%;height: 50px;">
                  <div onclick="mover(4);" class="continuar btn_ctn">Continuar</div>
                  <div onclick="mover(2);" class="continuar">Volver</div>
                </div>
            @elseif(session('estado') == 'editarCotitular' or session('estado') == 'nuevoCotitular')

                <h6>
                  El Titular ya ha realizado el Test
                </h6>
                <div style="width:100%;height: 50px;">
                  <div onclick="mover(4);" class="continuar btn_ctn">Continuar</div>
                  <div onclick="mover(2);" class="continuar">Volver</div>
                </div>

            @else
              <div id="tdi-form">
                <h3>El test consta de 9 preguntas para poder analizar de forma específica objetivos, horizonte de inversor, necesidades de liquidez, grado de tolerancia y entendimiento del riesgo que estás dispuesto a asumir.</h3>

                <fieldset id="preg1">
                  <div class="progress uno"></div>

                  <h4>1 - ¿Cuál es tu edad?</h4>

                  <div class="options">
                    <label>Menor a 25 años <input type="radio" name="uno" value="3" checked></label>
                    <label>Entre 26 y 35 años <input type="radio" name="uno" value="2"></label>
                    <label>Entre 36 y 55 años <input type="radio" name="uno" value="1"></label>
                    <label>Mayor a 55 años <input type="radio" name="uno" value="0"></label>
                  </div>

                  <div class="btns">
                    <button class="active next" type="button">Siguiente</button>
                  </div>
                </fieldset>

                <fieldset id="preg2">
                  <div class="progress dos"></div>

                  <h4>2 - ¿Cuánto conoces del mercado de capitales?</h4>

                  <div class="options">
                    <label>Nada <input type="radio" name="dos"  value="0" checked></label>
                    <label>Poco <input type="radio" name="dos" value="1"></label>
                    <label>Bastante / Mucho <input type="radio" name="dos" value="2"></label>
                  </div>

                  <div class="btns">
                    <button type="button">Anterior</button>
                    <button class="active next" type="button">Siguiente</button>
                  </div>
                </fieldset>

                <fieldset id="preg3">
                  <div class="progress tres"></div>

                  <h4>3 - ¿Ya realizaste alguna inversión en el mercado de capitales?</h4>

                  <div class="options">
                    <label>No <input type="radio" name="tres" value="0" checked></label>
                    <label>Si <input type="radio" name="tres" value="2"></label>
                  </div>

                  <div class="btns">
                    <button type="button">Anterior</button>
                    <button class="active next" type="button">Siguiente</button>
                  </div>
                </fieldset>

                <fieldset id="preg4">
                  <div class="progress cuatro"></div>

                  <h4>4 - ¿Qué porcentaje de tus ahorros estás dispuesto a invertir en el mercado de capitales?</h4>

                  <div class="options">
                    <label>Menos del 25% <input type="radio" name="cuatro" value="1" checked></label>
                    <label>Entre el 26% y el 40% <input type="radio" name="cuatro" value="2"></label>
                    <label>Entre el 41 % y el 65% <input type="radio" name="cuatro" value="3"></label>
                    <label>Más del 65% <input type="radio" name="cuatro" value="4"></label>
                  </div>

                  <div class="btns">
                    <button type="button">Anterior</button>
                    <button class="active next" type="button">Siguiente</button>
                  </div>
                </fieldset>

                <fieldset id="preg5">
                  <div class="progress cinco"></div>

                  <h4>5 - ¿En cuá de los siguientes productos invertirías?</h4>

                  <div class="options">
                    <label>100% activos de renta ﬁja a corto plazo: menor rentabilidad y bajo riesgo. <input type="radio"
                        name="cinco" value="0" checked></label>
                    <label>60% activos de renta ﬁja a corto plazo y 40% activos de renta variable a mediano plazo: mayor
                      rentabilidad con mayor riesgo. <input type="radio" name="cinco" value="2"></label>
                    <label>40% activos de renta ﬁja a corto plazo y 60% activos de renta variable a mediano plazo <input
                        type="radio" name="cinco" value="4"></label>
                    <label>100% activos de renta variable a mediano o largo plazo <input type="radio" name="cinco"
                        value="6"></label>
                  </div>

                  <div class="btns">
                    <button type="button">Anterior</button>
                    <button class="active next" type="button">Siguiente</button>
                  </div>
                </fieldset>

                <fieldset id="preg6">
                  <div class="progress seis"></div>

                  <h4>6 - ¿Cuál es el plazo máximo que pensás mantener tus inversiones en el mercado de capitales?</h4>

                  <div class="options">
                    <label>Menos de 4 meses <input type="radio" name="seis" value="0" checked></label>
                    <label>Entre 4 y 12 meses <input type="radio" name="seis" value="1"></label>
                    <label>Mas de 12 meses <input type="radio" name="seis" value="3"></label>
                  </div>

                  <div class="btns">
                    <button type="button">Anterior</button>
                    <button class="active next" type="button">Siguiente</button>
                  </div>
                </fieldset>

                <fieldset id="preg7">
                  <div class="progress siete"></div>

                  <h4>7 - En el momento de realizar una inversión, ¿Cuál de las siguientes opciones preferís?</h4>

                  <div class="options">
                    <label>Preservar el dinero que se invirtió obteniendo una rentabilidad mínima sin arriesgar mi capital <input
                        type="radio" name="siete" value="0" checked></label>
                    <label>Tener una ganancia apenas superior a la de un plazo ﬁjo, aunque esté sujeta a una variación mínima del
                      mercado <input type="radio" name="siete" value="2"></label>
                    <label>Puedo asumir una pérdida del 10% si espero tener a mediano / largo plazo una mayor rentabilidad <input
                        type="radio" name="siete" value="4"></label>
                    <label>Obtener una ganancia signiﬁcativa, corriendo el riesgo de perder más de la mitad de la inversión
                      inicial <input type="radio" name="siete" value="6"></label>
                  </div>

                  <div class="btns">
                    <button type="button">Anterior</button>
                    <button class="active next" type="button">Siguiente</button>
                  </div>
                </fieldset>

                <fieldset id="preg8">
                  <div class="progress ocho"></div>

                  <h4>8 - En el supuesto de una baja importante en tu portafolio de inversiones, vos:</h4>

                  <div class="options">
                    <label>Rescatarías el total de tus activos <input type="radio" name="ocho" value="2" checked></label>
                    <label>Rescatarías parte del total de tus activos <input type="radio" name="ocho" value="4"></label>
                    <label>Mantendrías la totalidad de tus activos esperando que suba <input type="radio" name="ocho"
                        value="6"></label>
                    <label>Adicionarías más capital esperando comprar barato <input type="radio" name="ocho" value="8"></label>
                  </div>

                  <div class="btns">
                    <button type="button">Anterior</button>
                    <button class="active next" type="button">Siguiente</button>
                  </div>
                </fieldset>

                <fieldset id="preg9">
                  <div class="progress nueve"></div>

                  <h4>9 - ¿Estarías dispuesto a asumir una baja en el valor de tus activos?</h4>

                  <div class="options">
                    <label>De hasta el 15% <input type="radio" name="nueve" value="2" checked></label>
                    <label>Entre el 15 y 30% <input type="radio" name="nueve" value="4"></label>
                    <label>Más del 30% <input type="radio" name="nueve" value="6"></label>
                  </div>

                  <div class="btns">
                    <button type="button">Anterior</button>
                    <button class="active next" type="button">Finalizar</button>
                  </div>
                </fieldset>

                <fieldset id="datos">
                  <h4>Tu perfil es: <span></span></h4>

                  <p></p>


                </fieldset>

              </div>


              <div style="width:100%;height: 50px;">
                <div onclick="mover(4);" class="continuar btn_ctn" style="display: none">Continuar</div>
                <div onclick="mover(2);" class="continuar">Volver</div>
              </div>
            @endif
      </div>
    </section>
</div>
