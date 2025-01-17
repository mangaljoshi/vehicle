@extends('corporal.layouts.app')
@section('content')
<section class="form-container">
    <div data-isloading="false">
        <div class="form--section--4ONce">
            <div class="container">
                <section class="form--formWrapper--vOD8N">
                    <div class="form--animationSection--IV3Fl undefined">
                        <div class="container">
                            <h1>Vehicle Make</h1>
                            <div data-isloading="false">
                                <div class="Make--make--9O9G+">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 Make--searchInput--PoSIf">
                                                <svg width="24" height="24" class="" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                                        stroke="var(--color5, #dcdcdc)"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    ></path>
                                                    <path d="M21.0004 20.9999L16.6504 16.6499" stroke="var(--color5, #dcdcdc)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <div class="Input--textInput--34of2 Input--small--315NH">
                                                    <input type="search" name="vehicles.search" placeholder="ex: Mazda" value="" /><label for="vehicles.search">Search for your vehicle make</label>
                                                    <span class="Input--errorMessage--SN07v" data-cy="errorMessage"></span>
                                                </div>
                                                <input class="d-none" />
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step"id="data-step" onclick="showStep(1)" >
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{ asset('_corporal/images/download.svg') }}" alt="BMW" loading="lazy" />
                                                    <h5>BMW</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step " onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/Buick.svg')}}" alt="BUICK" loading="lazy" />
                                                    <h5>BUICK</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/cadillac.svg')}}" alt="CADILLAC" loading="lazy" />
                                                    <h5>CADILLAC</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/Che.svg')}}" alt="CHEVROLET" loading="lazy" />
                                                    <h5>CHEVROLET</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/Chr.svg')}}" alt="CHRYSLER" loading="lazy" />
                                                    <h5>CHRYSLER</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/Dod.svg')}}" alt="DODGE" loading="lazy" />
                                                    <h5>DODGE</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/ford.svg')}}" alt="FORD" loading="lazy" />
                                                    <h5>FORD</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/Gmc.svg')}}" alt="GMC" loading="lazy" />
                                                    <h5>GMC</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/HOnda.svg')}}" alt="HONDA" loading="lazy" />
                                                    <h5>HONDA</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/Hundai.svg')}}" alt="HYUNDAI" loading="lazy" />
                                                    <h5>HYUNDAI</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/jeep.svg')}}" alt="JEEP" loading="lazy" />
                                                    <h5>JEEP</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/kia.svg')}}" alt="KIA" loading="lazy" />
                                                    <h5>KIA</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/Le.svg')}}"  alt="LEXUS" loading="lazy" />
                                                    <h5>LEXUS</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/mazda.svg')}}" alt="MAZDA" loading="lazy" />
                                                    <h5>MAZDA</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/marsi.svg')}}" alt="MERCEDES-BENZ" loading="lazy" />
                                                    <h5>MERCEDES-BENZ</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/nisan.svg')}}" alt="NISSAN" loading="lazy" />
                                                    <h5>NISSAN</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/toyota.svg')}}" alt="TOYOTA" loading="lazy" />
                                                    <h5>TOYOTA</h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 Make--item--hLbNa vehicle next-step" onclick="showStep(1)">
                                                <div class="Make--col--aNRDv">
                                                    <img src="{{asset('_corporal/images/Volk.svg')}}" alt="VOLKSWAGEN" loading="lazy" />
                                                    <h5>VOLKSWAGEN</h5>
                                                </div>
                                            </div>
                                            <div class="Make--showAll--IcEhd d-block col-12">+ Show All Makes</div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div id="form-steps">
    @include('corporal.pages.steps.step-1')
    @include('corporal.pages.steps.step-2') 
    @include('corporal.pages.steps.step-3') 
    @include('corporal.pages.steps.step-4') 
    @include('corporal.pages.steps.step-5')
    @include('corporal.pages.steps.step-6')
    @include('corporal.pages.steps.step-7') 
    @include('corporal.pages.steps.step-8')
    @include('corporal.pages.steps.step-9')
    @include('corporal.pages.steps.step-10')
    @include('corporal.pages.steps.step-11')
    @include('corporal.pages.steps.step-12')
    @include('corporal.pages.steps.step-13')
    @include('corporal.pages.steps.step-14')
    </div>

    </div>
</div>
</section>

@endsection
@section('scripts')
<script src="{{asset('_corporal/js/data.js'"></script>

<script>
    // Function to show a specific step and hide others
    function showStep(stepNumber) {
        // Hide all steps
        const allSteps = document.querySelectorAll('.step');
        allSteps.forEach(step => {
            step.style.display = 'none';
        });

        // Show the selected step
        const stepToShow = document.getElementById('step-' + stepNumber);
        if (stepToShow) {
            stepToShow.style.display = 'block';
        }
    }

    // Automatically show step-1 when any vehicle make is clicked
    document.querySelectorAll('.Make--item--hLbNa').forEach(item => {
        item.addEventListener('click', function() {
            showStep(1);  // Show step-1 when a vehicle make is clicked
        });
    });
</script>
@endsection


