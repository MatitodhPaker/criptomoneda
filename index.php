<!doctype html>
<html lang="en">
  <head>
    <title>cripto moneda</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid">
        <div class="row mt-3">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
          <h1>Calculo de precio de cripto moneda</h1>
          <div class="row mt-2">
            <div class="col">
              <form method="post" onsubmit="return calcular()" id="frmcmoneda">
                <div class="form-group">
                  <label for="monto">Monto a gastar</label>
                  <div class="row">
                  <div class="col-sm-1">$</div>
                  <div class="col-sm-8"><input type="number" id="monto" class="form-control" placeholder="500" required pattern="[0-9]+" min="1" max="800000"></div>
                  <div class="col">mxn</div>
                  </div>
                  <small id="helpId" class="text-muted">ingrese la cantidad deseada a cambiar</small>
                </div>
                <div class="form-group">
                  <label for="radios">Moneda a comprar:</label>
                  <div class="row">
                    <div class="col">
                      <label for="bitcoin">Bitcoin</label>
                      <input type="radio" name="moneda" id="bitcoin" value="bitcoin">
                      <br>
                      <label for="mana">Mana</label>
                      <input type="radio" name="moneda" id="mana" value="mana">
                      <br>
                      <label for="bat">Bat</label>
                      <input type="radio" name="moneda" id="bat" value="bat">
                    </div>
                    <div class="col">
                      <label for="etheriu">Etherium</label>
                      <input type="radio" name="moneda" id="etherium" value="etherium">
                      <br>
                      <label for="xrp">Xrp</label>
                      <input type="radio" name="moneda" id="xrp" value="xrp">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                    <button class="btn btn-info btn-block">cobrar</button>
                    </div>
                    <div class="col">
                      <span class="btn btn-danger btn-block" onclick="limpiar()">limpiar</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label>Tus monedas son</label>
                      <div class="row">
                        <div class="col-sm-8"><input type="number" id="total" class="form-control" disabled></div>
                        <div class="col" id="cmoneda"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<script>
  function calcular(){
    /* alert("holaa mundo"); */
    let monto=parseInt($('#monto').val());
    let moneda=$('input:radio[name=moneda]:checked').val();
    if (moneda==undefined) {
      alert('selecciona una moneda');
      return false;
    }
    let total=calculartotal(monto, moneda);
    $('#total').val(total);
    return false;
  }
  function calculartotal(monto, moneda) {
    let total=0;
    switch (moneda) {
      case 'bitcoin':
        total=monto/800000;
        $('#cmoneda').text(moneda);
        break;
      case 'mana':
        total=monto/24;
        $('#cmoneda').text(moneda);
        break;
      case 'bat':
        total=monto/21;
        $('#cmoneda').text(moneda);
        break;
      case 'etherium':
        total=monto/70000;
        $('#cmoneda').text(moneda);
        break;
      case 'xrp':
        total=monto/30;
        $('#cmoneda').text(moneda);
        break;
      default:
        total=0.0; 
        break;
    }
    return total;
  }
  function limpiar() {
    $('#frmcmoneda')[0].reset();
    $('#cmoneda').text('');
  }
</script>