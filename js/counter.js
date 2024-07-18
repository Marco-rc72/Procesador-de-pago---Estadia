    // Get all table rows (modify if targeting specific element)
    const rows = document.querySelectorAll('table tr');

    // Start counter from 1
    let counter = 1;

    // Skip the first row (header)
    for (let i = 1; i < rows.length; i++) {
      // Get the cell for the counter
      const counterCell = rows[i].cells[0];

      // Set the counter text
      counterCell.textContent = counter;

      // Increment the counter for the next row
      counter++;
    }