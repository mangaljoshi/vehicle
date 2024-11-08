<div id="step-13" style="display:none;">
      <section class="form-container">
        <!-- ngView: -->
        <div class="center-block form-wrap ng-scope" data-ng-view="" data-page-unload="" data-check-model="" autoscroll="" style="">
            <div class="anim-wrap ng-scope">
                <div class="page-header">
                    <div class="row">
                        <h3>Where do you live?</h3>
                        <p class="text-center">(Policy rates vary depending on where your home is located)</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <div class="row">
                        <form
                            name="vm.currentAddressForm"
                            data-form-name="vm.currentAddressForm"
                            data-next-btn=""
                            data-current-home-address=""
                            data-enter-btn=""
                            novalidate=""
                            class="ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength"
                        >
                            <div class="form-group">
                                <label for="address">Street Address</label>
                                <input
                                    name="address"
                                    id="address"
                                    class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength"
                                    type="text"
                                    minlength="5"
                                    data-ng-pattern="/\s/"
                                    data-ng-model="vm.formData.currentAddress.streetAddress"
                                    placeholder="Please enter a Street Address"
                                    required=""
                                    fdprocessedid="cv4b7u"
                                />
                                <p class="error-msg" data-ng-message="pattern">Did you forget to put a space in your address?</p>
                                <p class="error-msg">Please Enter a Valid Address</p>
                            </div>
                            <p class="form-group">
                                <label for="zipCode">Zip Code</label>
                                <input
                                    id="zipCode"
                                    name="zipCode"
                                    class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength"
                                    pattern="\d*"
                                    data-ng-pattern="/^(\d{5}(-\d{4})?|[A-Z]\d[A-Z] *\d[A-Z]\d)$/"
                                    minlength="5"
                                    maxlength="5"
                                    data-ng-model="vm.formData.currentAddress.zip"
                                    placeholder="Zip Code"
                                    required=""
                                    fdprocessedid="ogeosq"
                                />
                            </p>
                            <p class="error-msg">Please Enter a Valid Zip Code</p>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 text-center ng-scope">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                        <a class="btn btn-next" onclick="showStep14()">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
