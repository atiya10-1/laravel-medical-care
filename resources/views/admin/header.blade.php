<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrartion</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset('./admintheme/assets/css/styles.min.css')}}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

  <style>

/* Pagination container */
.pagination {
    display: flex;
    justify-content: center; /* Center-align the pagination */
    padding: 3px 0;
}

/* Pagination links styling */
.pagination .page-link {
    color: #ffffff; /* White text for pagination links */
    background-color: #dee2e6;
    border: 1px solid #dee2e6; /* Light gray border for separation */
    padding: 4px 10px; /* Padding for a more balanced look */
    margin: 0 5px; /* Space between pagination items */
    border-radius: 15px; /* Rounded corners for a polished look */
    transition: all 0.3s ease; /* Smooth transition on hover */
}

/* Hover effect for pagination links */
.pagination .page-link:hover {
    background-color: #1F3A56; /* Darker red on hover */
    color: white; /* White text on hover */
}



/* Remove background from arrow buttons (Next/Previous) */
.pagination .page-item:first-child .page-link, /* Target 'Previous' button */
.pagination .page-item:last-child .page-link {  /* Target 'Next' button */
    background-color: transparent; /* Remove background */
       color: darkslategrey; /* Dark blue color for the arrows */
    padding: 4px 10px; /* Keep the padding consistent */
}

  </style>

</head>