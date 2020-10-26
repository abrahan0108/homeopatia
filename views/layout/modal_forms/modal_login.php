<!-- modal for login system homeopathy-->
<div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modal" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?=base_url?>User/login" method="post">
            <div class="modal-content">
                <div class="modal-header modal-h-login">
                    <h5 class="modal-title" id="title">LOGIN</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email-address">Usuario</label>
                        <input type="email" class="form-control" name="email" id="input-user" aria-describedby="emailHelp"> <br>
                    </div>
                    <div class="form-group">
                        <label for="user-password">Password</label>
                        <input type="password" class="form-control" name="password" id="input-passwword">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-close">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
            </div>
        </form>
    </div>
</div>