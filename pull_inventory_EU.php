<?php 
$url = 'https://pc-api.polestar.com/eu-north-1/preconfigured-cars/';

// new version has years 2021 and 2022 hard coded in order to receive more cars. no filter value only gets 8 cars ...
$carsJSON = '{"operationName":"LoadResultsQuery","variables":{"market":"us","includeValidFilters":true,"debug":false,"filters":[{"filterTypeId":"4","filterValues":[{"value":"534","featureCode":"534","isB2B":false}]},{"filterTypeId":"10","filterValues":[{"value":"2021","featureCode":"2021","isB2B":false},{"value":"2022","featureCode":"2022","isB2B":false}]}]},"query":"query LoadResultsQuery($market: String!, $includeValidFilters: Boolean!, $filters: [FilterValueGroupInput], $dealerCode: String, $debug: Boolean!, $stateCode: String) {\n  filterFunction(\n    market: $market\n    includeValidFilters: $includeValidFilters\n    filters: $filters\n    dealerCode: $dealerCode\n    debug: $debug\n    stateCode: $stateCode\n  ) {\n    debugInfo\n    b2b\n    timestamp\n    market\n    validFilters {\n      filterTypeId\n      featureType\n      filterValues {\n        value\n        featureCode\n        isB2B\n        thumbnailUrl\n      }\n      filterRanges {\n        upper\n        lower\n        featureCode\n        isB2B\n      }\n    }\n    filterResults {\n      pno34\n      modelYear\n      structureWeek\n      description\n      earliestDeliveryDate\n      visualizations {\n        name\n        views {\n          name\n          parameters {\n            urlTemplate\n            parameters {\n              required\n              values\n            }\n          }\n        }\n      }\n      cashPriceData {\n        totals {\n          car {\n            carTotalPrice {\n              id\n              label\n              value\n            }\n            carTotalBasicPrice {\n              id\n              label\n              value\n            }\n            carTotalTaxes {\n              id\n              label\n              value\n            }\n            carTotalVAT {\n              id\n              label\n              value\n            }\n            carTotalPriceExclVAT {\n              id\n              label\n              value\n            }\n            taxes {\n              name\n              amount\n              vatRate\n              vatPosition\n            }\n          }\n          extras {\n            extrasTotalPrice {\n              id\n              label\n              value\n            }\n            extrasBasicPrice {\n              id\n              label\n              value\n            }\n            extrasTotalVAT {\n              id\n              label\n              value\n            }\n            extrasTotalPriceExclVAT {\n              id\n              label\n              value\n            }\n          }\n          delivery {\n            deliveryChargePrice {\n              id\n              label\n              value\n            }\n            deliveryChargeBasicPrice {\n              id\n              label\n              value\n            }\n            deliveryChargeVAT {\n              id\n              label\n              value\n            }\n          }\n          grandTotal {\n            grandTotalCarExtras {\n              grandTotalCarExtrasPrice {\n                id\n                label\n                value\n              }\n              grandTotalCarExtrasBasicPrice {\n                id\n                label\n                value\n              }\n              grandTotalCarExtrasBeforeVAT {\n                id\n                label\n                value\n              }\n              grandTotalCarExtrasTax {\n                id\n                label\n                value\n              }\n              grandTotalCarExtrasVAT {\n                id\n                label\n                value\n              }\n            }\n          }\n        }\n        car {\n          type\n          code\n          price\n          vat\n          priceIncVat\n        }\n        extras {\n          id\n          price\n          vat\n          priceIncVat\n        }\n      }\n      fspPrices {\n        price\n        description\n        financeType\n        priceIsB2B\n      }\n      images {\n        icons {\n          rims\n          color\n          upholstery\n        }\n        location {\n          url\n          angles\n          resolutions\n        }\n        studio {\n          url\n          angles\n          resolutions\n        }\n      }\n      content {\n        excluded\n        filterTypeId\n        featureType\n        code\n        name\n        description\n        numericValue\n        dateValue\n        stringValue\n        images {\n          url\n          alt\n        }\n        thumbnail {\n          url\n          alt\n        }\n        isB2B\n        learnMore {\n          href\n          label\n        }\n        tyreLinks {\n          url\n          label\n        }\n      }\n      towbar {\n        excluded\n        filterTypeId\n        featureType\n        code\n        name\n        description\n        numericValue\n        dateValue\n        stringValue\n        cardTitle\n        labelForInfo\n        images {\n          url\n          alt\n        }\n        thumbnail {\n          url\n          alt\n        }\n        isB2B\n      }\n      wltpNedcSummary {\n        items {\n          redaName\n          name\n          description\n          value\n          unit\n        }\n      }\n      techData {\n        engineBev_LabelForPower\n        engineBev_TotalHp\n        engineBev_TotalKw\n        engineBev_LabelForTorque\n        engineBev_TotalTorqueNm\n        engineBev_LabelForBattery\n        engineBev_Batteries\n        engineHybrid_Batteries\n        labelForPerformanceRange\n        performance\n        engineBev_ElectricRange\n        engineBev_LabelForElectricMotors\n        engineBev_ElectricMotors\n        engineBev_ElectricRangeEpaMiles\n        labelForDivider\n        productFeatures {\n          excluded\n          featureType\n          code\n          name\n          description\n          images {\n            url\n            alt\n          }\n          thumbnail {\n            url\n            alt\n          }\n          isStandard\n          isDefault\n          isAccessory\n        }\n        engineBev_LabelForTrunkCapacityTotal\n        engineBev_TrunkCapacityTotal\n        seats\n        seatsLabel\n        driveTrain\n        seeAllFeatures {\n          href\n          label\n        }\n      }\n      dimensionsMetric {\n        wheelbaseLabel\n        wheelbaseValue\n        dimensions\n        dimensionsLabel\n      }\n      dimensionsImperial {\n        wheelbaseLabel\n        wheelbaseValue\n      }\n      interior360BaseUrl\n      exterior360BaseUrl\n      exteriorImageCount\n      environmentalImpactDetails {\n        label\n        linkUrl\n        isIncluded\n      }\n      packages {\n        filterTypeId\n        featureType\n        name\n        code\n        cardTitle\n        labelForInfo\n        description\n        numericValue\n        dateValue\n        stringValue\n        isB2B\n        images {\n          url\n          alt\n        }\n        thumbnail {\n          url\n          alt\n        }\n        excluded\n        totalSalesPrice\n        learnMore {\n          href\n          label\n        }\n      }\n    }\n    filters {\n      filterTypeId\n      featureType\n      filterValues {\n        value\n        featureCode\n        isB2B\n      }\n      filterRanges {\n        upper\n        lower\n        featureCode\n        isB2B\n      }\n    }\n  }\n}\n"}';
$cars_array = json_decode($carsJSON, true);

    #echo "UK\n";
    $cars_array['variables']['market'] = 'uk';
    $ch = curl_init($url); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($cars_array));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($ch);
    curl_close($ch);


    $re_array = json_decode($result, true);
    $want = $re_array['data']['filterFunction']['filterResults'];

    // loop thru cars at the dealer.
    foreach ($want as $w) {
        echo "UK,";
        echo $w['pno34'] . ",";
        echo $w['earliestDeliveryDate'] . ",";
        echo $w['cashPriceData']['totals']['car']['carTotalPrice']['value'] . ",";
        
        foreach ($w['content'] as $car) {
            if ($car['featureType'] == 'Price')
                continue;

            if ($car['featureType'] == 'DeliveryDate')
                continue;

            #echo $car['featureType'] . ": ";
            if ($car['featureType'] == 'DeliveryDate') {
                echo $car['dateValue'];
            } else 
                echo $car['name'];
            echo ",";
        }
    echo "\n";
    }
    
    #echo "Belgium\n";
    $cars_array['variables']['market'] = 'nl-be';
    $ch = curl_init($url); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($cars_array));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($ch);
    curl_close($ch);


    $re_array = json_decode($result, true);
    $want = $re_array['data']['filterFunction']['filterResults'];

    // loop thru cars at the dealer.
    foreach ($want as $w) {
        echo "Belgium,";
        echo $w['pno34'] . ",";
        echo $w['earliestDeliveryDate'] . ",";
        echo $w['cashPriceData']['totals']['car']['carTotalPrice']['value'] . ",";
        
        foreach ($w['content'] as $car) {
            if ($car['featureType'] == 'Price')
                continue;

            if ($car['featureType'] == 'DeliveryDate')
                continue;

            #echo $car['featureType'] . ": ";
            if ($car['featureType'] == 'DeliveryDate') {
                echo $car['dateValue'];
            } else 
                echo $car['name'];
            echo ",";
        }
    echo "\n";
    }
