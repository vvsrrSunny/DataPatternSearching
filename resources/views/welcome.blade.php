<!DOCTYPE html>
<html>
   <head>
      <title>Laravel</title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
   </head>
   <body  class="bg-gray-300">
      <!-- This example requires Tailwind CSS v2.0+ -->
      <!-- nav bar code pulled from internet tailwind css -->
      <nav class="bg-gray-800">
         <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
               <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                  <!-- Mobile menu button-->
                  <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                     <span class="sr-only">Open main menu</span>
                     <!--
                        Icon when menu is closed.
                        
                        Heroicon name: outline/menu
                        
                        Menu open: "hidden", Menu closed: "block"
                        -->
                     <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                     </svg>
                     <!--
                        Icon when menu is open.
                        
                        Heroicon name: outline/x
                        
                        Menu open: "block", Menu closed: "hidden"
                        -->
                     <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                     </svg>
                  </button>
               </div>
               <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                  <div class="flex-shrink-0 flex items-center">
                     <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                     <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
                  </div>
                  <div class="hidden sm:block sm:ml-6">
                     <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Office Data Engine</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Records</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">files</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
                     </div>
                  </div>
               </div>
               <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                  <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                     <span class="sr-only">View notifications</span>
                     <!-- Heroicon name: outline/bell -->
                     <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                     </svg>
                  </button>
                  <!-- Profile dropdown -->
                  <div class="ml-3 relative">
                     <div>
                        <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        </button>
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>
         <!-- Mobile menu, show/hide based on menu state. -->
         <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
               <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
               <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
               <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
               <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
               <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
            </div>
         </div>
      </nav>
      <br>

      <!-- Form provided to the user to enter the details -->
      <div class = "ml-10">
         <form>
            <div class="w-1/3 col-span-6 sm:col-span-3">
               <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
               <input type="text" id="name" name="fname" autocomplete="given-name"  placeholder="enter name"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <br>
            <div class="w-1/6 col-span-6 sm:col-span-3">
               <label for="first_name" class="block text-sm font-medium text-gray-700">Number of Offices:</label>
               <input type="number" id="offices" name="offices" autocomplete="given-name" placeholder="Number of offices" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <br>
            <div class="w-1/6 col-span-6 sm:col-span-3">
               <label for="first_name" class="text-sm font-medium text-gray-700">Number of tables:</label>
               <input type="number" id="tables" name="tables" autocomplete="given-name" placeholder="Number of tables" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <br>
            <div class="w-1/6 col-span-6 sm:col-span-3">
               <label for="first_name" class="block text-sm font-medium text-gray-700">Square meters range between</label>
               <input type="number" id="sqmMin" name="sqmMin" autocomplete="given-name" placeholder="minimum sqm required"class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
               <input type="number" id="sqmMax" name="sqmMax" autocomplete="given-name" placeholder="maximum sqm required" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <br>
            <div class="w-1/6 col-span-6 sm:col-span-3">
               <label for="first_name" class="block text-sm font-medium text-gray-700">Price range between</label>
               <input type="number" id="priceMin" name="sqmMin" autocomplete="given-name" placeholder="minimum price range" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
               <input type="number" id="priceMax" name="sqmMin" autocomplete="given-name" placeholder="maximum price range"class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <br>
            <br>
         </form>
      </div>
      <center>
         <div id='loader' style='display: none;'>
            <img src='https://media.giphy.com/media/17mNCcKU1mJlrbXodo/giphy.gif' width='32px' height='32px'>
         </div>
      </center>
      <!-- component -->
      <!-- This is a table component, successfully returned records are presented here -->
      <div class="container" >
         <!-- This example requires Tailwind CSS v2.0+ -->
         <div class="flex flex-col">
            <div class="-my-2 overflow-y-auto overflow-x-auto sm:-mx-6 lg:-mx-8">
               <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-200" id ="filterTableId">
                        <thead class="bg-gray-50">
                           <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                 Name
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                 Number of tables
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                 Number of Offices
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                 Total Square meters
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                 total price
                              </th>
                           </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id ="tbodyId">
                           <!-- <tr>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                      Jane Cooper
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                  6
                                </span>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                  1
                                </span>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                      600
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                1110$
                              </td>
                              
                              </tr> -->
                           <!-- More items... -->
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- Wrong user inputs or error send by server is provided here by deleting table and showing this p tag else
        p tag is hidden -->
         <center>
            <p id="demo" class="text-red-900 text-opacity-100"></p>
         </center>
      </div>
      <script>
    
    // Js code to caputer when enter is pressed by the user
      $("input").on('keyup', function(e) {
    if (e.key === 'Enter' || e.keyCode === 13) {
        // 
       // check for the validity of the user inputs
        triggerForOfficeDataCallSOCheckInputs();

    }
});

// check for the validity of the user inputs 
// if correct call the triggerForOfficeData function for making  ajax call
// else instead of forwarding the inputs for ajax call it will stop at the user to make user correct his input 
function triggerForOfficeDataCallSOCheckInputs() {


    console.log("I am called");
    var name = $("#name").val().trim();
    if (name == "")
        name = null;
    else {
        var format = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
        if (format.test(name)) {
            handleWrongInputs("Please don't provide special characters")
            return;
        }

    }

    var offices = $("#offices").val().trim();
    if (offices == "")
        offices = null;

    var tables = $("#tables").val().trim();
    if (tables == "")
        tables = null;

    var sqmMin = $("#sqmMin").val().trim();
    if (sqmMin == "")
        sqmMin = null;

    var sqmMax = $("#sqmMax").val().trim();
    if (sqmMax == "")
        sqmMax = null;

        // range issues
    if (sqmMax < sqmMin && sqmMax != null) {
        handleWrongInputs("Please provide a valid range for square meters")
        return;
    }

    var priceMin = $("#priceMin").val().trim();
    if (priceMin == "")
        priceMin = null;

    var priceMax = $("#priceMax").val().trim();
    if (priceMax == "")
        priceMax = null;

        // range issues
    if (priceMax < priceMin && priceMax != null) {
        handleWrongInputs("Please provide a valid range for Price")
        return;
    }

    // if negitive values were provided
    if (offices < 0 || tables < 0 || sqmMin < 0 || sqmMax < 0 || priceMin < 0 || priceMax < 0) {
        handleWrongInputs("Negative value were provided, they are not valid.")
        return;
    }

    // handling all empty inputs
    if (name == null && offices == null && tables == null && sqmMin == null && sqmMax == null && priceMin == null && priceMax == null) {
        handleWrongInputs("Please provide some inputs")
        return;
    }

    // filter was success, data is clear and can be made to ajax call, so preparing json object for the call
    requestJsonObject = {
        "name": name,
        "offices": offices,
        "tables": tables,
        "sqmMin": sqmMin,
        "sqmMax": sqmMax,
        "priceMin": priceMin,
        "priceMax": priceMax
    };

    triggerForOfficeDataCall(requestJsonObject)
}

// this function makes ajax call 
function triggerForOfficeDataCall(requestJsonObject) {
    
    
    $.ajax('/officedata', {
        type: 'POST', // http method
        headers: {
            'Content-type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data: JSON.stringify(requestJsonObject), // data to submit
        beforeSend: function() {
            // Show image container
            $("#loader").show();

            $("#filterTableId").hide();
        },
        success: function(data, status, xhr) {
            successFunction(data);
        },
        error: function(jqXhr, textStatus, errorMessage) {
            $('p').append('Error' + errorMessage);
        },
        complete: function(data) {
            // Hide image container
            $("#loader").hide();
            $("#filterTableId").show();

        }
    });
}

// helper function to show error messages to the users
function handleWrongInputs(message) {
    $("#tbodyId tr").remove();
    $("#demo").text(message);
}

// This function is called when search request is successful
function successFunction(resultJsonArray) {
    $("#tbodyId tr").remove();
    console.log(resultJsonArray)
    //resultJsonArray = JSON.parse(resultJsonArray);
    // if no records were returned
    if (resultJsonArray.length === 0)
        $("#demo").text("No records found with the given inputs");
    else
        $("#demo").text("");
        // records were writtened, so iterating the table and dynamically freating the table.
    $.each(resultJsonArray, function(i, resultJson) {
        //
        // these are the class name for tail wind css styling 
        var nameAndSqmTdClassName = "\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\"";
        var priceTdClassName = "\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\"";
        var officeAndTableTdClassName = "\"px-6 py-4 whitespace-nowrap\"";
        var officeAndTableSpanClassName = "\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\"";

        var htmlname = "<tr><td class =" + nameAndSqmTdClassName + ">" + resultJson.Name +
            "</td><td class =" + officeAndTableTdClassName + "><span class=" + officeAndTableSpanClassName + ">" +
            resultJson.Tables + "</span>" +
            "</td><td class =" + officeAndTableTdClassName + "><span class=" + officeAndTableSpanClassName + ">" +
            resultJson.Offices + "</span>" +
            "</td><td class =" + nameAndSqmTdClassName + ">" +
            resultJson.Sqm + "</td><td class =" + priceTdClassName + ">" +
            resultJson.Price + "$</td></tr>";

        $('#tbodyId').append(htmlname);
        $("#nameid").addClass('px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900');


    });
}
      </script>
   </body>
</html>