<div id="step-14" style="display:none;">
     <section class="form-container">
        <!-- ngView: -->
        <div class="center-block form-wrap ng-scope" data-ng-view="" data-page-unload="" data-check-model="" autoscroll="" style="">
            <div class="anim-wrap ng-scope">
                <div class="page-header col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                    <div class="row">
                        <h3 class="headline">Your rates are ready to view!</h3>
                        <p class="text-center">Enter your information for personalized results</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                    <div class="row">
                        <form
                            class="clearfix ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-minlength ng-valid-email ng-valid-pattern ng-invalid-telephone ng-valid-maxlength"
                            id="verifyInfoForm"
                            name="vm.verifyInfoForm"
                            data-form-name="vm.verifyInfoForm"
                            novalidate=""
                            data-next-btn=""
                            data-enter-btn=""
                            data-active-prospect=""
                        >
                            <input type="hidden" id="leadid_token" name="universal_leadid" autocomplete="off" value="F77E728B-4B8E-8EA4-C0AB-2F8B1DDEF57B" />
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input
                                    name="firstName"
                                    id="firstName"
                                    class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength"
                                    type="text"
                                    placeholder="First Name"
                                    data-ng-model="vm.formData.firstName"
                                    minlength="2"
                                    required=""
                                    fdprocessedid="bplqr"
                                />
                                <p class="error-msg">Please enter a valid first name</p>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input
                                    name="lastName"
                                    id="lastName"
                                    class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength"
                                    type="text"
                                    placeholder="Last Name"
                                    data-ng-model="vm.formData.lastName"
                                    minlength="2"
                                    required=""
                                    fdprocessedid="hys92"
                                />
                                <p class="error-msg">Please enter a valid last name</p>
                            </div>
                            <div class="form-group" data-ng-class="{'has-error': vm.verifyInfoForm.eMail.$dirty &amp;&amp; vm.verifyInfoForm.eMail.$invalid }">
                                <label for="email">E-mail</label>
                                <input
                                    name="email"
                                    id="email"
                                    class="form-control ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required ng-valid-pattern"
                                    type="email"
                                    placeholder="E-Mail"
                                    data-strip-spaces=""
                                    required=""
                                    data-ng-pattern="/^(([^<>()\[\]\\.,;:\s@\x22]+(\.[^<>()\[\]\\.,;:\s@\x22]+)*)|(\x22.+\x22))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/"
                                    data-ng-model="vm.formData.email"
                                    fdprocessedid="hukhz"
                                />
                                <p class="error-msg">Please enter a valid e-mail address</p>
                            </div>
                            <div class="form-group" data-ng-class="{'has-error': vm.verifyInfoForm.tel.$dirty &amp;&amp; vm.verifyInfoForm.tel.$invalid }">
                                <label for="phone">Phone</label>
                                <input
                                    id="phone"
                                    name="phone"
                                    class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-telephone ng-invalid-required ng-valid-minlength ng-valid-maxlength"
                                    type="tel"
                                    placeholder="Phone Number"
                                    maxlength="10"
                                    minlength="10"
                                    required=""
                                    data-tel-format=""
                                    data-tel-validator=""
                                    data-ng-model="vm.formData.phone"
                                    fdprocessedid="qm0fk8"
                                />
                                <p class="error-msg">Please enter a valid phone number</p>
                            </div>
                            <div class="col-xs-12 text-center">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                        <a class="btn btn-next btn-submit" onclick="submitAndRedirect()"> Submit</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ngInclude: '/disclosures/tcpa-generic.html' -->
                            <div data-ng-include="'/disclosures/tcpa-generic.html'" class="ng-scope" style="">
                                <div class="col-xs-12 ng-scope">
                                    <div class="privacy well">
                                        <label>
                                            <input type="hidden" name="leadid_tcpa_disclosure" id="leadid_tcpa_disclosure" autocomplete="off" />We take your privacy seriously. By clicking the "Submit" button above, I give my express written
                                            consent by electronic signature to receive marketing communications via live agent, automatic telephone dialing system (calls or SMS texts), artificial/pre-recorded message, or email from this website
                                            and/or <a href="/partners" target="_blank">partner</a> companies or their agents at the landline or wireless number I provided, even if my number/email is currently listed on any federal, state, or
                                            company Do Not Call/Do Not Email list. Carrier message and data rates may apply. I understand that my consent is not required as a condition of purchasing any goods or services and that I may revoke
                                            my consent at any time. I also acknowledge that I am at least 18 years of age and I have read and agree to this website's
                                            <a data-toggle="modal" data-target="#privacy-modal">Privacy Policy and Terms and Conditions</a>.
                                        </label>
                                    </div>
                                </div>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>