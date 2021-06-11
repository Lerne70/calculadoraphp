
<div class="container">
  <div class="abs-center">
    <form method="GET" class="border p-3 form text-center">
    <h3>Calculdora</h3>
    <div class="row mb-3">
        <div class="col">
            <label>Ingrese un número</label>
            <input type="number" id="numero1" name="numero1" class="form-control" placeholder="Primer número" aria-label="Primer número" required step="0.01">
           
        </div>
        <div class="col">
            <label>Ingrese un número</label>
            <input type="number" id="numero2" name="numero2" class="form-control" placeholder="Segundo número" aria-label="Segundo número" required step="0.01">
        </div>
    </div>
      <div class="col-md-12 mb-3 text-center">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="operaciones" id="suma" value="suma" required>
            <label class="form-check-label" for="suma">Sumar</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="operaciones" id="resta" value="resta" required>
            <label class="form-check-label" for="resta">Restar</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="operaciones" id="multiplicacion" value="multiplicación" required>
            <label class="form-check-label" for="multiplicacion">Multiplicación</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="operaciones" id="division" value="división" required>
            <label class="form-check-label" for="division">División</label>
        </div>
    </div>
      <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
  </div>
</div>