<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @php
        // echo DNS1D::getBarcodeSVG('4445645656', 'PHARMA2T');
        // echo DNS1D::getBarcodeHTML('4445645656', 'PHARMA2T');

        echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG('4', 'C39+') . '" alt="barcode"   />';
    @endphp
</body>

</html>
