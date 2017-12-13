
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="myModalLabel">Contact Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/BenachrichtigungSpeichern">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Your last name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number (optional)">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Type your message here..."
                                  maxlength="140" rows="7" required></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                        <span id="status"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="btnSubmit" name="submit" class="btn btn-primary" value="Submit Form">
                        </input>
                        <a href="/NachrichtenAnzeigen">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a>
                        <!--<span id="status"></span>-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



