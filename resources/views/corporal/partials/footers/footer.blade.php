<footer class="Footer--footer--QGO+1">
    <!-- Illustration Image -->
    <img class="Footer--illustrationImage--Z4vKA" src="{{ asset('_corporal/images/top-illustration.png') }}" alt="Illustration" loading="lazy" />
    
    <div class="container">
        <!-- Footer Heading -->
        <h2>The service you expect, partners you can trust.</h2>
        <p>We carefully vet our partners to ensure you get the best experience and the most value.</p>

        <!-- Insurance Partner Logos -->
        <div class="Footer--insuranceLogos">
            <img class="Footer--insuranceImage--TNTEs" src="{{ asset('_corporal/images/icon-1.svg') }}" alt="Liberty Mutual" loading="lazy" />
            <img class="Footer--insuranceImage--TNTEs" src="{{ asset('_corporal/images/icon-2.svg') }}" alt="Safeco" loading="lazy" />
            <img class="Footer--insuranceImage--TNTEs" src="{{ asset('_corporal/images/icon-4.svg') }}" alt="Farmers Insurance" loading="lazy" />
            <img class="Footer--insuranceImage--TNTEs" src="{{ asset('_corporal/images/icon-5.svg') }}" alt="All State" loading="lazy" />
        </div>

        <!-- Disclaimer Section -->
        <div class="Footer--disclaimer--lR02g">
            <p>
                Corporalcoverage.com is an online insurance referral site. Insurance savings are not guaranteed. We match and directly connect consumers with insurance companies and agents across the US. Our site does not provide quotes
                directly to consumers and is not in any way affiliated with any of the insurance carriers. We do not provide insurance and we do not represent any specific insurance provider or automobile company. All trademarks and
                copyrights are the property of their respective owners. All articles on this website are for information purposes only. This website contains affiliate marketing links and phone numbers which means that the operators of this
                site may get paid commission on sales of the products or services advertised. Corporalcoverage.com provides access to independent auto insurance services and acts as an affiliate to these services. Your access to this
                website is subject to its <a href="{{ route('terms') }}">Terms and Conditions</a>. California residents only:
                <a href="{{ route('doNotSellMyInfo') }}">Do not sell my info.</a>
            </p>
        </div>

        <!-- Footer Links -->
        <div class="Footer--links--jmW2m">
            <a href="{{ route('privacy') }}">Privacy Policy</a>
            <a href="{{ route('terms') }}">Terms & Conditions</a>
            <a href="{{ route('doNotSellMyInfo') }}">Do not sell my info</a>
        </div>


        <!-- Copyright Text -->
        <p class="Footer--copyright--L955O">
            &copy; {{ date('Y') }}. All rights reserved.
        </p>
    </div>
</footer>
