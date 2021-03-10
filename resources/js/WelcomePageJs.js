$("input").on('keyup', function (e) {
    if (e.key === 'Enter' || e.keyCode === 13) {
        // Do something
        triggerForOfficeDataCall();
        
    }
});
function triggerForOfficeDataCall ()
{
   console.log("I am called");
   var name = $( "#name" ).val().trim();
        if(name== "")
        name = null;
        else{
         var format = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
         if(format.test(name)){
           handleWrongInputs("Please don't provide special characters")
         return ;
         }
         
        }

        var offices = $( "#offices" ).val().trim();
        if(offices == "")
        offices = null;

        var tables = $( "#tables" ).val().trim();
        if(tables == "")
        tables = null;

        var sqmMin = $( "#sqmMin" ).val().trim();
        if(sqmMin == "")
        sqmMin = null;

        var sqmMax = $( "#sqmMax" ).val().trim();
        if(sqmMax == "")
        sqmMax = null;
        
          if(sqmMax<sqmMin && sqmMax != null){
           handleWrongInputs("Please provide a valid range for square meters")
         return ;
          }
         
        var priceMin = $( "#priceMin" ).val().trim();
        if(priceMin == "")
        priceMin = null;

        var priceMax = $( "#priceMax" ).val().trim();
        if(priceMax == "")
        priceMax = null;

        if(priceMax<priceMin && priceMax!= null){
           handleWrongInputs("Please provide a valid range for Price")
         return ;
          }
          if(offices<0 || tables<0 || sqmMin<0 || sqmMax <0 || priceMin<0 || priceMax<0){
           handleWrongInputs("Negative value were provided, they are not valid.")
         return ;
          }
          if(name == null && offices== null && tables== null && sqmMin == null && sqmMax == null && priceMin == null && priceMax == null){
           handleWrongInputs("Please provide some inputs")
         return ;
          }

        requestJsonObject = {"name":name,"offices": offices , "tables":tables, "sqmMin": sqmMin,"sqmMax": sqmMax,"priceMin":priceMin,"priceMax":priceMax};
        console.log("hii");
 //        var xhttp = new XMLHttpRequest();
 //  xhttp.onreadystatechange = function() {
 //    if (this.readyState == 4 && this.status == 200) {
 //     let resultJsonArray =  this.responseText;
 //         $("#tbodyId tr").remove();
 //         resultJsonArray = JSON.parse(resultJsonArray);
 //         successFunction(resultJsonArray);



 //    }
 //  };
  
 //  xhttp.open("POST", "/officedata", true);
 //  xhttp.setRequestHeader("Content-type", "application/json");
 //  xhttp.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}"); 
 //  xhttp.send(JSON.stringify(requestJsonObject));
 $.ajax('/officedata', {
   type: 'POST',  // http method
   headers: { 'Content-type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
   data: JSON.stringify(requestJsonObject),  // data to submit
   beforeSend: function(){
// Show image container
$("#loader").show();

$("#filterTableId").hide();
},
success: function (data, status, xhr) {
successFunction(data);
},
error: function (jqXhr, textStatus, errorMessage) {
   $('p').append('Error' + errorMessage);
},
complete:function(data){
// Hide image container
$("#loader").hide();
$("#filterTableId").show();

}
});
}
function handleWrongInputs(message){
 $("#tbodyId tr").remove();
 $("#demo").text(message);
}
function successFunction(resultJsonArray)
{
 $("#tbodyId tr").remove();
 console.log(resultJsonArray)
 //resultJsonArray = JSON.parse(resultJsonArray);
 if (resultJsonArray.length === 0)
         $("#demo").text("No records found with the given inputs");
         else
         $("#demo").text("");
         $.each(resultJsonArray, function( i, resultJson){
           //get the corrsponding email
           var nameAndSqmTdClassName = "\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\"";
           var priceTdClassName = "\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\"";
           var officeAndTableTdClassName =  "\"px-6 py-4 whitespace-nowrap\"";
           var officeAndTableSpanClassName = "\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\"";
           
           var htmlname = "<tr><td class ="+nameAndSqmTdClassName+">"+ resultJson.Name +
            "</td><td class ="+officeAndTableTdClassName+"><span class="+officeAndTableSpanClassName+">"
            +resultJson.Tables+"</span>"+
           "</td><td class ="+officeAndTableTdClassName+"><span class="+officeAndTableSpanClassName+">"
           +resultJson.Offices+"</span>"+
           "</td><td class ="+nameAndSqmTdClassName+">"
           +resultJson.Sqm+"</td><td class ="+priceTdClassName+">"
           +resultJson.Price+"$</td></tr>";
           
           $('#tbodyId').append(htmlname);
           $("#nameid").addClass('px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900');


        });
}
