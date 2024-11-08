function showStep1(year) {
    // Hide the year selection section
    document.getElementById("year-selection").style.display = 'none';
    
    // Show step 1
    document.getElementById("step-1").style.display = 'block';
    
    // You can also do something with the selected year here if needed
    console.log("Selected year:", year);
}

function showStep2(make) {
    // Hide step 1
    document.getElementById("step-1").style.display = 'none';
    
    // Show step 2
    document.getElementById("step-2").style.display = 'block';
    
    // Display the selected make if provided
    if (make) {
        document.getElementById("selectedMake").textContent = make;
    }
}

function selectMake() {
    const selectedMake = document.getElementById("vehicleMakeAll").value;
    if (selectedMake) {
        showStep2(selectedMake);
    } else {
        document.getElementById("error-msg").style.display = 'block';
    }
}

function showStep3(model) {
    // Hide step 2
    document.getElementById("step-2").style.display = 'none';
    
    // Show step 3
    document.getElementById("step-3").style.display = 'block';
    
    // Display the selected model
    if (model) {
        document.getElementById("selectedModel").textContent = model;
    }
}
function showStep4() {
    // Hide step 3
    document.getElementById("step-3").style.display = 'none';
    
    // Show step 4 (make sure to set the correct ID for step 4)
    document.getElementById("step-4").style.display = 'block';
}
function showStep5() {
    // Hide step 4
    document.getElementById("step-4").style.display = 'none';

    // Show step 5
    document.getElementById("step-5").style.display = 'block';
}
function showStep6() {
    // Hide step 5
    document.getElementById("step-5").style.display = 'none';

    // Show step 6
    document.getElementById("step-6").style.display = 'block';
}
function showStep7() {
    // Hide step 6
    document.getElementById("step-6").style.display = 'none';

    // Show step 7
    document.getElementById("step-7").style.display = 'block';
}

function setIsHomeowner(status) {
    // Optionally log or store the selected homeowner status
    console.log("Selected Homeowner Status:", status);

    // You can add logic here based on whether the user is a homeowner
    if (status === 'Yes') {
        // Logic for homeowners
    } else {
        // Logic for non-homeowners
    }
}
function showStep8() {
    // Hide step 7
    document.getElementById("step-7").style.display = 'none';

    // Show step 8
    document.getElementById("step-8").style.display = 'block';
}

function showStep9(interest) {
    // Log the user's interest in home insurance quotes
    console.log("User interested in home insurance quotes:", interest);

    // Hide step 8
    document.getElementById("step-8").style.display = 'none';

    // Show step 9 (update this to the actual step or action you want to take)
    document.getElementById("step-9").style.display = 'block'; // Ensure step 9 is defined
}
function showStep10() {
    // Hide step 9
    document.getElementById("step-9").style.display = 'none';

    // Show step 10
    document.getElementById("step-10").style.display = 'block';
}

function showStep11(militaryStatus) {
    // Log the user's military status
    console.log("User's Military Status:", militaryStatus);

    // Hide step 10
    document.getElementById("step-10").style.display = 'none';

    document.getElementById("step-11").style.display = 'block'; // Update this to the actual next step
}
function showStep12() {
    // Hide the current step
    document.getElementById("step-11").style.display = 'none';
    
    // Show the next step (step 11)
    document.getElementById("step-12").style.display = 'block';

    // Optionally, you can log or handle the birth date values here if needed
    const day = document.getElementById("birthDay").value;
    const month = document.getElementById("birthDate").value;
    const year = document.getElementById("birthYear").value;
    console.log(`Birth date: ${month}/${day}/${year}`);
}
function showStep13(rating) {
    // Hide the current step
    document.getElementById("step-12").style.display = 'none';
    
    // Show the next step (step 13)
    document.getElementById("step-13").style.display = 'block';

    // Optionally, you can log or handle the credit rating value here if needed
    console.log(`Credit rating selected: ${rating}`);
}
function showStep14() {
    // Validate the form before moving to the next step
    const form = document.forms['vm.currentAddressForm'];
    if (!form.checkValidity()) {
        // If the form is invalid, show error messages or highlight the invalid fields
        alert("Please fill out the required fields correctly.");
        return; // Stop the function if the form is invalid
    }

    // Hide the current step
    document.getElementById("step-13").style.display = 'none';

    // Show the next step (step 14)
    document.getElementById("step-14").style.display = 'block';
}
function submitAndRedirect() {
    // Assuming vm.submitData() is your function to handle form submission
    vm.submitData().then(function() {
        // Redirect to thank you page after successful submission
        window.location.href = '/pages/thank-you'; // Change this to your thank-you page URL
    }).catch(function(error) {
        console.error('Submission error:', error);
        // Handle error if needed
    });
}




