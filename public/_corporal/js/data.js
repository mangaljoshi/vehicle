function showStep(stepNumber) {
    document.querySelectorAll('.step').forEach(step => {
        step.style.display = 'none';
    });

    const selectedStep = document.getElementById('step-' + stepNumber);
    if (selectedStep) {
        selectedStep.style.display = 'block';
    }
}
