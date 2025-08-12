
// Relative positioning controls
const relativeTop = document.getElementById('relativeTop');
const relativeLeft = document.getElementById('relativeLeft');
const relativeElement = document.getElementById('relativeElement');
const relativeTopValue = document.getElementById('relativeTopValue');
const relativeLeftValue = document.getElementById('relativeLeftValue');
const relativeTopCode = document.getElementById('relativeTopCode');
const relativeLeftCode = document.getElementById('relativeLeftCode');

relativeTop.addEventListener('input', function () {
    const value = this.value + 'px';
    relativeElement.style.top = value;
    relativeTopValue.textContent = value;
    relativeTopCode.textContent = value;
});

relativeLeft.addEventListener('input', function () {
    const value = this.value + 'px';
    relativeElement.style.left = value;
    relativeLeftValue.textContent = value;
    relativeLeftCode.textContent = value;
});

function resetRelative() {
    relativeTop.value = 0;
    relativeLeft.value = 0;
    relativeElement.style.top = '0px';
    relativeElement.style.left = '0px';
    relativeTopValue.textContent = '0px';
    relativeLeftValue.textContent = '0px';
    relativeTopCode.textContent = '0px';
    relativeLeftCode.textContent = '0px';
}

// Absolute positioning controls
const absoluteTop = document.getElementById('absoluteTop');
const absoluteRight = document.getElementById('absoluteRight');
const absoluteElement = document.getElementById('absoluteElement');
const absoluteTopValue = document.getElementById('absoluteTopValue');
const absoluteRightValue = document.getElementById('absoluteRightValue');
const absoluteTopCode = document.getElementById('absoluteTopCode');
const absoluteRightCode = document.getElementById('absoluteRightCode');

absoluteTop.addEventListener('input', function () {
    const value = this.value + 'px';
    absoluteElement.style.top = value;
    absoluteTopValue.textContent = value;
    absoluteTopCode.textContent = value;
});

absoluteRight.addEventListener('input', function () {
    const value = this.value + 'px';
    absoluteElement.style.right = value;
    absoluteRightValue.textContent = value;
    absoluteRightCode.textContent = value;
});

function resetAbsolute() {
    absoluteTop.value = 20;
    absoluteRight.value = 20;
    absoluteElement.style.top = '20px';
    absoluteElement.style.right = '20px';
    absoluteTopValue.textContent = '20px';
    absoluteRightValue.textContent = '20px';
    absoluteTopCode.textContent = '20px';
    absoluteRightCode.textContent = '20px';
}

// Fixed positioning controls
const fixedElement = document.getElementById('fixedElement');
const fixedTopCode = document.getElementById('fixedTopCode');
const fixedRightCode = document.getElementById('fixedRightCode');

function updateFixed() {
    const position = document.getElementById('fixedPosition').value;

    // Reset all positioning
    fixedElement.style.top = 'auto';
    fixedElement.style.right = 'auto';
    fixedElement.style.bottom = 'auto';
    fixedElement.style.left = 'auto';
    fixedElement.style.transform = 'none';

    switch (position) {
        case 'top-right':
            fixedElement.style.top = '10px';
            fixedElement.style.right = '10px';
            fixedTopCode.textContent = '10px';
            fixedRightCode.textContent = '10px';
            break;
        case 'top-left':
            fixedElement.style.top = '10px';
            fixedElement.style.left = '10px';
            fixedTopCode.textContent = '10px';
            fixedRightCode.textContent = 'auto';
            break;
        case 'bottom-right':
            fixedElement.style.bottom = '10px';
            fixedElement.style.right = '10px';
            fixedTopCode.textContent = 'auto';
            fixedRightCode.textContent = '10px';
            break;
        case 'bottom-left':
            fixedElement.style.bottom = '10px';
            fixedElement.style.left = '10px';
            fixedTopCode.textContent = 'auto';
            fixedRightCode.textContent = 'auto';
            break;
        case 'center':
            fixedElement.style.top = '50%';
            fixedElement.style.left = '50%';
            fixedElement.style.transform = 'translate(-50%, -50%)';
            fixedTopCode.textContent = '50%';
            fixedRightCode.textContent = 'auto';
            break;
    }
}

function resetFixed() {
    document.getElementById('fixedPosition').value = 'top-right';
    updateFixed();
}

// Initialize
updateFixed();
