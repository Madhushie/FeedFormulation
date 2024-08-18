/* ==================== View Ingredients Page =============================== */
document.addEventListener("DOMContentLoaded", () => {
    const selectAllCheckbox = document.getElementById("selectAllCheckbox");
    const tableBodyCheckboxes = document.querySelectorAll("#ingredientsTable tbody .form-check-input");

    selectAllCheckbox.addEventListener("change", function() {
        const isChecked = this.checked;
        tableBodyCheckboxes.forEach(checkbox => {
            checkbox.checked = isChecked;
        });
    });
});

function searchTable() {
    var input = document.getElementById("searchInput");
    var filter = input.value.toLowerCase();
    var mainTable = document.getElementById("ingredientsTable");
    var overflowTable = document.getElementById("overflowTable");
    var mainRows = mainTable.getElementsByTagName("tr");
    var overflowRows = overflowTable.getElementsByTagName("tr");

    // Loop through all table rows in the main table and overflow table
    for (var i = 1; i < mainRows.length; i++) {
        mainRows[i].style.display = "none";
        overflowRows[i].style.display = "none";
        var td = mainRows[i].getElementsByTagName("td");
        
        for (var j = 1; j < td.length; j++) {
            if (td[j]) {
                var txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    mainRows[i].style.display = "";
                    overflowRows[i].style.display = "";
                    break;
                }
            }
        }
    }
}