<?php 
$url = 'https://pc-api.polestar.com/eu-north-1/preconfigured-cars/';

$dealerJSON = '{"data":{"getClosestRetailerFunction":{"retailers":[
{"code":"USMJI0012","name":"Polestar South Coast","zipcode":"92692","city":"Mission Viejo, CA","distance":"88607","latitude":33.5498937,"longitude":-117.6719935},
{"code":"USVNY0011","name":"Polestar Los Angeles","zipcode":"90401","city":"Santa Monica, CA","distance":"176046","latitude":34.0150961,"longitude":-118.495838},
{"code":"USSTZ0014","name":"Polestar Scottsdale","zipcode":"85251","city":"Scottsdale, AZ","distance":"495969","latitude":33.5027922,"longitude":-111.9293195},
{"code":"USPAO0013","name":"Polestar San Jose","zipcode":"95128","city":"San Jose, CA","distance":"657867","latitude":37.324035,"longitude":-121.9464667},
{"code":"USSRF0013","name":"Polestar Marin","zipcode":"94925","city":"Corte Madera, CA","distance":"741350","latitude":37.9298767,"longitude":-122.5140719},
{"code":"USLTO0013","name":"Polestar Denver","zipcode":"80206","city":"Denver, CO","distance":"1335101","latitude":39.7204663,"longitude":-104.9536931},
{"code":"USBVW0012","name":"Polestar Portland","zipcode":"97005","city":"Beaverton, OR","distance":"1484869","latitude":45.4894123,"longitude":-122.8205989},
{"code":"USTUK0012","name":"Polestar Bellevue","zipcode":"98188","city":"TUKWILA, WA","distance":"1678362","latitude":47.4573286,"longitude":-122.2528714},
{"code":"USAUS0020","name":"Polestar Austin","zipcode":"78752","city":"Austin, TX","distance":"1865454","latitude":30.3375622,"longitude":-97.7004218},
{"code":"USGPV0011","name":"Polestar Grapevine","zipcode":"76051","city":"Grapevine, TX","distance":"1877597","latitude":32.9211932,"longitude":-97.0637092},
{"code":"USGVY0011","name":"Polestar Minneapolis","zipcode":"55426","city":"Golden Vallley, MN","distance":"1374737","latitude":44.9729093,"longitude":-93.3646924},
{"code":"USTPA0024","name":"Polestar Tampa","zipcode":"33614","city":"Tampa Florida","distance":"1498512","latitude":28.0022271,"longitude":-82.5057718},
{"code":"USCLT0024","name":"Polestar Charlotte","zipcode":"28262","city":"Charlotte, NC","distance":"1522683","latitude":35.2928772,"longitude":-80.7547413},
{"code":"USFHI0012","name":"Polestar Detroit","zipcode":"48335","city":"Farmington Hills, MI","distance":"1596685","latitude":42.4729405,"longitude":-83.4342556},
{"code":"USRKV0016","name":"Polestar Washington DC","zipcode":"20855","city":", Rockville, MD","distance":"1912276","latitude":39.1084355,"longitude":-77.1586721},
{"code":"USBOS0018","name":"Polestar Boston","zipcode": "02134","city": "Allston, MA","distance": "287032","distance":"1912276","latitude":39.1084355,"longitude":-77.1586721},
{"code":"USWPR0011","name":"Polestar Westport","zipcode": "6880","city": "Westport","distance": "415002","distance":"1912276","latitude":39.1084355,"longitude":-77.1586721},
{"code":"USNYC0031","name":"Polestar Manhattan","zipcode": "10001","city": "NEW YORK, NY","distance":"1912276","latitude":39.1084355,"longitude":-77.1586721},
{"code":"USEHA0011","name":"Polestar Short Hills","zipcode": "07936","city": "East Hanover, NJ","distance":"1912276","latitude":39.1084355,"longitude":-77.1586721},
{"code":"USLRV0011","name":"Polestar Princeton","zipcode": "08648","city": "Lawrenceville, NJ","distance":"1912276","latitude":39.1084355,"longitude":-77.1586721}
],"province":null}}}';

/*
$dealerJSON = '{"data":{"getClosestRetailerFunction":{"retailers":[
{"code":"USLTO0013","name":"Polestar Denver"}]}}}';
*/
$dealer_array = json_decode($dealerJSON, true);

// new version has years 2021 and 2022 hard coded in order to receive more cars. no filter value only gets 8 cars ...
$carsJSON = '{"operationName":"LoadResultsQuery","variables":{"market":"us","includeValidFilters":true,"debug":false,"filters":[{"filterTypeId":"4","filterValues":[{"value":"534","featureCode":"534","isB2B":false}]},{"filterTypeId":"10","filterValues":[{"value":"2021","featureCode":"2021","isB2B":false},{"value":"2022","featureCode":"2022","isB2B":false}]}],"dealerCode":"USFHI0012"},"query":"query LoadResultsQuery($market: String!, $includeValidFilters: Boolean!, $filters: [FilterValueGroupInput], $dealerCode: String, $debug: Boolean!, $stateCode: String) {\n  filterFunction(\n    market: $market\n    includeValidFilters: $includeValidFilters\n    filters: $filters\n    dealerCode: $dealerCode\n    debug: $debug\n    stateCode: $stateCode\n  ) {\n    debugInfo\n    b2b\n    timestamp\n    market\n    validFilters {\n      filterTypeId\n      featureType\n      filterValues {\n        value\n        featureCode\n        isB2B\n        thumbnailUrl\n      }\n      filterRanges {\n        upper\n        lower\n        featureCode\n        isB2B\n      }\n    }\n    filterResults {\n      pno34\n      modelYear\n      structureWeek\n      description\n      earliestDeliveryDate\n      visualizations {\n        name\n        views {\n          name\n          parameters {\n            urlTemplate\n            parameters {\n              required\n              values\n            }\n          }\n        }\n      }\n      cashPriceData {\n        totals {\n          car {\n            carTotalPrice {\n              id\n              label\n              value\n            }\n            carTotalBasicPrice {\n              id\n              label\n              value\n            }\n            carTotalTaxes {\n              id\n              label\n              value\n            }\n            carTotalVAT {\n              id\n              label\n              value\n            }\n            carTotalPriceExclVAT {\n              id\n              label\n              value\n            }\n            taxes {\n              name\n              amount\n              vatRate\n              vatPosition\n            }\n          }\n          extras {\n            extrasTotalPrice {\n              id\n              label\n              value\n            }\n            extrasBasicPrice {\n              id\n              label\n              value\n            }\n            extrasTotalVAT {\n              id\n              label\n              value\n            }\n            extrasTotalPriceExclVAT {\n              id\n              label\n              value\n            }\n          }\n          delivery {\n            deliveryChargePrice {\n              id\n              label\n              value\n            }\n            deliveryChargeBasicPrice {\n              id\n              label\n              value\n            }\n            deliveryChargeVAT {\n              id\n              label\n              value\n            }\n          }\n          grandTotal {\n            grandTotalCarExtras {\n              grandTotalCarExtrasPrice {\n                id\n                label\n                value\n              }\n              grandTotalCarExtrasBasicPrice {\n                id\n                label\n                value\n              }\n              grandTotalCarExtrasBeforeVAT {\n                id\n                label\n                value\n              }\n              grandTotalCarExtrasTax {\n                id\n                label\n                value\n              }\n              grandTotalCarExtrasVAT {\n                id\n                label\n                value\n              }\n            }\n          }\n        }\n        car {\n          type\n          code\n          price\n          vat\n          priceIncVat\n        }\n        extras {\n          id\n          price\n          vat\n          priceIncVat\n        }\n      }\n      fspPrices {\n        price\n        description\n        financeType\n        priceIsB2B\n      }\n      images {\n        icons {\n          rims\n          color\n          upholstery\n        }\n        location {\n          url\n          angles\n          resolutions\n        }\n        studio {\n          url\n          angles\n          resolutions\n        }\n      }\n      content {\n        excluded\n        filterTypeId\n        featureType\n        code\n        name\n        description\n        numericValue\n        dateValue\n        stringValue\n        images {\n          url\n          alt\n        }\n        thumbnail {\n          url\n          alt\n        }\n        isB2B\n        learnMore {\n          href\n          label\n        }\n        tyreLinks {\n          url\n          label\n        }\n      }\n      towbar {\n        excluded\n        filterTypeId\n        featureType\n        code\n        name\n        description\n        numericValue\n        dateValue\n        stringValue\n        cardTitle\n        labelForInfo\n        images {\n          url\n          alt\n        }\n        thumbnail {\n          url\n          alt\n        }\n        isB2B\n      }\n      wltpNedcSummary {\n        items {\n          redaName\n          name\n          description\n          value\n          unit\n        }\n      }\n      techData {\n        engineBev_LabelForPower\n        engineBev_TotalHp\n        engineBev_TotalKw\n        engineBev_LabelForTorque\n        engineBev_TotalTorqueNm\n        engineBev_LabelForBattery\n        engineBev_Batteries\n        engineHybrid_Batteries\n        labelForPerformanceRange\n        performance\n        engineBev_ElectricRange\n        engineBev_LabelForElectricMotors\n        engineBev_ElectricMotors\n        engineBev_ElectricRangeEpaMiles\n        labelForDivider\n        productFeatures {\n          excluded\n          featureType\n          code\n          name\n          description\n          images {\n            url\n            alt\n          }\n          thumbnail {\n            url\n            alt\n          }\n          isStandard\n          isDefault\n          isAccessory\n        }\n        engineBev_LabelForTrunkCapacityTotal\n        engineBev_TrunkCapacityTotal\n        seats\n        seatsLabel\n        driveTrain\n        seeAllFeatures {\n          href\n          label\n        }\n      }\n      dimensionsMetric {\n        wheelbaseLabel\n        wheelbaseValue\n        dimensions\n        dimensionsLabel\n      }\n      dimensionsImperial {\n        wheelbaseLabel\n        wheelbaseValue\n      }\n      interior360BaseUrl\n      exterior360BaseUrl\n      exteriorImageCount\n      environmentalImpactDetails {\n        label\n        linkUrl\n        isIncluded\n      }\n      packages {\n        filterTypeId\n        featureType\n        name\n        code\n        cardTitle\n        labelForInfo\n        description\n        numericValue\n        dateValue\n        stringValue\n        isB2B\n        images {\n          url\n          alt\n        }\n        thumbnail {\n          url\n          alt\n        }\n        excluded\n        totalSalesPrice\n        learnMore {\n          href\n          label\n        }\n      }\n    }\n    filters {\n      filterTypeId\n      featureType\n      filterValues {\n        value\n        featureCode\n        isB2B\n      }\n      filterRanges {\n        upper\n        lower\n        featureCode\n        isB2B\n      }\n    }\n  }\n}\n"}';
$cars_array = json_decode($carsJSON, true);

foreach ($dealer_array['data']['getClosestRetailerFunction']['retailers'] as $r) {
    echo "** " . $r['name'] . " (" . $r['code'] . ") ***\n";
    $cars_array['variables']['dealerCode'] = $r['code'];
    $ch = curl_init($url); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($cars_array));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($ch);
    curl_close($ch);


    $re_array = json_decode($result, true);
    $want = $re_array['data']['filterFunction']['filterResults'];

    $car_postdata = '{"operationName":"getCarDetail","variables":{"pno34":"534EDPP0E13172900RFA000      00000001147001162XPAINTXPLUSS","market":"US","modelYear":"2022","dealerCode":"USMJI0012","debug":false},"query":"query getCarDetail($pno34: String!, $market: String!, $modelYear: String!, $dealerCode: String, $stateCode: String, $debug: Boolean!) {\n  getCarModel(\n    pno34: $pno34\n    market: $market\n    modelYear: $modelYear\n    dealerCode: $dealerCode\n    stateCode: $stateCode\n    debug: $debug\n  ) {\n    carModelDetail {\n      pno34\n      modelYear\n      structureWeek\n      description\n      earliestDeliveryDate\n      visualizations {\n        name\n        views {\n          name\n          parameters {\n            urlTemplate\n            parameters {\n              required\n              values\n            }\n          }\n        }\n      }\n      cashPriceData {\n        totals {\n          car {\n            carTotalPrice {\n              id\n              label\n              value\n            }\n            carTotalBasicPrice {\n              id\n              label\n              value\n            }\n            carTotalTaxes {\n              id\n              label\n              value\n            }\n            carTotalVAT {\n              id\n              label\n              value\n            }\n            carTotalPriceExclVAT {\n              id\n              label\n              value\n            }\n            taxes {\n              name\n              amount\n              vatRate\n              vatPosition\n            }\n          }\n          extras {\n            extrasTotalPrice {\n              id\n              label\n              value\n            }\n            extrasBasicPrice {\n              id\n              label\n              value\n            }\n            extrasTotalVAT {\n              id\n              label\n              value\n            }\n            extrasTotalPriceExclVAT {\n              id\n              label\n              value\n            }\n          }\n          delivery {\n            deliveryChargePrice {\n              id\n              label\n              value\n            }\n            deliveryChargeBasicPrice {\n              id\n              label\n              value\n            }\n            deliveryChargeVAT {\n              id\n              label\n              value\n            }\n          }\n          grandTotal {\n            grandTotalCarExtras {\n              grandTotalCarExtrasPrice {\n                id\n                label\n                value\n              }\n              grandTotalCarExtrasBasicPrice {\n                id\n                label\n                value\n              }\n              grandTotalCarExtrasBeforeVAT {\n                id\n                label\n                value\n              }\n              grandTotalCarExtrasTax {\n                id\n                label\n                value\n              }\n              grandTotalCarExtrasVAT {\n                id\n                label\n                value\n              }\n            }\n          }\n        }\n        car {\n          type\n          code\n          price\n          vat\n          priceIncVat\n        }\n        extras {\n          id\n          price\n          vat\n          priceIncVat\n        }\n      }\n      fspPrices {\n        price\n        description\n        financeType\n        priceIsB2B\n      }\n      images {\n        icons {\n          rims\n          color\n          upholstery\n        }\n        location {\n          url\n          angles\n          resolutions\n        }\n        studio {\n          url\n          angles\n          resolutions\n        }\n      }\n      content {\n        excluded\n        filterTypeId\n        featureType\n        code\n        name\n        description\n        numericValue\n        dateValue\n        stringValue\n        images {\n          url\n          alt\n        }\n        thumbnail {\n          url\n          alt\n        }\n        isB2B\n        learnMore {\n          href\n          label\n        }\n        tyreLinks {\n          url\n          label\n        }\n      }\n      towbar {\n        excluded\n        filterTypeId\n        featureType\n        code\n        name\n        description\n        numericValue\n        dateValue\n        stringValue\n        images {\n          url\n          alt\n        }\n        thumbnail {\n          url\n          alt\n        }\n        isB2B\n      }\n      wltpNedcSummary {\n        items {\n          redaName\n          name\n          description\n          value\n          unit\n        }\n      }\n      techData {\n        engineBev_LabelForPower\n        engineBev_TotalHp\n        engineBev_TotalKw\n        engineBev_LabelForTorque\n        engineBev_TotalTorqueNm\n        engineBev_LabelForBattery\n        engineBev_Batteries\n        engineHybrid_Batteries\n        labelForPerformanceRange\n        performance\n        engineBev_ElectricRange\n        engineBev_LabelForElectricMotors\n        engineBev_ElectricMotors\n        engineBev_ElectricRangeEpaMiles\n        labelForDivider\n        productFeatures {\n          excluded\n          featureType\n          code\n          name\n          description\n          images {\n            url\n            alt\n          }\n          thumbnail {\n            url\n            alt\n          }\n          isStandard\n          isDefault\n          isAccessory\n        }\n        engineBev_LabelForTrunkCapacityTotal\n        engineBev_TrunkCapacityTotal\n        seats\n        seatsLabel\n        driveTrain\n        seeAllFeatures {\n          href\n          label\n        }\n      }\n      dimensionsMetric {\n        wheelbaseLabel\n        wheelbaseValue\n        dimensions\n        dimensionsLabel\n      }\n      dimensionsImperial {\n        wheelbaseLabel\n        wheelbaseValue\n      }\n      interior360BaseUrl\n      exterior360BaseUrl\n      exteriorImageCount\n      environmentalImpactDetails {\n        label\n        linkUrl\n        isIncluded\n      }\n      packages {\n        filterTypeId\n        featureType\n        name\n        code\n        cardTitle\n        labelForInfo\n        description\n        numericValue\n        dateValue\n        stringValue\n        isB2B\n        images {\n          url\n          alt\n        }\n        thumbnail {\n          url\n          alt\n        }\n        excluded\n        totalSalesPrice\n        learnMore {\n          href\n          label\n        }\n      }\n    }\n  }\n}\n"}';
    $car_post_data_array = json_decode($car_postdata, true);
    //echo $car_post_data_array['variables']['pno34'];


    //print_r ($want);
    foreach ($want as $w) {
        $car_post_data_array['variables']['pno34'] = $w['pno34'];
        $car_post_data_array['variables']['dealerCode'] = $r['code'];
        $car_post_data_array['variables']['modelYear'] = $w['modelYear'];
        echo $w['pno34'] . ",";

        $ch = curl_init($url); 
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($car_post_data_array));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($ch);
        curl_close($ch);
    
        $car_array = json_decode($result, true);
        $want_car = $car_array['data']['getCarModel']['carModelDetail'];
        
        echo $want_car['earliestDeliveryDate'] . ",";
        echo $w['cashPriceData']['totals']['car']['carTotalPrice']['value'] . ",";
/*        echo $want_car['Engine'] . ",";
        echo $want_car['ModelYear'] . ",";
*/
      
        foreach ($want_car['content'] as $car) {
            if ($car['featureType'] == 'Price')
                continue;

            if ($car['featureType'] == 'DeliveryDate')
                continue;
            if ($car['featureType'] == 'Model')
                continue;

/*            if ($car['featureType'] == 'Engine')
                continue;
            if ($car['featureType'] == 'ModelYear')
                continue;              
*/

            #echo $car['featureType'] . ": ";
            if ($car['featureType'] == 'DeliveryDate') {
                echo ": " . $car['dateValue'];
            } else 
                echo $car['name'];
            echo ",";
        }
        foreach ($want_car['towbar'] as $car) {
            if ($car['featureType'] == 'Towbar'){
                echo "Towbar,";
            }
            else
                continue;
        }
    echo "\n";
    }
}
