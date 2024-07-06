function printElement(element) {
    var a = window.open('', '', 'height=700, width=1000');
    a.document.write('<html>');
    a.document.write(`<head>
        <link href="https://truckingfiles.com/public/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>

    <link href="https://truckingfiles.com/public/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
        </head>`);
    a.document.write(element.innerHTML);
    a.document.write('</body></html>');
    a.document.close();
    setTimeout(function () {
        a.print();
    }, 500)
}

function exportToExcel(work_sheet_name = 'report') {
    var combinedTable = document.createElement('table');

    var tables = document.querySelectorAll('table');

    tables.forEach(function (table) {
        var rows = table.querySelectorAll('tr');
        rows.forEach(function (row) {
            combinedTable.appendChild(row.cloneNode(true));
        });
    });

    var workbook = XLSX.utils.book_new();
    var worksheet = XLSX.utils.table_to_sheet(combinedTable);

    XLSX.utils.book_append_sheet(workbook, worksheet, work_sheet_name);

    var wbout = XLSX.write(workbook, {bookType: 'xlsx', type: 'binary'});

    function s2ab(s) {
        var buf = new ArrayBuffer(s.length);
        var view = new Uint8Array(buf);
        for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
        return buf;
    }

    var fileName = work_sheet_name + '.xlsx';
    var blob = new Blob([s2ab(wbout)], {type: 'application/octet-stream'});

    if (navigator.msSaveBlob) {
        // For IE 10+
        navigator.msSaveBlob(blob, fileName);
    } else {
        // For modern browsers
        var link = document.createElement('a');
        if (link.download !== undefined) {
            var url = URL.createObjectURL(blob);
            link.setAttribute('href', url);
            link.setAttribute('download', fileName);
            link.style.visibility = 'hidden';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    }
}
