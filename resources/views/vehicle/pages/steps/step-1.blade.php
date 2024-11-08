<!-- Step 1 -->
<div id="step-1" class="step" style="display: none;">
    <section class="form-container">
        <!-- ngView: -->
        <div class="center-block form-wrap ng-scope" data-ng-view="" data-page-unload="" data-check-model="" autoscroll="" style="">
            <div class="anim-wrap flow-b state-vehicles ng-scope">
                <div class="page-header">
                    <div class="row"><h3>Vehicle Make?</h3></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 mb2">
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a class="btn btn-block auto-btn" onclick="showStep2('Buick')">Buick</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a class="btn btn-block auto-btn" onclick="showStep2('Chevrolet')">Chevrolet</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a class="btn btn-block auto-btn" onclick="showStep2('Chrysler')">Chrysler</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a class="btn btn-block auto-btn" onclick="showStep2('Dodge')">Dodge</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a class="btn btn-block auto-btn" onclick="showStep2('Ford')">Ford</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a class="btn btn-block auto-btn" onclick="showStep2('GMC')">GMC</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a class="btn btn-block auto-btn" onclick="showStep2('Honda')">Honda</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a class="btn btn-block auto-btn" onclick="showStep2('Hyundai')">Hyundai</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a class="btn btn-block auto-btn" onclick="showStep2('Jeep')">Jeep</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a class="btn btn-block auto-btn" onclick="showStep2('Kia')">Kia</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a class="btn btn-block auto-btn" onclick="showStep2('Nissan')">Nissan</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a class="btn btn-block auto-btn" onclick="showStep2('Toyota')">Toyota</a>
                        </div>
                    </div>
                </div>
                
                <form class="clearfix mb2">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 form-group-lg mb2">
                        <select id="vehicleMakeAll" class="form-control" onchange="selectMake()">
                            <option value="" selected>Browse Other Makes</option>
                            <option  value="ACURA">ACURA</option>
                            <option value="ALFA ROMEO">ALFA ROMEO</option>
                            <option  value="ASTON MARTIN">ASTON MARTIN</option>
                            <option value="AUDI">AUDI</option>
                            <option  value="BENTLEY">BENTLEY</option>
                            <option value="BMW">BMW</option>
                            <option  value="BRIGHTDROP">BRIGHTDROP</option>
                            <option value="BUGATTI">BUGATTI</option>
                            <option  value="BUICK">BUICK</option>
                            <option  value="CADILLAC">CADILLAC</option>
                            <option  value="CHEVROLET">CHEVROLET</option>
                            <option  value="CHRYSLER">CHRYSLER</option>
                            <option  value="DODGE">DODGE</option>
                            <option  value="FERRARI">FERRARI</option>
                            <option value="FIAT">FIAT</option>
                            <option   value="FISKER INC.">FISKER INC.</option>
                            <option value="FORD">FORD</option>
                            <option  value="GENESIS">GENESIS</option>
                            <option   value="GLOBAL ELECTRIC MOTORS">GLOBAL ELECTRIC MOTORS</option>
                            <option value="GMC">GMC</option>
                            <option  value="HONDA">HONDA</option>
                            <option value="HYUNDAI">HYUNDAI</option>
                            <option  value="INEOS AUTOMOTIVE LIMITED">INEOS AUTOMOTIVE LIMITED</option>
                            <option value="INFINITI">INFINITI</option>
                            <option value="JAGUAR">JAGUAR</option>
                            <option value="JEEP">JEEP</option>
                            <option value="KIA">KIA</option>
                            <option value="LAMBORGHINI">LAMBORGHINI</option>
                            <option  value="LAND ROVER">LAND ROVER</option>
                            <option  value="LEXUS">LEXUS</option>
                            <option value="LINCOLN">LINCOLN</option>
                            <option  value="LOTUS">LOTUS</option>
                            <option  value="LUCID MOTORS">LUCID MOTORS</option>
                            <option  value="MASERATI">MASERATI</option>
                            <option  value="MAZDA">MAZDA</option>
                            <option  value="MCLAREN AUTOMOTIVE">MCLAREN AUTOMOTIVE</option>
                            <option  value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                            <option value="MINI">MINI</option>
                            <option  value="MITSUBISHI">MITSUBISHI</option>
                            <option  value="NISSAN">NISSAN</option>
                            <option  value="POLESTAR">POLESTAR</option>
                            <option  value="PORSCHE">PORSCHE</option>
                            <option value="RAM">RAM</option>
                            <option  value="RIVIAN">RIVIAN</option>
                            <option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
                            <option value="SUBARU">SUBARU</option>
                            <option  value="TESLA">TESLA</option>
                            <option  value="TOYOTA">TOYOTA</option>
                            <option  value="VINFAST TRADING AND PRODUCTION LLC">VINFAST TRADING AND PRODUCTION LLC</option>
                            <option  value="VOLKSWAGEN">VOLKSWAGEN</option>
                            <option  value="VOLVO">VOLVO</option>
                            <!-- Add more options as needed -->
                        </select>
                        <p class="text-center error-msg text-danger" id="error-msg" style="display: none;">Please select a vehicle make</p>
                    </div>
                </form>
                
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="row">
                        <a class="btn btn-next" id="nextBtn"  onclick="showStep2()">Next</a>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </section>
</div>