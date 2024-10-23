// script.js

const productGrid = document.getElementById('productGrid');
const brandFilter = document.getElementById('brandFilter');
const typeFilter = document.getElementById('typeFilter');
const sortOption = document.getElementById('sortOption');

let products = []; // We'll load the products from the JSON file

function getSelectedCheckboxValues(container) {
    const checkboxes = container.querySelectorAll('input[type="checkbox"]:checked');
    return Array.from(checkboxes).map(checkbox => checkbox.value);
}

async function fetchProducts() {
    try {
        const response = await fetch('productlist.json');
        products = await response.json();
        displayProducts(products);
    } catch (error) {
        console.error('Error fetching product data:', error);
    }
}

function displayProducts(items) {
    productGrid.innerHTML = '';
    items.forEach(product => {
        const card = document.createElement('div');
        card.className = 'product-card';

        const efficiencyLabel = getEfficiencyLabel(product.type);
        const efficiencyUnit = getEfficiencyUnit(product.type);
        const efficiencyValue = product[efficiencyLabel] || product.efficiency || 'N/A';

        // Get the efficiency percentage for the meter
        const efficiencyPercentage = getEfficiencyPercentage(product);

        const costDollarSigns = '$'.repeat(product.cost);

        card.innerHTML = `
            <a href="${product.link}">
                <div class="product-image">
                    <img src="${product.image}" alt="${product.model}">
                </div>
                <div class="product-info">
                    <h3>${product.manufacturer} ${product.model}</h3>
                    <div class="meter-label">${efficiencyLabel} (${efficiencyValue}${efficiencyUnit})</div>
                    <div class="meter">
                        <span style="width:${efficiencyPercentage}%; background-color:${getMeterColor(efficiencyPercentage, product.type)};"></span>
                    </div>
                    <div class="meter-label">Comfort Level (${product.comfortLevel}%)</div>
                    <div class="meter">
                        <span style="width:${product.comfortLevel}%; background-color:${getMeterColor(product.comfortLevel, 'Comfort')}"></span>
                    </div>
                    <div class="cost">
                        <span class="cost-label">Cost:</span>
                        <span class="cost-value">${costDollarSigns}</span>
                    </div>
                    <ul class="features">
                        ${product.features.map(f => `<li>${f}</li>`).join('')}
                    </ul>
                </div>
            </a>
        `;
        productGrid.appendChild(card);
    });
}

function getEfficiencyLabel(type) {
    if (type === 'Furnace' || type ==='Shop Heater') return 'AFUE';
    if (type === 'Air Conditioner' || type === 'Ductless System' || type === 'Heat Pump') return 'SEER2';
    return 'Efficiency';
}

function getEfficiencyUnit(type) {
    if (type === 'Furnace' || type ==='Shop Heater') return '%';
    if (type === 'Air Conditioner' || type === 'Ductless System' || type === 'Fireplace') return '';
    if (type === 'Heat Pump') return '';
    return '%';
}

function getEfficiencyPercentage(product) {
    const efficiencyLabel = getEfficiencyLabel(product.type);
    const efficiencyValue = product[efficiencyLabel] || product.efficiency;

    if (product.type === 'Furnace' || product.type === 'Shop Heater') {
        // For AFUE, efficiencyValue is already a percentage
        return efficiencyValue;
    } else if (product.type === 'Air Conditioner' || product.type === 'Heat Pump' || product.type === 'Ductless System') {
        // Normalize SEER or HSPF values from 9-21 to 0-100%
        const minEfficiency = 9;
        const maxEfficiency = 21;
        const normalizedValue = ((efficiencyValue - minEfficiency) / (maxEfficiency - minEfficiency)) * 100;
        return normalizedValue;
    } else {
        // Default case
        return efficiencyValue;
    }
}

function getMeterColor(value, type) {
    if (type === 'Furnace' || type === 'Comfort' || type === 'Water Heater' || type === 'Shop Heater') {
        // Color thresholds for AFUE and Comfort Level
        if (value >= 96) return '#006400'; // Deep Green
        if (value >= 90) return '#90EE90'; // Light Green
        if (value >= 76) return '#FFFF00'; // Yellow
        if (value >= 50) return '#FF0000'; // Red
        return '#c4c4c4'; // Grey for values below 50%
    } else if (type === 'Air Conditioner' || type === 'Heat Pump' || type === 'Ductless System') {
        // Color thresholds for SEER and HSPF (never below yellow)
        if (value >= 90) return '#006400'; // Deep Green
        if (value >= 70) return '#90EE90'; // Light Green
        return '#FFFF00'; // Yellow for all lower values
    } else {
        // Default color thresholds
        return '#c4c4c4'; // Grey
    }
}

function filterProducts() {
    let filtered = products;

    const selectedBrands = getSelectedCheckboxValues(brandFilter);
    const selectedTypes = getSelectedCheckboxValues(typeFilter);

    if (selectedBrands.length > 0) {
        filtered = filtered.filter(p => selectedBrands.includes(p.manufacturer));
    }
    if (selectedTypes.length > 0) {
        filtered = filtered.filter(p => selectedTypes.includes(p.type));
    }
    if (sortOption.value === 'efficiency') {
        filtered = filtered.sort((a, b) => {
            const aEfficiency = getEfficiencyPercentage(a);
            const bEfficiency = getEfficiencyPercentage(b);
            return bEfficiency - aEfficiency;
        });
    } else if (sortOption.value === 'cost') {
        filtered = filtered.sort((a, b) => a.cost - b.cost);
    } else if (sortOption.value === 'comfort') {
        filtered = filtered.sort((a, b) => b.comfortLevel - a.comfortLevel);
    }

    displayProducts(filtered);
}

function attachFilterEvents() {
    const brandCheckboxes = brandFilter.querySelectorAll('input[type="checkbox"]');
    const typeCheckboxes = typeFilter.querySelectorAll('input[type="checkbox"]');

    brandCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', filterProducts);
    });

    typeCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', filterProducts);
    });

    sortOption.addEventListener('change', filterProducts);
}

window.onload = () => {
    fetchProducts();
    attachFilterEvents();
};
