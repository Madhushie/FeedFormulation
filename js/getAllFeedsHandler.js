document.addEventListener('DOMContentLoaded', function () {
    const feeds = [
        { code: 's1', name: 'Feed-1', species: 'Salmon', ingredients: 'Fishmeal 1 (anchovey), Poultry Meal, Wheat Flour', createdAt: '8/1/2023' },
        { code: 's2', name: 'Feed-2', species: 'Chinook', ingredients: 'Wheat Flour, Dehulled Lupins', createdAt: '8/1/2023' },
        { code: 's3', name: 'Feed-3', species: 'Abalone', ingredients: 'Soy Protein Concentrate, Methionine', createdAt: '8/1/2023' },
        { code: 's4', name: 'Feed-4', species: 'Barramundi', ingredients: 'Fishmeal 1 (anchovey), Poultry Meal, Wheat Flour', createdAt: '8/1/2023' },
        { code: 's5', name: 'Feed-5', species: 'Shrimp', ingredients: 'Fishmeal 1 (anchovey), Poultry Meal, Wheat Flour', createdAt: '8/1/2023' },
        { code: 's6', name: 'Feed-6', species: 'Salmon', ingredients: 'Fishmeal 1 (anchovey), Poultry Meal, Wheat Flour', createdAt: '8/1/2023' },
        { code: 's7', name: 'Feed-7', species: 'Chinook', ingredients: 'Fishmeal 1 (anchovey), Poultry Meal, Wheat Flour', createdAt: '8/1/2023' },
        { code: 's8', name: 'Feed-8', species: 'Abalone', ingredients: 'Fishmeal 1 (anchovey), Poultry Meal, Wheat Flour', createdAt: '8/1/2023' },
        { code: 's9', name: 'Feed-9', species: 'Barramundi', ingredients: 'Fishmeal 1 (anchovey), Poultry Meal, Wheat Flour', createdAt: '8/1/2023' },
        { code: 's10', name: 'Feed-10', species: 'Shrimp', ingredients: 'Fishmeal 1 (anchovey), Poultry Meal, Wheat Flour', createdAt: '8/1/2023' }
    ];

    const tbody = document.querySelector('table tbody');

    feeds.forEach(feed => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><input type="checkbox" class="form-check-input"></td>
            <td>${feed.code}</td>
            <td>${feed.name}</td>
            <td>${feed.species}</td>
            <td>${feed.ingredients}</td>
            <td>${feed.createdAt}</td>
            <td><button class="btn btn-primary btn-sm">Edit</button></td>
        `;
        tbody.appendChild(row);
    });

    document.querySelectorAll('.btn-primary').forEach(button => {
        button.addEventListener('click', function () {
            alert('Edit functionality not implemented yet.');
        });
    });
});
