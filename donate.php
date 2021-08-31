<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main>
    <section class="section donate">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 center-align">
                    <img class="responsive-img" src="imgs/donate-img-2.jpg" width="50%" />
                </div>
                <div class="col s12 m12 l12">
                    <h3 class="center-align black-text">Donate now</h3>
                    <form class="col s12">
                        <div class="row left-align">
                            <div class="col s12">
                                <h6 class="titulo-donate">CHOOSE OR SELECT YOUR AMOUNT</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="value" type="text" class="validate" />
                                <label for="value">Insert value</label>
                            </div>
                        </div>
                        <div class="row left-align">
                            <div class="col s12">
                                <h6 class="titulo-donate">YOU ARE DONATING AS:</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" type="text" class="validate" />
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate" />
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="email" type="email" class="validate" />
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="address" type="text" class="validate" />
                                <label for="address">Address</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="city" type="text" class="validate" />
                                <label for="city">City</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="country" type="text" class="validate" />
                                <label for="country">Country</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Message</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6 l6 xl6">
                                <button class="btn waves-effect waves-light" type="button" name="action">
                                    Donate with Paypal
                                </button>
                            </div>
                            <div class="col s12 m6 l6 xl6">
                                <img class="responsive-img" width="50%" src="imgs/paypal.png" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php

incluirTemplate('footer');
?>