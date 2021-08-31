<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main>

    <section class="section contact">
        <h3 class="center-align black-text">Join us</h3>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l6">
                    <img class="responsive-img" src="imgs/contact-img.jpg" />
                </div>
                <div class="col s12 m12 l6">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="last_name" type="text" class="validate" />
                                <label for="last_name">Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate" />
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="country" type="text" class="validate" />
                                <label for="country">Country</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Tell us about you</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <label>
                                    <input type="checkbox" />
                                    <span>I want to receive WBC Cares upcoming events</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light left" type="button" name="action">
                                    send now
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php incluirTemplate('ambassador'); ?>
</main>

<?php

incluirTemplate('footer');
?>