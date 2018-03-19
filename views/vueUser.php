<?php $this->titre = "Jean Forteroche"; ?>

<div class="limiter">
    <div class="container-login100">
        <p>Cette page est réservée à l'administrateur du blog de Jean Forteroche.</p>
        <p>Veuillez vous identifier pour vous connecter à l'administration du site :</p>

        <hr/>
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="views/img/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="index.php?action=connexion" method="post">
                <span class="login100-form-title">
						Member Login
					</span>

                <div class="wrap-input100 validate-input">
                    <input type="text" name="login" placeholder="login" />
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-user-circle" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
							Se connecter
						</button>
                </div>


            </form>
        </div>
    </div>
</div>
