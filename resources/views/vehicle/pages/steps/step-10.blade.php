<div id="step-10" style="display:none;">
    {{-- <section class="form-container">
        <!-- ngView: -->
        <div class="center-block form-wrap ng-scope" data-ng-view="" data-page-unload="" data-check-model="" autoscroll="" style="">
            <div class="anim-wrap ng-scope">
                <div class="page-header col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                    <div class="row"><h3>When were you born?</h3></div>
                </div>
                <form
                    name="vm.birthDateForm"
                    data-form-name="vm.birthDateForm"
                    data-next-btn=""
                    novalidate=""
                    data-validate-dob=""
                    data-enter-btn=""
                    class="ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength"
                >
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-xs-12 col-md-4 form-group">
                                <label for="birthDate">Month</label>
                                <select
                                    class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                    name="birthMonth"
                                    id="birthDate"
                                    required=""
                                    data-ng-model="vm.birthMonth"
                                    data-ng-options="idx as month for (idx, month) in vm.months"
                                    fdprocessedid="6b30x"
                                >
                                    <option value="" class="" selected="selected">Month</option>
                                    <option label="January" value="string:0">January</option>
                                    <option label="February" value="string:1">February</option>
                                    <option label="March" value="string:2">March</option>
                                    <option label="April" value="string:3">April</option>
                                    <option label="May" value="string:4">May</option>
                                    <option label="June" value="string:5">June</option>
                                    <option label="July" value="string:6">July</option>
                                    <option label="August" value="string:7">August</option>
                                    <option label="September" value="string:8">September</option>
                                    <option label="October" value="string:9">October</option>
                                    <option label="November" value="string:10">November</option>
                                    <option label="December" value="string:11">December</option>
                                </select>
                                <div class="error-msg" data-ng-messages="vm.birthDateForm.$error">
                                    <div data-ng-message="required"><p>Please enter your birth month</p></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 form-group">
                                <label for="birthDay">Day</label>
                                <input
                                    type="text"
                                    placeholder="DD"
                                    minlength="1"
                                    maxlength="2"
                                    class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-minlength ng-valid-maxlength"
                                    name="birthDay"
                                    id="birthDay"
                                    pattern="(\d)+$"
                                    data-ng-model="vm.birthDay"
                                    fdprocessedid="r7rbnx"
                                />
                                <div data-ng-messages="vm.birthDateForm.$error" class="error-msg">
                                    <div data-ng-message="required"><p>Please enter your birth day</p></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 form-group">
                                <label for="birthYear">Year</label>
                                <input
                                    type="text"
                                    placeholder="YYYY"
                                    maxlength="4"
                                    class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength"
                                    name="birthYear"
                                    pattern="(19[0-8][0-9]|199[0-9]|20[01][0-9]|2100)"
                                    id="birthYear"
                                    required=""
                                    data-ng-model="vm.birthYear"
                                    fdprocessedid="osagdn"
                                />
                                <p class="error-msg">Please enter your birth year</p>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-xs-12 text-center">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3"><a class="btn btn-next" onclick="showStep12()" >Next</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

      <section class="form-container">
        <!-- ngView: -->
        <div class="center-block form-wrap ng-scope" data-ng-view="" data-page-unload="" data-check-model="" autoscroll="" style="">
            <div class="anim-wrap flow-a state-9 ng-scope">
                <div class="page-header">
                    <div class="row"><h3>Have you ever served in the military?</h3></div>
                </div>
                <div class="btn-group-vertical">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <div class="row">
                            <a  class="text-btn" onclick="showStep11('Yes')" ><span>Yes - we're a Veteran household</span></a>
                            <a class="text-btn"  onclick="showStep11('No')" ><span>No - we're not a Veteran household</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
</div>