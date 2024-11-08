@extends('vehicle.layouts.app')
 @section('content')
<section class="form-container">
    <!-- Vehicle Year Selection -->
    <div class="center-block form-wrap" id="year-selection">
        <div class="anim-wrap flow-b state-vehicles">
            <div class="page-header">
                <h3>What Year is Your Primary Vehicle?</h3>
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
                            <a class="btn btn-block btn-default auto-btn" onclick="showStep1(2003)">2003</a>
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
                    <form id="vehicleYearForm" class="mb2 clearfix" novalidate>
                        <div class="col-sm-4 col-md-3 no-float-centered">
                            <select class="form-control" name="vehicleYears" id="vehicleYears" required>
                                <option value="" selected="selected">Browse previous years</option>
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
                                <option label="1982" value="1982">1982</option>
                                <option label="1983" value="1983">1983</option>
                                <option label="1984" value="1984">1984</option>
                                <option label="1985" value="1985">1985</option>
                                <option label="1986" value="1986">1986</option>
                                <option label="1987" value="1987">1987</option>
                            </select>
                            <p class="text-center error-msg text-danger" style="display: none;">Please select a vehicle year</p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div class="row"><a class="btn btn-next btn-default auto-btn" onclick="showStep1">Next</a></div>
            </div>
        </div>
    </div>

    @include('vehicle.pages.steps.step-1')
    @include('vehicle.pages.steps.step-2') 
    @include('vehicle.pages.steps.step-3') 
    @include('vehicle.pages.steps.step-4') 
    @include('vehicle.pages.steps.step-5')
    @include('vehicle.pages.steps.step-6')
    @include('vehicle.pages.steps.step-7') 
    @include('vehicle.pages.steps.step-8')
    @include('vehicle.pages.steps.step-9')
    @include('vehicle.pages.steps.step-10')
    @include('vehicle.pages.steps.step-11')
    @include('vehicle.pages.steps.step-12')
    @include('vehicle.pages.steps.step-13')
    @include('vehicle.pages.steps.step-14')
</section>

@endsection
