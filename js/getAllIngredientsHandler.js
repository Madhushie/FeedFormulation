// Initialize the page by calling the getAllIngredients function
function initPage() {
	getAllIngredients();
}

// AJAX call to retrieve all the ingredients from the database
function getAllIngredients() {
    $.ajax({
        type: 'GET',
        url: 'database/getAllingredients.php',
        success: function(response) {
            var ingredients = JSON.parse(response);
            populateTable(ingredients);            
        },
        error: function(xhr, status, error) {
            console.error('Error fetching ingredients:', error);
        }
    });
}

// Populate the table with the ingredients retrieved from the database
function populateTable(data) {
    const tableOneBody = document.getElementById("ingredientsTable").getElementsByTagName("tbody")[0];
    const tableSecondHead = document.getElementById("overflowTable").getElementsByTagName("thead")[0];
    const tableSecondBody = document.getElementById("overflowTable").getElementsByTagName("tbody")[0];
    
    tableOneBody.innerHTML = '';
    tableSecondHead.innerHTML = '';
    tableSecondBody.innerHTML = '';

    for (var i = 2; i < data[0].length; i++) {
        const headerCell = document.createElement("th");
        headerCell.className = "p-3 align-middle";
        headerCell.scope = "col";
        headerCell.textContent = data[0][i];
        tableSecondHead.appendChild(headerCell);
    }
    
    for (var i = 1; i < data.length; i++) {
        const row1 = tableOneBody.insertRow();
        row1.innerHTML = `
            <td class="p-3"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
            <td class="p-3">${data[i][0]}</td>
            <td class="p-3">${data[i][1]}</td>`;
        
        const row2Body = tableSecondBody.insertRow();
        for (var j = 2; j < data[i].length; j++) {
            const cell = row2Body.insertCell();
            cell.className = "p-3";
            cell.textContent = data[i][j];
        }
    }
    refreshCheckboxes();
}

// refresh checkboxes to check all or uncheck all after loading the table
function refreshCheckboxes() {
    const selectAllCheckbox = document.getElementById("selectAllCheckbox");
    const tableBodyCheckboxes = document.querySelectorAll("#ingredientsTable tbody .form-check-input");

    selectAllCheckbox.addEventListener("change", function() {
        const isChecked = this.checked;
        tableBodyCheckboxes.forEach(checkbox => {
            checkbox.checked = isChecked;
        });
    });
}

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