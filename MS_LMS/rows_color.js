function applyAlternatingColors() {
    let visibleRowIndex = 0;
    rows.forEach(row => {
        if (row.style.display !== 'none') {
            row.style.backgroundColor = (visibleRowIndex % 2 === 0) ? '#ffffff' : '#f1f1f1';
            visibleRowIndex++;
        }
    });
}


const filterDropdown = document.getElementById('user-filter');
const rows = document.querySelectorAll('.user-row');


window.addEventListener('DOMContentLoaded', () => {
    applyAlternatingColors();
});


filterDropdown.addEventListener('change', function() {
    const selectedRole = filterDropdown.value;

    rows.forEach(row => {
        if (selectedRole === 'all' || row.getAttribute('data-role') === selectedRole) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });


    applyAlternatingColors();
});