 <div class="modal bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" onclick=" $('#myModal').modal('hide');" data-dismiss="modal" aria-hidden="true">&times;</button>
                <br>
                <div class="bs-example bs-example-tabs">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#signin" data-toggle="tab">Sign In</a>
                        </li>
                        <li class=""><a href="#signup" data-toggle="tab">Register</a>
                        </li>
                        <li class=""><a href="#why" data-toggle="tab">Why?</a>
                        </li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in" id="why">
                            <p>We need this information for showing you personalized offers, deals and for sharing our newsletter.</p>
                            <p>
                                <br> Please contact
                                <a href="mailto:contact@dealplatter.com">contact@dealplatter.com</a> for any other inquiries.</p>

                        </div>
                        <div class="tab-pane fade active in" id="signin">
                            <fieldset>
                                <div id='social-icons-conatainer'>


                                    <div class='modal-body-left'>
                                        <!-- Sign In Form -->
                                        <!-- Text input-->
                                        <div id="errmsg" style="color:red;"> </div>
                                        <form name="form_user_login" id="form_user_login" method="post" action="">
                                            <div class="control-group">
                                                <label class="control-label" for="userid">Email:</label>
                                                <div class="controls">
                                                    <input id="user_email" name="user_email" type="email" class="form-control input-medium" placeholder="Enter email" required>
                                                </div>
                                            </div>

                                            <!-- Password input-->
                                            <div class="control-group">
                                                <label class="control-label" for="passwordinput">Password:</label>
                                                <div class="controls">
                                                    <input id="user_paswd" name="user_paswd" class="form-control input-medium" type="password" placeholder="Enter password" required>
                                                </div>
                                            </div>

                                            <!-- Button -->
                                            <div class="control-group">
                                                <label class="control-label"></label>
                                                <div class="controls">
                                                    <input type="submit" id="sub" name="sub" class="btn btn-success" value="Sign In">
                                                </div>
                                            </div>
                                            <a href="javascript:;" onclick=" $('#myModal').modal('hide');" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
                                        </form>
                                    </div>


                                    <div class='modal-body-right'>
                                        <div class="modal-social-icons">

                                            <a href="javascript:void(0);" onClick='window.open("https://www.facebook.com/dialog/oauth?client_id=1091025577637268&redirect_uri=http%3A%2F%2Fwww.dealplatter.com%2Findex.php%2Flogin%2Ffb_login%2F%3Fpage_url%3Dhttp%3A%2F%2Fwww.dealplatter.com%2F&state=22f07b37b6dc7d6edc6fa6a15e4d8d9c&scope=email","gplus_login","width=500,height=600");' class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </a>
                                            <a href="javascript:void(0);" onClick='window.open("https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=http%3A%2F%2Fwww.dealplatter.com%2Findex.php%2Flogin%2Fgplus_login%2F&client_id=540172835017-c6a1ieift20mnrphh704634dofls3gb1.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&approval_prompt=force","gplus_login","width=500,height=600");' class="btn btn-default google"> <i class="fa fa-google-plus modal-icons"></i> Sign In with Google </a>

                                        </div>
                                    </div>
                                    <div id='center-line'> OR </div>


                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane fade" id="signup">
                            <form class="form-horizontal" name="form_user_reg" id="form_user_reg" method="post" action="">
                                <fieldset>
                                    <!-- Sign Up Form -->
                                    <!-- Text input-->
                                    <div id="msgregister" style="color:red;"> </div>
                                    <div class="control-group">
                                        <label class="control-label" for="Email">Name:</label>
                                        <div class="controls">
                                            <input id="reg_name" name="reg_name" class="form-control input-large" type="text" placeholder="Enter name" required>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="Email">Email:</label>
                                        <div class="controls">
                                            <input id="reg_email" name="reg_email" class="form-control input-large" type="email" placeholder="Enter email" required>
                                        </div>
                                    </div>


                                    <!-- Password input-->
                                    <div class="control-group">
                                        <label class="control-label" for="password">Password:</label>
                                        <div class="controls">
                                            <input id="reg_paswd" name="reg_paswd" class="form-control input-large" type="password" placeholder="Enter password" required>
                                            <em>Min 5 Characters</em>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="reenterpassword">Re-Enter Password:</label>
                                        <div class="controls">
                                            <input id="reg_re_paswd" name="reg_re_paswd" class="form-control input-large" type="password" placeholder="Retype password" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="reenterpassword">Mobile:</label>
                                        <div class="controls">
                                            <input id="reg_mobile" name="reg_mobile" class="form-control input-large" type="number" placeholder="Enter mobile no" maxlength="10">
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="control-group">
                                        <label class="control-label" for="confirmsignup"></label>
                                        <div class="controls">
                                            <input type="submit" id="sub" name="sub" class="btn btn-success" value="Sign Up">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <form name="form_forget_pass" id="form_forget_pass" method="post" action="">
        <div class="modal fade forget-modal" tabindex="-1" role="dialog" id="forget_paswd_modal" aria-labelledby="myForgetModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header fpheader">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&#215;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h3 class="modal-title">Recovery password</h3>
                        <p>You can reset your password here.</p>
                    </div>
                    <div id="msgforgetpwd" style="color:red;"> </div>
                    <div class="modal-body fpform">
                        <p>Type your email account</p>
                        <input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-custom">Recovery</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </form>