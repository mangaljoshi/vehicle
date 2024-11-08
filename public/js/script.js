document.addEventListener('DOMContentLoaded', function() {
    const yearButtons = document.querySelectorAll('[data-year]');
    const yearSelection = document.getElementById('year-selection');
    const step1 = document.getElementById('step-1');
    const nextButton = document.getElementById('next-button');

    yearButtons.forEach(button => {
        button.addEventListener('click', function() {
            const selectedYear = this.getAttribute('data-year');
            console.log('Selected Year:', selectedYear); // Log the selected year
            yearSelection.style.display = 'none'; // Hide the year selection
            step1.style.display = 'block'; // Show step 1
            nextButton.style.display = 'block'; // Show the next button
        });
    });

    nextButton.addEventListener('click', function() {
        // Handle next button logic here
        alert('Proceeding to the next step!');
    });

    // Function to set vehicle make
    window.setVehicleMake = function(make) {
        document.getElementById('error-msg').style.display = 'none';
        document.getElementById('nextBtn').style.display = 'block'; // Show Next button
    }

    // Function to select make
    window.selectMake = function() {
        var selectedValue = document.getElementById('vehicleMakeAll').value;
        if (selectedValue) {
            document.getElementById('error-msg').style.display = 'none';
            document.getElementById('nextBtn').style.display = 'block'; // Show Next button
        } else {
            document.getElementById('error-msg').style.display = 'block'; // Show error message
            document.getElementById('nextBtn').style.display = 'none'; // Hide Next button
        }
    }

    // Function to show step 2
    window.showStep = function(brand) {
        document.getElementById('step-2').style.display = 'block';
        document.querySelector('#step-2 .ng-binding').textContent = brand;
    }

    // Function to show step 3
    window.showStep3 = function() {
        document.getElementById('step-2').style.display = 'none';
        document.getElementById('step-3').style.display = 'block';
    }

    // Function to show step 4
    window.showStep4 = function() {
        document.getElementById('step-3').style.display = 'none';
        document.getElementById('step-4').style.display = 'block'; // Make sure step-4 exists
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        const step1 = document.getElementById('step-1');
        const step2 = document.getElementById('step-2');
        const step3 = document.getElementById('step-3');
        const step4 = document.getElementById('step-4');
        const nextButton = document.getElementById('next-button');
    
        let currentProgress = 0; // Starting progress
    
        // Function to update the progress bar
        function updateProgress(progress) {
            const progressBar = document.querySelector('.progress-bar');
            const progressInfo = document.querySelector('.progress-info p');
    
            currentProgress = progress; // Set the current progress
            progressBar.style.width = `${currentProgress}%`;
            progressInfo.textContent = `Progress: ${currentProgress}%`;
        }
    
        // Next button event listener
        nextButton.addEventListener('click', function() {
            showStep2(); // Move to step 2
        });
    
        function showStep2() {
            step1.style.display = 'none'; // Hide Step 1
            step2.style.display = 'block'; // Show Step 2
            updateProgress(40); // Update progress for step 2
        }
    
        // Function to show step 3
        function showStep3() {
            step2.style.display = 'none'; // Hide Step 2
            step3.style.display = 'block'; // Show Step 3
            updateProgress(60); // Update progress for step 3
        }
    
        // Function to show step 4
        function showStep4() {
            step3.style.display = 'none'; // Hide Step 3
            step4.style.display = 'block'; // Show Step 4
            updateProgress(80); // Update progress for step 4
        }
    });
    
});
