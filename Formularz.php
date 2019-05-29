<?php include('header.php') ?>
  <div class="py-5 text-center">

    <img class="d-block mx-auto mb-4" src="https://st.depositphotos.com/1004529/3821/i/950/depositphotos_38218325-stock-photo-bodybuilder.jpg" alt="" width="72" height="72">
	
    <h2>Własny makrocykl!</h2>
    <p class="lead">Wypełnij wszystkie puste rubryki, a następnie kliknij utwórz, zostanie dla Ciebie wygenerwoany własny makrocykl. Możesz wybrać od któego mikrocyklu chcesz rozpocząć.</p>
  </div>


    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Niezbędne dane</h4>
      <form action="wyniki.php" method="get"  class="needs-validation">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Waga</label>
            <input type="number" pattern="[0-9]+([\.][0-9]+)?" step="0.1" class="form-control" name="weight" placeholder="" required>
            <div class="invalid-feedback">
              Wpisz swoją wage.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">BMI np 20.4</label>
            <input type="number" class="form-control" pattern="[0-9]+([\.][0-9]+)?" step="0.1" name="bmi" placeholder="" required="">
            <div class="invalid-feedback">
              
            </div>
          </div>
        </div>

       
        <hr class="mb-4">
		<h4 class="mb-3">Od której fazy chcesz rozpocząć?</h4>
		<div class="custom-control custom-radio">
          <input type="radio" name="phase" value="first" class="custom-control-input" id="1faza">
          <label class="custom-control-label" for="1faza">Faza Budowania Siły 4-6 tygodni</label>
        </div>
        <div class="custom-control custom-radio">
          
		  <input type="radio" name="phase" value="second" class="custom-control-input" id="1faza">
          <label class="custom-control-label" for="1faza">Faza Masy 4-6 tygodni</label>
        </div>
        <div class="custom-control custom-radio">
          <input type="radio"  name="phase" value="third" class="custom-control-input" id="3faza">
          <label class="custom-control-label" for="3faza">Faza rzeźbienia 4-6 tygodni </label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Częstotliwość</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="raz" name="frequency" value="one" type="radio" class="custom-control-input" checked="checked" required="">
            <label class="custom-control-label" for="raz"> raz w tygodniu</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="2razy" name="frequency" value="two" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="2razy">2 razy w tygodniu</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="3razy" name="frequency" value="three" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="3razy">3 razy w tygodniu</label>
          </div>
        </div>
		
		
 
		</div>
        
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Wygeneruj makrocykl</button>
      </form>
    </div>
 
   <?php include('footer.php') ?>
