$(document).ready(function () {
    datetimepicker_load();
})


function deleteRecord(url, thisElem) {

    Swal.fire({
        icon: 'warning',
        title: "Are you sure?",
        text: "You will not be able to recover this!",
        type: "error",
        showCancelButton: true,
        cancelButtonClass: '#d33',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Delete!',
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: url,
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            console.log($(thisElem).parents('tr'))
                            $(thisElem).parents('tr').remove();

                        })
                    } else {
                        Swal.fire({
                            title: 'Problem!',
                            text: response.message,
                            icon: 'warning',
                        })
                    }
                },
                error: function (response) {
                    Swal.fire({
                        title: 'Problem!',
                        text: 'Unexpected error',
                        icon: 'warning',
                    })
                }
            });
        }
    })
}

var data_table;

function initializeDatatable(selector = '#table',type = 'type') {
    data_table = $(selector).DataTable({
         dom: '<"row"<"col-sm-4"l><"col-sm-5 justify-content-end d-flex"B><"col-sm-3 justify-content-end d-flex"f>>tip',
    //    dom:'Bftip',
    buttons: [
        {
            extend: 'excel',
            text: 'Excel',
            title: 'IP-Admin-'+ type,
            filename: 'IP-Admin-' + type,
        },
        {
            extend: 'pdf',
            text: 'PDF',
            orientation: 'landscape', // Set landscape orientation for PDF
            pageSize: 'A4',
            title: 'IP-Admin-'+ type,
            filename: 'IP-Admin-' + type,
            exportOptions: {
                columns: ':not(.noExport)' // Exclude columns with 'noExport' class
            },
            customize: function (doc) {
                // Set the font size for the document content
                doc.defaultStyle.fontSize = 6; // Adjust font size here
                // Optional: Adjust title style
                doc.styles.tableHeader.fontSize = 6; 
                doc.styles.title.fontSize = 10;
               
                var tableBody = doc.content[1].table.body;
        var columnWidths = [];

        // Loop over each column in the first row to determine widths
        tableBody[0].forEach(function (header, columnIndex) {
            let maxColumnLength = header.text.length; // Start with header length

            // Loop over each row to find the longest content in this column
            tableBody.forEach(function (row) {
                if (row[columnIndex] && row[columnIndex].text) {
                    maxColumnLength = Math.max(maxColumnLength, row[columnIndex].text.length);
                }
            });

            // Calculate width based on max content length
            columnWidths.push(maxColumnLength * 2.3); // Adjust multiplier for width
        });

        // Apply calculated widths to table
        doc.content[1].table.widths = columnWidths;
            }
        },
        {
            extend: 'print',
            text: 'Print',
            title: 'IP-Admin-'+type,
            filename: 'IP-Admin-' + type,
        }
    ],
        autoWidth: false, 
    
    });
    $('#datatable_filter label').contents().filter(function() {
        return this.nodeType === 3; // Removes the text node inside the label
    }).remove();

    $('#datatable_filter input').attr('placeholder','Search...').unwrap(); // Removes the label but keeps the input
    // $('#datatable_filter input').css('padding-right','12px;'); // Removes the label but keeps the input

}

function destroyDatatable() {
    data_table.destroy();
}

$(document).on('change', '.country_id', function () {
    var country_id = $(this).val();
    if (country_id) {
        getStatesByCountry(country_id);
    }
});

$(document).on('change', '.state_id', function () {
    var state_id = $(this).val();
    if (state_id) {
        getCitiesByState(state_id);
    }
});

function getStatesByCountry(country_id) {
    $.ajax({
        url: api_url + 'get-states-by-country',
        type: "POST",
        dataType: "json",
        data: {
            "country_id": country_id
        },
        success: function (response) {
            if (response.data.length > 0) {
                var states = response.data;
                $(".state_id").empty();
                $(".state_id").append('<option value="">Select Based</option>');

                if (states) {
                    $.each(states, function (index, value) {
                        $(".state_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            } else {
                $(".state_id").empty();
            }
        }
    });
}

function getCitiesByState(state_id) {
    $.ajax({
        url: api_url + 'get-cities-by-state',
        type: "POST",
        dataType: "json",
        data: {
            "state_id": state_id
        },
        success: function (response) {
            if (response.data.length > 0) {
                var states = response.data;
                $("#city_id").empty();
                $("#city_id").append('<option value="">Select Region</option>');

                if (states) {
                    $.each(states, function (index, value) {
                        $("#city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            } else {
                $("#city_id").empty();
            }
        }
    });
}

function getCitiesByCountry(country_id) {
  



    // alert(country_id);
    $.ajax({
        url: api_url + 'get-cities-by-country',
        type: "POST",
        dataType: "json",
        data: {
            "country_id": country_id
        },
        success: function (response) {
            if (response.data.length > 0) {
                var states = response.data;
                $("#city_id").empty();
                
               alert('Cities Found');
                $("#city_id").append('<option  value=""> All Cities </option>');

                if (states) {
                    $.each(states, function (index, value) {
                        $("#city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            } else {
                alert('No Cities Found');
                $("#city_id").empty();
                $("#city_id").append('<option  value=""> All Cities </option>');
            }
            
        }
    });
}


function convertToShortMonthFormat(inputDate, separator = '-') {
    // Check if input is in ISO format
    let dateObj;
    if (inputDate.includes('T') || inputDate.includes('Z')) {
        // Parse ISO string
        dateObj = new Date(inputDate);
    } else {
        // Assume input is in "DD/MM/YYYY" or similar format
        const [day, month, year] = inputDate.split('/');
        dateObj = new Date(`${year}-${month}-${day}`);
    }

    // Check for invalid date
    if (isNaN(dateObj)) {
        return 'Invalid Date';
    }

    // Extract components
    const day = dateObj.getDate().toString().padStart(2, '0');
    const month = dateObj.getMonth(); // Zero-based index for months
    const year = dateObj.getFullYear();

    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
                        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    // Format the output
    return `${day}${separator}${monthNames[month]}${separator}${year}`;
}

function datetimepicker_load() {
    $('.datepicker').datetimepicker({
        format: 'd/m/Y',
        timepicker: false,
        timepickerScrollbar: false,
        scrollInput: false,
    });

    $('.datetimepicker').datetimepicker({
        format: 'd/m/Y H:i',
        timepickerScrollbar: false,
        scrollInput: false,
    });
  
}


