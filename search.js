document.getElementById("ladakh").addEventListener("click", function() {
    window.location.href = "holiday/places/loader.html";
});

    function updateNightsValue() {
        const nightsRange = document.getElementById('nightsRange');
        const nightsValue = document.getElementById('nightsValue');
        nightsValue.textContent = nightsRange.value + ' Nights'; // Updates the nights display
    }

    function updateBudgetValue() {
        const budgetRange = document.getElementById('budgetRange');
        const budgetValue = document.getElementById('budgetValue');
        budgetValue.textContent = '₹' + Number(budgetRange.value).toLocaleString(); // Updates the budget display
    }

