// Ensure the script runs after the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {

    // Mode Selector
    const coolingBtn = document.getElementById('coolingBtn');
    const heatingBtn = document.getElementById('heatingBtn');
    const coolingForm = document.getElementById('coolingForm');
    const heatingForm = document.getElementById('heatingForm');
    const coolingResults = document.getElementById('coolingResults');
    const heatingResults = document.getElementById('heatingResults');
    const calculatorResults = document.querySelector('.calculator-results');

    coolingBtn.addEventListener('click', () => {
        coolingBtn.classList.add('active');
        heatingBtn.classList.remove('active');
        coolingForm.style.display = 'block';
        heatingForm.style.display = 'none';
        coolingResults.style.display = 'flex';
        heatingResults.style.display = 'none';
        calculatorResults.classList.add('cooling-mode');
        calculatorResults.classList.remove('heating-mode');
    });

    heatingBtn.addEventListener('click', () => {
        heatingBtn.classList.add('active');
        coolingBtn.classList.remove('active');
        heatingForm.style.display = 'block';
        coolingForm.style.display = 'none';
        heatingResults.style.display = 'flex';
        coolingResults.style.display = 'none';
        calculatorResults.classList.add('heating-mode');
        calculatorResults.classList.remove('cooling-mode');
    });

    // Populate SEER options
    const currentSeer = document.getElementById('currentSeer');
    const newSeer = document.getElementById('newSeer');

    for (let i = 9; i <= 25; i++) {
        let option = document.createElement('option');
        option.value = i;
        option.text = `${i}`;
        currentSeer.add(option);
    }

    for (let i = 14; i <= 25; i++) {
        let option = document.createElement('option');
        option.value = i;
        option.text = `${i}`;
        newSeer.add(option);
    }

    // Populate AFUE options
    const currentAfue = document.getElementById('currentAfue');
    const newAfue = document.getElementById('newAfue');

    const currentAfueOptions = [70, 75, 80, 90, 91, 92, 95, 96, 97, 98];
    const newAfueOptions = [80, 90, 92, 95, 96, 97, 98];

    currentAfueOptions.forEach(function(i) {
        let option = document.createElement('option');
        option.value = i;
        option.text = `${i}`;
        currentAfue.add(option);
    });

    newAfueOptions.forEach(function(i) {
        let option = document.createElement('option');
        option.value = i;
        option.text = `${i}`;
        newAfue.add(option);
    });

    // Auto-fill Average Cost based on Location
    const locationCooling = document.getElementById('locationCooling');
    const averageCostCooling = document.getElementById('averageCostCooling');

    locationCooling.addEventListener('change', () => {
        const selectedOption = locationCooling.options[locationCooling.selectedIndex];
        const dataCost = selectedOption.getAttribute('data-cost');
        averageCostCooling.value = dataCost;
    });

    const locationHeating = document.getElementById('locationHeating');
    const averageCostHeating = document.getElementById('averageCostHeating');

    locationHeating.addEventListener('change', () => {
        const selectedOption = locationHeating.options[locationHeating.selectedIndex];
        const dataCost = selectedOption.getAttribute('data-cost');
        averageCostHeating.value = dataCost;
    });

    // Constants
    const coolingHoursPerYear = 580; 
    const btuPerTherm = 100000; 
    const thermsPerMCF = 10.37; 

    // Calculate Cooling Savings
    document.getElementById('calculateCooling').addEventListener('click', () => {
        const acCapacity = parseFloat(document.getElementById('acCapacity').value);
        const oldSeer = parseFloat(currentSeer.value);
        const newSeerValue = parseFloat(newSeer.value);
        const avgCost = parseFloat(averageCostCooling.value); // Cost in cents per kWh

        if (!acCapacity || !oldSeer || !newSeerValue || !avgCost) {
            alert('Please fill in all fields.');
            return;
        }

        // Convert average cost to dollars per kWh
        const avgCostPerKWh = avgCost / 100;

        // Total Cooling Output (BTU/year)
        const totalCoolingOutput = acCapacity * coolingHoursPerYear;

        // Convert new SEER2 to SEER Equivalent
        const newSeerEquivalent = newSeerValue * 0.95;

        // Energy Use (Wh/year)
        const currentEnergyUse = (totalCoolingOutput / oldSeer);
        const newEnergyUse = (totalCoolingOutput / newSeerEquivalent);

        // Convert to kWh
        const currentEnergyUseKWh = currentEnergyUse / 1000;
        const newEnergyUseKWh = newEnergyUse / 1000;

        // Calculate Costs
        const currentCost = currentEnergyUseKWh * avgCostPerKWh;
        const newCost = newEnergyUseKWh * avgCostPerKWh;
        const savings = currentCost - newCost;
        const savingsPercent = (savings / currentCost) * 100;

        // Update Results
        document.getElementById('coolingOldSeer').innerText = oldSeer;
        document.getElementById('coolingNewSeer').innerText = newSeerValue;
        document.getElementById('coolingBtu').innerText = acCapacity.toLocaleString();
        document.getElementById('coolingSavingsPercent').innerText = `${savingsPercent.toFixed(1)}%`;
        document.getElementById('coolingCurrentCost').innerText = currentCost.toFixed(2);
        document.getElementById('coolingNewCost').innerText = newCost.toFixed(2);

        // Update Circle Progress
        let angle = (savingsPercent / 100) * 360;
        document.getElementById('coolingProgressCircle').style.background = `conic-gradient(green 0deg, green ${angle}deg, transparent ${angle}deg, transparent 360deg)`;

        // Update Bars
        const savings5 = savings * 5;
        const savings10 = savings * 10;
        const savings15 = savings * 15;

        document.getElementById('coolingSavings5').innerText = savings5.toFixed(2);
        document.getElementById('coolingSavings10').innerText = savings10.toFixed(2);
        document.getElementById('coolingSavings15').innerText = savings15.toFixed(2);

        // Update Bar Heights
        if (savings15 > 0) {
            document.getElementById('coolingBar5').querySelector('.bar-fill').style.height = `${(savings5 / savings15) * 100}%`;
            document.getElementById('coolingBar10').querySelector('.bar-fill').style.height = `${(savings10 / savings15) * 100}%`;
            document.getElementById('coolingBar15').querySelector('.bar-fill').style.height = `100%`;
        } else {
            // Handle case where savings15 is zero
            document.getElementById('coolingBar5').querySelector('.bar-fill').style.height = `0%`;
            document.getElementById('coolingBar10').querySelector('.bar-fill').style.height = `0%`;
            document.getElementById('coolingBar15').querySelector('.bar-fill').style.height = `0%`;
        }
    });

    // Calculate Heating Savings
    document.getElementById('calculateHeating').addEventListener('click', () => {
        const avgBtuSeason = parseFloat(document.getElementById('averageBtuSeason').value);
        const oldAfue = parseFloat(currentAfue.value);
        const newAfueValue = parseFloat(newAfue.value);
        const avgCostMCF = parseFloat(averageCostHeating.value); // Cost in dollars per MCF

        if (!avgBtuSeason || !oldAfue || !newAfueValue || !avgCostMCF) {
            alert('Please fill in all fields.');
            return;
        }

        // Convert cost per MCF to cost per Therm
        const avgCostPerTherm = avgCostMCF / thermsPerMCF;

        // Fuel Required (Therms)
        const fuelRequiredCurrent = avgBtuSeason / (oldAfue / 100) / btuPerTherm;
        const fuelRequiredNew = avgBtuSeason / (newAfueValue / 100) / btuPerTherm;

        // Calculate Costs
        const currentCost = fuelRequiredCurrent * avgCostPerTherm;
        const newCost = fuelRequiredNew * avgCostPerTherm;
        const savings = currentCost - newCost;
        const savingsPercent = (savings / currentCost) * 100;

        // Update Results
        document.getElementById('heatingOldAfue').innerText = oldAfue;
        document.getElementById('heatingNewAfue').innerText = newAfueValue;
        document.getElementById('heatingSavingsPercent').innerText = `${savingsPercent.toFixed(1)}%`;
        document.getElementById('heatingCurrentCost').innerText = currentCost.toFixed(2);
        document.getElementById('heatingNewCost').innerText = newCost.toFixed(2);

        // Update Circle Progress
        let angle = (savingsPercent / 100) * 360;
        document.getElementById('heatingProgressCircle').style.background = `conic-gradient(green 0deg, green ${angle}deg, transparent ${angle}deg, transparent 360deg)`;

        // Update Bars
        const savings5 = savings * 5;
        const savings10 = savings * 10;
        const savings15 = savings * 15;

        document.getElementById('heatingSavings5').innerText = savings5.toFixed(2);
        document.getElementById('heatingSavings10').innerText = savings10.toFixed(2);
        document.getElementById('heatingSavings15').innerText = savings15.toFixed(2);

        // Update Bar Heights
        if (savings15 > 0) {
            document.getElementById('heatingBar5').querySelector('.bar-fill').style.height = `${(savings5 / savings15) * 100}%`;
            document.getElementById('heatingBar10').querySelector('.bar-fill').style.height = `${(savings10 / savings15) * 100}%`;
            document.getElementById('heatingBar15').querySelector('.bar-fill').style.height = `100%`;
        } else {
            // Handle case where savings15 is zero
            document.getElementById('heatingBar5').querySelector('.bar-fill').style.height = `0%`;
            document.getElementById('heatingBar10').querySelector('.bar-fill').style.height = `0%`;
            document.getElementById('heatingBar15').querySelector('.bar-fill').style.height = `0%`;
        }
    });
});
