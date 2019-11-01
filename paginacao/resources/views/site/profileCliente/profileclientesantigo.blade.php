<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body {
    background-color: #e9ebee;
}

.card {
    margin-top: 1em;
}

/* IMG displaying */
.person-card {
    margin-top: 5em;
    padding-top: 5em;
}
.person-card .card-title{
    text-align: center;
}
.person-card .person-img{
    width: 10em;
    position: absolute;
    top: -5em;
    left: 50%;
    margin-left: -5em;
    border-radius: 100%;
    overflow: hidden;
    background-color: white;
}

</style>
<!--
    Realised by Thibault Leveau
    https://www.linkedin.com/in/thibault-leveau-a76923ba/
-->
<div class="container" style="margin-top: 1em;">
    <!-- Sign up form -->
    <form>
        <!-- Sign up card -->
        <div class="card person-card">
            <div class="card-body">
                <!-- Sex image -->
                <img id="img_sex" class="person-img"
                    src="{{ url('storage/users/'.auth()->guard('cliente')-> user()->image) }}"
                   alt="{{ auth()->guard('cliente')-> user()->image }}"  style= "max-width: 170px;">
                    <label for="exampleFormControlFile1">Selecione uma imagem</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1"
                    name="image">
                <h2 id="who_message" class="card-title">Seus Dados Cadastrados:</h2>
                <!-- First row (on medium screen) -->
                <div class="row">
                    <div class="form-group col-md-2">
                        <select id="input_sex" class="form-control">
                            <option value="Mr.">Mr.</option>
                            <option value="Ms.">Ms.</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <input id="first_name" type="text" class="form-control" placeholder="First name">
                        <div id="first_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <input id="last_name" type="text" class="form-control" placeholder="Last name">
                        <div id="last_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6" style="padding=0.5em;">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">How to contact you ?</h2>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="example@gmail.com" required>
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Phone number</label>
                            <input type="text" class="form-control" id="tel" placeholder="+33 6 99 99 99 99" required>
                            <div class="phone-feedback">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">Securize your account !</h2>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Pasword</label>
                            <input type="password" class="form-control" id="password" placeholder="Type your password" required>
                            <div class="password-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_conf" class="col-form-label">Pasword (confirm)</label>
                            <input type="password" class="form-control" id="password_conf" placeholder="Type your password again" required>
                            <div class="password_conf-feedback">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 1em;">
            <button type="button" class="btn btn-primary btn-lg btn-block">Sign up !</button>
        </div>
        </form>
</div>