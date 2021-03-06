<!-- LOGIN  MODAL -->
<div id="loginModal" tabindex="-1" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Anmelden</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{!! url('/login') !!}" class="loginForm" id="loginForm">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Anmelden</button>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Angemeldet bleiben
                        </label>
                        <a href="{!! url('password/reset') !!}" class="pull-right link">Password vergessen?</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p>Noch kein Account? </p>
                        <div class="text-center">
                            <a href="{!! url('/register') !!}" class="btn btn-secondary">Registrieren</a>
                        </div>
                     </div>
        </div>
    </div>
</div>
