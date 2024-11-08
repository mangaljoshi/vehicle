<header class="form-header">
    <div class="col-xs-12">
        <h1><img class="img-responsive" src="{{asset('_vehicle/images/logo.319bfea5.png')}}" alt="InsureMyCar.org" /></h1>
        <!-- ngIf: !fallbackHeader -->
        <div class="header-msg text-center ng-scope" data-ng-if="!fallbackHeader">
            <div class="row">
                <!-- ngIf: headline -->
                <div class="headline-wrap col-md-6 col-md-offset-3 col-xs-12 ng-binding ng-scope" data-ng-if="headline" data-ng-bind-html="headline" style=""><h2>Drivers In Your Area Are Getting $700+ In Savings</h2></div>
                <!-- end ngIf: headline -->
            </div>
        </div>
        <!-- end ngIf: !fallbackHeader -->
        <div class="row"></div>
        <div class="progress-panel ng-isolate-scope" data-progress-bar="">
            <div class="col-xs-12">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%;">
                        <span class="sr-only ng-binding">0% Complete</span>
                    </div>
                </div>
                <div class="progress-info">
                    <p class="ng-binding">Progress: 0%</p>
                </div>
            </div>
        </div>
    </div>
</header>