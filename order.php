<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order form</title>
    <link href="stylorder.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script>
     function generatePDF() {
     const element = document.getElementById('main');
     var opt = {
        margin:       1,
        filename:     'html2pdf_example.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
      };
      html2pdf().set(opt).from(element).save();
     }
    </script>
</head>
<body>
    <div id="main">
        <div id="BoatOrderForm">
            <h1>VALORY</h1>
            <h1><b>Boat Order Form</b></h1>
        </div>
        <div id="mainbody">
            <div id="clientandboat">
                <table>
                    <tr>
                        <td>DATE: 
                        </td>
                        <td><p id="data"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>COMPANY:
                        </td>
                        <td><p id="Client"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>BOAT MODEL
                        </td>
                        <td><p id="Model"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>HULL COLOR:
                        </td>
                        <td><p id="Hullcolor"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>DECK COLOR:
                        </td>
                        <td><p id="Deckcolor"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>UPHOLSTERY:
                        </td>
                        <td><p id="Upholstery"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>FLEXI:
                        </td>
                        <td><p id="Flexi"></p>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="price">
                <table id="TablePrice">
                    <tr>
                        <td><h2>Base price:</h2></td>
                        <td><h2 id="Base price"></h2></td>
                    </tr>
                    <tr>
                        <td><h2>Extras:</h2></td>
                        <td><h2 id="Extras"></h2></h2></td>
                    </tr>
                    <tr>
                        <td><h1>Total price:</h1></td>
                        <td><h2 id="Total price"></h2></td>
                    </tr>
                </table>
            </div>
            <div id="BoatOptions">
                <h2><b>Extended options</b></h2>
                <div id="Extopt">
                    <table id="tableopt">

                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="button" style="width: 10rem;margin: auto; margin-top: 3rem;">
        <a href="http://pdf-ace.com/pdfme?cache=1&cache_for=86400" target= "_blank">Save as PDF</a>
    </div>
    </div>
    <script>
        console.log(localStorage.getItem("flexi"));
        var nowDate = new Date(); 
        var date = nowDate.getFullYear()+'/'+(nowDate.getMonth()+1)+'/'+nowDate.getDate(); 
        document.getElementById("data").innerText = date;
        document.getElementById("Model").innerText =  localStorage.getItem("model");
        document.getElementById("Hullcolor").innerText =  localStorage.getItem("hullcolor");
        document.getElementById("Deckcolor").innerText =  localStorage.getItem("deckcolor");
        document.getElementById("Upholstery").innerText =  localStorage.getItem("upholster");
        document.getElementById("Base price").innerText =  localStorage.getItem("Baseprice");
        document.getElementById("Total price").innerText =  localStorage.getItem("Totalprice");
        document.getElementById("Extras").innerText =  localStorage.getItem("Totalprice") - localStorage.getItem("Baseprice");
        document.getElementById("Client").innerText =  localStorage.getItem("CompanyName");
        document.getElementById("Flexi").innerText =  localStorage.getItem("flexi");
        if(localStorage.getItem("cabrio") != 'None'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td> Cabrio: `  + localStorage.getItem("cabrio") + `</td></tr>`);}

        if(localStorage.getItem("sterringsys") != 'none'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("sterringsys") + `</td></tr>`);}

        if(localStorage.getItem("sterringsys") != 'none'){
        if(localStorage.getItem("sterringwheel") != 'none'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("sterringwheel") + `</td></tr>`);}}
       
        if(localStorage.getItem("ambientlight") != '0'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("ambientlight") + `</td></tr>`);}
        if(localStorage.getItem("LEDNavilights") != '0'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("LEDNavilights") + `</td></tr>`);}
        if(localStorage.getItem("Electricalpackage") != '0'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("Electricalpackage") + `</td></tr>`);}
        if(localStorage.getItem("Bathingladder") != '0'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("Bathingladder") + `</td></tr>`);}
        if(localStorage.getItem("TeakTable") != '0'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("TeakTable") + `</td></tr>`);}
        if(localStorage.getItem("Bimini") != '0'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("Bimini") + `</td></tr>`);}
        if(localStorage.getItem("Sstellcupholder10pcs") != '0'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("Sstellcupholder10pcs") + `</td></tr>`);}
        if(localStorage.getItem("Hiddencleat4pcs") != '0'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("Hiddencleat4pcs") + `</td></tr>`);}
        if(localStorage.getItem("Fueltank43Lpackage") != '0'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("Fueltank43Lpackage") + `</td></tr>`);}
        if(localStorage.getItem("VALORY pillow") != '0'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("VALORY pillow") + `</td></tr>`);}
        if(localStorage.getItem("Captain side Bag") != '0'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("Captain side Bag") + `</td></tr>`);}
        if(localStorage.getItem("VALORY key ring") != '0'){
        document.getElementById("tableopt").insertAdjacentHTML('beforeend' ,`<tr><td>`  + localStorage.getItem("VALORY key ring") + `</td></tr>`);}
        </script>
</body>
</html>