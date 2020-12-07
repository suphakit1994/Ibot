<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
        :root {
  --purple: #1253bd;
  --purple2: #4285f4;
  --white: #f6d3fd;
  --height: 222px;
  --width: 350px;
  --font: "Overpass Mono", monospaced;
  --masterFont: "Raleway", sans-serif;
}

.credit-card {
  --heightCalc: - calc((var(--height) / 2) - 10px);
  --widthCalc: calc(var(--width) / 2);
  height: var(--height);
  width: var(--width);
  min-width: var(--width);
  background: linear-gradient(90deg, var(--purple), var(--purple2));
  border-radius: 10px;
  /* box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2); */
  margin: 10px auto;
  position: relative;
  /* filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.6)); */
}

.card__figure {
  position: relative;
  height: 40px;
  margin: 0;
}

.card__figure::after {
  content: "PLATINUM";
  font-size: 0.45em;
  letter-spacing: 4px;
  color: var(--white);
  position: absolute;
  width: 100%;
  text-align: center;
  bottom: calc(-100% - 15px);
}

.card__figure--logo {
  --widthLogo: 130px;
  width: var(--widthLogo);
  position: absolute;
  right: 50%;
  transform: translate(calc(var(--widthLogo) / 2), 20px);
}

.card__reader {
  width: 50px;
  height: 40px;
  background: radial-gradient(#d9a56c, #b18457);
  border-radius: 5px;
  position: absolute;
  top: 50%;
  transform: translate(33px, -40px);
  overflow: hidden;
}

.card__reader--risk {
  width: 50px;
  height: 40px;
  border-radius: 13px;
  background: transparent;
  border: 1px solid #666;
  position: absolute;
  z-index: 0;
}

.card__reader--risk-one {
  transform: translate(37px, 15px);
}

.card__reader--risk-two {
  transform: translate(15px, 30px);
}

.card__reader--risk-three {
  transform: translate(-37px, -15px);
}

.card__reader--risk-four {
  transform: translate(-15px, -30px);
}

.card__number {
  font-family: var(--font);
  font-size: 1.15em;
  font-weight: normal;
  color: var(--white);
  letter-spacing: 2.5px;
  text-align: center;
  margin-left: -20px;
  margin-top: 80px;
  z-index: 1;
  position: relative;
  filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
}

.card__number::before,
.card__number::after {
  font-family: Arial;
  color: rgba(0, 0, 0, 0.4);
  font-size: 0.4em;
  position: absolute;
  letter-spacing: 0px;
}

.card__number::before {
  content: "5032";
  transform: translate(15px, 22px);
}

.card__number::after {
  content: "Valid thru";
  width: 80px;
  transform: translate(-215px, 22px);
}

.card__dates {
  position: absolute;
  width: 40%;
  font-size: .9em;
  display: flex;
  justify-content: space-between;
  color: var(--white);
  font-family: var(--font);
  bottom: 22%;
  transform: translate(60px, 0px);
}

.card__dates span {
  filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
}

.card__name {
  font-family: var(--font);
  font-size: .9em;
  font-weight: normal;
  color: var(--white);
  letter-spacing: 2.5px;
  transform: translate(35px, 25px);
  position: relative;
  filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
}

.card__flag {
  right: 30px;
  top: 45%;
  border-radius: 25px;
  transform: translate(0, -28px);
  position: absolute;
  height: 110px;
  width: 80px;
  border: 1px solid rgba(0, 0, 0, 0.3);
}

.card__flag--globe {
  --margin: 5px;
  width: calc(100% - (var(--margin) * 2));
  background-color: #b7b2b8;
  height: 50%;
  border-radius: 20px;
  margin: var(--margin);
  background: repeating-linear-gradient(
    0deg,
    #dbd1dc,
    #dbd1dc 5px,
    #b2aab5 7px,
    #b2aab5 5px
  );
}

.card__flag--globe::after,
.card__flag--globe::before {
  content: "\f0ac";
  font-family: FontAwesome;
  color: rgba(0, 0, 0, 0.2);
  font-size: 3em;
  top: 6px;
  left: 2px;
  position: absolute;
}

.card__flag--globe::after {
  transform: translateX(10px);
}

.card__flag--globe::before {
  transform: translateX(25px);
}

.card__flag--red {
  position: absolute;
  left: 5px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #ce0e1d;
}

.card__flag--yellow {
  position: absolute;
  right: 5px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #e39833;
}

.card__flag--yellow::after {
  content: "MasterCard";
  position: absolute;
  font-size: 0.7em;
  top: 50%;
  transform: translate(-25px, -7px);
  font-family: var(--masterFont);
  font-style: italic;
  font-weight: 800;
  color: var(--white);
  filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.5));
}

.forwardslash {
  float: left;
  position: relative;
  padding-top: 8px;
  padding-left: .5rem;
  padding-right: .5rem;
}
.mx-05 {
  margin-left: .125rem;
  margin-right: .125rem;
}
.modal-backdrop {
    position: inherit !IMPORTANT;
}
label {
  font-weight: 400;
}
    </style>
</head>
<body>
    <!-- <div class="container">
        <div class="row" style="text-align: center; font-weight:bold; padding-bottom:5%; padding-top:2%;">
            <h1>Member</h1>
            <h2>(Developer)</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="border: 2px; width:100%; height:100%; padding:5%; border-radius:2%;">
                    <img src="../images/images.png" alt="" style="width:100%; height:100%; padding-top:2%;">
                    <div class="content">
                        <p>Name :</p>
                        <p>Age :</p>
                        <p>Role :</p>
                        <p>Birthday :</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border: 2px; width:100%; height:100%; padding:5%; border-radius:2%;">
                    <img src="../images/images.png" alt="" style="width:100%; height:100%; padding-top:2%;">
                    <div class="content">
                        <p>Name :</p>
                        <p>Age :</p>
                        <p>Role :</p>
                        <p>Birthday :</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border: 2px; width:100%; height:100%; padding:5%; border-radius:2%;">
                    <img src="../images/images.png" alt="" style="width:100%; height:100%; padding-top:2%;">
                    <div class="content">
                        <p>Name :</p>
                        <p>Age :</p>
                        <p>Role :</p>
                        <p>Birthday :</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border: 2px; width:100%; height:100%; padding:5%; border-radius:2%;">
                    <img src="../images/images.png" alt="" style="width:100%; height:100%; padding-top:2%;">
                    <div class="content">
                        <p>Name :</p>
                        <p>Age :</p>
                        <p>Role :</p>
                        <p>Birthday :</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 5%; padding-bottom:5%;">
            <div class="col-md-3">
                <div class="card" style="border: 2px; width:100%; height:100%; padding:5%; border-radius:2%;">
                    <img src="../images/images.png" alt="" style="width:100%; height:100%; padding-top:2%;">
                    <div class="content">
                        <p>Name :</p>
                        <p>Age :</p>
                        <p>Role :</p>
                        <p>Birthday :</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border: 2px; width:100%; height:100%; padding:5%; border-radius:2%;">
                    <img src="../images/images.png" alt="" style="width:100%; height:100%; padding-top:2%;">
                    <div class="content">
                        <p>Name :</p>
                        <p>Age :</p>
                        <p>Role :</p>
                        <p>Birthday :</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border: 2px; width:100%; height:100%; padding:5%; border-radius:2%;">
                    <img src="../images/images.png" alt="" style="width:100%; height:100%; padding-top:2%;">
                    <div class="content">
                        <p>Name :</p>
                        <p>Age :</p>
                        <p>Role :</p>
                        <p>Birthday :</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border: 2px; width:100%; height:100%; padding:5%; border-radius:2%;">
                    <img src="../images/images.png" alt="" style="width:100%; height:100%; padding-top:2%;">
                    <div class="content">
                        <p>Name :</p>
                        <p>Age :</p>
                        <p>Role :</p>
                        <p>Birthday :</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=""></div>
    </div> -->



    <div class="container">
  
  <!-- Central Modal Form-->
  <div class="modal fade" id="modalCreditCardForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <h4 class="my-1"><strong>Pay Invoice #0675 with Credit Card</strong></h4>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">

          <div class="credit-card z-depth-1-half mb-4">
            <figure class="card__figure">
              <img src="https://conta.nubank.com.br/images/nu-white.png" class="card__figure--logo"></img>
            </figure>
            <div class="card__reader">
              <div class="card__reader--risk card__reader--risk-one"></div>
              <div class="card__reader--risk card__reader--risk-two"></div>
                <div class="card__reader--risk card__reader--risk-three"></div>
              <div class="card__reader--risk card__reader--risk-four"></div>
            </div>
            <p class="card__number">0133 4567 8901 2345</p>
            <div class="card__dates">
              <span class="card__dates--first">03/16</span>
              <span class="card__dates--second">03/21</span>
            </div>
            <p class="card__name">Elisabeth Maroon<p>
            <div class="card__flag">
              <div class="card__flag--globe"></div>
              <div class="card__flag--red"></div>
                <div class="card__flag--yellow"></div>
            </div>
          </div>

          <form action="">
            <div class="row">
              <div class="col-md-6">
                <!-- Default input -->
                <label for="exampleForm3" class="mb-1 mt-3">Card number</label>
                <input type="text" id="exampleForm3" class="form-control" value="0123 4567 8901 2345">
              </div>
              <div class="col-md-6">
                <label for="exampleForm2" class="mb-1 mt-3">Expiration (MM/YYYY)</label>
                <div class="d-flex justify-content-between">
                  <select class="browser-default custom-select">
                    <option selected>Open this select menu</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3" selected>3</option>
                  </select>
                  <div class="forwardslash">/</div>
                  <select class="browser-default custom-select">
                    <option>Open this select menu</option>
                    <option value="1">2019</option>
                    <option value="2">2020</option>
                    <option value="3" selected>2021</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-6">
                <!-- Default input -->
                <label for="exampleForm2" class="mb-1 mt-3">Name on card</label>
                <input type="text" id="exampleForm2" class="form-control" value="Elisabeth Maroon">
              </div>
              <div class="col-md-6">
                <label for="basic-addon3" class="mb-1 mt-3">Card Code CVC</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" aria-label="Card Code CVC" value="123" aria-describedby="basic-addon3">
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-credit-card mx-05"></i></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <p class="font-weight-bold float-right my-2">Tip (optional): </p>
              </div>
              <div class="col-md-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="95643">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <p class="font-weight-bold float-right my-2">Invoice Amount: </p>
              </div>
              <div class="col-md-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">$</span>
                  </div>
                  <input type="text" class="form-control" aria-label="730" value="730" aria-describedby="basic-addon1" disabled>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <p class="font-weight-bold float-right my-2">Total: </p>
              </div>
              <div class="col-md-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">$</span>
                  </div>
                  <input type="text" class="form-control" aria-label="150640" value="150640" aria-describedby="basic-addon2" disabled>
                </div>
              </div>
            </div>

          </form>

        </div>

        <!--Footer-->
        <div class="modal-footer float-right">
          <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Submit Payment of $150640</button>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- Central Modal Form-->
  
  <div class="text-center my-5">
	<p><strong>Click on the button to see an effect.</strong></p>
  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreditCardForm">Large</button>
  </div>

</div>
</body>
</html>