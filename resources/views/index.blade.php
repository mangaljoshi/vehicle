<!DOCTYPE html>
<html>
    <head>
        <style>
            @charset "UTF-8";
            [ng\:cloak],
            [ng-cloak],
            [data-ng-cloak],
            [x-ng-cloak],
            .ng-cloak,
            .x-ng-cloak,
            .ng-hide:not(.ng-hide-animate) {
                display: none !important;
            }
            ng\:form {
                display: block;
            }
            .ng-animate-shim {
                visibility: hidden;
            }
            .ng-anchor {
                position: absolute;
            }
        </style>
        <meta charset="utf-8" />
        <title>InsureMyCar.org</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <!-- Google Tag Manager -->
        <!-- End Google Tag Manager -->
        <link href="{{ asset('_vehicle/css/family.css') }}" rel="stylesheet" />
        <link href="{{ asset('_vehicle/css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('_vehicle/css/main.css') }}" rel="stylesheet" />
        <link href="{{ asset('_vehicle/css/min.css') }}" rel="stylesheet" />
        <link href="{{ asset('_vehicle/css/style1.css') }}" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </head>
    
    <body ng-app="wisdomFormFlows" data-ng-strict-di="" class="ng-scope">
        <div class="phone-bar ng-hide" data-ng-show="phoneNumber" data-phone-bar="">
            <div class="phone-bar-wrap">
                <p>Speak to an agent now with no obligation!</p>
                <p>
                    <i class="fa fa-phone"></i> <a data-ng-href="tel:" href="tel:"><span class="pnum ng-binding"></span></a>
                </p>
            </div>
        </div>
        <div class="large-bg" data-dynamic-bg="" style="background-color: rgb(255, 255, 255); background-image: none;"></div>
        <div class="body-bg" data-dynamic-messaging="">
            @include('partials.header')

            <section class="form-container">
                <!-- ngView: -->
                <div class="step-1 hide-class">
                    <div class="center-block form-wrap ng-scope" data-ng-view="" data-page-unload="" data-check-model="" autoscroll="">
                        <div class="anim-wrap flow-b state-vehicles ng-scope">
                            <div class="page-header">
                                <div class="row"><h3 class="ng-binding">What Year is Your Primary Vehicle?</h3></div>
                            </div>
                            <div class="btn-group-vertical col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 mb2">
                                        <!-- Buttons for years from 2024 to 1996 -->
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2024)">2024</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2023)">2023</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2022)">2022</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2021)">2021</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2020)">2020</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2019)">2019</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2018)">2018</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2017)">2017</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2016)">2016</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2015)">2015</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2014)">2014</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2013)">2013</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2012)">2012</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2011)">2011</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2010)">2010</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2009)">2009</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2008)">2008</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2007)">2007</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2006)">2006</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2005)">2005</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2004)">2004</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a  class="btn btn-block btn-default auto-btn" onclick="showStep1(2003)">2003</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2002)">2002</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2001)">2001</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2000)">2000</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(1999)">1999</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(1998)">1998</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(1997)">1997</a>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(1996)">1996</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-group-lg">
                                <div class="row">
                                    <form class="mb2 clearfix ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" name="vm.vehicleYearForm" data-form-name="vm.vehicleYearForm" data-next-btn="" novalidate="" data-enter-btn="">
                                        <div class="col-sm-4 col-md-3 no-float-centered">
                                            <select
                                                class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"
                                                name="vehicleYears"
                                                id="vehicleYears"
                                                data-year-select=""
                                                data-ng-model="vm.vehicleYear"
                                                data-ng-change="vm.getVehicleYearData(vm.vehicleYear)"
                                                data-ng-options="year for year in vm.vehicleYearList2 track by year"
                                                required=""
                                                style=""
                                            >
                                                <option value="" class="" selected="selected">Browse previous years</option>
                                                <option label="1995" value="1995">1995</option>
                                                <option label="1994" value="1994">1994</option>
                                                <option label="1993" value="1993">1993</option>
                                                <option label="1992" value="1992">1992</option>
                                                <option label="1991" value="1991">1991</option>
                                                <option label="1990" value="1990">1990</option>
                                                <option label="1989" value="1989">1989</option>
                                                <option label="1988" value="1988">1988</option>
                                                <option label="1987" value="1987">1987</option>
                                                <option label="1986" value="1986">1986</option>
                                                <option label="1985" value="1985">1985</option>
                                                <option label="1984" value="1984">1984</option>
                                                <option label="1983" value="1983">1983</option>
                                                <option label="1982" value="1982">1982</option>
                                                <option label="1981" value="1981">1981</option>
                                            </select>
                                            <p class="text-center error-msg text-danger" style="display: none;">Please select a vehicle year</p>
                                        </div>
                                    
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                                <div class="row">
                                    <button class="next-step" data-step="1">Next</button>                                </div> 
                        </div>
                        {{-- @include('pages.steps.step-1')  Include your steps --}}
                        @include('pages.steps.step-2')
                        @include('pages.steps.step-3')
                        @include('pages.steps.step-4')
                    </div>
                </div>
                
            </section>
            @include('partials.footer')
            
        </div>
        
    </body>
</html>
