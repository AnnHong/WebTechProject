$(function () {
    alert('document ready');

});

$(document).ready(function() {
  // Retrieve item data and populate the form
  $.ajax({
    url: '/retrieve-item', // Replace with the appropriate server endpoint to retrieve item data
    type: 'GET',
    dataType: 'json',
    success: function(response) {
      // Populate the form fields with retrieved data
      $('#category').val(response.category);
      $('#name').val(response.name);
      $('#description').val(response.description);
      $('#date').val(response.date);
    },
    error: function(xhr, status, error) {
      // Handle error
      console.error('Error:', xhr.status, status, error);
    }
  });

  // Handle form submission
  $('#editForm').submit(function(event) {
    event.preventDefault();

    var category = $('#category').val();
    var name = $('#name').val();
    var description = $('#description').val();
    var date = $('#date').val();

    // Make the update request
    $.ajax({
      url: '/update-item', // Replace with the appropriate server endpoint to update item data
      type: 'POST',
      dataType: 'json',
      data: JSON.stringify({ category: category, name: name, description: description, date: date }),
      contentType: 'application/json',
      success: function() {
        // Update successful
        alert('Item updated successfully!');
      },
      error: function(xhr, status, error) {
        // Handle error
        console.error('Error:', xhr.status, status, error);
      }
    });
  });
});

