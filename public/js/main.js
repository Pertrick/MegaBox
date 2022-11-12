

    $('#submit-file').on("click", function(e) {
        e.preventDefault();
        $('#files').parse({
            config: {
                delimiter: "",
                header: false,
                complete: displayHTMLTable,
            },
            error: function(err, file) {},
            beforeSend: function(){
                Swal.showLoading();
            },
            complete: function(){
                Swal.close();
            },
        })
    })


    $('#collect-user-email').click(function(e){
        const type = $("#type").val();
        if(type == "airtime"){
            validateAirtimeCsv();
        }else if(type=="data"){
            validateDataCsv();
        }
    });

    
    $('#proceed-to-pay').click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        const email = $('#email').val();
        const type = $("#type").val();

        if (validateEmail(email)) {

            if(type == "airtime"){
                const data = JSON.stringify( convertDataToJson());
                makePayment(type, data, email);
            }else if(type=="data"){
                const data = JSON.stringify(convertUpdatedDataToJson());
                makePayment(type, data, email);
            } 

           
        }
        else {
                Swal.fire({
                        title:"Invalid email!",
                        icon: "error",
                        button:"close"
                    }
            )
        }
    });


function displayHTMLTable(results) {
    var table = "<table class='table table-bordered table-hover' id='tblData' style='width:100%; margin:0 auto;'>";
    var data = results.data;
    console.log(data)
    data.forEach(element => {
        console.log(element.length != data[0].length);
        if(element.length != data[0].length){
            var index = data.indexOf(element);
            data.splice(index)
        }
    });

    console.log(data);
    for (i = 0; i < data.length; i++) {
        table += "<tr>";
        var row = data[i];
        var cells = row.join(",").split(",");
        for (j = 0; j < cells.length; j++) {
            table += "<td>" ;
            table += cells[j];
            table += "</td>";
        }
        table += "</tr>";
    }
    table += "</table>";

    $(".table-modal").html(table);
    $('#exampleModal').modal("show");
}

    function convertDataToJson() {

        var table = document.getElementById("tblData");
        return  convertToJson(table);

    }

    function convertUpdatedDataToJson() {
        var table = document.getElementById("updatedTblData");
        return convertToJson(table);


    }


function convertToJson(table){
    console.log(table);
    var header = [];
    var rows = [];

    for (var i = 0; i < table.rows[0].cells.length; i++) {
        header.push(table.rows[0].cells[i].innerHTML);
    }

    for (var i = 1; i < table.rows.length; i++) {
        var row = {};
        for (var j = 0; j < table.rows[i].cells.length; j++) {
            row[header[j]] = table.rows[i].cells[j].innerHTML;
        }
        rows.push(row);
    }

    return rows;
}


function validateEmail(email) {
    const res =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return res.test(String(email).toLowerCase());
}

function makePayment(type,data,email){
    $.ajax({
        type: "POST",
        url: "/"+type+"/store",
        dataType: 'JSON',
        data: {
            'email': email,
            'data': data
        },
        beforeSend: function(){
            Swal.showLoading();
        },
        complete: function(){
            Swal.close();
        },
        success: function(payout) {
            payout_link = payout['checkout_url'];
            console.log(payout['checkout_url']);
            window.location = payout_link;                

        },
        error: function(response) {
            console.log(response);
        }
    });
}


function validateAirtimeCsv(){
    let status = validatePhone();
  
     if(status){
        if(!validateNetwork()){
            Swal.fire({
                title:"Invalid Network Service!",
                icon: "error",
                button:"close"
            });
        }else{
            Swal.fire({
                title:"CSV Validation Sucessful",
                icon: "success",  
                button:"close"
            });
        $('#exampleModal').modal("hide");
        $('#paymentModal').modal("show");
     }
    }
}


function validateDataCsv(){

  let status = validatePhone();

   console.log(status);

   if(status){
    validateCode(function(response){
        if(response.responseJSON =="error"){
            Swal.fire({
                title:"Invalid Data Code Entry!",
                icon: "error",
                button:"close"
            });
         }else{
                Swal.fire({
                    title:"CSV Validation Sucessful",
                    icon: "success",  
                    button:"close"
                });

            $('#exampleModal').modal("hide");

            updateDataTable(function(response){
                console.log(response);
                appendDataToTable(response);
                $('#updateTableModal').modal("show");
            });
            
            $('#accept').on('click', () =>{
                $('#updateTableModal').modal("hide");
                $('#paymentModal').modal("show");
            })

        
         }
        
      });
    }
}


function validatePhone(){
    const data = convertDataToJson();
    const phone_number = [];

   Object.entries(data).forEach(([key, values]) => {
        phone_number.push(values['phone_number']);    
   });

    const isTrue = (phone) => phone.charAt(0) == 0 && phone.length == "11";

    const status = phone_number.every(isTrue);
    console.log(status);
    if(!status){
         Swal.fire({
             title:"Invalid Phone Number Entry!",
             icon: "error",
             button:"close"
         });
    }

    return status;
}


function validateCode(callback){
    const data = convertDataToJson();
    const codes = [];

   Object.entries(data).forEach(([key, values]) => {
        codes.push(values['code']);   
   });

   console.log(codes);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
       $.ajax({
        type: "POST",
        url: "/data/validate",
        dataType: 'JSON',
        data: {
            'values': codes,
        },
        beforeSend: function(){
            Swal.showLoading();
        },
        complete: function(){
        },
        success: callback,
        error: callback
           
    });
   }


   function validateNetwork(){
    const network = ['MTN', "AIRTEL", "9MOBILE", "GLO"];

    const data = convertDataToJson();
    const service = [];

   Object.entries(data).forEach(([key, values]) => {
        service.push(values['service'].toUpperCase());    
   });

   console.log(service);

   let isService = true;
    service.forEach(element =>{
        if(!network.includes(element)){
            isService = false;
            return isService;
        }

        return isService;
   });

   console.log(isService);

    return isService;

   }

   function updateDataTable(callback){
    const data = convertDataToJson();
    const codes = [];
    const phone_number =[];

   Object.entries(data).forEach(([key, values]) => {
        codes.push(values['code']);   
        phone_number.push(values['phone_number']);
   });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
       $.ajax({
        type: "POST",
        url: "/data/update_table",
        dataType: 'JSON',
        data: {
            'values': codes,
            'phone': phone_number
        },
        beforeSend: function(){
            Swal.showLoading();
        },
        complete: function(){
            Swal.close();
        },
        success: callback,
        error:  callback
           
    });

   }

   function appendDataToTable(responseData){
   
        var table = "<table class='table table-bordered table-hover' id='updatedTblData' style='width:100%; margin:0 auto;'>";
   
        console.log(responseData);
        for (i = 0; i < responseData.length; i++) {
            table += "<tr>";
            var row = responseData[i];
            var cells = row.join(",").split(",");
            for (j = 0; j < cells.length; j++) {
                table += "<td>" ;
                table += cells[j];
                table += "</td>";
            }
            table += "</tr>";
        }
        table += "</table>";
    
        $(".update-table-modal").html(table);
        $("#updateTableModal").modal('show');

   }



