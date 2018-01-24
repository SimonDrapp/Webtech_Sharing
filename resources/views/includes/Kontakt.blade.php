
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="myModalLabel">Kontaktformular</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('postNachricht') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Vorname" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nachname" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Telefonnummer">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Anliegen" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Ihre Nachricht..."
                                  maxlength="140" rows="7" required></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Maximale Anzahl an Zeichen erreicht.</p></span>
                        <span id="status"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="btnSubmit" name="submit" class="btn btn-primary" value="Abschicken">
                        </input>
                  <!--      <a href="/NachrichtenAnzeigen">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a> -->
                        <!--<span id="status"></span>-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



