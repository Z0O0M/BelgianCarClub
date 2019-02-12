<div class="section">
    <div class="container">
        <div class="row">
            <h3 class="center">Summer Meet '19 By BelgianCarClub</h3>
            <p style="color:red;">* Required</p>
            <form id="event" class="col s12" action="<?php echo site_url("pages/view/event_confirm") ?>" onsubmit="myFunction()" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" name="first_name" class="validate" required>
                        <label for="first_name">First Name <span style="color:red;">*</span></label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" name="last_name" class="validate" required>
                        <label for="last_name">Last Name <span style="color:red;">*</span></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate" required>
                        <label for="email">Email <span style="color:red;">*</span></label>
                    </div>
                </div>
                <div>
                    <p>
                        <label>
                            <input id="attend" class="with-gap" name="group1" type="radio" checked />
                            <span>Yes, I will attend the event</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="notattend" class="with-gap" name="group1" type="radio" />
                            <span>No, I will not attend the event</span>
                        </label>
                    </p>
                </div>
                <div id="section1" style="display: visible;">
                    <h5 style="margin-top: 50px;">Please select what fits best for you:</h5>
                    <p>
                        <label>
                            <input id="car" class="with-gap" name="group2" type="radio" />
                            <span>I am bringing my car to the event</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="photographer" class="with-gap" name="group2" type="radio" />
                            <span>I am a photographer and will be taking pictures at the event</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="visit" class="with-gap" name="group2" type="radio" checked />
                            <span>I am visiting the event</span>
                        </label>
                    </p>
                    <div id="section2" style="display: none;">
                        <h5 style="margin-top: 50px;">Car information</h5>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="brand_car" type="text" class="validate">
                                <label for="brand_car">Brand of your car <span style="color:red;">*</span></label>
                            </div>
                            <div class="input-field col s6">
                                <input id="model_car" type="text" class="validate">
                                <label for="model_car">Model of your car <span style="color:red;">*</span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="club" type="email" class="validate">
                                <label for="club">In case you are a club member, what is its name?</label>
                            </div>
                        </div>
                    </div>
                    <div id="section3" style="display: none;">
                        <h5 style="margin-top: 50px;">Photographer information</h5>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="instagram" type="text" class="validate">
                                <label for="instagram">Instagram name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="facebook" type="text" class="validate">
                                <label for="facebook">Facebook name/page</label>
                            </div>
                        </div>
                    </div>
                    <div id="section4">
                        <h5 style="margin-top: 50px;">Would you like to receive information about future events via your e-mail?</h5>
                        <p>
                            <label>
                                <input id="receive_email" class="with-gap" name="group3" type="radio" checked />
                                <span>Yes</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group3" type="radio" />
                                <span>No</span>
                            </label>
                        </p>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-top: 25px;">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        var attend = null,
            role = null,
            receive_email = null,
            instagram = null,
            facebook = null,
            brand_car = null,
            model_car = null,
            club = null;
        if (document.getElementById("attend").checked) attend = 1;
        else attend = 0;
        if (document.getElementById("section1").style.display != "hidden") {
            if (document.getElementById("car").checked) {
                role = 0;
                brand_car = document.getElementById('brand_car').value;
                model_car = document.getElementById('model_car').value;
                club = document.getElementById('club').value;
            }
            if (document.getElementById("photographer").checked) {
                role = 1;
                instagram = document.getElementById('instagram').value;
                facebook = document.getElementById('facebook').value;
            }
            if (document.getElementById("visit").checked) role = 2;
            if (document.getElementById("receive_email").checked) receive_email = 1;
            else receive_email = 0;
        }
        var info = [attend, document.getElementById('first_name').value, document.getElementById('last_name').value, document.getElementById('email').value, role, receive_email, instagram, facebook, brand_car, model_car, club];
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('event/confirm');?>",
            data: {
                eventInfo: info
            }
        });
    }

</script>
<script src="../../../assets/js/form_changer.js"></script>
